<?php
class Venue_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_featured_venue($limit=4)
	{
		
			$this->db->order_by("rank", "asc");
			$query = $this->db->get('venue',$limit);
			return $query->result_array();		
	}
	
}