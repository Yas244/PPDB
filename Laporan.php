<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	private $folder   = "backend/laporan/";
  private $foldertemplate   = "backend/";

	function __construct()
  {
    parent::__construct();
    $this->load->model(['M_laporan','M_pendaftar','M_user']);
		$this->load->library(['pdf']);
  }

	public function index()
	{
		belum_login();
		cek_admin();
    $data = array(
      'page' => 'Laporan',
      'row'  => $this->M_laporan->cetak_pdf(),
			'pendaftar' => $this->M_pendaftar->get(),
    );
		$this->template->load($this->foldertemplate.'template',$this->folder.'data', $data);
	}

	public function view()
	{
		belum_login();
		cek_admin();
		$data = array(
			'page' => 'Laporan',
			'row'  => $this->M_laporan->cetak_pdf(),
		);
		$this->template->load($this->foldertemplate.'template',$this->folder.'view', $data);
	}


  public function cetak_pdf()
  {
      belum_login();
      cek_admin();
      ob_start();
      $pdf = new FPDF('P', 'mm', array(215, 330));
      // membuat halaman baru
      $pdf->AddPage();
      $pdf->Image('./assets/backend/assets/images/izzatulkop.jpg', 0, 0, -165);
      // setting jenis font yang akan digunakan
      $pdf->Cell(10, 50, '', 0, 1);
      $pdf->SetFont('Times', 'B', 14);
      // mencetak string
      $pdf->Cell(200, 6, 'LAPORAN ', 0, 1, 'C');
      $pdf->Cell(200, 6, 'PENERIMAAN PESERTA DIDIK BARU (PPDB)', 0, 1, 'C');
      $pdf->Cell(200, 6, 'TAHUN PELAJARAN ' . date('Y') . '/' . (date('Y') + 2), 0, 1, 'C');
      $pdf->SetFont('Times', 'B', 12);
  
      // Memberikan space kebawah agar tidak terlalu rapat
      $pdf->Cell(10, 7, '', 0, 1);
  
      $pdf->SetFont('Times', 'B', 10);
      $pdf->Cell(10, 6, 'No', 1, 0, 'C');
      $pdf->Cell(50, 6, 'No Pendaftar', 1, 0, 'C');
      $pdf->Cell(70, 6, 'Nama', 1, 0, 'C');
      $pdf->Cell(20, 6, 'Jk', 1, 0, 'C');
      $pdf->Cell(50, 6, 'Created At', 1, 1, 'C');
  
      if ($this->input->post('pendaftar_id')) {
          $this->db->where('pendaftar_id', $this->input->post('pendaftar_id'));
      }
      $data = $this->M_laporan->cetak_pdf();
      $no = 1;
      foreach ($data->result() as $row) {
          $pdf->SetFont('Times', '', 10);
          $pdf->Cell(10, 6, $no, 1, 0);
          $pdf->Cell(50, 6, $row->pendaftar_id . '' . $row->user_id . '-' . $row->user_id . '/' . date("dmY", strtotime($row->created_at)), 1, 0);
          $pdf->Cell(70, 6, $row->nama_siswa, 1, 0);
          $pdf->Cell(20, 6, $row->jk, 1, 0);
          $pdf->Cell(50, 6, date("Y-m-d H:i:s", strtotime($row->created_at)), 1, 1);
  
          $no++;
      }
      $pdf->Output('Data Pendaftar tgl:' . date('Y-m-d H:i:s') . '.pdf', 'I');
      $this->redirect('refresh');
  }
  
}
