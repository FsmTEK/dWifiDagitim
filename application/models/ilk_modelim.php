<?php
class ilk_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function giris($kadi, $sifre)
    {
        $this->db->where('kadi', $kadi);
        $this->db->where('sifre', $sifre);
        $sorgu = $this->db->get('girisler');
        return $sorgu;

    }
}

?>