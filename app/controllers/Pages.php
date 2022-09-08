<?php

class Pages extends Controller
{
    public function __construct()
    {
    }


    public function portal()
    {

        $data = [
            'page' => 'Inicio',
        ];

        $this->view('Pages/portal', $data);
    }

    public function about()
    {

        $data = ['title' => 'About us'];
        $this->view('Pages/about', $data);
    }



    public function arraysql($result)
    {
        $arrayresult = array();
        foreach ($result as $key => $value) {
            $arrayresult = $value;
        }
        return $arrayresult;
    }
}
