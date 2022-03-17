<?php

class Countries extends Controller {
public function __construct(){
    $this->countryModel = $this->model('Country');
}

    public function index(){

        $country = $this->countryModel->getCountries();

        $data = [
            'title' => 'countries',
            'countries' => $country
        ];

        $this->view('countries/index', $data);
    }


}