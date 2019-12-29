<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
use RestServer\RestController;
use RestServer\Format;
require(APPPATH . 'libraries/RestController.php');
require(APPPATH . 'libraries/Format.php');


/**
    * Code From GFEACORP.
    * Web Developer
    * @author      Galeh Fatma Eko Ardiansa S.Kom
    * @type        Controller
    * @package     master_api_ci/Employee
    * @copyright   Copyright (c) 2019 GFEACORP
    * @version     1.0, 29 Dec 2019
    * Email        galeh.fatma@gmail.com
    * Phone        (+62) 85852924304
    * ==========// HAK CIPTA DILINDUNGI! //==========
*/


class Employee extends RestController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_karyawan','karyawan');
    }
    function index_get(){
        $id=$this->get('id');
        $employee = $this->karyawan->getListKaryawan($id);
        if($employee){
            $this->apimessages->good_data($employee);
        }else{
            $this->apimessages->not_found();
        }
        
    }

    //========================================== BLOCK CHANGE ==========================================//

}