<?php

namespace App\Controllers;

class Company extends BaseController
{
    public function index()
    {
       
    }

    public function about_us()
    {
        $pageMeta = [
            'title' => 'About us | Tag4Technology Solutions',
            'description' => 'About us | Tag4Technology Solutions',
            'keywords' => 'About us | Tag4Technology Solutions'
        ];

        $data = [
            'page_meta' => $pageMeta,
            'page_name' => 'about'
        ];

        echo view('layout/header', $data);
        echo view('pages/company/about', $data);
        echo view('layout/footer', $data);
    }

    public function our_team()
    {
        $pageMeta['title'] = "Our Team | Tag4Technology Solutions"; 
        $pageMeta['description'] = "Our Team | Tag4Technology Solutions"; 
        $pageMeta['keywords'] = "Our Team , Tag4Technology Solutions"; 
                
        $data['page_meta'] = $pageMeta;
        $data['page_name'] = "ourteam"; 

        echo view('layout/header', $data);
        echo view('pages/company/our-team', $data);
        echo view('layout/footer', $data);
    }
}