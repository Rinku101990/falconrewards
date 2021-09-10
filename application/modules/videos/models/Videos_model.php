<?php 
class Videos_model extends MY_Model{
	
    /*--- Draw List ---*/ 	
	function draws_list($drid,$dtsts,$table)
	{
	    $this->db->select('drw_id,drw_title,drw_title_ar,drw_video,drw_thumbnail,drw_created');
		$this->db->where($dtsts,'0');
		$this->db->order_by($drid,'ASC');
		$query=$this->db->get($table);
		if($query->num_rows() != 0) 
		    return $query->result();
		else 
		    return false;
	}
	
	function past_draw_list($drid,$dtsts,$table)
	{
	    $this->db->select('drw_id,drw_title,drw_title_ar,drw_video,drw_thumbnail,drw_created');
		$this->db->where($dtsts,'0');
		$this->db->order_by($drid,'ASC');
		$query=$this->db->get($table);
		if($query->num_rows() != 0) 
		    return $query->result();
		else 
		    return false;
	}
	
	function winner_list($winid,$table)
	{
		$this->db->select('win.win_id,drw.drw_title,drw.drw_title_ar,usr.usr_fname,usr.usr_lname,usr.usr_profile_photo,win.usr_profile');
		$this->db->join('tbl_draws drw','drw.drw_id=win.draw_id','LEFT');
		$this->db->join('tbl_users usr','usr.usr_id=win.usr_id','LEFT');
		$this->db->order_by('win.'.$winid,"asc");
		$query=$this->db->get($table.' win');
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}

}