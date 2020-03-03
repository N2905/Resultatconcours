<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class CI_PDF extends TCPDF
{
    function __construct($orientation = 'P')
    {
        parent::__construct($orientation, $unit='mm', $format='A4', $unicode=true, $encoding='UTF-8', $diskcache=false, $pdfa=false);
    }
}
