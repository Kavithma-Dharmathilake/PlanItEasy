<?php

class Users extends Controller
{

    public function __construct()
    {
        $this->userModel = $this->model('User');

    }

    public function login()
    {

        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];

            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Pleae enter email';
            }

            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }

            //check for user/email
            if ($this->userModel->findUserByEmail($data['email'])) {

                //user found
            } else {
                //user not found
                $data['email_err'] = "No user found";
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {


                //check and set logged in user
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    //create session 
                    $this->createUserSession($loggedInUser);

                } else {
                    $data['password_err'] = "Password incorrect";

                    $this->view('users/login', $data);
                }
            } else {
                // Load view with errors
                $this->view('users/login', $data);
            }


        } else {
            // Init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            // Load view
            $this->view('users/login', $data);
        }
    }

    public function register()
    {

        //check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'contact' => trim($_POST['contact']),
                'address' => trim($_POST['address']),
                'password' => trim($_POST['password']),
                'role' => 'customer',
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'contact_err' => '',
                'address_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''

            ];

            //validating the form

            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            } else {
                //check email is exieting in db
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'Email is already taken';
                }
            }

            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter name';
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            } else if (strlen($data['password'] < 6)) {
                $data['password_err'] = 'Password at least must be 6 characters';
            }

            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confrim password';
            } else {
                if ($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'Password do not match';
                }
            }
            if (empty($data['address']))
                $data['address_err'] = 'Please Enter Address';
            if (empty($data['contact']))
                $data['contact_err'] = 'Please Enter Contact';

            //Make sure error are empty
            if (
                empty($data['email_err'])
                && empty($data['name_err'])
                && empty($data['password_err'])
                && empty($data['confirm_password_err'])
                && empty($data['contact_err'])
                && empty($data['address_err'])
            ) {

                //Validated

                //Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user
                if ($this->userModel->register($data)) {

                    redirect('users/login');

                } else {
                    die('Something went wrong');
                }

            } else {
                //Load view with errors
                $this->view('users/register', $data);
            }



        } else {
            //Init data
            $data = [
                'name' => '',
                'email' => '',
                'contact' => '',
                'address' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'contact_err' => '',
                'address_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''

            ];

            //load view
            $this->view('users/register', $data);


        }

    }




    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->name;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_role'] = $user->role;


        if (isset($_SESSION['user_role'])) {
            $userType = $_SESSION['user_role'];

            if ($userType === 'customer') {
                // Redirect customer to the customer dashboard
                redirect('customer');
            } elseif ($userType === 'eventplanner') {
                // Redirect admin to the admin dashboard
                redirect('eventplanners');
            } elseif ($userType === 'admin') {
                // Redirect admin to the admin dashboard
                redirect('admin');

            } elseif ($userType === 'supplier') {
                // Redirect admin to the admin dashboard
                redirect('supplier');
            } else {
                // Handle other user types or show an error message
                echo "Invalid user type";
            }
        } else {
            // Handle the case when the user type is not set in the session
            echo "User type not set in session";
        }

    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_email']);
        session_destroy();
        redirect('users/login');
    }



}


?>