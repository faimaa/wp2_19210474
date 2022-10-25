<?php
class Tugas_uts extends CI_Controller
{
 public function index()
 {
 $this->load->view('Tugas_uts/view-form');
 }
 public function cetak()
	 {
		$this->form_validation->set_rules('namasiswa', 'Nama Siswa', 'required|min_length[3]', ['required' => 'Nama siswa harus diisi','min_lenght' => 'Nama terlalu pendek']);
		$this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', ['required' => 'Nomor induk siswa harus diisi','min_lenght' => 'Nis terlalu pendek']);	
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[3]', ['required' => 'Kelas harus diisi','min_lenght' => 'Kode Kelas terlalu pendek']);	
		$this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required|min_length[3]', ['required' => 'Tanggal lahir harus diisi','min_lenght' => 'Tanggal terlalu pendek']);	
		$this->form_validation->set_rules('tl', 'Tempat Lahir', 'required|min_length[3]', ['required' => 'Tempat lahir harus diisi','min_lenght' => 'Tempat Lahir terlalu pendek']);	
		$this->form_validation->set_rules('almt', 'Alamat', 'required|min_length[3]', ['required' => 'Alamat harus diisi','min_lenght' => 'Alamat terlalu pendek']);
		$this->form_validation->set_rules('jkl', 'Jenis Kelamin', 'required|min_length[0]', ['required' => 'Jenis kelamin harus dipilih','min_lenght' => 'Jenis Kelamin terlalu pendek']);	
		$this->form_validation->set_rules('agama', 'Agama', 'required|min_length[0]', ['required' => 'Agama harus dipilih','min_lenght' => 'Kode terlalu pendek']);	
		
		if ($this->form_validation->run() != true) {
			$this->load->view('Tugas_uts/view-form');
		} else {
		$data = [
		 'namasiswa' => $this->input->post('namasiswa'),
		 'nis' => $this->input->post('nis'),
		 'kelas' => $this->input->post('kelas'),
		 'tgl' => $this->input->post('tgl'),
		 'tl' => $this->input->post('tl'),
		 'almt' => $this->input->post('almt'),
		 'jkl' => $this->input->post('jkl'),
		 'agama' => $this->input->post('agama')
		 ];
		$this->load->view('Tugas_uts/view-data', $data);
		}
	 }
}
