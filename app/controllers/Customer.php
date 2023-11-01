<?php


class Customer extends Controller
{

    public function __construct()
    {



    }

    public function index()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customer/index', $data);
    }

    public function quotation()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('customer/quotation', $data);
    }

    
}

?>