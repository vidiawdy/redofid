<?php
//if (!defined('BASEPATH')) OR exit('No direct script access allowed');
//used
class Welcome extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('mymodel');
        $this->load->helper('url');
    }
    //used
	public function index()
	{
        $barang=$this->mymodel->getMenu();
		$this->load->view('bootstrap', array('barang'=>$barang));
        
	}
    //used
	public function user()
        {
                $data['err_message'] = "";
                $this->load->view('loginc', $data);
        }
    //used
    public function admin(){
            $data['err_message'] = "";
            $this->load->view('logina', $data);
        }
    //used
        public function about(){
            $this->load->view('about');
        }
    //used
        public function contact(){
                $this->load->view('contact');
            }
    //ask
            public function indexa()
        {
            $this->mymodel->GetAdmin("admin", $where);
        }       
    //used
        public function readtabel(){
            $data = $this->mymodel->readData();
            $this->load->view('tabel',array('data' => $data));
           }
    //used
        public function tambahdata(){
		$this->load->view('formtambah');
	}
    //used
        public function do_insert(){
		$path=substr($this->do_upload(),1);
		$kode_barang = $_POST['kode_barang'];
		$nama_barang = $_POST['nama_barang'];
		$jumlah = $_POST['jumlah'];
		$harga = $_POST['harga'];
		$kategori = $_POST['kategori'];
		$data_insert = array(
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'jumlah' => $jumlah,
			'harga' => $harga,
            'kategori' => $kategori,
			'path' => $path,
			);
			$res = $this->db->insert('barang',$data_insert);
			if($res>=1){
				redirect('Welcome/loginn');
			}else{
				$this->load->view('tabel');
			}
	}
    //used
        public function do_upload(){
        $type = explode('.', $_FILES["pic"]["name"]);
		$type = $type[count($type)-1];
		$url = "./images/".uniqid(rand()).".".$type;
		if(in_array($type, array("jpg","jpeg","gif","png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if (move_uploaded_file($_FILES["pic"]["tmp_name"],$url));
					return $url;
		return "";
	}
    //used
    //klik edit data masuk kesini sambil ng get valuenya dr database
        function edit_data($kode_barang){
		$brg = $this->mymodel->readData("where kode_barang = '$kode_barang'");
		$data = array(
			"kode_barang" => $brg[0]['kode_barang'],
			"nama_barang" => $brg[0]['nama_barang'],
			"jumlah" => $brg[0]['jumlah'],
			"harga" => $brg[0]['harga'],
            "kategori" => $brg[0]['kategori'],
			);
		$this->load->view('formedit',$data);
	}
    //used
        function do_delete($kode_barang){
            $where = array('kode_barang' => $kode_barang);
            $res = $this->mymodel->DeleteData('barang',$where);
            if ($res>=1){
                redirect('Welcome/loginn');
                //echo "<h2>Delete data suksesss yeay</h2>";
            }
        }
    //used
    //ini untuk fungsi updatenya
        public function do_update(){
            $kode_barang = $_POST['kode_barang'];
            $nama_barang = $_POST['nama_barang'];
            $jumlah = $_POST['jumlah'];
            $harga = $_POST['harga'];
            $kategori = $_POST['kategori'];
            $data_update = array(
			'nama_barang' => $nama_barang,
			'jumlah' => $jumlah,
			'harga' => $harga,
            'kategori' => $kategori,
			);
			$where = array('kode_barang' => $kode_barang);
			$res = $this->mymodel->UpdateData('barang',$data_update,$where);
			if($res>=1){
                //echo "berhasil";
				redirect('Welcome/readtabel');
			}else{
				redirect('Welcome/edit_data');
			}
	}
    //used
    //fungsi untuk login admin
    public function login(){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $read = $this->mymodel->GetAdmin($username);
                foreach($read as $r){
                        $user = $r['username'];
                        $pass = $r['password'];
                }
            if($username==$user){
                if($password==$pass){
                   $data = array(
                        'username'=> $username,
                        'password' => $password,
                   );
                   $this->session->set_userdata($data);
                   redirect('welcome/loginn');
               }
            }else{
                $this->load->view('logina');
            }
        }
    //used
    //tampilan setelah admin login
    function loginn(){
        $barang=$this->mymodel->getMenu();
        $this->load->view('halamanadmin', array('barang'=>$barang));
    }
    //used
        function all(){
            $this->mymodel->all();
        }
    //used
        function hijab(){
            $barang = $this->mymodel->get_barang_by_category('hijab');
		    $this->load->view('bootstrap', array('barang'=>$barang));
        }
    //used
        function scarf(){
            $barang = $this->mymodel->get_barang_by_category('scarf');
		    $this->load->view('bootstrap', array('barang'=>$barang));
        }
    //used
    //fungsi untuk ngecek apaka uname dan psswd
	   function readc(){
           $username=$this->input->post('username');
           $password=$this->input->post('password');
           $read=$this->mymodel->ReadUser($username);
           foreach($read as $r){
               $fullname=$r['fullname'];
               $alamat=$r['alamat'];
               $nohp=$r['nohp'];
               $email=$r['email'];
               $user = $r['username'];
               $pass = $r['password'];
           
           if ($username==$user)
           {
               if($password==$pass){
                   $data = array(
                    'username'=> $username,
                    'fullname' => $fullname,
                    'alamat' => $alamat,
                       'nohp' => $nohp,
                       'email' => $email,
                       'password' => $password,

                   );
                   $this->session->set_userdata($data);
                   redirect('welcome/readcc');                 
               }
               
           }
           else 
           {
               $this->load->view('loginc');
           }
       }
       }
    public function readcc(){
        $barang=$this->mymodel->getMenu();
        $this->load->view('bootstrap', array('barang'=>$barang));
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/welcome'));
    }
    public function logouta(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/welcome/admin'));
    }
         function add_Data(){
            $this->load->view('form');
        }
        function add_Data_Emailchecked(){
            $this->load->view('form_emailchecked');
        }
        function check_user(){
            $username=$this->input->post('username');
            $isUser=$this->mymodel->checkuser($username);
            if($isUser==true){
                $this->session->set_userdata('username', $username);
                $this->load->view('userunchecked.php');
                //ke halaman form
            }
            else {
                redirect(base_url('index.php/Welcome/add_Data_Emailchecked'));
            }
	}
    function insert(){
            $fullname=$this->input->post('fullname');
            $email=$this->input->post('email');
            $alamat=$this->input->post('alamat');
            $nohp=$this->input->post('nohp');
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $data=array('fullname'=> $username,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'email' => $email,
            'username' => $username,
            'password' => $password);
            $this->mymodel->successf('user',$data);
            if ($data>=1){
                $this->load->view('afteregis');
            }
            else {
               $this->load->view('form');
            }
            //redirect('welcome/index');
            //tambahin ifelse
    }
    //untuk fungsi emailnya 
    //used
    function email(){        
        $sender_email="redof1234@gmail.com";
        $user_password="Redof013";
        $receiver_email="vidia.widya@yahoo.co.id";
        $subject="Order";
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $msg=$this->input->post('msg');
            $devad=$this->input->post('devad');
            $choose=$this->input->post('choose');
            $paymet=$this->input->post('paymet');
            $monum=$this->input->post('monum');
            $devar=$this->input->post('devar');
            $quantity=$this->input->post('quantity');
        $data="Nama = ".$name."<br>"."Email =".$email."<br>"."Delivery Address =".$devad."<br>"."Order =".$choose."<br>"."Payment Method =".$paymet."<br>"."Mobile Number =".$monum."<br>"."Delivery Area =".$devar."<br>"."Message =".$msg."<br>"."Quantity =".$quantity."<br>";
            
        $this->emailConfig();
        $this->email->to('vidia.widya@yahoo.co.id');
        $this->email->from('redof1234@gmail.com','vidiawdy');
        $this->email->subject('Order');
        $this->email->message($data);
        
        $mail = ($this->email->send()) ? "Sent" : "Failed" ;
        echo $this->email->print_debugger();
        //echo $mail;
        $this->load->view('contact');
    }
    function emailConfig(){
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user'] = 'redof1234@gmail.com';
        $config['smtp_pass'] = 'Redof013';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'html';
        $config['validation'] = TRUE;
        $this->load->library('email',$config);
    }
}