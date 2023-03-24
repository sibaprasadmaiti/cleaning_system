<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');  
 
require_once dirname(__FILE__).'/html2pdf/html2pdf.class.php';
class Htmlpdf extends HTML2PDF {
    public function __construct() {
        parent::__construct();
    }
}
