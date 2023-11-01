<?php


class Pages extends Controller
{

    public function __construct()
    {



    }

    public function index()
    {

        $data = [
            'title' => 'Welcome'
        ];
        $this->view('pages/index', $data);
    }

    public function about()
    {

        $data = [
            'title' => 'About us'
        ];

        $this->view('pages/about', $data);
    }

    public function eventplanners()
    {

        $data = [
            'title' => 'EventPlanners'
        ];

        $this->view('pages/eventplanners', $data);
    }

    public function suppliers()
    {

        $data = [
            'title' => 'Suppliers'
        ];

        $this->view('pages/suppliers', $data);
    }

    public function join()
    {

        $data = [
            'title' => 'Suppliers'
        ];

        $this->view('pages/join', $data);
    }

    public function joinreg()
    {

        $data = [
            'title' => 'Suppliers'
        ];

        $this->view('pages/joinreg', $data);
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