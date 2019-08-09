<?php 
class Users extends CI_controller{

    public function __construct()
	{
	
	parent::__construct();
	$this->load->model('Users_model');
	}
 
    function create(){
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');

        if($this->form_validation->run()==false){
        $this->load->view('create');

        }
        else{
           
            $formArray=array();
            $formArray['name']=$this->input->post('name');
            $formArray['email']=$this->input->post('email');
             $formArray['address']=$this->input->post('address');
             $formArray['created_at']=date('Y-m-d');
              $this->Users_model->create_user($formArray);
             $this->session->set_flashdata('success','Record Added Successfully');
             redirect('http://localhost:8888/CodeIgniter-new/index.php/users/index');

        }

    }


    function index(){
        $users= $this->Users_model->all_user();
        $data=array();
        $data['users']=$users;
        $this->load->view('list',$data);
        }

        function edit($id){

           
            $users=$this->Users_model->get_user($id);
            $data=array();
            $data['users']=$users;
            //print_r($data);

            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('address','Address','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');

            if($this->form_validation->run()==false){

                    $this->load->view('edit',$data);

            }
            else{
           
                //echo $id;
            $formArray=array();
            $formArray['name']=$this->input->post('name');
            $formArray['email']=$this->input->post('email');
             $formArray['address']=$this->input->post('address');
             
              $this->Users_model->update_user($id,$formArray);
             $this->session->set_flashdata('success','Record Updated Successfully');
             redirect('http://localhost:8888/CodeIgniter-new/index.php/users/index');

        }





        }
        function delete($id){

             $this->Users_model->delete_user($id);
             $this->session->set_flashdata('success','Record Deleted Successfully');
             redirect('http://localhost:8888/CodeIgniter-new/index.php/users/index');


        }
}
?>