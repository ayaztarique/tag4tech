<?php

namespace App\Controllers;

class QATesting extends BaseController
{
    public function index()
    {
        $pageMeta = [
            'title' => 'QA & Testing | Tag4Technology Solutions',
            'description' => 'We provide excellent custom software development services ,| Tag4Technology Solutions',
            'keywords' => 'QA & Testing, | Tag4Technology Solutions'
        ];

        $data = [
            'page_meta' => $pageMeta,
            'page_name' => 'QA & Testing'
        ];

        echo view('layout/header', $data);
        echo view('pages/QA-&-Testing', $data);
        echo view('layout/footer', $data);
        
    }
}