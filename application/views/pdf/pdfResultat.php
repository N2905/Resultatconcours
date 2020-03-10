<?php
$pdf = new CI_PDF('P','resultat');
$pdf->setTitre("Candidats admis en: ".$parcours->parc_nom,"Année : ".$anne);
$sortie = '';
$sortie .= $pdf->designe_pdf(true,false,false);
foreach ($resultats as $index => $candidat) {
  if( $type_resultat== 'admis' && $candidat->moyenne >= 12 ){
    $sortie .= $pdf->designe_pdf(false,true,false,$candidat, $index);
  }else if($type_resultat == 'liste_attente' && ($candidat->moyenne >= 10 && $candidat->moyenne <= 11 ) ){
    $sortie .= $pdf->designe_pdf(false,true,false,$candidat, $index);
  }
}
$sortie .= $pdf->designe_pdf(false,false,true);
$pdf->setData( $sortie );
$pdf->sortiePDF();
