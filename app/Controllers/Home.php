<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $pageMeta = [
            'title' => 'IT Outsourcing and Software Development Agency in North America | Tag4Technology Solutions',
            'description' => 'We provide excellent custom software development services ,| Tag4Technology Solutions',
            'keywords' => 'IT Outsourcing, | Tag4Technology Solutions'
        ];

        $data = [
            'page_meta' => $pageMeta,
            'page_name' => 'home'
        ];

        echo view('layout/header', $data);
        echo view('pages/home', $data);
        echo view('layout/footer', $data);
        
    }
}