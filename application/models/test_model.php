<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.10.2018
 * Time: 14:42
 */
class test_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function kurum()
    {
        $this->db->get('deneme');

    }
}