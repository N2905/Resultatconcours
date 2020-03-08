<?php
$pdf = new CI_PDF('P','resultat');
$pdf->setTitre("Candidats admis en: ".$parcours->parc_nom,"Année : ".$anne);
$sortie = '';
$sortie .= $pdf->designe_pdf(true,false,false);
foreach ($resultats as $index => $candidat) {
  $sortie .= $pdf->designe_pdf(false,true,false,$candidat, $index);
}
$sortie .= $pdf->designe_pdf(false,false,true);
$pdf->setData( $sortie );
$pdf->sortiePDF();
