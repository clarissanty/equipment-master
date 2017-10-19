<?php
include_once 'class.connection.php';

/**
 *
 */
class Data extends Connection
{
	public function login($username, $password, $created_at, $updated_at){		
		$result = $this->db->query(
		"SELECT FROM tbl_data(username, password, created_at, updated_at) VALUES('{$username}', '{$password}', '{$created_at}', '{$updated_at}')");
	}
	public function input($no_register, $waktu_pengadaan, $penempatan_alat, $keterangan, $created_at, $updated_at){		
		$result = $this->db->query(
		"INSERT INTO tbl_data(id_data, no_register, waktu_pengadaan, penempatan_alat, keterangan, created_at, updated_at) VALUES('{$id_data}', '{$no_register}', '{$waktu_pengadaan}', '{$penempatan_alat}', '{$keterangan}', '{$created_at}', '{$updated_at}')");
	}
	public function edit($no_register, $waktu_pengadaan, $penempatan_alat, $keterangan, $updated_at, $id_data){		
		$result = $this->db->query(
		"UPDATE tbl_data SET no_register='{$no_register}', waktu_pengadaan='{$waktu_pengadaan}', penempatan_alat='{$penempatan_alat}', keterangan='{$keterangan}', updated_at='{$updated_at}' WHERE id_data='{$id_data}')"); 
	}
	
	public function delete($id_data){		
		$result = $this->db->query(
		"DELETE FROM tbl_data WHERE id_data='{$id_data}'");
	}
		
  /**
    * Modification function here
    */
  
}

 ?>

