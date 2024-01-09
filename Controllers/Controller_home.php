<?php

class Controller_home extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_home_authentification()
    {
        $m=Model::get_model();
        
        $data=['authentification'=>$m->get_home_authentification()];
        $this->render("connexion",$data);


    }
}