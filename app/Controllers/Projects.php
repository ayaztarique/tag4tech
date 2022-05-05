<?php

namespace App\Controllers;

class Projects extends BaseController
{
    public function index()
    {
        $pageMeta['title'] = "Our Projects | Tag4Technology Solutions"; 
        $pageMeta['description'] = "Our Projects | Tag4Technology Solutions"; 
        $pageMeta['keywords'] = "Our Projects, QMS, Tag4Technology Solutions"; 

        $data['page_meta'] = $pageMeta;
        $data['page_name'] = "projects"; 

        echo view('layout/header', $data);
        echo view('pages/projects/our-projects', $data);
        echo view('layout/footer', $data);
    } 

    public function queue_management_system()
    {
        $pageMeta['title'] = "Queue Management System | Tag4Technology Solutions"; 
        $pageMeta['description'] = "Queue Management System | Tag4Technology Solutions"; 
        $pageMeta['keywords'] = "qms, queue management system, torronto canada, Tag4Technology Solutions"; 

        $data['page_meta'] = $pageMeta;
        $data['page_name'] = "qms"; 

        echo view('layout/header', $data);
        echo view('pages/projects/queue-system', $data);
        echo view('layout/footer', $data);
    }
}