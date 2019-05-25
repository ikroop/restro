<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');

        // Load the Library
    }

    public function index() {
        $this->load->view('login.php');
    }

    public function registerView() {
        $this->load->view('register.php');
    }

    public function AddRegister() {
        $this->AdminModel->AddRegister();
    }

    public function login() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $filter = array('username' => $username,
                        'password' =>$password);
        $result = $this->AdminModel->getUserDetails($filter);
        if ($result) {

                $logdata = array(
                    'logged_in' => TRUE,
                    'username'  => $result['username'],
                    'user_id'   => $result['id'],
                );

                $this->session->set_userdata($logdata);
                // $data['dashboard'] = $this->AdminModel->getDashboardData();
                
                $data['dashboard'] = $this->AdminModel->getDashboardCountData();
                
                $first_date = date('Y-m-01');
                $last_date  = date('Y-m-t');

                $rating_data = $this->AdminModel->getDashboardData($first_date,$last_date);

                $rating = array();
                $i = 0;
                $count = 0;
                foreach($rating_data as $row){
                    
                    $daily_rating[$i]['created_at'] = date('d-m-Y',strtotime($row['created_at']));
                    $daily_rating[$i]['question_1'] = round(($row['question_1'] * 5) / ($row['no_of_customer'] * 9),2) ;
                    $daily_rating[$i]['question_2'] = round(($row['question_2'] * 5) / ($row['no_of_customer'] * 9),2) ;
                    $daily_rating[$i]['question_3'] = round(($row['question_3'] * 5) / ($row['no_of_customer'] * 9),2) ;
                    $daily_rating[$i]['question_4'] = round(($row['question_4'] * 5) / ($row['no_of_customer'] * 9),2) ;
                    $daily_rating[$i]['question_5'] = round(($row['question_5'] * 5) / ($row['no_of_customer'] * 9),2) ;
                    $daily_rating[$i]['question_6'] = round(($row['question_6'] * 5) / ($row['no_of_customer'] * 9),2) ;
                    $daily_rating[$i]['question_7'] = round(($row['question_7'] * 5) / ($row['no_of_customer'] * 9),2) ;
                    $i++;
                }
                  


                $data['rating']    = $daily_rating;

                
                $data['main_view'] = 'dashboard';
                $this->load->view('base_template_admin', $data);
        } else {
            $this->load->view('login.php');
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        $this->load->view('login.php');
    }
    
     public function enquiryView() {
        $data['result'] = $this->AdminModel->getEnquiry();
        $data['main_view'] = 'enquiry';
        $this->load->view('base_template_admin', $data);
    }
    public function customerList(){
        $data['main_view'] = 'customerList';
        $this->load->view('base_template_admin', $data);   
    }
    public function getCustomerListDetails(){
         $data = $row = array();
        
        // Fetch member's records
        $memData = $this->AdminModel->getCustomerDetailsRows($_POST);
        
        // echo $this->db->last_query();exit;
        $i = $_POST['start'];
        foreach($memData as $member){

            $i++;

            $birthdate = isset($member->birthdate) == '0000-00-00' ? $member->birthdate : date('d-m-Y',strtotime($member->birthdate));
            $anniversary_date = isset($member->anniversary_date) == '0000-00-00' ? $member->anniversary_date : date('d-m-Y',strtotime($member->anniversary_date));

            $action = '<div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="'.base_url().'Admin/viewFeedbackDetails/'.$member->id.'" class="dropdown-item"><i class="icon-file-pdf"></i>View Feedback</a>
                                            
                                            </div>
                                        </div>
                                    </div>';
            $data[] = array($i,
                            $member->name, 
                            $member->mobile,
                            $member->email,
                            $birthdate,
                            $anniversary_date,
                            $member->created_at,
                            $action
                        );
        }



        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->AdminModel->countAllCustomerDetails(),
            "recordsFiltered" => $this->AdminModel->countFilteredCustomerDetails($_POST),
            "data" => $data,
        );
        
        // Output to JSON format
        echo json_encode($output);
    }
    public function viewFeedbackDetails(){
        $id = $this->uri->segment(3);
        $filter = array('c.id'=>$id);
        $data['feedback']   = $this->AdminModel->getFeedbackDetails($filter);
        $data['main_view'] = 'viewFeedbackDetails';
        $this->load->view('base_template_admin',$data);
    }
    public function viewFeedback(){
        $data['feedback'] = $this->AdminModel->getFeedbackData();
        $data['main_view'] = 'viewFeedback';
        $this->load->view('base_template_admin',$data);
    }

    public function dashboard(){
        $data['dashboard'] = $this->AdminModel->getDashboardCountData();

        if(isset($_POST) && !empty($_POST)){
            $first_date = date('Y-m-d',strtotime($this->input->post('start_date')));
            $last_date = date('Y-m-d',strtotime($this->input->post('end_date')));
        }else{
            $first_date = date('Y-m-01');
            $last_date  = date('Y-m-t');
        }
        
        $rating_data = $this->AdminModel->getDashboardData($first_date,$last_date);
        
        $rating = array();
        $i = 0;
        $count = 0;
        foreach($rating_data as $row){
            
            $daily_rating[$i]['created_at'] = date('d-m-Y',strtotime($row['created_at']));
            $daily_rating[$i]['question_1'] = round(($row['question_1'] * 5) / ($row['no_of_customer'] * 9),2) ;
            $daily_rating[$i]['question_2'] = round(($row['question_2'] * 5) / ($row['no_of_customer'] * 9),2) ;
            $daily_rating[$i]['question_3'] = round(($row['question_3'] * 5) / ($row['no_of_customer'] * 9),2) ;
            $daily_rating[$i]['question_4'] = round(($row['question_4'] * 5) / ($row['no_of_customer'] * 9),2) ;
            $daily_rating[$i]['question_5'] = round(($row['question_5'] * 5) / ($row['no_of_customer'] * 9),2) ;
            $daily_rating[$i]['question_6'] = round(($row['question_6'] * 5) / ($row['no_of_customer'] * 9),2) ;
            $daily_rating[$i]['question_7'] = round(($row['question_7'] * 5) / ($row['no_of_customer'] * 9),2) ;
            $i++;
        }
          


        $data['rating']    = $daily_rating;
        $data['main_view'] = 'dashboard';
        $this->load->view('base_template_admin',$data);
    }
    public function getRatingList(){
        $data['rating']    = $this->AdminModel->getRatingDetails();
        $data['main_view'] = 'ratingList';
        $this->load->view('base_template_admin',$data);
    }
    public function getRatingDetails(){

        $data = $row = array();
        
        // Fetch member's records
        $memData = $this->AdminModel->getRatingDetailsRows($_POST);
        
        // echo $this->db->last_query();exit;
        $i = $_POST['start'];
        foreach($memData as $member){

            $i++;


            $data[] = array($i,
                            $member->name, 
                            $member->mobile,
                            $member->email,
                            $member->question_1,
                            $member->question_2,
                            $member->question_3,
                            $member->question_4,
                            $member->question_5,
                            $member->question_6,
                            $member->question_7,
                            $member->created_at
                        );
        }



        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->AdminModel->countAllRatingDetails(),
            "recordsFiltered" => $this->AdminModel->countFilteredRatingDetails($_POST),
            "data" => $data,
        );
        
        // Output to JSON format
        echo json_encode($output);

    }
    
}
