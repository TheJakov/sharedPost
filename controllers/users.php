<?php
class Users extends Controller{
    
    protected function register(Type $var = null)
    {
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->register(), true);
    }

}