<?php


class Suppliers extends Controller
{

    public function __construct()
    {

        if (!isLoggedIn()) {
            redirect('users/login');
        }
        $this->supplierModel = $this->model('Supplier');
    }

    public function index()
    {

        $countProduct = $this->supplierModel->countAllProducts();
        $countQuote = $this->supplierModel->countQuotations();
        

        $data = [
            'countProduct' => $countProduct,
            'countQuote' => $countQuote
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
        $user = $this->supplierModel->getUserById($_SESSION['user_id']);
        $portfolio = $this->supplierModel->getPortfolio($_SESSION['user_id']);
        $data = [
            'user' => $user,
            'portfolio' => $portfolio
        ];


        $this->view('suppliers/portfolio', $data);
    }

    public function updatePortfolio()
    {
        $user = $this->supplierModel->getUserById($_SESSION['user_id']);
        $portfolio = $this->supplierModel->getPortfolio($_SESSION['user_id']);
        $data = [
            'user' => $user,
            'portfolio' => $portfolio
        ];

        $uploadDir = 'images/uploads/';
        $pdfUploadDir = 'uploads/';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $bio = $_POST['bio'];
            $description = $_POST['description'];

            $caption = $_FILES['caption'];
            $filePaths = [];

            if ($caption['error'] === UPLOAD_ERR_OK) {
                // Get the file name
                $CaptionName = basename($caption['name']);

                // Define the target file path
                $captionFilePath = $uploadDir . $CaptionName;

                // Move the uploaded file to the specified directory
                if (move_uploaded_file($caption['tmp_name'], $captionFilePath)) {
                } else {
                    echo "Error moving the uploaded file.";
                }
            }

            foreach ($_FILES['images']['tmp_name'] as $index => $tmp_name) {

                if (is_uploaded_file($tmp_name)) {
                    $fileName = basename($_FILES['images']['name'][$index]);
                    $targetFilePath = $uploadDir . $fileName;


                    if (move_uploaded_file($tmp_name, $targetFilePath)) {

                        $filePaths[] = $targetFilePath;
                    } else {
                        echo "Error moving the uploaded file: {$fileName}\n";
                    }
                } else {
                    echo "Error uploading file: " . $_FILES['images']['name'][$index];
                }
            }

            $uploadedFile = $_FILES['document'];
            if ($uploadedFile['error'] === UPLOAD_ERR_OK) {
                $pdfName = basename($uploadedFile['name']);
                $targetFilePath = $pdfUploadDir . $pdfName;
                if (move_uploaded_file($uploadedFile['tmp_name'], $targetFilePath)) {
                } else {
                    echo "Error moving the uploaded file.";
                }
            }

            $data = [
                'bio' => $bio,
                'description' => $description,
                'caption' => $captionFilePath,
                'images' => $filePaths,
                'document' =>$targetFilePath
            ];
            

            $this->supplierModel->updatePortfolio($data);

            header('location:' . URLROOT . '/suppliers/portfolio');
        }


        $this->view('suppliers/updatePortfolio', $data);
    }

    public function packages()
    {

        $data =  $this->supplierModel->getAllPackages();
        $this->view('suppliers/packages', $data);
    }


    public function supplierCalendar()
    {

        $data = [
            'title' => 'Welcome'
        ];

        $this->view('suppliers/supplierCalender', $data);
    }

    public function quotationRequest()
    {
        $result = $this->supplierModel->getAllReq();

        $data = [
            'request' => $result

        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $data = [
                'request' => $result,
                'name' => trim($_POST['name']),
                'price' => trim($_POST['price']),
                'description' => trim($_POST['description'])
            ];

            if ($this->supplierModel->eventnew($data)) {
                echo '<script> prompt("Quotation Sent  Successfully") </script>';
                redirect('suppliers/quotations');
            }
        } else {
            $this->view('suppliers/quotationRequest', $data);
        }
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

            $title = $_POST['title'];
            $date = $_POST['date'];
            $status = $_POST['status'];
        }
        $this->view('suppliers/calendar');
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
}
