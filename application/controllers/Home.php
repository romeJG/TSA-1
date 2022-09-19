<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        //allways the first line
        parent::__construct();
    }
    // default lagi si index function
    public function index()
    {
        //tatawagin si home_view.php from the views folder and will load it on the page
        $this->load->view('home_view');
    }
}
