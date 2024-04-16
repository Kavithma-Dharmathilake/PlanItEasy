<?php


class Pages extends Controller
{

    public function __construct()
    {

     
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $this->view('pages/index');
    }
    public function oneportfolio()
    {
        $this->view('pages/oneportfolio');
    }

    public function about()
    {

        $this->view('pages/about');
    }

    public function eventplanners()
    {
        $this->view('pages/eventplanners');
    }

    public function suppliers()
    {

        $this->view('pages/suppliers');
    }

    public function join()
    {

        $this->view('pages/join');
    }

    public function joinreg()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($_FILES['proof']['error'] === UPLOAD_ERR_OK) {
                $file_name = $_FILES['proof']['name'];
                $file_tmp = $_FILES['proof']['tmp_name'];
        
                 $upload_dir = "uploads/"; // Create an 'uploads' directory in your project folder
        
                // Move the uploaded file to the desired location
                $destination = $upload_dir . $file_name;
                
                if (move_uploaded_file($file_tmp, $destination)) {
                    $file_path = $destination;
                  
                } else {
                    $data['file_err'] = 'File upload failed';
                }
            }
           
            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['contact']),
                'bday' => trim($_POST['bday']),
                'gender' =>'male',
                'address' => trim($_POST['address']),
                'nic' =>trim($_POST['nic']),
                'stype' => trim($_POST['stype']),
                'bname' => trim($_POST['bname']),
                'btype' => isset($_POST['btype']) ? $_POST['btype'] : '',
                'bno' => trim($_POST['bno']),
                'baddress' => trim($_POST['baddress']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'file_err' => '',
                'name_err' =>'' ,
                'email_err' =>'',
                'nic_err' =>'',
                'phone_err' =>'',
                'bday_err' => '',
                'gender_err' =>'',
                'address_err' => '',
                'stype_err' =>'',
                'bname_err' =>'',
                'baddress_err' =>'',
                'btype_err' => '',
                'bno_err' => '',
                'password_err' => '',
                'confirm_password_err' =>'',
            ];

            if (empty($data['name'])) {
                $data['name_err'] = 'Name is required';
            }
            
            if (empty($data['email'])) {
                $data['email_err'] = 'Email is required';
            }else {
             
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'Email is already taken';
                }
            }
            
            if (empty($data['phone'])) {
                $data['phone_err'] = 'Phone number is required';
            } elseif (!preg_match('/^\d{10}$/', $data['phone'])) {
                $data['phone_err'] = 'Phone number should be 10 digits';
            }
            
            if (empty($data['bday'])) {
                $data['bday_err'] = 'Birth date is required';
            } else {
                // Convert the birth date to a timestamp for comparison
                $birth_date = strtotime($data['bday']);
            
                // Define the minimum and maximum birth date timestamps
                $min_birth_date = strtotime('1951-01-01');
                $max_birth_date = strtotime('2004-12-31');
            
                if ($birth_date < $min_birth_date || $birth_date > $max_birth_date) {
                    $data['bday_err'] = 'Birth date should be between 1951 and 2004';
                }
            }
            
            if (empty($data['nic'])) {
                $data['nic_err'] = 'NIC is required';
            } elseif(!empty($data['nic'])) {
                // Remove any spaces or non-digit characters
                $nic = preg_replace('/\D/', '', $data['nic']);
            
                if (strlen($nic) === 10 && !preg_match('/[Vv]$/', $data['nic'])) {
                    $data['nic_err'] = 'Invalid NIC format for 10 digits; it should end with "V" or "v"';
                } elseif (strlen($nic) === 12) {
                    $firstFourDigits = substr($nic, 0, 4);
                    if (!in_array($firstFourDigits, ['2001', '2002', '2003', '2004'])) {
                        $data['nic_err'] = 'Invalid NIC format';
                    }
                }
            }
            
            
            
            if (empty($data['gender'])) {
                $data['gender_err'] = 'Gender is required';
            }
            
            if (empty($data['address'])) {
                $data['address_err'] = 'Address is required';
            }
          
            if (empty($data['stype'])) {
                $data['stype_err'] = 'Service type is required';
               
            }
            
            if (empty($data['bname'])) {
                $data['bname_err'] = 'Business name is required';
            }
            
            if (empty($data['btype'])) {
                $data['btype_err'] = 'Business type is required';
            }
            
            if (empty($data['bno'])) {
                $data['bno_err'] = 'Business registration number is required';
            }
            
            if (empty($data['baddress'])) {
                $data['baddress_err'] = 'Business address is required';
            }
            
            if (empty($data['password'])) {
                $data['password_err'] = 'Password is required';
            } elseif (strlen($data['password']) < 7) {
                $data['password_err'] = 'Password must be at least 7 characters long';
            }
            
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Confirm password is required';
            }
            if (!empty($data['password']) && !empty($data['confirm_password']) && $data['password'] !== $data['confirm_password']) {
                $data['confirm_password_err'] = 'Passwords do not match';
            }
            
            
            
           
            if (empty($data['name_err']) && empty($data['email_err']) && empty($data['phone_err']) && empty($data['bday_err']) && empty($data['address_err']) && empty($data['bname_err']) && empty($data['bno_err']) && empty($data['baddress_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
             
               
                $selected_date = $data['bday'];
                $b_date = date("Y-m-d", strtotime($selected_date));

                $hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);

                $userData = [
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'bday' => $b_date,
                    'gender' => $data['gender'],
                    'address' => $data['address'],
                    'bname' => $data['bname'],
                    'btype' => $data['btype'],
                    'bno' => $data['bno'],
                    'baddress' => $data['baddress'],
                    'stype'=>$data['stype'],
                    'nic' => $data['nic'],
                    'proof'=>$file_path,
                    'password' => $hashed_password,
                  
                ];

                if($this->userModel->userReq($userData))
                {
                  
                   $this->view('pages/joinreg', $data);

                  
                }
            } else {
                // There were validation errors; return the data and errors to the view
                $this->view('pages/joinreg', $data);
            }
        } else {
            // Display the registration form
            $data = [
                'name' => '',
                'email' => '',
                'phone' => '',
                'bday' => '',
                'gender' => '',
                'address' => '',
                'bname' => '',
                'btype' => '',
                'bno' => '',
                'baddress' => '',
                'password' => '',
                'nic' =>'',
                'confirm_password' => '',
                'file'=>'',
                'file_err' => '',
                'name_err' =>'',
                'email_err' =>'',
                'phone_err' =>'',
                'nic_err'=>'',
                'bday_err' => '',
                'gender_err' => '',
                'address_err' => '',
                'baddress_err' => '',
                'stype_err' => '',
                'bname_err' =>'',
                'btype_err' =>'',
                'bno_err' =>'',
                'password_err' => '',
                'confirm_password_err' => '',

            ];

            $this->view('pages/joinreg', $data);
        }
    }

    public function contact()
    {

        $data = [
            'title' => 'Suppliers'
        ];

        $this->view('pages/contact', $data);
    }
}

?>