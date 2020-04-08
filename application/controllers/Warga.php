<?php

use phpDocumentor\Reflection\Types\Parent_;

defined('BASEPATH') or exit('No direct script access allowed');

class Warga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('nama_lengkap', 'NamaLengkap', 'required|trim', [
            'required' => 'Mohon Maaf, Masukan nama anda!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Mohon Maaf, Masukan alamat lengkap anda ! !'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("warga/index");
        } else {
            $this->_inputdatakk();
        }
    }

    private function _inputdatakk()
    {
        $namaLengkap = htmlspecialchars($this->input->post('nama_lengkap'));
        $alamat = htmlspecialchars($this->input->post('alamat'));
        $rt = htmlspecialchars($this->input->post('rt'));
        $rw = htmlspecialchars($this->input->post('rw'));
        $jml_keluarga = htmlspecialchars($this->input->post('jml_anggota'));
        // $jml_bayi = htmlspecialchars($this->input->post('jml_bayi'));
        // $jml_balita = htmlspecialchars($this->input->post('jml_balita'));
        // $jml_anak = htmlspecialchars($this->input->post('jml_anak'));
        // $jml_dewasa = htmlspecialchars($this->input->post('jml_dewasa'));
        // $jml_lansia = htmlspecialchars($this->input->post('jml_lansia'));
        $jml_wnt_menyusui = htmlspecialchars($this->input->post('jml_wanita_menyusui'));
        $jml_wnt_hamil = htmlspecialchars($this->input->post('jml_hamil'));

        $data = [
            'nama_lengkap' => $namaLengkap,
            'alamat' => $alamat,
            'rt' => $rt,
            'rw' => $rw,
            'jml_anggota' => $jml_keluarga,
            // 'jml_bayi' => $jml_bayi,
            // 'jml_balita' => $jml_balita,
            // 'jml_anak' => $jml_anak,
            // 'jml_dewasa' => $jml_dewasa,
            // 'jml_lansia' => $jml_lansia,
            'jml_hamil' => $jml_wnt_hamil,
            'jml_menyusui' => $jml_wnt_menyusui,
            'created_at' => date('Y m d'),
        ];
        $this->db->insert('tbl_kepala_keluarga', $data);
        $url = base_url() . "warga/detail_keluarga?jumlahanggota=" . $jml_keluarga;

        redirect($url);
    }

    public function detail_keluarga()
    {
        $jml_anggota = $this->input->get('jumlah');
        echo $jml_anggota;
        // if ($jml_wnt_hamil) {
        //     $data['hamil'] = $jml_wnt_hamil;
        //     $this->load->view('warga/datahamil.php', $data);
        // } else {
        //     redirect('warga');
        // }
    }
}
