<?php
$pdf = new CI_PDF('P');
if(isset($parcours)){
  $pdf->setTitre("Liste des candidats : ".$parcours->parc_nom);
}else{
  $pdf->setTitre("Liste des candidats");
}
$sortie = '';
$sortie .= $pdf->designe_pdf(true,false,false);
foreach ($candidats as $index => $candidat) {
  $sortie .= $pdf->designe_pdf(false,true,false,$candidat, $index);
}
$sortie .= $pdf->designe_pdf(false,false,true);
$pdf->setData( $sortie );
$pdf->sortiePDF();
