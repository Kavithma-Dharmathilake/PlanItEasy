<?php

class Admins extends Controller
{

    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->AdminModel = $this->model('Admin');

    }

    public function index()
    {
        $currentDate = date('Y-m-d');
        $total_user_count = $this->AdminModel->countAllUsers();
        $total_eventplanner_count = $this->AdminModel->countAllEventplanners();
        $total_supplier_count = $this->AdminModel->countAllSuppliers();
        $total_completed_events = $this->AdminModel->getEventStatus('Payment Complete');

        $data = [
            'currentDate' => $currentDate,
            'total_user_count' => $total_user_count,
            'total_eventplanner_count' => $total_eventplanner_count,
            'total_supplier_count'=> $total_supplier_count,
            'total_completed_events' => $total_completed_events
        ];
        $this->view('admin/index',$data);

    }

    public function accept($id)
    {
        $request = $this->userModel->getReqById($id);

        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'contact' => $request->phone,
            'password' => $request->password,
            'role' => $request->role,
            'bname' => $request->bname,
            'bno' => $request->bno,
            'nic' => $request->nic,
            'address' => $request->address,
            'stype' => $request->stype,

        ];
        if ($this->userModel->addUser($data)) {
            redirect('admin/user');
        } else {
            die('something went wrong');
        }

    }

    public function user()
    {

        $data = $this->userModel->getAllUsers();

        $this->view('admin/user', $data);

    }


    public function edituser($id)
    {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $result = $this->userModel->getUserById($id);
            $data = [
                'id' => $result->id,
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'contact' => trim($_POST['contact']),
                'address' => trim($_POST['address']),
                'bname' => trim($_POST['bname']),
                'bno' => trim($_POST['bno']),
                'nic' => trim($_POST['nic']),

            ];


            if (true) {

                if ($this->userModel->edituser($data)) {

                    redirect('admin/user');

                } else {
                    die('Something went wrong');
                }

            }
        } else {
            $result = $this->userModel->getUserById($id);
            $data = [
                'id' => $result->id,
                'name' => $result->name,
                'email' => $result->email,
                'phone' => $result->contact,
                'bname' => $result->bname,
                'address' => $result->address,
                'role' => $result->role,
                'bno' => $result->bno,
                'nic' => $result->nic,
                'name_err' => '',
                'email_err' => '',
                'nic_err' => '',
                'phone_err' => '',
                'address_err' => '',
                'bname_err' => '',
                'bno_err' => ''


            ];
            $this->view('admin/edituser', $data);
        }

    }

    public function deleteuser($id)
    {
        if ($this->userModel->deleteUser($id)) {
            redirect('admin/user');
        } else {
            die("something went wrong");
        }

    }





    public function analytics()
    {
        $this->view('admin/analytics');

    }

    public function messages()
    {
        $this->view('admin/messages');

    }

    public function newsupplier()
    {
        $this->view('admin/newsupplier');

    }


    public function suppliers()
    {
        $this->view('admin/suppliers');

    }

    public function eventplanners()
    {
        $this->view('admin/eventplanners');

    }


    public function userreq()
    {

        $data = $this->userModel->getAllReq();
        $this->view('admin/userreq', $data);
    }





    public function inquiry()
    {
        $this->view('admin/inquiry');
    }

    public function feedback()
    {
        $this->view('admin/feedback');
    }






}


?>