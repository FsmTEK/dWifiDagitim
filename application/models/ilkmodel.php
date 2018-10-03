<?php
class ilkmodel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function girisyap($kadi,$sifre)
    {
        $this->db->where('kadi',$kadi);
        $this->db->where('sifre',$sifre);
        $sorgu = $this->db->get('giris');
        return $sorgu;
    }

}