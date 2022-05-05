<?php

namespace App\Controllers;

class ITConsultancy extends BaseController
{
    public function index()
    {
        $pageMeta = [
            'title' => 'IT Consultancy | Tag4Technology Solutions',
            'description' => 'We provide excellent custom software development services ,| Tag4Technology Solutions',
            'keywords' => 'IT Consultancy, | Tag4Technology Solutions'
        ];

        $data = [
            'page_meta' => $pageMeta,
            'page_name' => 'IT Consultancy'
        ];

        echo view('layout/header', $data);
        echo view('pages/IT Consultancy', $data);
        echo view('layout/footer', $data);
        
    }
}