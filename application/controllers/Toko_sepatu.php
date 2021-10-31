<?php
class Toko_sepatu extends CI_Controller
{
	public function index()
	{
		$this->load->view('view-form-tokoSepatu');
	}

	public function cetak()
	{
		$this->form_validation->set_rules('np', 'Nama Pembeli',[
			'required' => 'Nama Pembeli Harus diisi'
		]);

		$this->form_validation->set_rules('merk', 'Merk',[
			'required' => 'Merk Sepatu harus diisi'
		]);

        $this->form_validation->set_rules('ukuran', 'Ukuran Sepatu',[ 
            'required' => 'Ukuran Sepatu harus diisi' 
        ]); 

		if ($this->form_validation->run() != true) {
			$this->load->view('view-form-tokoSepatu');
		} else {
			$data = [
				'np' => $this->input->post('np'),
				'nohp' => $this->input->post('nohp'),
				'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran') 
			];

			$this->load->view('view-data-tokoSepatu', $data);
		}
	}
} 