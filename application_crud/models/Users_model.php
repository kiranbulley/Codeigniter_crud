<?php 

class Users_model extends CI_model{


    function create_user($formArray){

        $this->db->insert('users',$formArray); //insert into users table
        if($this->db->affected_rows()>0){
                 return true;
             }
             else{
                 return false;
             }
    }

     function all_user(){

        return $users=$this->db->get('users')->result_array(); //Get all data
    }

    function get_user($id){

        $this->db->where('id',$id);
        return $user=$this->db->get('users')->row_array();
    }


    function update_user($id,$formArray){
        $this->db->where('id',$id);
        $this->db->update('users',$formArray);

    }

    function delete_user($id){

        $this->db->where('id',$id);
        $this->db->delete('users');

    }
}
?>