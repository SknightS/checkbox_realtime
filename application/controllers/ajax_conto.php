<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax_conto extends CI_Controller
{
    public function index(){

        $this->load->view('checkbox');
    }


    public function insertproduct(){
        $checkbox = $this->input->post('checkbox');
        $userid = $this->input->post('userid');


        $this->load->model('Check');
        $this->Check->insert($checkbox,$userid);
       // $response = $this->load->view('checkbox');
        //echo $response;
        //redirect(ajax_conto);
    }
}

?>