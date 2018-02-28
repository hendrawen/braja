<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Model_pelanggan','pelanggan');
  }

  function index()
  {
    $data['title']			= 'Brjamarketindo';
    $data['judul']			= 'Pelanggan';
    $data['sub_judul']		= '';
    $data['content']			= 'main';
    $kotas = $this->pelanggan->get_list_kota();

    $opt = array('' => 'Semua Kota');
        foreach ($kotas as $kota) {
            $opt[$kota] = $kota;
    }

    $data['form_kota'] = form_dropdown('',$opt,'','id="kota" class="form-control"');
    $this->load->view('panel/dashboard', $data);
  }

  public function ajax_list()
    {
        $list = $this->pelanggan->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $pelanggans) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $pelanggans->id_pelanggan;
            $row[] = $pelanggans->nama_pelanggan;
            $row[] = $pelanggans->no_telp;
            $row[] = $pelanggans->nama_dagang;
            $row[] = $pelanggans->alamat;
            $row[] = $pelanggans->photo_toko;
            $row[] = $pelanggans->kota;
            $row[] = $pelanggans->kelurahan;
            $row[] = $pelanggans->kecamatan;
            $row[] = $pelanggans->lat;
            $row[] = $pelanggans->long;
            $row[] = $pelanggans->status;
            $row[] = $pelanggans->nama;

            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->pelanggan->count_all(),
                        "recordsFiltered" => $this->pelanggan->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

}
