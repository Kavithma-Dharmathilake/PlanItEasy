<?php

class Eventplanners extends Controller
{

    public function __construct()
    {
        
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->userModel = $this->model('Package');
        $this->plannerModel = $this->model('EventPlanner');
        $this->CustomerModel = $this->model('Customer');
    }

    public function index()
    {
        $this->view('eventplanners/index');
    }

    public function packages()
    {

        $data = $this->userModel->getAllEvents();
        $this->view('eventplanners/packages', $data);
    }

    public function updatepackage($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $file_path = '';
            $destination = '';

            if ($_FILES['img']['error'] === UPLOAD_ERR_OK) {
                $file_name = $_FILES['img']['name'];
                $file_tmp = $_FILES['img']['tmp_name'];

                $upload_dir = "uploads/events"; // Create an 'uploads' directory in your project folder

                // Move the uploaded file to the desired location
                $destination = $upload_dir . '/' . $file_name;


                if (move_uploaded_file($file_tmp, $destination)) {
                    $file_path = $destination;


                } else {
                    $data['file_err'] = 'File upload failed';
                }
            }

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $result = $this->userModel->getUserById($id);

            $data = [
                'id' => $result->id,
                'name' => trim($_POST['name']),
                'type' => trim($_POST['type']),
                'price' => trim($_POST['price']),
                'description' => trim($_POST['description']),
                'img' => $destination,
            ];

            if (!empty($data['name']) && !empty($data['price']) && !empty($data['description']) && !empty($data['type'])) {


                if ($this->userModel->edituser($data)) {
                    redirect('eventplanners/packages');
                } else {
                    die('Something went wrong');
                }

            }


        } else {
            $result = $this->userModel->getUserById($id);
            $data = [
                'id' => $result->id,
                'name' => $result->name,
                'type' => $result->type,
                'price' => $result->price,
                'description' => $result->description,
                'img' => $result->img
            ];
            $this->view('eventplanners/updatepackage', $data);
        }
    }

    public function deleteuser($id)
    {




        if ($this->userModel->deleteUser($id)) {
            redirect('eventplanners/packages');
        } else {
            die("something went wrong");
        }

    }

    public function createbudget()
    {



        $this->view('eventplanners/createbudget');
        

    }


    public function eventRequest()
    {
        $quote = $this->plannerModel->getEventQuote();
        $data = [
            'quote' => $quote
        ];

        $this->view('eventplanners/eventRequest', $data);

    }

    public function quoteReq()
    {


        $this->view('eventplanners/quoteReq');

    }

    public function supplierReq()
    {

        $this->view('eventplanners/supplierReq');

    }

    public function budget()
    {

        $this->view('eventplanners/budget');

    }

    public function calendar()
    {

        $this->view('eventplanners/calendar');

    }

    public function profile()
    {

        $this->view('eventplanners/profile');

    }

    public function messages()
    {

        $this->view('eventplanners/messages');

    }

    public function inquiry()
    {

        $this->view('eventplanners/inquiry');

    }


    public function addNewPackage()
    {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($_FILES['img']['error'] === UPLOAD_ERR_OK) {
                $file_name = $_FILES['img']['name'];
                $file_tmp = $_FILES['img']['tmp_name'];

                $upload_dir = "uploads/events/"; // Create an 'uploads' directory in your project folder

                // Move the uploaded file to the desired location
                $destination = $upload_dir . $file_name;

                if (move_uploaded_file($file_tmp, $destination)) {
                    $file_path = $destination;

                } else {
                    $data['file_err'] = 'File upload failed';
                }
            }

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'type' => trim($_POST['type']),
                'price' => trim($_POST['price']),
                'description' => trim($_POST['description']),
                'name_err' => '',
                'type_err' => '',
                'price_err' => '',
                'description_err' => '',
            ];

            if (empty($data['name'])) {
                $data['name_err'] = 'Name is required';
            }
            if (empty($data['price'])) {
                $data['price_err'] = 'Price is required';
            } else if (!is_numeric($data['price'])) {
                $data['price_err'] = 'Price must be a valid number';
            } else if ($data['price'] < 0) {
                $data['price_err'] = 'Price cannot be a negative number';
            } else if ($data['price'] > 10000000) {
                $data['price_err'] = 'Price cannot be more than 10,000,000';
            }
            if (empty($data['type'])) {
                $data['type_err'] = 'Type is required';
            }
            if (empty($data['description'])) {
                $data['description_err'] = 'Description is required';
            }
            if (empty($data['name_error']) && empty($data['price_err']) && empty($data['description_err']) && empty($data['type_err'])) {

                $package = [
                    'name' => $data['name'],
                    'type' => $data['type'],
                    'price' => $data['price'],
                    'description' => $data['description'],
                    'img' => $file_path
                ];
                if ($this->userModel->eventnew($package)) {
                    echo '<script> prompt("Package Added Succfully")</script>';
                    redirect('eventplanners/packages');
                } else {
                    $this->view('eventplanners/addNewpackage', $data);
                }

            } else {
                $this->view('eventplanners/addNewpackage', $data);
            }

        } else {
            $data = [
                'name' => '',
                'type' => '',
                'price' => '',
                'description' => '',
                'name_err' => '',
                'type_err' => '',
                'price_err' => '',
                'description_err' => '',
            ];
            $this->view('eventplanners/addNewpackage', $data);



        }
    }


    public function onerequest($id)
    {

        $quote = $this->plannerModel->getOnePlannerQuote($id);
        $customer = $this->plannerModel->getCustomerById($quote->idcustomer);
        $reception = null;
        $photography = null;
        $cake = null;
        $catering = null;
        $dj = null;
        $music = null;
        $dancing = null;
        $decoration = null;


        if($quote->reception != -1){
            $reception = $this->plannerModel->getOneReceptionQuote($quote->reception);
        }

        if($quote->photography != -1){
            $photography = $this->plannerModel->getOnePhotographyQuote($quote->photography);
        }

        if($quote->cake != -1){
            $cake = $this->plannerModel->getOneCakeQuote($quote->cake);
        }

        if($quote->decoration != -1){
            $decoration = $this->plannerModel->getOneDecorationQuote($quote->decoration);
        }

        if($quote->music != -1){
            $music = $this->plannerModel->getOneMusicQuote($quote->music);
        }

        if($quote->catering != -1){
            $catering = $this->plannerModel->getOneCateringQuote($quote->catering);
        }
        if($quote->dancing != -1){
            $dancing = $this->plannerModel->getOneDancingQuote($quote->dancing);
        }
        if($quote->dj != -1){
            $dj = $this->plannerModel->getOneDjQuote($quote->dj);
        }


        $data =[
            'quote' => $quote,
            'photography'=>$photography,
            'catering'=>$catering,
            'decoration'=>$decoration,
            'cake'=>$cake,
            'dj'=>$dj,
            'dancing'=>$dancing,
            'music'=>$music,
            'reception'=>$reception,
            'customer'=>$customer
        ];

        $this->view('eventplanners/onerequest', $data);

    }

    public function suppliers($type, $id)
    {
        $quote = $this->plannerModel->getOnePlannerQuote($id);
        $request = $this->plannerModel->getEvent($quote->rid);
        $supplier = $this->plannerModel->getSupplier($type);
    
        $data = [
            'type' => $type,
            'request' =>$request,
            'supplier' =>$supplier
        ];
        $this->view('eventplanners/supplier', $data);
    }

    public function recivedquote()
    {

        $this->view('eventplanners/recivedquote');

    }









}


?>