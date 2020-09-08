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
    * @package     master_api_ci/Presensi
    * @copyright   Copyright (c) 2020 GFEACORP
    * @version     1.0, 04 Aug 2020
    * Email        galeh.fatma@gmail.com
    * Phone        (+62) 85852924304
    * ==========// HAK CIPTA DILINDUNGI! //==========
*/


class Presensi extends RestController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_karyawan','karyawan');
    }
    public function index_get()
    {
        $data=$this->karyawan->getListLogPresensi();
        if($data){
            $this->apimessages->good_data($data);
        }else{
            $this->apimessages->not_found();
        }
    }

    //========================================== BLOCK CHANGE ==========================================//

}