<?php  

/*
* Base controller
* Loads the models and views
*/

class Controller {
    // Load model
    public function model ($model) { 

        // Required model file
        require_once APPROOT.'/models/'. $model . '.php';

        // Instatiate model
        return new $model();
    }

    // Load view
    public function view ($view, $data = []) { 

        //check for view file
        if (file_exists(APPROOT.'/views/'. $view . '.php')){
            require_once APPROOT.'/views/'. $view . '.php';
        } else {
            die("View doesn't exists");
        }
    }

}