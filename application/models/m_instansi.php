<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_instansi extends CI_Model
{
	static $table1 = 'm_data';
    static $table2 = 'm_wilayah';
    static $table3 = 'm_provinsi';
    static $table4 = 'm_kabupaten';

	function index(){
        $this->db->select('*');
        $this->db->join(self::$table2, 'm_data_wil=wilayah_id', 'left');
        $this->db->join(self::$table3, 'm_data_prov=id_prov', 'left');
        $this->db->join(self::$table4, 'm_data_kab=id_kab', 'left');
        $this->db->order_by('m_data_id', 'desc');
        $query  = $this->db->get(self::$table1);
        return $query;
    }

	function getwil($searchTerm = "")
    {
        $this->db->select('*');
        $this->db->where("wilayah_nama like '%" . $searchTerm . "%' ");
        $this->db->order_by('wilayah_id', 'asc');
        $fetched_records = $this->db->get('m_wilayah');
        $datawil = $fetched_records->result_array();
        $data = array();
        foreach ($datawil as $wil) {
            $data[] = array(
				"id"   => $wil['wilayah_id'],
				"text" => $wil['wilayah_nama']
            );
        }
        return $data;
    }

    function getprov($wilayah_id, $searchTerm = "")
    {
        $this->db->select('*');
        $this->db->where('wilayah_id', $wilayah_id);
        $this->db->where("prov_nama like '%" . $searchTerm . "%' ");
        $this->db->order_by('id_prov', 'asc');
        $fetched_records = $this->db->get('m_provinsi');
        $dataprov = $fetched_records->result_array();
        $data = array();
        foreach ($dataprov as $prov) {
            $data[] = array(
			"id"   => $prov['id_prov'],
			"text" => $prov['prov_nama']
            );
        }
        return $data;
    }

    function getkab($id_prov, $searchTerm = "")
    {
        $this->db->select('*');
        $this->db->where('id_prov', $id_prov);
        $this->db->where("kab_nama like '%" . $searchTerm . "%' ");
        $this->db->order_by('id_kab', 'asc');
        $fetched_records = $this->db->get('m_kabupaten');
        $datakab = $fetched_records->result_array();

        $data = array();
        foreach ($datakab as $kab) {
            $data[] = array(
                "id"   => $kab['id_kab'],
                "text" => $kab['kab_nama']);
        }
        return $data;
    }

	function create($namainstansi,$provinsi,$wilayah,$kabupaten,$alamat){
		$this->db->trans_start();
		$this->db->insert(self::$table1,array(
			'm_data_instansi'  => $namainstansi,
			'm_data_prov'      => $provinsi,
			'm_data_wil'       => $wilayah,
			'm_data_kab'       => $kabupaten,
			'm_data_alamat'    => $alamat,
		));
		$this->db->trans_complete();
		if($this->db->trans_status() === FALSE){
			return json_encode(array('success'=>false, 'msg'=>'Input data gagal!'));
		}else {
			return json_encode(array('success'=>true, 'msg'=>'Input Instansi berhasil!'));
		}
    }

}