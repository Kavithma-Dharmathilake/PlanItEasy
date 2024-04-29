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

    public function index(){
    $id = $_SESSION['user_id'];

    $events = $this->customerModel->getAllEvents($_SESSION['user_id']);
    $recentquotes = $this->customerModel->getRecentQuote($id);
    // $total_count = $this->customerModel->countAcceptedQuote($id);
    // $total_count_pending = $this->customerModel->countPendingQuote($id);
    $pending_count = $this->customerModel->countPendingEvents($id);
    $booked_count = $this->customerModel->countBookedEvents($id);
    $completed_count = $this->customerModel->countCompletedEvents($id);


    $data = [
        'title' => 'Welcome',
        'events' => $events,
        'recent' => $recentquotes,
        // 'total_count' => $total_count,
        // 'total_count_pending' => $total_count_pending,
        'pending_count' => $pending_count,
        'booked_count' => $booked_count,
        'completed_count' => $completed_count,
    ];

    $this->view('customers/index', $data);
    }



    public function events()
    {

        $events = $this->customerModel->getAllEvents($_SESSION['user_id']);

        $data = [
            'events' => $events
        ];

        $this->view('customers/events', $data);
    }

    //creating new event
    public function newevent()
    {

        $data = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_EVENT = filter_input_array(INPUT_POST);

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
            ];


            $eid = $this->customerModel->newevent($data);
            echo '<script>alert("New Event Created Successfully");';
            echo 'window.location.href = "' . URLROOT . 'customers/oneevent/' . $eid . '";</script>';
        } else {
            $this->view('customers/newevent', $data);
        }
    }

    //viewing one event
    public function oneevent($id)
    {


        $request = $this->customerModel->getEventById($id);

        $data = [
            'request' => $request,
        ];



        $this->view('customers/oneevent', $data);
    }

    public function inquiry(){

        $data = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_INQUIRY = filter_input_array(INPUT_POST);

            $data = [
                'cusid' => $_SESSION['user_id'],
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'inquiry' => trim($_POST['inquiry']),
            ];


            $eid = $this->customerModel->inquiry($data);
            echo '<script>alert("Inquiry sent Successfully");';
            echo 'window.location.href = "' . URLROOT . 'customers/inquiry/' . $eid . '";</script>';


        } else {
            $this->view('customers/inquiry', $data);
        }
    }

    // public function getinquirymail(){
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         // Sanitize POST data
    //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
    //         // Get form data
    //         $name = $_POST["name"];
    //         $email = $_POST["email"];
    //         $inquiry = $_POST["inquiry"];
    //         $toEmail = "mahogaharith@gmail.com";
    
    //         // Email subject
    //         $subject = "New Inquiry from $name";
    
    //         // Email headers
    //         $headers = "From: $name <$email>" . "\r\n";
    //         $headers .= "Reply-To: $email" . "\r\n";
    //         $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    
    //         // Email body
    //         $message = "Name: $name <br>";
    //         $message .= "Email: $email <br>";
    //         $message .= "Inquiry: $inquiry <br>";
    
    //         // Send email
    //         if (mail($toEmail, $subject, $message, $headers)) {
    //             $message = "Your inquiry has been sent successfully.";
    //         } else {
    //             $message = "Failed to send your inquiry.";
    //         }
    
    //         // Render the view with the appropriate message
    //         $data['message'] = $message;
    //         $this->view('path_to_your_view_file', $data); // Replace 'path_to_your_view_file' with the actual path to your view file
    //     } else {
    //         // Invalid form submission
    //         $message = "Invalid form submission.";
    //         // Render the view with the appropriate message
    //         $data['message'] = $message;
    //         $this->view('path_to_your_view_file', $data); // Replace 'path_to_your_view_file' with the actual path to your view file
    //     }
    // }
    

    //viewing all suppliers
    public function supplier($id)
    {


        $request = $this->customerModel->getEventById($id);

        $data = [
            'request' => $request
        ];

        $this->view('customers/supplier', $data);
    }

    //viewing only photographers
    public function photography($id)
    {
        $request = $this->customerModel->getEventById($id);

        $photo = $this->customerModel->getSuppliers('Photographer');
        $data1 = [
            'request' => $request,
            'supplier' => $photo,
            'type' => "Photographers",
        ];
        $this->view('customers/gallery', $data1);
    }

    //only catering suppliers
    public function caterings($id)
    {
        $request = $this->customerModel->getEventById($id);
        $cater = $this->customerModel->getSuppliers('Catering Service');

        $data2 = [
            'request' => $request,
            'supplier' => $cater,
            'type' => "Catering"
        ];
        $this->view('customers/gallery', $data2);
    }

    //only reception suppliers
    public function reception($id)
    {
        $request = $this->customerModel->getEventById($id);
        $reception = $this->customerModel->getSuppliers('Reception hall');

        $data3 = [
            'request' => $request,
            'supplier' => $reception,
            'type' => "Reception"
        ];
        $this->view('customers/gallery', $data3);
    }

    public function eventplanner($id)
    {
        $request = $this->customerModel->getEventById($id);
        $reception = $this->customerModel->getSuppliers('Event Planner');

        $data = [
            'request' => $request,
            'supplier' => $reception,
            'type' => "Event Planners"
        ];
        $this->view('customers/gallery', $data);
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


    public function catering($id)
    {
        $request = $this->customerModel->getEventById($id);
        $supplier = $this->customerModel->getSuppliers('Catering Service');

        $data = [
            'request' => $request,
            'supplier' => $supplier,
            'type' => "Catering"
        ];
        $this->view('customers/gallery', $data);
    }


    public function receptions()
    {
        $this->view('customers/reception-quote');
    }

    public function decorations($id)
    {
        $request = $this->customerModel->getEventById($id);
        $supplier = $this->customerModel->getSuppliers('Decorations');

        $data = [
            'request' => $request,
            'supplier' => $supplier,
            'type' => "Decorations"
        ];
        $this->view('customers/gallery', $data);
    }

    public function payments()

    {
        $id=$_SESSION['user_id'];
        $payments = $this->customerModel->showPayment($id);

        // var_dump($payments);

        $data = [
            'payments' => $payments,
        ];

        $this->view('customers/payments', $data);
    }

    public function messageAll()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customers/message', $data);
    }


    public function sendquote($sid, $eid)
    {
        $request = $this->customerModel->getEventById($eid);
        $supplier = $this->customerModel->getOneSupplier($sid);

        $type = $supplier->stype;

        $data = [
            'request' => $request,
            'supplier' => $supplier,
        ];

        if ($type == "none") {
            $this->view('customers/index', $data);
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



                if ($this->customerModel->RequestPhotoQuote($quote)) {
                    echo '<script>alert("Request Quotation sent successfully")</script>';
                    echo '<script>window.location.href = "' . URLROOT . 'customers/photography/' . $request->id . '";</script>';
                } else {

                    $this->view('customers/gallery', $data);
                }
            } else {
                $this->view('customers/photo-quote', $data);
            }
        } else if ($type == "Event Planner") {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                //event planner -->
                $package = $_POST['ptype'];
                $plannerremark = $_POST['remark'];
                //reception
                $reception = isset($_POST['needreception']) ? 0 : -1;
                if ($reception !== -1) {
                    $receptionType = isset($_POST['receptionType']) ? $_POST['receptionType'] : null;
                    $recepremark = isset($_POST['reception-remark']) ? $_POST['reception-remark'] : null;
                    $r_start = isset($_POST['recept-start']) ? $_POST['recept-start'] : null;
                    $r_end = isset($_POST['recept-end']) ? $_POST['recept-end'] : null;

                    $data1 = [
                        'type' => $receptionType,
                        'remark' => $recepremark,
                        'start' => $r_start,
                        'end' => $r_end
                    ];

                    $reception = $this->customerModel->PlannerReception($data1);
                }
                //catering
                $catering = isset($_POST['needcatering']) ? 0 : -1;
                if ($catering !== -1) {
                    $lunch = isset($_POST['lunch']) ? 'Lunch ' : null;
                    $dinner = isset($_POST['dinner']) ? 'Dinner ' : null;
                    $breakfast = isset($_POST['breakfast']) ? 'Breakfast ' : null;

                    $time = implode(', ', array_filter([$lunch, $dinner, $breakfast]));

                    $c_start = isset($_POST['cater-start']) ? $_POST['cater-start'] : null;
                    $c_end = isset($_POST['cater-end']) ? $_POST['cater-end'] : null;

                    $packets = isset($_POST['Packets']) ? 'Packets ' : null;
                    $servers = isset($_POST['Servers']) ? 'Servers ' : null;
                    $delivery = isset($_POST['Delivery']) ? 'Delivery ' : null;
                    $caterservices = implode(', ', array_filter([$packets, $servers, $delivery]));

                    $priceperplate = isset($_POST['pricePerPlate']) ? $_POST['pricePerPlate'] : null;
                    $caterRemark = isset($_POST['cater-remark']) ? $_POST['cater-remark'] : null;

                    $data2 = [
                        'time' => $time,
                        'start' => $c_start,
                        'end' => $c_end,
                        'services' => $caterservices,
                        'price' => $priceperplate,
                        'remark' => $caterRemark
                    ];

                    $catering = $this->customerModel->PlannerCatering($data2);
                }
                //photography
                $photography = isset($_POST['needphoto']) ? 0 : -1;
                if ($photography !== -1) {
                    $coverage = isset($_POST['cover']) ? $_POST['coverage'] : null;

                    $album = isset($_POST['album']) ? 'Album' : null;
                    $additional = isset($_POST['additional']) ? 'Additional Photographer' : null;
                    $booth = isset($_POST['photobooth']) ? 'Photobooth' : null;
                    $photoservices = implode(', ', array_filter([$album, $additional, $booth]));

                    $p_start = isset($_POST['photo-start']) ? $_POST['photo-start'] : null;
                    $p_end = isset($_POST['photo-end']) ? $_POST['photo-end'] : null;

                    $photoRemark = isset($_POST['photo-remark']) ? $_POST['photo-remark'] : null;

                    $data3 = [
                        'coverage' => $coverage,
                        'start' => $p_start,
                        'end' => $p_end,
                        'services' => $photoservices,
                        'remark' => $photoRemark
                    ];

                    $photography = $this->customerModel->PlannerPhotography($data3);
                }
                //decorations
                $decoration = isset($_POST['needdeco']) ? 0 : -1;
                if ($decoration !== -1) {

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
                    $decoremark = isset($_POST['deco-remark']) ? $_POST['deco-remark'] : null;

                    $data4 = [
                        'flowers' => $flowers,
                        'services' => $decoservices,
                        'remark' => $decoremark
                    ];

                    $decoration = $this->customerModel->PlannerDecoration($data4);
                }
                //cake services
                $cake = isset($_POST['needcake']) ? 0 : -1;
                if ($cake !== -1) {
                    $cakeremark = isset($_POST['cake-remark']) ? $_POST['cake-remark'] : null;

                    $data5 = [
                        'remark' => $cakeremark
                    ];

                    $cake = $this->customerModel->PlannerCake($data5);
                }
                //dancing crew
                $dance = isset($_POST['needdance']) ? 0 : -1;
                if ($dance !== -1) {
                    $danceremark = isset($_POST['dance-remark']) ? $_POST['dance-remark'] : null;

                    $da_start = isset($_POST['dance-start']) ? $_POST['photo-start'] : null;
                    $da_end = isset($_POST['dance-end']) ? $_POST['photo-end'] : null;

                    $data6 = [
                        'remark' => $danceremark,
                        'start' => $da_start,
                        'end' => $da_end
                    ];

                    $dance = $this->customerModel->PlannerDance($data6);
                }
                //music band
                $music = isset($_POST['needmusic']) ? 0 : -1;
                if ($music !== -1) {
                    $musicremark = isset($_POST['music-remark']) ? $_POST['music-remark'] : null;
                    $mu_start = isset($_POST['music-start']) ? $_POST['photo-start'] : null;
                    $mu_end = isset($_POST['music-end']) ? $_POST['photo-end'] : null;

                    $data7 = [
                        'remark' => $musicremark,
                        'start' => $mu_start,
                        'end' => $mu_end
                    ];

                    $music = $this->customerModel->PlannerMusic($data7);
                }
                //dj
                $dj = isset($_POST['needdj']) ? 0  : -1;
                if ($dj !== -1) {
                    $djremark = isset($_POST['dj-remark']) ? $_POST['dj-remark'] : null;
                    $djcoverage = isset($_POST['dj-coverage']) ? $_POST['dj-coverage'] : null;

                    $smoke = isset($_POST['Smoke']) ? 'Smokescreen' : null;
                    $lazer = isset($_POST['Lazer']) ? 'Lazer' : null;
                    $fire = isset($_POST['firemachines']) ? 'Firemachines' : null;
                    $djservices = implode(',', array_filter([$smoke, $fire, $lazer]));

                    $dj_start = isset($_POST['dj-start']) ? $_POST['dj-start'] : null;
                    $dj_end = isset($_POST['dj-end']) ? $_POST['dj-end'] : null;

                    $data8 = [
                        'coverage' => $djcoverage,
                        'start' => $dj_start,
                        'end' => $dj_end,
                        'services' => $djservices,
                        'remark' => $djremark
                    ];

                    $dj = $this->customerModel->PlannerDJ($data8);
                }

                $quote = [

                    'package' => $package,
                    'plannerremark' => $plannerremark,
                    'rid' => $request->id,
                    'sid' => $supplier->id,
                    'uid' => $_SESSION['user_id'],
                    'reception' => $reception,
                    'catering' => $catering,
                    'photography' => $photography,
                    'decoration' => $decoration,
                    'cake' => $cake,
                    'dance' => $dance,
                    'music' => $music,
                    'dj' => $dj,

                ];

                if ($this->customerModel->RequestEventQuote($quote)) {
                    echo '<script> alert("Quotation Added Succfully")</script>';
                    header('location: ' . URLROOT . 'customers/quotations/' . $request->id);
                } else {
                    $this->view('customers/gallery', $data);
                }
            } else {
                $this->view('customers/planner-quote', $data);
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



                if ($this->customerModel->RequestReceptQuote($quote)) {
                    echo '<script> alert("Quotation Added Succfully")</script>';
                    header('location: ' . URLROOT . 'customers/reception/' . $request->id);
                } else {

                    $this->view('customers/gallery', $data);
                }
            } else {
                $this->view('customers/reception-quote', $data);
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



                if ($this->customerModel->RequestDecoQuote($quote)) {
                    echo '<script> alert("Quotation Added Succfully")</script>';
                    header('location: ' . URLROOT . 'customers/decorations/' . $request->id);
                } else {

                    $this->view('customers/gallery', $data);
                }
            } else {
                $this->view('customers/deco-quote', $data);
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



                if ($this->customerModel->RequestCaterQuote($quote)) {
                    echo '<script> alert("Quotation Added Succfully")</script>';
                    header('location: ' . URLROOT . 'customers/catering/' . $request->id);
                } else {
                    $this->view('customers/gallery', $data);
                }
            } else {
                $this->view('customers/catering-quote', $data);
            }
        }
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
            'eventid' => $id
        ];

        $this->view('customers/allquote', $data);
    }


    public function budget($id)
    {

        $quote = $this->customerModel->getAllQuote($id);
        $budget = $this->customerModel->getAllBudget($id);

        $data = [
            'quote' => $quote,
            'eventid' => $id,
            'budget' => $budget,
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $budgetid = $this->customerModel->createbudget($id);
            echo '<script> alert("New Budget Created")</script>';
            // $this->view1('customers/budgetsheet',$budgetid, $id);
            header('location: ' . URLROOT . 'customers/budgetsheet/' . $budgetid . '/' . $id);
            exit();
        }



        $this->view('customers/budget', $data);
    }

    public function budgetsheet($bid, $id)
    {
        $quote = $this->customerModel->getAcceptedQuote($id);
        $request = $this->customerModel->getEventById($id);
        $items = $this->customerModel->getBudgetItems($bid);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $price = 0.00;
            foreach ($items as $i) {
                $price = $price + $i->r_price;
            }

            $data1 = [
                'price' => $price,
                'id' => $bid
            ];

            if ($this->customerModel->updateTotal($data1)) {
                header('location: ' . URLROOT . 'customers/budget/' . $id);
            }
        } else {

            $data = [
                'quote' => $quote,
                'eventid' => $id,
                'request' => $request,
                'bid' => $bid,
                'budget' => $items

            ];

            $this->view('customers/budgetsheet', $data);
        }
    }

    public function pricebudget($bid, $id)
    {

        $result = $this->customerModel->lowestbudget($id);


        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $data = [
            'eventid' => $id,
            'bid' => $bid,
            'lowest' => $result,
        ];

        //if items added previously is added first need to delete those
        $this->customerModel->emptyItems($bid);

        foreach ($result as $r) {

            $item = [
                'bid' => $bid,
                'qid' => $r->qid,
                'bname' => $r->bname,
                'price' => $r->r_price,
                'stype' => $r->stype
            ];

            $this->customerModel->insertBudgetItem($item);
            // }
            header('location: ' . URLROOT . 'customers/budgetsheet/' . $bid . '/' . $id);
        }
    }

    public function deleteItem($bid, $eid, $bi)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $this->customerModel->deletBudgetItem($bi);
            header('location: ' . URLROOT . 'customers/budgetsheet/' . $bid . '/' . $eid);
        }
    }

    public function addItem($bid, $eid, $qid)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $r = $this->customerModel->getOneQuote($qid);


            $data = [
                'bid' => $bid,
                'qid' => $qid,
                'bname' => $r->bname,
                'price' => $r->r_price,
                'stype' => $r->stype
            ];


            if ($this->customerModel->insertBudgetItem($data)) {

                echo '<script> prompt("New Budget Item Added")</script>';
                echo '<script> alert("New Budget Created")</script>';
                header('location: ' . URLROOT . 'customers/budgetsheet/' . $bid . '/' . $eid);
            } else {
                echo '<script> prompt("Item is already added")</script>';
            }
        }
    }


    public function payement($rid, $id, $price)
    {


        $data = [

            'rid' => $rid,
            'bid' => $id,
            'price' => $price

        ];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'fname' => trim($_POST['fname']),
                'email' => trim($_POST['email']),
                'price' => trim($_POST['amount']),
                'rid' => trim($_POST['event']),
                'bid' => trim($_POST['budget'])
            ];

            $s_amount = (int) $_POST['amount'] * 100;

            \Stripe\Stripe::setApiKey('sk_test_51Nx6nOC3Jv8Pj3OfF2GaslmsUK83qAzZHAGXKtFDn9kBgnSx9ZurZNWnGdcqOS9VsYw3cwb90yboeUjmPQiLk5MZ00W1OfFi8E');


            // Create Customer In Stripe
            $customer = \Stripe\Customer::create(array(
                "email" => $_POST['email'],
                "source" => $_POST['stripeToken'],
            ));

            // Charge Customer
            $charge = \Stripe\Charge::create(array(
                "amount" => $s_amount,
                "currency" => "lkr",
                "description" => "Payment of Event ID: " . $_POST['event'],
                "customer" => $customer->id
            ));

            $tid = $this->customerModel->insertPayement($data);
            if ($tid != null) {
                $this->customerModel->updateBudgetQuotations($id);

                echo '<script> alert("Payment Successful")</script>';
                header('location: ' . URLROOT . 'customers/budget/' . $rid);
            } else {
                echo '<script>  prompt("Payment Unsuccesful")</script>';
            }
        }
        $this->view('customers/payement', $data);
    }

    public function message($qid)
    {


        $result = $this->customerModel->getOneReq($qid);
        $event = $this->customerModel->getEventById($result->eid);
        // $customer = $this->customerModel->getCustomer($event->idcustomer);
        $messages = $this->customerModel->getMessages($qid);
      
        $data = [
            'request' => $result,
            'customer' => $_SESSION['user_name'],
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

            $this->customerModel->sendMessage($data);
            header('location: ' . URLROOT . '/customers/message/' . $qid);
        }


        $this->view('customers/message', $data);
    }
}
