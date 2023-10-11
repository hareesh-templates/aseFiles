<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery_model extends CI_Model{
  
    function getRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('gallery_images', array('gallery_id' => $id));
            return $query->result_array();
        }else{
            $query = $this->db->query('SELECT *,(SELECT gallery_images.image FROM gallery_images WHERE gallery_images.gallery_id=gallery.id ORDER BY gallery_images.id asc LIMIT 1)as default_image FROM gallery;');
            return $query->result_array();
        }
    }
    
     public function enquiry_form($data = array()) {
        $insert = $this->db->insert('enquiry_form', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    public function enquiry_form_list() {
        $query = $this->db->get_where('enquiry_form');
        return $query->result_array();
    }
    
}