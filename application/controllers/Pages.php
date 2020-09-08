<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
    * Code From GFEACORP.
    * Web Developer
    * @author      Galeh Fatma Eko Ardiansa S.Kom
    * @type        Controller
    * @package     master_api_ci/Pages
    * @copyright   Copyright (c) 2019 GFEACORP
    * @version     1.0, 29 Dec 2019
    * Email        galeh.fatma@gmail.com
    * Phone        (+62) 85852924304
    * ==========// HAK CIPTA DILINDUNGI! //==========
*/


class Pages extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        redirect('pages/not_allowed');
    }

    //========================================== BLOCK CHANGE ==========================================//
    public function not_allowed()
    {
        $this->load->view('global/not_allowed');
    }
    public function not_found()
    {
        $this->load->view('global/not_found');
    }
}