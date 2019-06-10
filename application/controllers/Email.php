<?php

class Email extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $this->render_template('category/index', $this->data);
    }


    public function send(){
        $this->load->library('email');

        $this->email->from('your@example.com', 'Your Name');
        $this->email->to('someone@example.com');
        $this->email->cc('another@another-example.com');
        $this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        if($this->email->send()){
            $data['message'] = 'Email sent successfully!';
        }else{
            $data['message'] = 'Something went wrong!';
        }
    }
}