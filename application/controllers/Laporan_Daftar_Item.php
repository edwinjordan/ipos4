<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Daftar_Item extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('m_pdf');
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_daftar_item/view_laporan_daftar_item";
        $pdfFilePath = "downloadpdf.pdf";
        $this->m_pdf->pdf->WriteHTML($html);
        $this->m_pdf->pdf->Output($pdfFilePath, "D");
        $this->load->view('admin_view',$data);
    }

    public function generatedPDF(){

    }

}		