<?php


class Suppliers extends Controller
{

    public function __construct()
    {
        $this->userModel = $this->model('Product');


    }

    public function index()
    {

        $data = [
            'title' => 'Welcome'
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
                'price' => trim($_POST['price']),
                'description' => trim($_POST['description'])
            ];

          
            if (!empty($data['name'])) {
             
            
                $package = [
                    'name' => $data['name'],
                    'price' => $data['price'],
                    'description' => $data['description'],
                    'img' => $file_path
                ];

               
                if ($this->userModel->eventnew($package)) {
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

    public function deleteuser($id)
    {


        if ($this->userModel->deleteUser($id)) {
            redirect('suppliers/products');
        } else {
            die("something went wrong");
        }

    }
    public function newProjectReq()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('suppliers/newProjectReq', $data);
    }

    public function completedProjects()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('suppliers/completedProjects', $data);
    }

    public function more()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('suppliers/more', $data);
    }

    public function products()
    {

        $data = $this->userModel->getAllEvents();
        $this->view('suppliers/products', $data);
    }

    public function quotationRequest()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('suppliers/quotationRequest', $data);
    }

    public function sentRequests()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('suppliers/sentRequests', $data);
    }

    
}

?>