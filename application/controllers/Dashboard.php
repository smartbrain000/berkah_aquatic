<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata['username']) {
            notif('Login Terlebih Dahulu', false);
            redirect(base_url("Auth"));
        }
    }
    public function index()
    {
        $data['judul'] = 'DASHBOARD';
        $data['pm'] = $this->Mydb->bar_pm();
        tampilan('template/index', $data);
    }
    public function beliikanpredator()
    {
        $data['tampil'] = $this->Mydb->getALLbeliikanpredator();
        $data['judul'] = 'DATA PEMBELIAN IKAN PREDATOR';
        tampilan('beliikanpredator/index', $data);
    }
    public function beliikanhias()
    {
        $data['tampil'] = $this->Mydb->getALLbeliikanhias();
        $data['judul'] = 'DATA PEMBELIAN IKAN HIAS';
        tampilan('beliikanhias/index', $data);
    }
    public function belipakanhidup()
    {
        $data['tampil'] = $this->Mydb->getALLbelipakanhidup();
        $data['judul'] = 'DATA PEMBELIAN PAKAN HIDUP';
        tampilan('belipakanhidup/index', $data);
    }
    public function belipakanjadi()
    {
        $data['tampil'] = $this->Mydb->getALLbelipakanjadi();
        $data['judul'] = 'DATA PEMBELIAN PAKAN JADI';
        tampilan('belipakanjadi/index', $data);
    }
    public function beliaksesoris()
    {
        $data['tampil'] = $this->Mydb->getALLbeliaksesoris();
        $data['judul'] = 'DATA PEMBELIAN AKSESORIS';
        tampilan('beliaksesoris/index', $data);
    }
    public function beliperawatanikan()
    {
        $data['tampil'] = $this->Mydb->getALLbeliperawatanikan();
        $data['judul'] = 'DATA PEMBELIAN PERAWATAN IKAN';
        tampilan('beliperawatanikan/index', $data);
    }
    public function beliperawatantanaman()
    {
        $data['tampil'] = $this->Mydb->getALLbeliperawatantanaman();
        $data['judul'] = 'DATA PEMBELIAN PERAWATAN TANAMAN';
        tampilan('beliperawatantanaman/index', $data);
    }



    public function jualikanpredator()
    {
        $data['tampil'] = $this->Mydb->getALLjualikanpredator();
        $data['judul'] = 'DATA PENJUALAN IKAN PREDATOR';
        tampilan('jualikanpredator/index', $data);
    }
    public function jualaksesoris()
    {
        $data['tampil'] = $this->Mydb->getALLjualaksesoris();
        $data['judul'] = 'DATA PENJUALAN AKSESORIS';
        tampilan('jualaksesoris/index', $data);
    }
    public function jualikanhias()
    {
        $data['tampil'] = $this->Mydb->getALLjualikanhias();
        $data['judul'] = 'DATA PENJUALAN IKAN HIAS';
        tampilan('jualikanhias/index', $data);
    }
    public function jualpakanhidup()
    {
        $data['tampil'] = $this->Mydb->getALLjualpakanhidup();
        $data['judul'] = 'DATA PENJUALAN PAKAN HIDUP';
        tampilan('jualpakanhidup/index', $data);
    }
    public function jualpakanjadi()
    {
        $data['tampil'] = $this->Mydb->getALLjualpakanjadi();
        $data['judul'] = 'DATA PENJUALAN PAKAN JADI';
        tampilan('jualpakanjadi/index', $data);
    }
    public function jualperawatanikan()
    {
        $data['tampil'] = $this->Mydb->getALLjualperawatanikan();
        $data['judul'] = 'DATA PENJUALAN PERAWATAN IKAN';
        tampilan('jualperawatanikan/index', $data);
    }
    public function jualperawatantanaman()
    {
        $data['tampil'] = $this->Mydb->getALLjualperawatantanaman();
        $data['judul'] = 'DATA PENJUALAN PERAWATAN TANAMAN';
        tampilan('jualperawatantanaman/index', $data);
    }
    public function maintenance()
    {
        $data['tampil'] = $this->Mydb->getALLmaintenance();
        $data['judul'] = 'DATA MAINTENANCE';
        tampilan('maintenance/index', $data);
    }
    public function gaji()
    {
        $data['tampil'] = $this->Mydb->getALLgaji();
        $data['judul'] = 'DATA GAJI KARYAWAN';
        tampilan('gaji/index', $data);
    }
    public function tempat()
    {
        $data['tampil'] = $this->Mydb->getALLtempat();
        $data['judul'] = 'DATA TOKO';
        tampilan('tempat/index', $data);
    }


    ///----INPUT DATA----///
    ///---PEMASUKAN---/// INPUT PEMASUKAN (IKAN, PAKAN, AKSESORIS)
    public function i_pm()
    {
        $this->form_validation->set_rules('pm_tanggal', 'pm tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_nama', 'pm nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_harga', 'pm harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_jumlah', 'pm jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'TAMBAH DATA PENJUALAN';
            tampilan('pemasukan/i_pm', $data);
        } else {
            $pmhar = data_post('pm_harga');
            $pmjum = data_post('pm_jumlah');
            $jenis = data_post('pm_jenis');
            $kolom = [
                "pm_tanggal" => data_post('pm_tanggal'),
                "pm_jenis" => $jenis,
                "pm_nama" => data_post('pm_nama'),
                "pm_harga" => data_post('pm_harga'),
                "pm_jumlah" => data_post('pm_jumlah'),
                "pm_total" => $pmhar * $pmjum
            ];
            $this->Mydb->input_dt('pemasukan', $kolom);
            if ($jenis == 'PREDATOR') {
                $home = 'jualikanpredator';
            }
            if ($jenis == 'HIAS') {
                $home = 'jualikanhias';
            }
            if ($jenis == 'HIDUP') {
                $home = 'jualpakanhidup';
            }
            if ($jenis == 'JADI') {
                $home = 'jualpakanjadi';
            }
            if ($jenis == 'RAWATIKAN') {
                $home = 'jualperawatanikan';
            }
            if ($jenis == 'OBATTANAMAN') {
                $home = 'jualperawatantanaman';
            }
            if ($jenis == 'AKSESORIS') {
                $home = 'jualaksesoris';
            }
            redirect(base_url('Dashboard/' . $home));
        }
    }

    ///---PENGELUARAN---/// INPUT PEMBELIAN (IKAN, PAKAN, AKSESORIS)
    public function i_pl()
    {
        $this->form_validation->set_rules('pl_tanggal', 'pl tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_nama', 'pl nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_harga', 'pl harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_jumlah', 'pl jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'TAMBAH DATA PEMBELIAN';
            tampilan('pengeluaran/i_pl', $data);
        } else {
            $plhar = data_post('pl_harga');
            $pljum = data_post('pl_jumlah');
            $jenis = data_post('pl_jenis');
            $kolom = [
                "pl_tanggal" => data_post('pl_tanggal'),
                "pl_jenis" => $jenis,
                "pl_nama" => data_post('pl_nama'),
                "pl_harga" => data_post('pl_harga'),
                "pl_jumlah" => data_post('pl_jumlah'),
                "pl_total" => $plhar * $pljum
            ];
            $this->Mydb->input_dt('pengeluaran', $kolom);
            if ($jenis == 'PREDATOR') {
                $home = 'beliikanpredator';
            }
            if ($jenis == 'HIAS') {
                $home = 'beliikanhias';
            }
            if ($jenis == 'HIDUP') {
                $home = 'belipakanhidup';
            }
            if ($jenis == 'JADI') {
                $home = 'belipakanjadi';
            }
            if ($jenis == 'RAWATIKAN') {
                $home = 'beliperawatanikan';
            }
            if ($jenis == 'OBATTANAMAN') {
                $home = 'beliperawatantanaman';
            }
            if ($jenis == 'AKSESORIS') {
                $home = 'beliaksesoris';
            }
            redirect(base_url('Dashboard/' . $home));
        }
    }

    ///---PENGELUARAN---/// INPUT PENGELUARAN (MAINTENANCE, GAJI, TEMPAT)
    public function i_pn()
    {
        $this->form_validation->set_rules('pl_tanggal', 'pl tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_nama', 'pl nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_total', 'pl total', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'TAMBAH DATA PENGELUARAN';
            tampilan('pengeluaran/i_pn', $data);
        } else {
            $jenis1 = data_post('pl_jenis');
            $kolom = [
                "pl_tanggal" => data_post('pl_tanggal'),
                "pl_jenis" => $jenis1,
                "pl_nama" => data_post('pl_nama'),
                "pl_total" => data_post('pl_total'),
            ];
            $this->Mydb->input_dt('pengeluaran', $kolom);
            if ($jenis1 == 'MAINTENANCE') {
                $home = 'maintenance';
            }
            if ($jenis1 == 'GAJI') {
                $home = 'gaji';
            }
            if ($jenis1 == 'TEMPAT') {
                $home = 'tempat';
            }
            redirect(base_url('Dashboard/' . $home));
        }
    }






    ///--------UPDATE DATA-------/////
    ///UPDATE PEMASUKAN | JUAL AKSESORIS (done)
    public function update_jualaksesoris($id)
    {

        $data['col'] = $this->db->get_where('pemasukan', ['id_pm' => $id])->row_array();

        $this->form_validation->set_rules('pm_tanggal', 'pm tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_nama', 'pm nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_harga', 'pm harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_jumlah', 'pm jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'EDIT DATA PENJUALAN AKSESORIS';
            tampilan('jualaksesoris/e_jualaksesoris', $data);
        } else {
            $pmhar = data_post('pm_harga');
            $pmjum = data_post('pm_jumlah');
            $kolom = [
                "pm_tanggal" => data_post('pm_tanggal'),
                "pm_nama" => data_post('pm_nama'),
                "pm_harga" => data_post('pm_harga'),
                "pm_jumlah" => data_post('pm_jumlah'),
                "pm_total" => $pmhar * $pmjum
            ];
            $this->Mydb->update_dt($kolom, ['id_pm' => $id], 'pemasukan');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/jualaksesoris'));
        }
    }
    ///UPDATE PEMASUKAN | JUAL IKAN PREDATOR (done)
    public function update_jualikanpredator($id)
    {

        $data['col'] = $this->db->get_where('pemasukan', ['id_pm' => $id])->row_array();

        $this->form_validation->set_rules('pm_tanggal', 'pm tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_nama', 'pm nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_harga', 'pm harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_jumlah', 'pm jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'EDIT DATA PENJUALAN IKAN PREDATOR';
            tampilan('jualikanpredator/e_jualikanpredator', $data);
        } else {
            $pmhar = data_post('pm_harga');
            $pmjum = data_post('pm_jumlah');
            $kolom = [
                "pm_tanggal" => data_post('pm_tanggal'),
                "pm_nama" => data_post('pm_nama'),
                "pm_harga" => data_post('pm_harga'),
                "pm_jumlah" => data_post('pm_jumlah'),
                "pm_total" => $pmhar * $pmjum
            ];
            $this->Mydb->update_dt($kolom, ['id_pm' => $id], 'pemasukan');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/jualikanpredator'));
        }
    }
    ///UPDATE PEMASUKAN | JUAL IKAN HIAS (done)
    public function update_jualikanhias($id)
    {

        $data['col'] = $this->db->get_where('pemasukan', ['id_pm' => $id])->row_array();

        $this->form_validation->set_rules('pm_tanggal', 'pm tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_nama', 'pm nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_harga', 'pm harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_jumlah', 'pm jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'EDIT DATA PENJUALAN IKAN HIAS';
            tampilan('jualikanhias/e_jualikanhias', $data);
        } else {
            $pmhar = data_post('pm_harga');
            $pmjum = data_post('pm_jumlah');
            $kolom = [
                "pm_tanggal" => data_post('pm_tanggal'),
                "pm_nama" => data_post('pm_nama'),
                "pm_harga" => data_post('pm_harga'),
                "pm_jumlah" => data_post('pm_jumlah'),
                "pm_total" => $pmhar * $pmjum
            ];
            $this->Mydb->update_dt($kolom, ['id_pm' => $id], 'pemasukan');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/jualikanhias'));
        }
    }
    ///UPDATE PEMASUKAN | JUAL PAKAN HIDUP (done)
    public function update_jualpakanhidup($id)
    {

        $data['col'] = $this->db->get_where('pemasukan', ['id_pm' => $id])->row_array();

        $this->form_validation->set_rules('pm_tanggal', 'pm tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_nama', 'pm nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_harga', 'pm harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_jumlah', 'pm jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'EDIT DATA PENJUALAN PAKAN HIDUP';
            tampilan('jualpakanhidup/e_jualpakanhidup', $data);
        } else {
            $pmhar = data_post('pm_harga');
            $pmjum = data_post('pm_jumlah');
            $kolom = [
                "pm_tanggal" => data_post('pm_tanggal'),
                "pm_nama" => data_post('pm_nama'),
                "pm_harga" => data_post('pm_harga'),
                "pm_jumlah" => data_post('pm_jumlah'),
                "pm_total" => $pmhar * $pmjum
            ];
            $this->Mydb->update_dt($kolom, ['id_pm' => $id], 'pemasukan');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/jualpakanhidup'));
        }
    }
    ///UPDATE PEMASUKAN | JUAL PAKAN JADI (done)
    public function update_jualpakanjadi($id)
    {

        $data['col'] = $this->db->get_where('pemasukan', ['id_pm' => $id])->row_array();

        $this->form_validation->set_rules('pm_tanggal', 'pm tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_nama', 'pm nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_harga', 'pm harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_jumlah', 'pm jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'EDIT DATA PENJUALAN PAKAN JADI';
            tampilan('jualpakanjadi/e_jualpakanjadi', $data);
        } else {
            $pmhar = data_post('pm_harga');
            $pmjum = data_post('pm_jumlah');
            $kolom = [
                "pm_tanggal" => data_post('pm_tanggal'),
                "pm_nama" => data_post('pm_nama'),
                "pm_harga" => data_post('pm_harga'),
                "pm_jumlah" => data_post('pm_jumlah'),
                "pm_total" => $pmhar * $pmjum
            ];
            $this->Mydb->update_dt($kolom, ['id_pm' => $id], 'pemasukan');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/jualpakanjadi'));
        }
    }
    ///UPDATE PEMASUKAN | JUAL OBAT IKAN (done)
    public function update_jualperawatanikan($id)
    {

        $data['col'] = $this->db->get_where('pemasukan', ['id_pm' => $id])->row_array();

        $this->form_validation->set_rules('pm_tanggal', 'pm tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_nama', 'pm nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_harga', 'pm harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_jumlah', 'pm jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'EDIT DATA PENJUALAN OBAT IKAN';
            tampilan('jualperawatanikan/e_jualperawatanikan', $data);
        } else {
            $pmhar = data_post('pm_harga');
            $pmjum = data_post('pm_jumlah');
            $kolom = [
                "pm_tanggal" => data_post('pm_tanggal'),
                "pm_nama" => data_post('pm_nama'),
                "pm_harga" => data_post('pm_harga'),
                "pm_jumlah" => data_post('pm_jumlah'),
                "pm_total" => $pmhar * $pmjum
            ];
            $this->Mydb->update_dt($kolom, ['id_pm' => $id], 'pemasukan');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/jualperawatanikan'));
        }
    }
    ///UPDATE PEMASUKAN | JUAL PUPUK TANAMAN (done)
    public function update_jualperawatantanaman($id)
    {

        $data['col'] = $this->db->get_where('pemasukan', ['id_pm' => $id])->row_array();

        $this->form_validation->set_rules('pm_tanggal', 'pm tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_nama', 'pm nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_harga', 'pm harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pm_jumlah', 'pm jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'EDIT DATA PENJUALAN PUPUK TANAMAN';
            tampilan('jualperawatantanaman/e_jualperawatantanaman', $data);
        } else {
            $pmhar = data_post('pm_harga');
            $pmjum = data_post('pm_jumlah');
            $kolom = [
                "pm_tanggal" => data_post('pm_tanggal'),
                "pm_nama" => data_post('pm_nama'),
                "pm_harga" => data_post('pm_harga'),
                "pm_jumlah" => data_post('pm_jumlah'),
                "pm_total" => $pmhar * $pmjum
            ];
            $this->Mydb->update_dt($kolom, ['id_pm' => $id], 'pemasukan');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/jualperawatantanaman'));
        }
    }

    ///UPDATE PENGELUARAN | BELI OBAT IKAN (done)
    public function update_beliperawatanikan($id)
    {
        $data['col'] = $this->db->get_where('pengeluaran', ['id_pl' => $id])->row_array();

        $this->form_validation->set_rules('pl_tanggal', 'pl tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_nama', 'pl nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_harga', 'pl harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_jumlah', 'pl jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'EDIT DATA PEMBELIAN OBAT IKAN';
            tampilan('beliperawatanikan/e_beliperawatanikan', $data);
        } else {
            $plhar = data_post('pl_harga');
            $pljum = data_post('pl_jumlah');
            $kolom = [
                "pl_tanggal" => data_post('pl_tanggal'),
                "pl_nama" => data_post('pl_nama'),
                "pl_harga" => data_post('pl_harga'),
                "pl_jumlah" => data_post('pl_jumlah'),
                "pl_total" => $plhar * $pljum
            ];
            $this->Mydb->update_dt($kolom, ['id_pl' => $id], 'pengeluaran');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/beliperawatanikan'));
        }
    }
    ///UPDATE PENGELUARAN | BELI PUPUK TANAMAN (done)
    public function update_beliperawatantanaman($id)
    {
        $data['col'] = $this->db->get_where('pengeluaran', ['id_pl' => $id])->row_array();

        $this->form_validation->set_rules('pl_tanggal', 'pl tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_nama', 'pl nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_harga', 'pl harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_jumlah', 'pl jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'EDIT DATA PEMBELIAN PUPUK TANAMAN';
            tampilan('beliperawatantanaman/e_beliperawatantanaman', $data);
        } else {
            $plhar = data_post('pl_harga');
            $pljum = data_post('pl_jumlah');
            $kolom = [
                "pl_tanggal" => data_post('pl_tanggal'),
                "pl_nama" => data_post('pl_nama'),
                "pl_harga" => data_post('pl_harga'),
                "pl_jumlah" => data_post('pl_jumlah'),
                "pl_total" => $plhar * $pljum
            ];
            $this->Mydb->update_dt($kolom, ['id_pl' => $id], 'pengeluaran');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/beliperawatantanaman'));
        }
    }
    ///UPDATE PENGELUARAN | BELI AKSESORIS (done)
    public function update_beliaksesoris($id)
    {
        $data['col'] = $this->db->get_where('pengeluaran', ['id_pl' => $id])->row_array();

        $this->form_validation->set_rules('pl_tanggal', 'pl tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_nama', 'pl nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_harga', 'pl harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_jumlah', 'pl jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'EDIT DATA PEMBELIAN AKSESORIS';
            tampilan('beliaksesoris/e_beliaksesoris', $data);
        } else {
            $plhar = data_post('pl_harga');
            $pljum = data_post('pl_jumlah');
            $kolom = [
                "pl_tanggal" => data_post('pl_tanggal'),
                "pl_nama" => data_post('pl_nama'),
                "pl_harga" => data_post('pl_harga'),
                "pl_jumlah" => data_post('pl_jumlah'),
                "pl_total" => $plhar * $pljum
            ];
            $this->Mydb->update_dt($kolom, ['id_pl' => $id], 'pengeluaran');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/beliaksesoris'));
        }
    }
    ///UPDATE PENGELUARAN | BELI IKAN HIAS (done)
    public function update_beliikanhias($id)
    {
        $data['col'] = $this->db->get_where('pengeluaran', ['id_pl' => $id])->row_array();

        $this->form_validation->set_rules('pl_tanggal', 'pl tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_nama', 'pl nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_harga', 'pl harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_jumlah', 'pl jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'EDIT DATA PEMBELIAN IKAN HIAS';
            tampilan('beliikanhias/e_beliikanhias', $data);
        } else {
            $plhar = data_post('pl_harga');
            $pljum = data_post('pl_jumlah');
            $kolom = [
                "pl_tanggal" => data_post('pl_tanggal'),
                "pl_nama" => data_post('pl_nama'),
                "pl_harga" => data_post('pl_harga'),
                "pl_jumlah" => data_post('pl_jumlah'),
                "pl_total" => $plhar * $pljum
            ];
            $this->Mydb->update_dt($kolom, ['id_pl' => $id], 'pengeluaran');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/beliikanhias'));
        }
    }
    ///UPDATE PENGELUARAN | BELI IKAN PREDATOR (done)
    public function update_beliikanpredator($id)
    {
        $data['col'] = $this->db->get_where('pengeluaran', ['id_pl' => $id])->row_array();

        $this->form_validation->set_rules('pl_tanggal', 'pl tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_nama', 'pl nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_harga', 'pl harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_jumlah', 'pl jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'EDIT DATA PEMBELIAN IKAN PREDATOR';
            tampilan('beliikanpredator/e_beliikanpredator', $data);
        } else {
            $plhar = data_post('pl_harga');
            $pljum = data_post('pl_jumlah');
            $kolom = [
                "pl_tanggal" => data_post('pl_tanggal'),
                "pl_nama" => data_post('pl_nama'),
                "pl_harga" => data_post('pl_harga'),
                "pl_jumlah" => data_post('pl_jumlah'),
                "pl_total" => $plhar * $pljum
            ];
            $this->Mydb->update_dt($kolom, ['id_pl' => $id], 'pengeluaran');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/beliikanpredator'));
        }
    }
    ///UPDATE PEMASUKAN | BELI PAKAN HIDUP (done)
    public function update_belipakanhidup($id)
    {

        $data['col'] = $this->db->get_where('pengeluaran', ['id_pl' => $id])->row_array();

        $this->form_validation->set_rules('pl_tanggal', 'pl tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_nama', 'pl nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_harga', 'pl harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_jumlah', 'pl jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'EDIT DATA PEMBELIAN PAKAN HIDUP';
            tampilan('belipakanhidup/e_belipakanhidup', $data);
        } else {
            $plhar = data_post('pl_harga');
            $pljum = data_post('pl_jumlah');
            $kolom = [
                "pl_tanggal" => data_post('pl_tanggal'),
                "pl_nama" => data_post('pl_nama'),
                "pl_harga" => data_post('pl_harga'),
                "pl_jumlah" => data_post('pl_jumlah'),
                "pl_total" => $plhar * $pljum
            ];
            $this->Mydb->update_dt($kolom, ['id_pl' => $id], 'pengeluaran');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/belipakanhidup'));
        }
    }
    ///UPDATE PEMASUKAN | BELI PAKAN JADI (done)
    public function update_belipakanjadi($id)
    {

        $data['col'] = $this->db->get_where('pengeluaran', ['id_pl' => $id])->row_array();

        $this->form_validation->set_rules('pl_tanggal', 'pl tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_nama', 'pl nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_harga', 'pl harga', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_jumlah', 'pl jumlah', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'EDIT DATA PEMBELIAN PAKAN JADI';
            tampilan('belipakanjadi/e_belipakanjadi', $data);
        } else {
            $plhar = data_post('pl_harga');
            $pljum = data_post('pl_jumlah');
            $kolom = [
                "pl_tanggal" => data_post('pl_tanggal'),
                "pl_nama" => data_post('pl_nama'),
                "pl_harga" => data_post('pl_harga'),
                "pl_jumlah" => data_post('pl_jumlah'),
                "pl_total" => $plhar * $pljum
            ];
            $this->Mydb->update_dt($kolom, ['id_pl' => $id], 'pengeluaran');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/belipakanjadi'));
        }
    }
    ///UPDATE GAJI
    public function update_gaji($id)
    {

        $data['col'] = $this->db->get_where('pengeluaran', ['id_pl' => $id])->row_array();

        $this->form_validation->set_rules('pl_tanggal', 'pl tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_nama', 'pl nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_total', 'pl total', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'GAJI';
            tampilan('gaji/e_gaji', $data);
        } else {
            $kolom = [
                "pl_tanggal" => data_post('pl_tanggal'),
                "pl_nama" => data_post('pl_nama'),
                "pl_total" => data_post('pl_total')
            ];
            $this->Mydb->update_dt($kolom, ['id_pl' => $id], 'pengeluaran');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/gaji'));
        }
    }
    ///UPDATE MAINTENANCE
    public function update_maintenance($id)
    {

        $data['col'] = $this->db->get_where('pengeluaran', ['id_pl' => $id])->row_array();

        $this->form_validation->set_rules('pl_tanggal', 'pl tanggal', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_nama', 'pl nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_total', 'pl total', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'MAINTENANCE';
            tampilan('maintenance/e_maintenance', $data);
        } else {
            $kolom = [
                "pl_tanggal" => data_post('pl_tanggal'),
                "pl_nama" => data_post('pl_nama'),
                "pl_total" => data_post('pl_total')
            ];
            $this->Mydb->update_dt($kolom, ['id_pl' => $id], 'pengeluaran');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/maintenance'));
        }
    }
    ///UPDATE TEMPAT
    public function update_tempat($id)
    {

        $data['col'] = $this->db->get_where('pengeluaran', ['id_pl' => $id])->row_array();

        $this->form_validation->set_rules('pl_tanggal', 'pl nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_nama', 'pl nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('pl_total', 'pl total', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'TEMPAT';
            tampilan('tempat/e_tempat', $data);
        } else {
            $kolom = [
                "pl_tanggal" => data_post('pl_tanggal'),
                "pl_nama" => data_post('pl_nama'),
                "pl_total" => data_post('pl_total')
            ];
            $this->Mydb->update_dt($kolom, ['id_pl' => $id], 'pengeluaran');
            notif('Berhasil', true);
            redirect(base_url('Dashboard/tempat'));
        }
    }




    //HAPUS DATA 
    public function del_jualaksesoris($id)
    {
        $this->Mydb->del_dt(['id_pm' => $id], 'pemasukan');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/jualaksesoris'));
    }
    public function del_jualikanpredator($id)
    {
        $this->Mydb->del_dt(['id_pm' => $id], 'pemasukan');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/jualikanpredator'));
    }
    public function del_jualikanhias($id)
    {
        $this->Mydb->del_dt(['id_pm' => $id], 'pemasukan');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/jualikanhias'));
    }
    public function del_jualpakanhidup($id)
    {
        $this->Mydb->del_dt(['id_pm' => $id], 'pemasukan');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/jualpakanhidup'));
    }
    public function del_jualpakanjadi($id)
    {
        $this->Mydb->del_dt(['id_pm' => $id], 'pemasukan');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/jualpakanjadi'));
    }
    public function del_jualperawatanikan($id)
    {
        $this->Mydb->del_dt(['id_pm' => $id], 'pemasukan');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/jualperawatanikan'));
    }
    public function del_jualperawatantanaman($id)
    {
        $this->Mydb->del_dt(['id_pm' => $id], 'pemasukan');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/jualperawatantanaman'));
    }
    public function del_beliperawatanikan($id)
    {
        $this->Mydb->del_dt(['id_pl' => $id], 'pengeluaran');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/beliperawatanikan'));
    }
    public function del_beliperawatantanaman($id)
    {
        $this->Mydb->del_dt(['id_pl' => $id], 'pengeluaran');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/beliperawatantanaman'));
    }
    public function del_beliaksesoris($id)
    {
        $this->Mydb->del_dt(['id_pl' => $id], 'pengeluaran');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/beliaksesoris'));
    }
    public function del_beliikanpredator($id)
    {
        $this->Mydb->del_dt(['id_pl' => $id], 'pengeluaran');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/beliikanpredator'));
    }
    public function del_beliikanhias($id)
    {
        $this->Mydb->del_dt(['id_pl' => $id], 'pengeluaran');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/beliikanhias'));
    }
    public function del_belipakanhidup($id)
    {
        $this->Mydb->del_dt(['id_pl' => $id], 'pengeluaran');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/belipakanhidup'));
    }
    public function del_belipakanjadi($id)
    {
        $this->Mydb->del_dt(['id_pl' => $id], 'pengeluaran');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/belipakanjadi'));
    }
    public function del_maintenance($id)
    {
        $this->Mydb->del_dt(['id_pl' => $id], 'pengeluaran');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/maintenance'));
    }
    public function del_tempat($id)
    {
        $this->Mydb->del_dt(['id_pl' => $id], 'pengeluaran');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/tempat'));
    }
    public function del_gaji($id)
    {
        $this->Mydb->del_dt(['id_pl' => $id], 'pengeluaran');
        notif('Berhasil', true);
        redirect(base_url('Dashboard/gaji'));
    }

    ////CETAK PDF
    public function cetak_laba($tgl)
    {
        //
        $data['judul'] = 'LABA';
        $data['pemasukan'] = $this->Mydb->getAllPemasukan($tgl);
        $data['pengeluaran'] = $this->Mydb->getAllPengeluaran($tgl);
        $this->load->view('laba/cetak_laba', $data);
    }


    ////LABAAAA
    public function laba()
    {
        $data['judul'] = 'LABA';
        $data['tampil'] = $this->Mydb->bar_pm();
        tampilan('laba/index', $data);
    }

    public function detail_laba($tgl)
    {
        $data['judul'] = 'DATA DETAIL';
        $data['pemasukan'] = $this->Mydb->getAllPemasukan($tgl);
        $data['pengeluaran'] = $this->Mydb->getAllPengeluaran($tgl);
        tampilan('laba/detail_laba', $data);
    }




    //Profil
    public function profile()
    {
        $data['judul'] =  "My Profile";
        $data['user'] = $this->Mydb->select_user($_SESSION['username']);
        tampilan('Dashboard/user', $data);
    }


    public function ubah_password()
    {
        $id = $_SESSION['id'];
        $data['judul'] = 'UBAH PASSWORD';
        $data['col'] = $this->db->get_where('user', ['id' => $id])->row_array();

        $this->form_validation->set_rules('old_password', 'old_password', 'required|trim');
        $this->form_validation->set_rules('new_password', 'new_password', 'required|trim|min_length[4]', [
            'min_length' => 'Password Baru terlalu pendek'
        ]);
        $this->form_validation->set_rules('confirm', 'confirm', 'required|trim|matches[new_password]', [
            'matches' => 'Password Baru tidak sama dengan Konfirmasi Password'
        ]);

        if ($this->form_validation->run() == false) {
            tampilan('ubahpassword/ubah_password', $data);
        } else {
            $new = md5($this->input->post('new_password'));
            $this->db->set('password', $new);
            $this->db->where('id', $id);
            $this->db->update('user');
            redirect(base_url("Dashboard/ubah_password"));
        }
    }
}
