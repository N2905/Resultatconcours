<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class CI_PDF extends TCPDF
{
    private $data;
    public function __construct($orientation = 'P')
    {
        parent::__construct($orientation, $unit='mm', $format='A4', $unicode=true, $encoding='UTF-8', $diskcache=false, $pdfa=false);
    }

    public function setData($data){
      $this->data = $data;
      return $this;
    }
    public function designe_pdf($tete = false,$corps = false, $pied = false, $data = NULL){
    # var_dump($data->nom_cand);
      $contents = '';
      if ($tete) {
        $contents .= ''.$this->loadStyleCSS().'
        <table id="t_head" class="tableau_bordered tab_contenue" cellpadding="5">
          <thead>
            <tr  style="text-align: center;">
              <th class="text-center colfix">ID</th>
              <th class="text-center colfix">Nom</th>
              <th class="text-center colfix">Prénom(s)</th>
              <th class="text-center colfix">Sexe</th>
              <th class="text-center colfix">Année</th>
            </tr>
          </thead>
        <tbody>';
      }

      if ($corps) {
        $contents .= '
        <tr style="color:#4c4c4c">
          <td class="text-center image">
            <div class="mono">'.$data->cand_id.'</div>
          </td>
          <td class="text-center">
            <div class="mono">'.$data->nom_cand.'</div>
          </td>
          <td class="text-center">
            <div class="mono">'.$data->prenom_cand.'</div>
          </td>
          <td class="text-center">
            <div class="mono">'.$data->cand_sexe.'</div>
          </td>
          <td class="text-center">
            <div class="mono">'.$data->anne_acc.'</div>
          </td>
        </tr>';
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
    public function sortiePDF(){
      $this->setPrintHeader(false);
      $this->SetAutoPageBreak(true);
      $this->SetAuthor('Nelly');
      $this->SetDisplayMode('real', 'default');
      $this->AddPage();
      $this->writeHTMLCell(198, '', 6, 35, $this->data, 0, 1, false, 1, '', true);
      $this->Output('My-File-Name.pdf', 'I');
    }

}
