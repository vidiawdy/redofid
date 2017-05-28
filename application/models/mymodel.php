<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mymodel extends CI_Model
{
	public function GetAdmin($username)
	{
		$data=$this->db->select('*');
			$this->db->where('username', $username);
            $this->db->from('admin');
			return $this->db->get()->result_array();
	}
    public function readData($where=""){
        $data_db = $this->db->query('select * from barang '.$where);
        return $data_db->result_array();
    }
    public function all(){
        $data_db = $this->db->query('select * from barang where kategori="*"');
        return $data_db->result_array();
    }
    public function get_barang_by_category($kategori){
        $this->db->where('kategori',$kategori);
        $data_db = $this->db->get('barang');
        //$data_db = $this->db->query('select * from barang where kategori="$kategori"');
        return $data_db->result_array();
    }
    public function ReadUser($username){
            $data=$this->db->select('*');
			$this->db->where('username', $username);
            $this->db->from('user');
			return $this->db->get()->result_array();
    }
    public function getMenu(){
        $query=$this->db->get("barang");
        return $query->result_array();
    }
    public function InsertData($user, $data){
        $res=$this->db->insert('user', $data);
        return $res;
    }
    public function UpdateData($tabelName, $data, $where){
         $res=$this->db->update($tabelName, $data, $where);
        return $res;
    }
    public function DeleteData($tabelName,$where){
        $res=$this->db->delete($tabelName,$where);
        return $res;
    }
    public function Successc($username, $password){
            $data=$this->db->select('*');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->from('user');

			$query = $this->db->get();
            //echo var_dump($query->num_rows());
			if ($query->num_rows() == 1) {
			return true;
			}
			else{
			return false;
			}
    }
    public function Successco()
    {
        $data=$this->db->select('*');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->from('user');

			$query = $this->db->get();
            //echo var_dump($query->num_rows());
			if ($query->num_rows() == 1) {
			return true;
			}
			else{
			return false;
			}
        return $this->db->get_where($table, $where);
    }
    //ini sama kaya login
    public function Successa($username, $password){
        $data=$this->db->select('*');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->from('admin');

			$query = $this->db->get();
            //echo var_dump($query->num_rows());
			if ($query->num_rows() == 1) {
			return true;
			}
			else{
			return false;
			}
    }
        function successf($table, $data)
    {
        $this->db->insert($table, $data); 
        
    }
    function checkuser($username){
        $sql="select * from user where username= '$username'";
        $query = $this->db->query($sql);
        if($query->num_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }
}
 ?>
 