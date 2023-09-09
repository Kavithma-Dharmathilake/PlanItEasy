<?php

// Base controller
// Loads the models and views

class Controller {


    //load model

    public function model($model){
        //require model file
        require_once '../app/models/'.$model.'.php';

        //instantiate the model
        return new $model();

    }

    //load views
    public function view($view, $data =[]){
       
       //check for the view file
       if(file_exists('../app/views/'.$view.'.php')){
        require_once('../app/views/'.$view.'.php');
       }
       else{
        die('view does not exist');
       }
        
        //instantiate the view
       // return new $view();

    }

    


}



?>