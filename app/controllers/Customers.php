<?php


class Customers extends Controller
{

    public function __construct()
    {


        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->customerModel = $this->model('Customer');
        $this->supplierModel = $this->model('Supplier');
        $this->userModel = $this->model('User');
    }

    public function index()
    {


        $events = $this->customerModel->getAllEvents($_SESSION['user_id']);

        $data = [
            'title' => 'Welcome',
            'events' => $events
        ];

        $this->view('customers/index', $data);
    }

    public function events()
    {

        $events = $this->customerModel->getAllEvents($_SESSION['user_id']);

        $data = [
            'title' => 'Welcome',
            'events' => $events
        ];

        $this->view('customers/events', $data);
    }

    public function newevent()
    {

        $data = [
            'title' => 'Welcome'
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_EVENT = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'type' => trim($_POST['type']),
                'min' => trim($_POST['minbudget']),
                'max' => trim($_POST['maxbudget']),
                'date' => trim($_POST['date']),
                'start' => trim($_POST['start']),
                'end' => trim($_POST['end']),
                'loc' => trim($_POST['location']),
                'date' => trim($_POST['date']),
                'count' => trim($_POST['count']),
                'theme' => trim($_POST['theme']),
                'estatus' => 'ongoing',
                'pstatus' => 'pending',
                'cusid' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => ''
            ];


            $this->customerModel->newevent($data);
        }

        $this->view('customers/newevent', $data);
    }

    public function oneevent($id)
    {


        $request = $this->customerModel->getEventById($id);

        $data = [
            'request' => $request,
        ];



        $this->view('customers/oneevent', $data);
    }

    public function supplier($id, $type = "none")
    {


        $request = $this->customerModel->getEventById($id);
        $photo = $this->supplierModel->getPhotographers('Photographer');
        $cater = $this->supplierModel->getPhotographers('Catering Service');
        $reception = $this->supplierModel->getPhotographers('Reception hall');
        $deco = $this->supplierModel->getPhotographers('Decorations');
        $cake = $this->supplierModel->getPhotographers('Cake Service');

        $data1 = [
            'request' => $request,
            'supplier' => $photo,
            'type' => "photography",
        ];

        $data2 = [
            'request' => $request,
            'supplier' => $cater,
            'type' => "catering"
        ];

        $data3 = [
            'request' => $request,
            'supplier' => $reception,
            'type' => "reception"
        ];
        $data4 = [
            'request' => $request,
            'supplier' => $deco,
            'type' => "decoration"
        ];

        $data5 = [
            'request' => $request,
            'supplier' => $cake,
            'type' => "cake"
        ];

        if ($type == "none") {
            $this->view('customers/supplier', $data1);
        } else if ($type == "photography") {
            $this->view('customers/gallery', $data1);
        } else if ($type == "catering") {
            $this->view('customers/gallery', $data2);
        } else if ($type == "reception") {
            $this->view('customers/gallery', $data3);
        } else if ($type == "decoration") {
            $this->view('customers/gallery', $data4);
        } else if ($type == "cake") {
            $this->view('customers/gallery', $data5);
        }
    }

    public function photography($id)
    {
        $request = $this->customerModel->getEventById($id);

        $photo = $this->supplierModel->getPhotographers('Photographer');
        $data1 = [
            'request' => $request,
            'supplier' => $photo,
            'type' => "photography",
        ];
        $this->view('customers/gallery', $data1);
    }

    public function caterings($id)
    {
        $request = $this->customerModel->getEventById($id);
        $cater = $this->supplierModel->getPhotographers('Catering Service');

        $data2 = [
            'request' => $request,
            'supplier' => $cater,
            'type' => "catering"
        ];
        $this->view('customers/gallery', $data2);
    }

    public function reception($id)
    {
        $request = $this->customerModel->getEventById($id);
        $reception = $this->supplierModel->getPhotographers('Reception hall');

        $data3 = [
            'request' => $request,
            'supplier' => $reception,
            'type' => "reception"
        ];
        $this->view('customers/gallery', $data3);
    }

    public function portfolio($sid, $eid)
    {
        $request = $this->customerModel->getEventById($eid);
        $user = $this->userModel->getUserById($sid);

        $data = [
            'request' => $request,
            'user' => $user,

        ];
        $this->view('customers/portfolio', $data);
    }


    public function catering()
    {


        $this->view('customers/catering-quote');
    }


    public function receptions()
    {
        $this->view('customers/reception-quote');
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



    public function sendquote($sid, $eid)
    {
        $request = $this->customerModel->getEventById($eid);
        $supplier = $this->supplierModel->getOneSupplier($sid);

        $type = $supplier->stype;

        $data = [
            'request' => $request,
            'supplier' => $supplier,
        ];



        if ($type == "none") {
            $this->view('customers/index', $data);
        } else if ($type == "Photographer") {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $package = $_POST['type'];
                $stime = $_POST['start'];
                $etime = $_POST['end'];
                $remark = $_POST['remark'];

                $quote = [
                    'package' => $package,
                    'stime' => $stime,
                    'etime' => $etime,
                    'remark' => $remark,
                    'rid' => $request->id,
                    'sid' => $supplier->id
                ];



                if ($this->customerModel->RequestPhotoQuote($quote)) {
                    echo '<script> alert("Quotation Added Succfully")</script>';
                } else {
                    $this->view('customers/gallery', $data);
                }
            } else {
                $this->view('customers/photo-quote', $data);
            }
        } else if ($type == "catering") {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $package = $_POST['type'];
                $stime = $_POST['start'];
                $etime = $_POST['end'];
                $remark = $_POST['remark'];

                $quote = [
                    'package' => $package,
                    'stime' => $stime,
                    'etime' => $etime,
                    'remark' => $remark,
                    'rid' => $request->id,
                    'sid' => $supplier->id
                ];



                if ($this->customerModel->RequestPhotoQuote($quote)) {
                    echo '<script> alert("Quotation Added Succfully")</script>';
                } else {
                    $this->view('customers/gallery', $data);
                }
            } else {
                $this->view('customers/reception-quote', $data);
            }
        } else if ($type == "reception") {
            $this->view('customers/gallery', $data);
        } else if ($type == "decoration") {
            $this->view('customers/gallery', $data);
        } else if ($type == "cake") {
            $this->view('customers/gallery', $data);
        }
    }


    public function quotation1()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customers/cus_quo(1)', $data);
    }

    public function quotation2()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customers/cus_quo(2)', $data);
    }

    public function quotation3()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customers/cus_quo(3)', $data);
    }

    public function quotation4()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customers/cus_quo(4)', $data);
    }

    public function quotation5()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customers/cus_quo(5)', $data);
    }


    public function quotation6()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customers/cus_quo(6)', $data);
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
                'remarks_err' => ''
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
            if (empty($data['name_err']) && empty($data['date_err']) && empty($data['stime_err']) && empty($data['etime_err'])) {
                $package = [
                    'name' => $data['name'],
                    'stime' => $data['stime'],
                    'etime' => $data['etime'],
                    'remarks' => $data['remarks'],
                    'date' => $data['date'],
                    'status' => 'ongoing',
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
                'stime' => $result->stime,
                'etime' => $result->etime,
                'remarks' => $result->remarks
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


    public function quotations($id)
    {

        $quote = $this->customerModel->getAllQuote($id);

        $data = [
            'quote' => $quote,
        ];

        $this->view('customers/allquote', $data);
    }

    public function getOneSupplier($id)
    {
        $supplier = $this->supplierModel->getOneSupplier($id);
        return $supplier->bname;
    }
}
