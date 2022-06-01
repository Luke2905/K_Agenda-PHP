<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Session extends BaseController{

    public function Loadsession()
    {
        $this->load->library('session');
    }

    public function SetSession()
    {

        $data_session = array(
            'id' => $id,
            'nome'  => $nome,
            'email'     => $email,
            'logged_in' => TRUE
        );

        $this->session->set_userdata($data_session);
    }

    public function ReturnSession()
    {
        $this->session->userdata('nome');
    }

    public function RemoveSession()
    {
    $this->session->unset_userdata('$data_session');
    }

    public function CheckSession()
    {
        if($this->session->userdata('whatever_session_name_is')){
            // do something when exist
       }else{
           // do something when doesn't exist
       }
    }
    
}