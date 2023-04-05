<?php
defined('BASEPATH') or exit('No direct script access allowed');

class item_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('p_item');
        if ($id != null) {
            $this->db->where('item_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'name' => $post['item_name'],
        ];
        $this->db->insert('p_item', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['item_name'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('item_id', $post['id']);
        $this->db->update('p_item', $params);
    }

    public function del($id)
    {
        $this->db->where('item_id', $id);
        $this->db->delete('p_item');
    }
}
