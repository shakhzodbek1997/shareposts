<?php
  class Pages extends Controller {
    public function __construct(){

    }
    
    public function index(){
       $data = [
        'title' => 'Share Posts',
        'description' => 'Simple Social network built on the traversyMVC PHP framework'    
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to Share Posts with other users'    
      ];

      $this->view('pages/about', $data);
    }
  }