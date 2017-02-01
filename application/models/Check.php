<?php
class Check extends CI_Model {


    function insert($checkbox,$userid){

       // $checkbox = $this->input->post('checkbox');
       // $checkbox = $this->input->post('userid');

        $data = array(

            'requirements' => implode(",", $checkbox),
            'user_id' => $userid,

        );
        $this->db->insert('product',$data);
    }


}
?>