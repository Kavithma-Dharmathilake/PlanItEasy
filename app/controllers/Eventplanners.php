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

        $data = $this->plannerModel->getAllPackages();
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

    public function budget($id)
    {

       
        $budget = $this->plannerModel->getAllBudgets($id);

        $data = [
            'eventid' => $id,
            'budget' => $budget
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $budgetid = $this->plannerModel->createbudget($id);
            echo '<script> alert("New Budget Created")</script>';
            header('location: ' . URLROOT . 'eventplanners/budgetsheet/' . $budgetid . '/' . $id);
            exit();
        }

        $this->view('eventplanners/budget', $data);
    }

    public function budgetsheet($bid, $id)
    {

        $request = $this->plannerModel->getRequestEvent($id);
        $quote = $this->plannerModel->getAcceptedQuote($id);
        $items = $this->plannerModel->getBudgetItems($bid);
        $user = $this->plannerModel->getPlannerDetail();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $price = 0.00;
            foreach ($items as $i) {
                $price = $price + $i->r_price;
            }

            $data1 = [
                'price' => $price,
                'id' => $bid
            ];

            if ($this->plannerModel->updateTotal($data1)) {
                header('location: ' . URLROOT . 'eventplanners/budget/' . $id);
            }
        } else {

            $data = [
                'quote' => $quote,
                'eventid' => $id,
                'request' => $request,
                'bid' => $bid,
                'budget' => $items,
                'user'=>$user

            ];

            $this->view('eventplanners/budgetsheet', $data);
        }
    }


    public function pricebudget($bid, $id)
    {

        $result = $this->plannerModel->lowestbudget($id);
        
        $data = [
            'eventid' => $id,
            'bid' => $bid,
            'lowest' => $result,
        ];
        $this->plannerModel->emptyItems($bid);

        foreach ($result as $r) {

            $item = [
                'bid' => $bid,
                'qid' => $r->qid,
                'bname' => $r->bname,
                'price' => $r->r_price,
                'stype' => $r->stype
            ];

            $this->plannerModel->insertBudgetItem($item);
            // }
            header('location: ' . URLROOT . 'eventplanners/budgetsheet/' . $bid . '/' . $id);
        }
    }

    public function deleteItem($bid, $eid, $bi)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $this->plannerModel->deletBudgetItem($bi);
            header('location: ' . URLROOT . 'eventplanners/budgetsheet/' . $bid . '/' . $eid);
        }
    }

    public function addItem($bid, $eid, $qid)
    {
     

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $r = $this->plannerModel->getOneQuote($qid);


            $data = [
                'bid' => $bid,
                'qid' => $qid,
                'bname' => $r->bname,
                'price' => $r->r_price,
                'stype' => $r->stype
            ];


            if ($this->plannerModel->insertBudgetItem($data)) {

                echo '<script> prompt("New Budget Item Added")</script>';
                echo '<script> alert("New Budget Created")</script>';
                header('location: ' . URLROOT . 'eventplanners/budgetsheet/' . $bid . '/' . $eid);
            } else {
                echo '<script> prompt("Item is already added")</script>';
            }
        }
    }

    public function addPlannerCharge($bid, $eid, $qid)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $user = $this->plannerModel->getPlannerDetail();



            $data = [
                'bid' => $bid,
                'qid' => $qid,
                'bname' => $user->bname,
                'price' => $_POST['price'],
                'stype' => 'Eventplanner'
            ];


            if ($this->plannerModel->insertBudgetItem($data)) {

                echo '<script> prompt("New Budget Item Added")</script>';
                echo '<script> alert("New Budget Created")</script>';
                header('location: ' . URLROOT . 'eventplanners/budgetsheet/' . $bid . '/' . $eid);
            } else {
                echo '<script> prompt("Item is already added")</script>';
            }
        }
    }


    public function downloadbudget($bid, $id){

        
        $budgetData = $this->plannerModel->getBudgetData($bid, $id);
        echo json_encode($budgetData);

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


                if ($this->plannerModel->addNewPackage($package)) {
                    echo '<script> prompt("Package Added Succfully")</script>';
                    redirect('eventplanners/packages');
                } else {
                    
                }
            } else {
                $this->view('eventplanners/addNewPackage', $data);
            }
        } else {
            $data = [
                'name' => '',
                'price' => '',
                'description' => ''
            ];
            $this->view('eventplanners/addNewPackage', $data);
        }
    }


    public function onerequest($id)
    {

        $request = $this->plannerModel->getRequestEvent($id);
        $quote = $this->plannerModel->getOnePlannerQuote($id);
        $customer = $this->plannerModel->getCustomerById($request->idcustomer);
        $reception = null;
        $photography = null;
        $cake = null;
        $catering = null;
        $dj = null;
        $music = null;
        $dancing = null;
        $decoration = null;


        if ($quote->reception != -1) {
            $reception = $this->plannerModel->getOneReceptionQuote($quote->reception);
        }

        if ($quote->photography != -1) {
            $photography = $this->plannerModel->getOnePhotographyQuote($quote->photography);
        }

        if ($quote->cake != -1) {
            $cake = $this->plannerModel->getOneCakeQuote($quote->cake);
        }

        if ($quote->decoration != -1) {
            $decoration = $this->plannerModel->getOneDecorationQuote($quote->decoration);
        }

        if ($quote->music != -1) {
            $music = $this->plannerModel->getOneMusicQuote($quote->music);
        }

        if ($quote->catering != -1) {
            $catering = $this->plannerModel->getOneCateringQuote($quote->catering);
        }
        if ($quote->dancing != -1) {
            $dancing = $this->plannerModel->getOneDancingQuote($quote->dancing);
        }
        if ($quote->dj != -1) {
            $dj = $this->plannerModel->getOneDjQuote($quote->dj);
        }


        $data = [
            'quote' => $quote,
            'photography' => $photography,
            'catering' => $catering,
            'decoration' => $decoration,
            'cake' => $cake,
            'dj' => $dj,
            'dancing' => $dancing,
            'music' => $music,
            'reception' => $reception,
            'customer' => $customer,
            'request' => $request
        ];

        $this->view('eventplanners/onerequest', $data);
    }

    public function suppliers($type, $id)
    {
        $request = $this->plannerModel->getRequestEvent($id);
        $supplier = $this->plannerModel->getSupplier($type);


        $data = [
            'type' => $type,
            'request' => $request,
            'supplier' => $supplier
        ];
        $this->view('eventplanners/supplier', $data);
    }

    public function recivedquote()
    {

        $this->view('eventplanners/recivedquote');
    }
    public function portfolio()
    {   
        $user = $this->plannerModel->getPortfolioById($_SESSION['user_id']);
        $data = [
           
            'portfolio' => $user,
            'user'=>$user


        ];

        $this->view('eventplanners/portfolio', $data);
    }
    

    public function updatePortfolio()
    {
        $user = $this->plannerModel->getUserById($_SESSION['user_id']);
        $portfolio = $this->plannerModel->getPortfolio($_SESSION['user_id']);
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
            

            $this->plannerModel->updatePortfolio($data);

            header('location:' . URLROOT . '/eventplanners/portfolio');
        }


        $this->view('eventplanners/updatePortfolio', $data);
    }

    public function sendquote($sid, $eid)
    {
        $request = $this->CustomerModel->getEventById($eid);
        $supplier = $this->CustomerModel->getOneSupplier($sid);


        $type = $supplier->stype;

        $data = [
            'request' => $request,
            'supplier' => $supplier,
        ];

        if ($type == "none") {
            $this->view('eventplanners/index', $data);
        } else if ($type == "Photographer") {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {


                $album = isset($_POST['album']) ? 'Album' : null;
                $additional = isset($_POST['additional']) ? 'Additional Photographer' : null;
                $booth = isset($_POST['photobooth']) ? 'Photobooth' : null;
                $photoservices = implode(', ', array_filter([$album, $additional, $booth]));


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
                    'sid' => $supplier->id,
                    'uid' => $_SESSION['user_id'],
                    'stype' => 'photography',
                    'services' => $photoservices
                ];



                if ($this->CustomerModel->RequestPhotoQuote($quote)) {
                    echo '<script>alert("Request Quotation sent successfully")</script>';
                    echo '<script>window.location.href = "' . URLROOT . 'eventplanners/suppliers/Photographer/' . $request->id . '";</script>';
                } else {

                    $this->view('customers/gallery', $data);
                }
            } else {

                $this->view('eventplanners/photo-quote', $data);
            }
        } else if ($type == "Reception hall") {


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
                    'sid' => $supplier->id,
                    'uid' => $_SESSION['user_id'],
                    'stype' => 'reception'
                ];



                if ($this->CustomerModel->RequestReceptQuote($quote)) {
                    echo '<script> alert("Quotation Added Succfully")</script>';
                    header('location: ' . URLROOT . 'eventplanners/suppliers/reception/' . $request->id);
                } else {

                    $this->view('customers/gallery', $data);
                }
            } else {

                $this->view('eventplanners/reception-quote', $data);
            }
        } else if ($type == "Decorations") {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {



                $package = $_POST['type'];
                $stime = $_POST['start'];
                $etime = $_POST['end'];
                $remark = $_POST['remark'];

                $poruwa = isset($_POST['poruwa']) ? 'Poruwa ' : null;
                $seteeBack = isset($_POST['Setee-Back']) ? 'Setee Back ' : null;
                $tabledeco = isset($_POST['Table-Deco']) ? 'Table Arrangements ' : null;
                $bouquet = isset($_POST['Bouquets']) ? 'Bouquets ' : null;
                $entrance = isset($_POST['Entrance-deco']) ? 'Entrance Deco ' : null;
                $seating = isset($_POST['Seating-deco']) ? 'Seating Arrangements' : null;
                $lighting = isset($_POST['Lighting-deco'])  ? 'Lighting Deco' : null;
                $ceiling = isset($_POST['Ceiling-deco']) ? 'Ceiling Deco' : null;
                $decoservices = implode(', ', array_filter([$poruwa, $seteeBack, $tabledeco, $bouquet, $entrance, $seating, $lighting, $ceiling]));

                $natural = isset($_POST['Natural']) ? 'Natural ' : null;
                $artificial = isset($_POST['Artificial']) ? 'Artificial ' : null;
                $flowers = implode(', ', array_filter([$natural, $artificial]));



                $quote = [
                    'package' => $package,
                    'stime' => $stime,
                    'etime' => $etime,
                    'remark' => $remark,
                    'rid' => $request->id,
                    'sid' => $supplier->id,
                    'services' => $decoservices,
                    'flowers' => $flowers,
                    'uid' => $_SESSION['user_id'],
                    'stype' => 'decoration'
                ];



                if ($this->CustomerModel->RequestDecoQuote($quote)) {
                    echo '<script> alert("Quotation Added Succfully")</script>';
                    echo '<script>window.location.href = "' . URLROOT . 'eventplanners/suppliers/Decorations/' . $request->id . '";</script>';
                } else {

                    $this->view('customers/gallery', $data);
                }
            } else {
                $this->view('eventplanners/deco-quote', $data);
            }
        } else if ($type == "cake") {
            $this->view('customers/gallery', $data);
        } else if ($type == "dj") {
            $this->view('customers/gallery', $data);
        } else if ($type == "music") {
            $this->view('customers/gallery', $data);
        } else if ($type == "dancing") {
            $this->view('customers/gallery', $data);
        } else if ($type == "Catering Service") {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $package = $_POST['type'];
                $stime = $_POST['start'];
                $etime = $_POST['end'];
                $remark = $_POST['remark'];

                $lunch = isset($_POST['Lunch']) ? 'Lunch ' : null;
                $dinner = isset($_POST['Dinner']) ? 'Dinner ' : null;
                $breakfast = isset($_POST['Breakfast']) ? 'Breakfast ' : null;

                $time = implode(', ', array_filter([$lunch, $dinner, $breakfast]));

                $packets = isset($_POST['Packets']) ? 'Packets ' : null;
                $servers = isset($_POST['Servers']) ? 'Servers ' : null;
                $delivery = isset($_POST['Delivery']) ? 'Delivery ' : null;
                $caterservices = implode(', ', array_filter([$packets, $servers, $delivery]));

                $quote = [
                    'package' => $package,
                    'stime' => $stime,
                    'etime' => $etime,
                    'remark' => $remark,
                    'time' => $time,
                    'services' => $caterservices,
                    'rid' => $request->id,
                    'sid' => $supplier->id,
                    'uid' => $_SESSION['user_id'],
                    'stype' => 'catering'
                ];



                if ($this->CustomerModel->RequestCaterQuote($quote)) {
                    echo '<script> alert("Quotation Added Succfully")</script>';
                    echo '<script>window.location.href = "' . URLROOT . 'eventplanners/suppliers/catering/' . $request->id . '";</script>';
                } else {
                    $this->view('customers/gallery', $data);
                }
            } else {
                $this->view('eventplanners/catering-quote', $data);
            }
        }
    }

    public function message($id)
    {

        $messages = $this->plannerModel->getMessages($id);
        $quote = $this->plannerModel->getOnePlannerQuote2($id);
        $customer = $this->plannerModel->getUserById($quote->uid);

        $data = [

            'messages' => $messages,
            'customer' => $customer->name,
            'request' => $quote

        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $content = $_POST['content'];
            $data = [
                'content' => $content,
                'qid' => $id,
                'cuid' => $quote->uid,
            ];

            $this->plannerModel->sendMessage($data);
            header('location: ' . URLROOT . '/eventplanners/message/' . $id);
        }


        $this->view('eventplanners/message', $data);
    }

    public function quotations($type, $id)
    {

        $request = $this->plannerModel->getRequestEvent($id);
        $quote = $this->plannerModel->getQuotations($type, $id);


        $data = [
            'type' => $type,
            'request' => $request,
            'quote' => $quote
        ];
        $this->view('eventplanners/quotations', $data);
    }
}
