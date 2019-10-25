<?php
 
class M_history extends CI_Model
	{


function history(){
		$query = $this->db->query("SELECT tabel_pembeli.*, tabel_detail_order.*, tabel_barang.nama_barang, GROUP_CONCAT(tabel_detail_order.id_barang) AS 'id_barang2', GROUP_CONCAT('- ', tabel_barang.nama_barang SEPARATOR ', \r\n') AS 'nama_barang2', GROUP_CONCAT(tabel_detail_order.qty SEPARATOR ', ') AS 'qty2', GROUP_CONCAT('Rp.',tabel_detail_order.harga SEPARATOR ', ') AS 'harga2', GROUP_CONCAT('Rp.',tabel_detail_order.total SEPARATOR ', ') AS 'total2', SUM(tabel_detail_order.total) AS 'total_sum', COUNT(*) AS 'total_belanja', tabel_pembeli.id_user AS 'id_users' FROM tabel_pembeli 
			INNER JOIN tabel_detail_order ON tabel_pembeli.id_beli = tabel_detail_order.id_beli 
			INNER JOIN tabel_barang ON tabel_detail_order.id_barang = tabel_barang.id_barang GROUP by tabel_detail_order.id_beli DESC");
		return $query->result();
	}

}