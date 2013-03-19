<?php
class Popularchoice_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_popular_choice($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('popular_choice');
			return $query->result_array();
		}
	
		$query = $this->db->get_where('popular_choice', array('id' => $id));
		return $query->row_array();
	}
	
	
}