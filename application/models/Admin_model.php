
<?php

class Admin_model extends CI_Model {

    function __construct() {        
        parent::__construct();
    }

    public function addRegistration($data) {
        $this->db->insert('customer',$data);
    	return $this->db->insert_id();
    }
    public function addRating($data) {
        return $this->db->insert('rating',$data);
    }
    public function getCustomerDetails($filter){
        $this->db->where($filter);
        return $this->db->get('customer')->row_array();
    }
  
  
}

?>