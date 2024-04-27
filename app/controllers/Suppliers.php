<?php


class Suppliers extends Controller
{

    public function __construct()
    {
        $this->supplierModel = $this->model('Supplier');
    }

    public function index()
    {
        $userName = $_SESSION['user_name'];
        $countProduct = $this->supplierModel->countAllProducts();
        $countQuote = $this->supplierModel->countQuotations();
        $quotePerMonth = $this->supplierModel->countQuotationsPerMonth();
        
        // var_dump[$quotePerMonth];
        //var_dump[$countQuote];

        $data = [
            'userName' => $userName,
            'countProduct' => $countProduct,
            'countQuote' => $countQuote,
            'quotePerMonth' => $quotePerMonth
        ];
        $this->view('suppliers/index', $data);
    }

    public function profile()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('suppliers/profile', $data);
    }

    public function addNewProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'name' => trim($_POST['name']),
                'price' => trim($_POST['price']),
                'description' => trim($_POST['description']),
                'services' => trim($_POST['services'])
            ];


            if (!empty($data['name'])) {


                $package = [
                    'name' => $data['name'],
                    'price' => $data['price'],
                    'description' => $data['description'],
                    'services' => $data['services'],
                ];


                if ($this->supplierModel->addNewPackage($package)) {
                    echo '<script> prompt("Package Added Succfully")</script>';
                    redirect('suppliers/products');
                } else {
                    $this->view('suppliers/addNewProduct', $data);
                }
            } else {
                $this->view('suppliers/addNewProduct', $data);
            }
        } else {
            $data = [
                'name' => '',
                'price' => '',
                'description' => ''
            ];
            $this->view('suppliers/addNewProduct', $data);
        }
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
                'price' => trim($_POST['price']),
                'description' => trim($_POST['description']),
                'img' => $destination,
            ];

            if (!empty($data['name']) && !empty($data['price'])) {


                if ($this->userModel->edituser($data)) {
                    redirect('suppliers/products');
                } else {
                    die('Something went wrong');
                }
            }
        } else {
            $result = $this->userModel->getUserById($id);
            $data = [
                'id' => $result->id,
                'name' => $result->name,
                'price' => $result->price,
                'description' => $result->description,
                'img' => $result->img
            ];
            $this->view('suppliers/updateproducts', $data);
        }
    }

    public function portfolio()
    {

        $data = [];
        $this->view('suppliers/portfolio', $data);
    }

    public function packages()
    {

        $data =  $this->supplierModel->getAllPackages();
        $this->view('suppliers/packages', $data);
    }

    public function quotationRequest()
    {
        $result = $this->supplierModel->getAllReq();

        $data = [
            'request' => $result

        ];
        $this->view('suppliers/quotationRequest', $data);
        
    }

    public function oneRequest($id)
    {
        $result = $this->supplierModel->getOneReq($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $sid = $result->id;
            $accept = isset($_POST['accept']) ? 'Accept' : null;
            $decline = isset($_POST['decline']) ? 'Decline' : null;


            $data2 = [
                'id' => $sid,
                'price' => trim($_POST['r_price']),
                'remark' => trim($_POST['remark'])
            ];

            if ($accept != null) {

                if ($this->supplierModel->acceptQuote($data2)) {
                    echo '<script> prompt("Quotation Sent  Successfully") </script>';
                    redirect('suppliers/quotationRequest');
                } else {
                    echo '<script> prompt("Something Went Wrong") </script>';
                    redirect('suppliers/quotationRequest');
                }
            } else {
                if ($this->supplierModel->declineQuote($data2)) {
                    echo '<script> prompt("Quotation Declined") </script>';
                    redirect('suppliers/quotationRequest');
                } else {
                    echo '<script> prompt("Something Went Wrong") </script>';
                    redirect('suppliers/quotationRequest');
                }
            }
        } else {
            $result = $this->supplierModel->getOneReq($id);
            $event = $this->supplierModel->getEvent($result->eid);
            $customer = $this->supplierModel->getCustomer($event->idcustomer);
            $available = $this->supplierModel->chekDate($event->date);

            $data = [
                'request' => $result,
                'customer' => $customer,
                'event' => $event,
                'available' => $available

            ];
            $this->view('suppliers/oneRequest', $data);
        }
    }

    public function sentRequests()
    {

        $data = $this->supplierModel->getSentReq();
        $this->view('suppliers/sentRequests', $data);
    }

    public function Calendar()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'event' => trim($_POST['event']),
                'date' => trim($_POST['date']),
            ];

            if (!empty($data['event'])) {

                $available = [
                    'event' => $data['event'],
                    'date' => $data['date'],
                ];

                if ($this->supplierModel->addAvailability($available)) {
                    echo '<script> alert("Clicked!");
                    window.location = window.suppliers/calendar;
                    </script>';
                    // redirect('suppliers/calendar');
                } else {
                    $this->view('suppliers/calendar', $data);
                }
            } else {
                $this->view('suppliers/calendar', $data);
            }
        }else{
        $this->view('suppliers/calendar');
        }
    }

    public function getCalendarEvents()
    {

        $result = $this->supplierModel->getCalander();
        echo json_encode($result);
    }

    public function getHoliday()
    {

        $result = $this->supplierModel->getHoliday();
        echo json_encode($result);
    }

    public function message($qid)
    {

        $result = $this->supplierModel->getOneReq($qid);
        $event = $this->supplierModel->getEvent($result->eid);
        $customer = $this->supplierModel->getCustomer($event->idcustomer);
        $messages = $this->supplierModel->getMessages($qid);
        
        $data = [
            'request' => $result,
            'customer' => $customer,
            'event' => $event,
            'messages' => $messages

        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $content = $_POST['content'];
            $data = [
                'content' => $content,
                'qid' => $qid,
                'cuid' => $event->id,
            ];

            $this->supplierModel->sendMessage($data);
            header('location: ' . URLROOT . '/suppliers/message/' . $qid);
        }


        $this->view('suppliers/message', $data);
    }

    public function acceptedQuotes()
    {
        $result = $this->supplierModel->getAcceptedQuotations();
        $data = [
            'request' => $result
        ];
        $this->view('suppliers/quotationRequest', $data);
    }

    public function pendingQuotes()
    {
        $result = $this->supplierModel->getPendingQuotations();
        $data = [
            'request' => $result
        ];
        $this->view('suppliers/quotationRequest', $data);
    }

    public function declinedQuotes()
    {
        $result = $this->supplierModel->getDeclinedQuotations();
        $data = [
            'request' => $result
        ];
        $this->view('suppliers/quotationRequest', $data);
    }

    public function paidQuotes()
    {
        $result = $this->supplierModel->getPaidQuotations();
        $data = [
            'request' => $result
        ];
        $this->view('suppliers/quotationRequest', $data);
    }

}
