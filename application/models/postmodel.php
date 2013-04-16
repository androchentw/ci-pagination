<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
class PostModel extends CI_Model {  
    function __construct() {  
        parent::__construct();  
    }  

    public function getTableName() {
        return "post";
    }

    public function count_entries() {
        $this->db->select("count(PostID) as Cnt");

        $query = $this->db->get($this->getTableName());
        if ($query->num_rows() <= 0) {
            return null;
        }
        return $query->row()->Cnt;
    }

    public function get_paginated_entries($pageIndex = 1, $pageSize = 10) {
        $this->db->select("*");
        $this->db->order_by("ModifyDate", "desc");
        $this->db->limit($pageSize, ($pageIndex - 1) * $pageSize);

        $query = $this->db->get($this->getTableName());
        $results = $query->result();
        return $results;
    }
} 