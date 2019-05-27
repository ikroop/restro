<?php

class AdminModel extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->library('image_lib');
    }

    function AddRegister() {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'status' => 1
        );
        $this->db->insert('user', $data);
        redirect('admin/index');
    }

    function getUserDetails($filter) {
        $this->db->where($filter);
        return $this->db->get('user')->row_array();
    }
    
     function getEnquiry($filter = NULL, $order_by = NULL, $limit = NULL, $start = NULL) {
        if ($filter) {
            $this->db->where($filter);
        }
        if ($limit || $start) {
            $this->db->limit($limit, $start);
        }
        if ($order_by) {
            $this->db->order_by($order_by);
        }
        $sql = $this->db->get('enquiry');
        return $sql->result_array();
    }
    public function getCustomerList(){
        return $this->db->get('customer')->result_array();
    }
    public function updateCustomer($filter,$data){
        $this->db->where($filter);
        return $this->db->update('customer',$data);
    }

    public function getFeedbackDetails($filter){
        $this->db->where($filter);
        $this->db->join('customer c','c.id = rating.customer_id','right outer');
        return $this->db->get('rating')->row_array();
    }
    public function getFeedbackData(){
        $this->db->join('customer c','c.id = rating.customer_id','right outer');
        return $this->db->get('rating')->result_array();
    }
    public function getDashboardData($first_date,$last_date){
        $this->db->where('DATE(created_at) >=',$first_date);
        $this->db->where('DATE(created_at) <=',$last_date);
        $this->db->group_by('DATE(created_at)'); 
    $this->db->select('COUNT(customer_id) as no_of_customer,SUM(question_1) as question_1,SUM(question_2) as question_2,SUM(question_3) as question_3,SUM(question_4) as question_4,SUM(question_5) as question_5,SUM(question_6) as question_6,SUM(question_7) as question_7,created_at');
        return $this->db->get('rating')->result_array();
    } 
    public function getDashboardCountData(){
        $this->db->select('COUNT(c.id) as number_of_customer,COUNT(customer_id) as number_of_feedback,SUM(question_1) as question_1,SUM(question_2) as question_2,SUM(question_3) as question_3,SUM(question_4) as question_4,SUM(question_5) as question_5,SUM(question_6) as question_6,SUM(question_7) as question_7');
        $this->db->join('customer c','c.id = r.customer_id','right outer');
        return $this->db->get('rating r')->row_array();
    }  
    public function getDailyRatingDetails(){
        $this->db->select('SUM(question_1) as question_1,SUM(question_2) as question_2,SUM(question_3) as question_3,SUM(question_4) as question_4,SUM(question_5) as question_5,SUM(question_6) as question_6,SUM(question_7) as question_7,COUNT(customer_id) as count,created_at'); 
        return $this->db->get('rating')->result_array();
    }
    public function getRatingDetails(){
        $this->db->join('rating r','r.customer_id = c.id');
        return $this->db->get('customer c')->result_array();
    }
    //get dealer details 
    public function getRatingDetailsRows($postData){
        $this->_get_rating_details_datatables_query($postData);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        
        return $query->result();
    }
    public function countAllRatingDetails(){
        $this->db->from('rating');
        return $this->db->count_all_results();
    }
    public function countFilteredRatingDetails($postData){
        $this->_get_rating_details_datatables_query($postData);
        $query = $this->db->get();
        return $query->num_rows();
    }
    private function _get_rating_details_datatables_query($postData){

        $this->db->select('name,mobile,email,question_1,question_2,question_3,question_4,question_5,question_6,question_7,r.created_at');
        $this->db->from('customer c');
        $this->db->join('rating r','c.id = r.customer_id');
        // Set orderable column fields
        $this->column_order = array(null,'name','mobile','email','question_1','question_2','question_3','question_4','question_5,question_6','question_7');

        
        // Set searchable column fields
        $this->column_search = array('name','mobile','email','question_1','question_2','question_3','question_4','question_5,question_6','question_7');
        // Set default order
        $this->order = array('r.id' => 'desc');

       
        
        foreach ($_POST['columns'] as $key => $value) {
                if(!empty($value['search']['value'])){
                    if($value['name'] == 'created_at'){
                        $created_at_date = $value['search']['value'];
                        $dates            = explode('-',$created_at_date);
                        $start_date       = date('Y-m-d',strtotime($dates['0']));
                        $end_date         = date('Y-m-d',strtotime($dates['1']));
                        $this->db->where('DATe(r.created_at) >=', $start_date);
                        $this->db->where('DATE(r.created_at) <=', $end_date);

                        if(isset($_POST['order'])){
                            if($_POST['order'][0]['dir'] == 'desc'){
                                $this->db->order_by('r.created_at desc');
                            }else{
                                $this->db->order_by('r.created_at asc');
                            }
                        }
                        
                        
                    }

                    if($value['name'] == 'name' || $value['name'] == 'mobile' || $value['name'] == 'email' || $value['name'] == 'question_1' || $value['name'] == 'question_2' || $value['name'] == 'question_3' || $value['name'] == 'question_4' || $value['name'] == 'question_5' || $value['name'] == 'question_6'  || $value['name'] == 'question_7' ){
                            $this->db->or_like($value['name'],$value['search']['value']);
                     }      
                }
        }

         
         $i = 0;
        
        foreach($this->column_search as $item){
            if($postData['search']['value']){

                if($i===0){
                    
                    $this->db->group_start();
                    $this->db->like($item, $postData['search']['value']);
                }else{
                    $this->db->or_like($item, $postData['search']['value']);
                }
                if(count($this->column_search) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
         


        if(isset($postData['order'])){
            if($postData['order'][0]['column'] == '1' || $postData['order'][0]['column'] == '2' || $postData['order'][0]['column'] == '3' || $postData['order'][0]['column'] == '4' || $postData['order'][0]['column'] == '5' || $postData['order'][0]['column'] == '6' || $postData['order'][0]['column'] == '7' || $postData['order'][0]['column'] == '8' || $postData['order'][0]['column'] == '9' || $postData['order'][0]['column'] == '10') {
                $this->db->order_by($this->column_order[$postData['order'][0]['column']], $postData['order'][0]['dir']);
            }
        }else if(isset($this->order)){
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    //get Customer details 
    public function getCustomerDetailsRows($postData){
        $this->_get_customer_details_datatables_query($postData);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        //echo $this->db->last_query();exit;
        return $query->result();
    }
    public function countAllCustomerDetails(){
        $this->db->from('customer');
        return $this->db->count_all_results();
    }
    public function countFilteredCustomerDetails($postData){
        $this->_get_customer_details_datatables_query($postData);
        $query = $this->db->get();
        return $query->num_rows();
    }
    private function _get_customer_details_datatables_query($postData){

        $this->db->select('c.id,name,mobile,email,birthdate,anniversary_date,c.created_at,COUNT(customer_id) as feedback_count');
        $this->db->join('rating r','r.customer_id = c.id','right outer');
        $this->db->group_by('c.mobile');
        $this->db->from('customer c');
        // Set orderable column fields
        $this->column_order = array(null,'name','mobile','email','birthdate','anniversary_date','c.created_at');

        // Set searchable column fields
        $this->column_search = array('name','mobile','email','birthdate','anniversary_date','c.created_at');
        // Set default order
        $this->order = array('c.id' => 'desc');

       
        
        foreach ($_POST['columns'] as $key => $value) {
                if(!empty($value['search']['value'])){
                    if($value['name'] == 'c.created_at'){
                        $created_at_date = $value['search']['value'];
                        $dates            = explode('-',$created_at_date);
                        $start_date       = date('Y-m-d',strtotime($dates['0']));
                        $end_date         = date('Y-m-d',strtotime($dates['1']));
                        $this->db->where('DATe(c.created_at) >=', $start_date);
                        $this->db->where('DATE(c.created_at) <=', $end_date);

                        if(isset($_POST['order'])){
                            if($_POST['order'][0]['dir'] == 'desc'){
                                $this->db->order_by('c.created_at desc');
                            }else{
                                $this->db->order_by('c.created_at asc');
                            }
                        }
                        
                        
                    }

                    if($value['name'] == 'name' || $value['name'] == 'mobile' || $value['name'] == 'email' || $value['name'] == 'birthdate' || $value['name'] == 'anniversary_date' ){
                            $this->db->or_like($value['name'],$value['search']['value']);
                     }      
                }
        }

         
         $i = 0;
        
        foreach($this->column_search as $item){
            if($postData['search']['value']){

                if($i===0){
                    
                    $this->db->group_start();
                    $this->db->like($item, $postData['search']['value']);
                }else{
                    $this->db->or_like($item, $postData['search']['value']);
                }
                if(count($this->column_search) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
         


        if(isset($postData['order'])){
            if($postData['order'][0]['column'] == '1' || $postData['order'][0]['column'] == '2' || $postData['order'][0]['column'] == '3' || $postData['order'][0]['column'] == '4' || $postData['order'][0]['column'] == '5') {
                $this->db->order_by($this->column_order[$postData['order'][0]['column']], $postData['order'][0]['dir']);
            }
        }else if(isset($this->order)){
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function getCustomerFeedbackDates($filter){
        $this->db->select('c.id,r.created_at');
        $this->db->where($filter);
        $this->db->join('rating r','r.customer_id = c.id');
        return $this->db->get('customer c')->result_array();
    }
    public function getCustomerDetails($filter){
        $this->db->where($filter);
        return $this->db->get('customer')->row_array();
    }

}

?>
