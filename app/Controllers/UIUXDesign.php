<?php

namespace App\Controllers;

class UIUXDesign extends BaseController
{
    public function index()
    {
        $pageMeta = [
            'title' => 'UI/UX Design | Tag4Technology Solutions',
            'description' => 'We provide excellent custom UI/UX Design services| Tag4Technology Solutions',
            'keywords' => 'UI/UX, | Tag4Technology Solutions'
        ];

        $data = [
            'page_meta' => $pageMeta,
            'page_name' => 'UI/UX Design'
        ];

        echo view('layout/header', $data);
        echo view('pages/UI-UXDesign', $data);
        echo view('layout/footer', $data);
        
    }
}