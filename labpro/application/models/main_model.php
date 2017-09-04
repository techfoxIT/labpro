<?php

class Main_model extends CI_Model
{
  function insert_data($data)
  {
    //insert data in testing database
    $this->db->insert("tbl_user", $data);
  }

    function insert_package_data($data)
    {
      //insert data in testing database
      $this->db->insert("tbl_package", $data);
    }
      function insert_apoi_data($data)
      {
        //insert data in testing database
        $this->db->insert("appointment", $data);
      }
  function fetch_data()
  {
    //1111111111111111111111111111
    //$query = $this->db->get("tbl_user");
    //////select * from tbl_user
    //return $query;
    //-------------------------------------------------------------------------
    //222222222222222222222222222
    $query = $this->db->query("SELECT * FROM tbl_user ORDER BY first_name ASC");
    return $query;
    //--------------------------------------------------------------------------
    //33333333333333333333333333
    //$this->db->select("id, first_name, last_name");
    //$this->db->from("tbl_user");
    //$query = $this->db->get();
    //return $query;
  }
  function fetch_data_contact()
  {
   
    $query = $this->db->query("SELECT * FROM appointment ORDER BY app_date DESC ");
    return $query;
   
  }


  function package_fetch_data()
  {
    $query = $this->db->query("SELECT * FROM tbl_package ORDER BY name ASC");
    return $query;

  }

  function test_delete_data($id)
  {
    $this->db->where("id", $id);
    $this->db->delete("tbl_user");
  }


  function package_delete_data($id)
  {
    $this->db->where("id", $id);
    $this->db->delete("tbl_package");
  }

  function fetch_single_data($id)
  {
    $this->db->where("id", $id);
    $query = $this->db->get("tbl_user");
    return $query;

  }
  function package_fetch_single_data($id)
  {
    $this->db->where("id", $id);
    $query = $this->db->get("tbl_package");
    return $query;

  }
  
  
  

}
?>
