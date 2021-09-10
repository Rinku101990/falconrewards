<?php 
class Variables_model extends MY_Model{
	
	public function check_exist($variable,$propertyName,$table)
	{
		$this->db->where($variable, $propertyName);
		$this->db->limit(1);
		$query = $this->db->get($table);
		//echo $this->db->last_query();
		if($query->num_rows()==''){
			return FALSE;
		}else{
			return TRUE;
		}
	}

	public function remove_property_category($pctid,$procatid,$table)
	{
		$this->db->where($pctid, $procatid);
        $query = $this->db->delete($table);
        if($query){
			return true;
		}else{
			return false;
		}		
	}

	public function get_property_category_list($pctid,$table)
	{
		$this->db->order_by($pctid, 'ASC');
		$query = $this->db->get($table);
		if($query->num_rows()==''){
			return FALSE;
		}else{
			return $query->result();
		}
	}
	
	public function single_category_info($catid,$cat,$table)
	{
	    $this->db->select('procat_id,procat_name,procat_slug,procat_name_ar,procat_status');
		$this->db->where($catid, $cat);
		$query = $this->db->get($table);
		if($query->num_rows()==''){
			return FALSE;
		}else{
			return $query->row();
		}
	}
	
	public function update($pcatid,$cid,$data,$table) 
	{
        $this->db->where($pcatid, $cid);
        $query=$this->db->update($table, $data);
        if($query){
			return true;
		}else{
			return false;
		}
    }

	public function save_record($propertyDataArray,$table)
	{
		$this->db->insert($table , $propertyDataArray);
        return $this->db->insert_id();
	} 

	/**/ 

	

}