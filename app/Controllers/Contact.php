<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $pageMeta['title'] = "Contact | Tag4Technology Solutions"; 
        $pageMeta['description'] = "Contact Us | Tag4Technology Solutions"; 
        $pageMeta['keywords'] = "Contact , Tag4Technology Solutions"; 

        $data['page_meta'] = $pageMeta;
        $data['page_name'] = "contact"; 

        echo view('layout/header',$data);
        echo view('pages/contact',$data);
        echo view('layout/footer',$data);
    }

    public function save()
    {
        $request = \Config\Services::request();
        $db = db_connect();
        $model = model('ContactModel', true, $db);
        $data = array(    
            'name' => $request->getVar('name'),    
            'email' => $request->getVar('email'),    
            'message' => $request->getVar('message'),   
          );    
          $model->save($data);


          $email = \Config\Services::email();

          $email->setFrom('contact@tag4tech.com', 'Contact Form T4T');
          $email->setTo('ayaztarique@gmail.com');
          //$email->setCC('another@another-example.com');
          //$email->setBCC('them@their-example.com');
      
          $email->setSubject('New Message Received ');

          $body = "Name :  ". $request->getVar('name');
          $body = $body . "Email :  ". $request->getVar('email');
          $body = $body . "Message :  ". $request->getVar('message');

          $email->setMessage($body);
          $email->send();
          return redirect()->to('contact/thank_you');
    }

    public function thank_you()
    {
        $pageMeta['title'] = "Thank You Contact Us | Tag4Technology Solutions"; 
        $pageMeta['description'] = "Thank You Contact Us | Tag4Technology Solutions"; 
        $pageMeta['keywords'] = "Thank You Contact Us, Tag4Technology Solutions"; 

        $data['page_meta'] = $pageMeta;
        $data['page_name'] = "contact"; 

        echo view('layout/header',$data);
        echo view('pages/thankyou',$data);
        echo view('layout/footer',$data);
    }
}