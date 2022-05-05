<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        $pageMeta['title'] = "Services We Offer | Tag4Technology Solutions"; 
        $pageMeta['description'] = "About Us | Tag4Technology Solutions"; 
        $pageMeta['keywords'] = "Services , Tag4Technology Solutions"; 

        $data['page_meta'] = $pageMeta;
        $data['page_name'] = "services"; 

        echo view('layout/header', $data);
        echo view('pages/services/it-services', $data);
        echo view('layout/footer', $data);
    }

    public function it_outsourcing()
    {
        $pageMeta['title'] = "IT Outsourcing Services | Tag4Technology Solutions"; 
        $pageMeta['description'] = "IT Outsourcing Services | Tag4Technology Solutions"; 
        $pageMeta['keywords'] = "it outsourcing , Tag4Technology Solutions"; 

        $data['page_meta'] = $pageMeta;
        $data['page_name'] = "it-outsourcing"; 

        echo view('layout/header', $data);
        echo view('pages/services/it-outsourcing', $data);
        echo view('layout/footer', $data);
    }

    public function software_development()
    {
        $pageMeta['title'] = "Software Development Services | Tag4Technology Solutions"; 
        $pageMeta['description'] = "Software Development Services | Tag4Technology Solutions"; 
        $pageMeta['keywords'] = "Software Development , Tag4Technology Solutions"; 
                
        $data['page_meta'] = $pageMeta;
        $data['page_name'] = "software-development"; 

        echo view('layout/header', $data);
        echo view('pages/services/software-development', $data);
        echo view('layout/footer', $data);
    }
    public function web_development()
    {
        $pageMeta['title'] = "Web Development Services| Tag4Technology Solutions"; 
        $pageMeta['description'] = "Web Development Services | Tag4Technology Solutions"; 
        $pageMeta['keywords'] = "Web Development Services , Tag4Technology Solutions"; 
                
        $data['page_meta'] = $pageMeta;
        $data['page_name'] = "web-development"; 

        echo view('layout/header', $data);
        echo view('pages/services/web-development', $data);
        echo view('layout/footer', $data);
    }
    public function mobile_development()
    {
        $pageMeta['title'] = "Mobile Development Services | Tag4Technology Solutions"; 
        $pageMeta['description'] = "Mobile Development Services | Tag4Technology Solutions"; 
        $pageMeta['keywords'] = "Mobile Development Services , Tag4Technology Solutions"; 
                
        $data['page_meta'] = $pageMeta;
        $data['page_name'] = "mobile-development"; 

        echo view('layout/header', $data);
        echo view('pages/services/mobile-development', $data);
        echo view('layout/footer', $data);
    }

    public function resource_outsourcing()
    {
        $pageMeta['title'] = "Resource Outsourcing Services | Tag4Technology Solutions"; 
        $pageMeta['description'] = "Resource Outsourcing Services | Tag4Technology Solutions"; 
        $pageMeta['keywords'] = "Resource Outsourcing , Tag4Technology Solutions"; 
                
        $data['page_meta'] = $pageMeta;
        $data['page_name'] = "services"; 

        echo view('layout/header', $data);
        //echo view('pages/services/software-development', $data);
        echo view('layout/footer', $data);
    }

    public function digital_marketing()
    {
        $pageMeta['title'] = "Digital Marketing Services | Tag4Technology Solutions"; 
        $pageMeta['description'] = "Digital Marketing Services | Tag4Technology Solutions"; 
        $pageMeta['keywords'] = "Digital Marketing , Tag4Technology Solutions"; 
                
        $data['page_meta'] = $pageMeta;
        $data['page_name'] = "services"; 

        echo view('layout/header', $data);
        //echo view('pages/services/software-development', $data);
        echo view('layout/footer', $data);
    }

}