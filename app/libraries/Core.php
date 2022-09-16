<?php

/*
* App Core Class
* Creates URL & loads core controller
* URL FORMAT - /controller/method/params
*/

class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'portal';
    protected $params = [];
    protected $groupRoles = [
        'ADM' => [
            'Miempresa/miempresa',
            'Formulrios/soporte'
        ],
        'USU' => [
            'Miempresa/miempresa'
        ]
    ];

    public function __construct()
    {

        // print_r($this->getUrl());

        
        // TODO: to add a check point for roles permissions from here to control the access to controllers and methods:
 /*           
        if (!isset($_SESSION['login_name']) || !isset($_SESSION['type_user'])) {
            $url = [
                "controller" => 'Session',
                "action" => 'login'
            ];
        } else {
            $url = $this->getUrl();

            if($_SESSION['type_user'] == 'ADM') {
                $urlv = $url['controller'].'/'.$url['action'];
                $urlu = $this->groupRoles['ADM'];
                in_array($urlv,$urlu);
            }
        }

 */       
        // Look in controller for firt value

        if (!empty($url)) {
            if (file_exists(APPROOT.'/controllers/' .ucwords($url['controller']). '.php')) {

                // If exists, set as controller
                $this->currentController = ucwords($url['controller']);
    
                //unset 0 index
                unset($url['controller']);
            }
        }
        
        // Required controller
        require_once APPROOT.'/controllers/' .$this->currentController. '.php';

        //Instantiate controller class
        $this->currentController = new $this->currentController;

        // Check de second part of the url
        if (isset($url['action'])) {

            //Check to see if method exists in controller
            if (method_exists($this->currentController, $url['action'])) {
                $this->currentMethod = $url['action'];

                unset($url['action']);
            }
        }

        // Get params
        $this->params = $url ? array_values($url) : [];

        //Call a calback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    } // End construct's method

    public function getUrl()
    {
        /** TODO: update the filter for the URL for preventing code injection */
            $data= $_GET;
            return $data;

        /*
        if (isset($_GET['url'])) {
            $url    = rtrim($_GET['url'], '/');
            $url    = filter_var($url, FILTER_SANITIZE_URL);
            $url    = explode('/', $url);
            return $url;
        }*/
    }
} // Enc Core's class
