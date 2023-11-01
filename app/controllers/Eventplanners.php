<?php

class Eventplanners extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        $this->view('eventplanners/index');

    }

    public function packages()
    {

        $this->view('eventplanners/packages');


        
    }

    public function eventRequest()
    {

        $this->view('eventplanners/eventRequest');

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

        $this->view('eventplanners/addNewpackage');

    }

    public function onerequest()
    {

        $this->view('eventplanners/onerequest');

    }

    public function findsupplier()
    {

        $this->view('eventplanners/findsupplier');

    }

    public function recivedquote()
    {

        $this->view('eventplanners/recivedquote');

    }









}


?>