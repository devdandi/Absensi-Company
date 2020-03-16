<?php

class AdminModel extends CI_Model 
{
	private $table = "data_perusahaan";

	public function data_perusahaan()
	{
		return $this->db->get('data_perusahaan')->result_array();
	}
	public function migrasi($time)
	{
		$query = $this->db->query("SELECT * FROM absen WHERE mirgasi='$time'")->result_array();
		foreach($query as $data) {
			$data_migrasi = array(
				'id_absen' => $data['id_absen'],
				'email' => $data['email'],
				'pukul' => $data['pukul']
			);
			$mig = $this->db->insert('riwayat_absen', $data_migrasi);
			if($mig) {
				$this->db->query("DELETE FROM absen WHERE mirgasi='$time'");
			}
		}
	}
}