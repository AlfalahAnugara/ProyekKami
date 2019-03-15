<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {

    function cek($nip, $password) {
        $this->db->where("nip", $nip);
        $this->db->where("password", $password);
        return $this->db->get("pegawai");
    }

}