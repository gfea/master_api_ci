<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
    * Code From GFEACORP.
    * Web Developer
    * @author      Galeh Fatma Eko Ardiansa S.Kom
    * @type        Model
    * @package     master_api_ci/Model_karyawan
    * @copyright   Copyright (c) 2019 GFEACORP
    * @version     1.0, 29 Dec 2019
    * Email        galeh.fatma@gmail.com
    * Phone        (+62) 85852924304
    * ==========// HAK CIPTA DILINDUNGI! //==========
*/


class Model_karyawan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //========================================== BLOCK CHANGE ==========================================//

    public function getListKaryawan($id=null,$active = false)
    {
        $this->db->select('a.*');
        $this->db->from('karyawan AS a');
        if ($active) {
            $this->db->where('a.status',true);
        }
        if ($id) {
            $this->db->where('a.id_karyawan',$id);
        }
        $this->db->order_by('update_date','DESC');
        $query=$this->db->get()->result_array();
        return $query;
    }
    public function getListLogPresensi($limit = 100,$sync=0)
    {
        $this->db->select('a.id_data_presensi,a.id_karyawan,a.tanggal,a.jam');
        $this->db->from('data_presensi_plain AS a');
        if (!$sync) {
            $this->db->where('a.sync',0);
        }
        $this->db->limit($limit); 
        $this->db->order_by('create_date','ASC');
        $query=$this->db->get()->result_array();
        return $query;
    }
}