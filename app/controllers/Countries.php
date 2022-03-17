<?php

class Countries extends Controller {

    public function index(){

        $data = [
            'title' => 'countries'
        ];

        $this->view('countries/index', $data);
    }


}