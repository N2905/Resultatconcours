<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class CI_PDF extends TCPDF
{
    private $data;
    private $titre;
    private $type_pdf;
    private static $logo1 = 'asset/image/mada.png';
    private static $logo2 = 'asset/image/inspc.jpg';
    public function __construct($orientation = 'P', $type_pdf = 'liste')
    {
        parent::__construct($orientation, $unit='mm', $format='A4', $unicode=true, $encoding='UTF-8', $diskcache=false, $pdfa=false);
        $this->type_pdf = $type_pdf;
        $this->logo();
    }

    public function setData($data){
      $this->data = $data;
      return $this;
    }

    public function designe_pdf( $tete = false,$corps = false, $pied = false, $data = NULL, $index = 0){
      $index += 1;
      $contents = '';
      if ($tete) {
          $contents .= ''.$this->loadStyleCSS().'
          <table id="t_head" class="tableau_bordered tab_contenue" cellpadding="5">
            <thead>
              <tr  style="text-align: center;">
                <th class="text-center colfix _index">#</th>
                <th class="text-center colfix _large">Nom</th>
                <th class="text-center colfix">Prénom(s)</th>
                <th class="text-center colfix">Série</th>';
         if($this->type_pdf == "liste"){
          $contents .= '
                <th class="text-center colfix">Téléphone</th>
                <th class="text-center colfix">E-mail</th>
              ';
          }else if($this->type_pdf == 'resultat'){
            $contents .= '
                <th class="text-center colfix">Centre</th>
                <th class="text-center colfix">Moyenne</th>
              ';
          }

          $contents .= '
              </tr>
            </thead>
        <tbody>';
      }

      if ($corps) {
        $contents .= '
          <tr style="color:#4c4c4c">
            <td class="text-center _index">
              <div class="mono">'.$index.'</div>
            </td>
            <td class="text-center _large">
              <div class="mono">'.$data->nom_cand.'</div>
            </td>
            <td class="text-center">
              <div class="mono">'.$data->prenom_cand.'</div>
            </td>
            <td class="text-center">
              <div class="mono">'.$data->cand_serie.'</div>
            </td>';

      if($this->type_pdf == "liste"){
        $contents .= '
          <td class="text-center">
            <div class="mono">'.$data->tel_cand.'</div>
          </td>
          <td class="text-center">
            <div class="mono">'.$data->email_cand.'</div>
          </td>';
        }else if($this->type_pdf == 'resultat'){
          $contents .= '
          <td class="text-center">
            <div class="mono">'.$data->centre_lieu.'</div>
          </td>
          <td class="text-center">
            <div class="mono">'.round($data->moyenne,2).'</div>
          </td>';
        }
        $contents .= '</tr>';
      }

      if ($pied) {
        $contents .= '</tbody></table> ';
      }
      return  $contents;
    }

    public function loadStyleCSS(){

      $style = '
      <style type="text/css">
        *{font-family: normal;}
        table.tableau_bordered {width: 100%;font-size:10pt;}
        table ._index{width:40px;}
        table ._large{width:25%;}
        table.tableau_bordered th,table.tableau_bordered td { border: 0.1pt solid #ddd; }

        table.no_border th, table.no_border tr,table.no_border td{border:none;font-size:10pt;}

        table th.colfix { background-color: #e6e6e6; }

        table th.rouge{background-color: #c5000b;color: white;}
        table.tableau_bordered th{font-weight: bold;}
        table.footer_condition td{text-align: center;}
        table td.text-center{text-align: center;}

        div.div_bordered {border: 0.1pt solid #ddd;font-size:8pt;text-align:justify;}

        span.italic{font-style: italic;}

        .text_droite{text-align:right}
        .color_text_logo{color:red;font_size:8pt;font-weight:bold}
        strong.color_text_logo{font-size:8.5pt}
        table.tab_entete{font-size: 8pt;}

        /* TEXT SMALL */
        .text_smal{font-size:6pt;}

        /* TITRE ADRESSE */
        p.titre_adresse {font-size:10pt;color:red;font-weight:bold;}
        /* STYLE ZONE COMMENTAIRE */
        .texte_zone_adresse{font-size:5.5pt}
        .color_text_zone{color:red;}

        /* TAILLE TABLEAU */
        th._hide, td._hide {display: none;}
        th.ref, td.ref {width:10%;}
        th.designation, td.designation {width:30.4%;}
        td.designation {text-align:justify; }
        th.quantite, td.quantite {width:5%;}
        th.unite, td.unite {width:6.5%;}
        th.remise, td.remise {width:8%;}
        th.pu_net, td.pu_net {width:10%;}
      </style>';

      return $style;
    }

    public function logo(){
      $logo   = '';
      $logo  .= '<table>';
      $logo  .= '<tr>';
      $logo  .= '<td><a href="#" style="text-align:left;"><img src="'.base_url().self::$logo1.'"  style="height:2cm;width:5cm;" /></a></td>';
      $logo  .= '<td><a href="#" style="text-align:right;"><img src="'.base_url().self::$logo2.'"  style="height:2cm;width:3cm;" /></a></td>';
      $logo  .= '</tr>';
      $logo  .= '</table>';
      $this->logo = $logo;
    }

    public function setTitre($titre, $sous_titre = null){
      $content_titre = '';
      $content_titre .= '<h3 style="text-align:center;">'.$titre.'</h3>';
      if( $this->type_pdf == 'resultat'){
        $content_titre .= '<br><h4 style="text-align:center;">'.$sous_titre.'</h4>';
      }
      $this->titre = $content_titre;
    }

    public function sortiePDF(){
      $this->setPrintHeader(false);
      $this->SetAutoPageBreak(true);
      $this->SetAuthor('Nelly');
      $this->SetDisplayMode('real', 'default');
      $this->AddPage();
      $this->writeHTMLCell(198, '', 6, 8, $this->logo, 0, 1, false, 1, '', true);//logo
      $this->writeHTMLCell(198, '', 6, 35, $this->titre, 0, 1, false, 1, '', true);//titre
      $this->writeHTMLCell(198, '', 6, 60, $this->data, 0, 1, false, 1, '', true);//contenue tableau
      $this->Output('My-File-Name.pdf', 'I');
    }

}
