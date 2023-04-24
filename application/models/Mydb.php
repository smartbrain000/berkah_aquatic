<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mydb extends CI_Model
{
    //input
    function input_dt($table, $data)
    {
        $this->db->insert($table, $data);
    }
    function update_dt($data, $where, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function del_dt($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    //tampil
    public function getALLjualperawatanikan()
    {
        return  $this->db->get_where('pemasukan', ['pm_jenis' => 'RAWATIKAN'])->result_array();
    }
    public function getALLjualperawatantanaman()
    {
        return  $this->db->get_where('pemasukan', ['pm_jenis' => 'OBATTANAMAN'])->result_array();
    }
    public function getALLjualaksesoris()
    {
        return  $this->db->get_where('pemasukan', ['pm_jenis' => 'AKSESORIS'])->result_array();
    }
    public function getALLjualikanpredator()
    {
        return  $this->db->get_where('pemasukan', ['pm_jenis' => 'PREDATOR'])->result_array();
    }
    public function getALLjualikanhias()
    {
        return  $this->db->get_where('pemasukan', ['pm_jenis' => 'HIAS'])->result_array();
    }
    public function getALLjualpakanhidup()
    {
        return  $this->db->get_where('pemasukan', ['pm_jenis' => 'HIDUP'])->result_array();
    }
    public function getALLjualpakanjadi()
    {
        return  $this->db->get_where('pemasukan', ['pm_jenis' => 'JADI'])->result_array();
    }
    public function getALLbeliikanpredator()
    {
        return  $this->db->get_where('pengeluaran', ['pl_jenis' => 'PREDATOR'])->result_array();
    }
    public function getALLbeliikanhias()
    {
        return  $this->db->get_where('pengeluaran', ['pl_jenis' => 'HIAS'])->result_array();
    }
    public function getALLbelipakanhidup()
    {
        return  $this->db->get_where('pengeluaran', ['pl_jenis' => 'HIDUP'])->result_array();
    }
    public function getALLbelipakanjadi()
    {
        return  $this->db->get_where('pengeluaran', ['pl_jenis' => 'JADI'])->result_array();
    }
    public function getALLbeliaksesoris()
    {
        return  $this->db->get_where('pengeluaran', ['pl_jenis' => 'AKSESORIS'])->result_array();
    }
    public function getALLbeliperawatanikan()
    {
        return  $this->db->get_where('pengeluaran', ['pl_jenis' => 'RAWATIKAN'])->result_array();
    }
    public function getALLbeliperawatantanaman()
    {
        return  $this->db->get_where('pengeluaran', ['pl_jenis' => 'OBATTANAMAN'])->result_array();
    }
    public function getALLmaintenance()
    {
        return  $this->db->get_where('pengeluaran', ['pl_jenis' => 'MAINTENANCE'])->result_array();
    }
    public function getALLgaji()
    {
        return  $this->db->get_where('pengeluaran', ['pl_jenis' => 'GAJI'])->result_array();
    }
    public function getALLtempat()
    {
        return  $this->db->get_where('pengeluaran', ['pl_jenis' => 'TEMPAT'])->result_array();
    }
    function getAllPemasukan($tgl)
    {
        return  $this->db->get_where('pemasukan', ['left(`pemasukan`.`pm_tanggal`,7)' => $tgl])->result_array();
    }
    function getAllPengeluaran($tgl)
    {
        return  $this->db->get_where('pengeluaran', ['left(`pengeluaran`.`pl_tanggal`,7)' => $tgl])->result_array();
    }
    //Grafik depan
    function bar_pm()
    {
        return $this->db->query('SELECT left(`pemasukan`.`pm_tanggal`,7) AS `tgl`, sum(pm_total) as total
			FROM `pemasukan` group by tgl ASC')->result_array();
    }
    function bar_pl($tgl)
    {
        return $this->db->query('SELECT left(`pengeluaran`.`pl_tanggal`,7) AS `tgl`, sum(pl_total) as total
			FROM `pengeluaran` 
			WHERE left(`pengeluaran`.`pl_tanggal`,7)="' . $tgl . '"')->row_array();
    }
    //Profil
    function select_user($username)
    {
		return $this->db->get_where('user',['username'=>$username])->row_array();
    }
    //dashboard
    function pm_hariini()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date("Y-m-d");
        return $this->db->query('SELECT sum(pm_total) as total
			FROM pemasukan WHERE pm_tanggal="' . $tgl . '" GROUP BY pm_tanggal')->row_array();
    }
    function pl_hariini()
    {
        date_default_timezone_set('Asia/bangkok');
        $tgl = date('Y-m-d');
        return $this->db->query('SELECT sum(pl_total) as total
        FROM pengeluaran WHERE pl_tanggal="' . $tgl . '" GROUP BY pl_tanggal')->row_array();
    }
    function pm_bulanini()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date("Y-m");
        $this->db->select('sum(pm_total) as total');
        return  $this->db->get_where('pemasukan', ['left(`pemasukan`.`pm_tanggal`,7)' => $tgl])->row_array();
    }
    function pl_bulanini()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date("Y-m");
        $this->db->select('sum(pl_total) as total');
        return  $this->db->get_where('pengeluaran', ['left(`pengeluaran`.`pl_tanggal`,7)' => $tgl])->row_array();
    }
    function pm_tahunini()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date("Y");
        $this->db->select('sum(pm_total) as total');
        return  $this->db->get_where('pemasukan', ['left(`pemasukan`.`pm_tanggal`,4)' => $tgl])->row_array();
    }
    function pl_tahunini()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date("Y");
        $this->db->select('sum(pl_total) as total');
        return  $this->db->get_where('pengeluaran', ['left(`pengeluaran`.`pl_tanggal`,4)' => $tgl])->row_array();
    }
    function pm_selamaini()
    {
        $this->db->select('sum(pm_total) as total')->from('pemasukan');
        return  $this->db->get()->row_array();
    }
    function pl_selamaini()
    {
        $this->db->select('sum(pl_total) as total')->from('pengeluaran');
        return  $this->db->get()->row_array();
    }
}
