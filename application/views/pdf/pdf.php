<?php
$pdf = new CI_PDF('P');
$sortie = '';
$sortie .= $pdf->designe_pdf(true,false,false);
foreach ($candidats as $candidat) {
  $sortie .= $pdf->designe_pdf(false,true,false,$candidat);
}
$sortie .= $pdf->designe_pdf(false,false,true);
$pdf->setData( $sortie );
$pdf->sortiePDF();
