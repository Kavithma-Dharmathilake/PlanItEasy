<?php


class Customers extends Controller
{

    public function __construct()
    {

        $this->userModel = $this->model('Quoate');

    }

    public function index()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customers/index', $data);
    }

    public function payments()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customers/payments', $data);
    }

    public function message()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customers/message', $data);
    }

    public function complete()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customers/complete', $data);
    }

    public function ongoing()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customers/ongoing', $data);
    }

    public function quotation()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customers/quotation', $data);
    }

    public function profile()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customers/profile', $data);
    }

    public function viewquote()
    {
        $data = $this->userModel->getAllEvents();
        $this->view('customers/viewquote', $data);
       
    }

    public function addquoate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name' => trim($_POST['name']),
                'date' => trim($_POST['date']),
                'stime' => trim($_POST['stime']),
                'etime' => trim($_POST['etime']),
                'remarks' => trim($_POST['remarks']),
                'name_err' => '',
                'date_err' => '',
                'stime_err' => '',
                'etime_err' => '',
                'remarks_err' =>''
            ];

            if (empty($data['name'])) {
                $data['name_err'] = 'Name is required';
            }
            if (empty($data['date'])) 
                $data['date_err'] = 'Date is required';
            if (empty($data['stime'])) {
                $data['stime_err'] = 'Time is required';
            }
            if (empty($data['etime'])) {
                $data['etime_err'] = 'Time is required';
            }
            if (empty($data['name_err']) && empty($data['date_err']) && empty($data['stime_err']) && empty($data['etime_err']) ) {
             $package = [
                    'name' => $data['name'],
                    'stime' => $data['stime'],
                    'etime'=>$data['etime'],
                    'remarks'=>$data['remarks'],
                    'date'=>$data['date'],
                    'status'=>'ongoing',
                ];
                if ($this->userModel->eventnew($package)) {
                    echo '<script> prompt("Quotation Added Succfully")</script>';
                    redirect('customers/viewquote');
                } else {
                    $this->view('customers/addquoate', $data);
                }

            } else {
                $this->view('customers/addquoate', $data);
            }

        } else {
            $data = [
                
                'name' => '',
                'date' => '',
                'stime' => '',
                'etime' => '',
                'remarks' => '',
                'name_err' => '',
                'date_err' => '',
                'stime_err' => '',
                'etime_err' => '',
                'remarks_err' => '',
            ];
            $this->view('customers/addquoate', $data);



        }
    }


    public function editquote($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

          
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $result = $this->userModel->getUserById($id);

            $data = [
                'id' => $result->id,
                'name' => trim($_POST['name']),
                'date' => trim($_POST['date']),
                'stime' => trim($_POST['stime']),
                'etime' => trim($_POST['etime']),
                'remarks' => trim($_POST['remarks']),
             
            ];

            if (!empty($data['name']) && !empty($data['date']) && !empty($data['stime']) && !empty($data['etime'])) {


                if ($this->userModel->edituser($data)) {
                    redirect('customers/viewquote');
                } else {
                    die('Something went wrong');
                }

            }


        } else {
            $result = $this->userModel->getUserById($id);
            $data = [
                'id' => $result->id,
                'name' => $result->name,
                'date' => $result->date,
                'stime'=>$result->stime,
                'etime'=>$result->etime,
                'remarks'=>$result->remarks
            ];
            $this->view('customers/editquote', $data);
        }
    }

    public function deleteuser($id)
    {




        if ($this->userModel->deleteUser($id)) {
            redirect('customers/viewquote');
        } else {
            die("something went wrong");
        }

    }

    }


    


?>