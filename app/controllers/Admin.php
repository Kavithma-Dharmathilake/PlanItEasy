<?php

class  Admin extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        $this->view('admin/index');

    }

    public function user()
    {

        $this->view('admin/user');

    }


    public function analytics(){
        $this->view('admin/analytics');

    }

    public function messages(){
        $this->view('admin/messages');
        
    }

    public function newsupplier(){
        $this->view('admin/newsupplier');
        
    }

    
    public function suppliers(){
        $this->view('admin/suppliers');
        
    }

    public function eventplanners(){
        $this->view('admin/eventplanners');
        
    }


    public function userreq(){
        $this->view('admin/userreq');
    }

    public function inquiry(){
        $this->view('admin/inquiry');
    }

    public function feedback(){
        $this->view('admin/feedback');
    }


    


}


?>