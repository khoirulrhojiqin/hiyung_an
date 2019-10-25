<?php 

class M_kontak extends CI_model
{
	function __construct() {
        $this->tableName = 'tabel_kontak';
    }

	function get_data()
	{	
        $this->db->order_by('id','DESC');
		$query = $this->db->get("tabel_kontak");
		return $query->result();
	}
	function tambah_kontak($kontak){
		 $this->db->insert('tabel_kontak', $kontak);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function ubah_kontak($data,$id){
    $this->db->where('id',$id);
    $this->db->update('tabel_kontak', $data);
    return TRUE;
	}
	
}
     