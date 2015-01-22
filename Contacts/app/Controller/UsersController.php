<?php
class UsersController extends AppController{
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');
    public function index(){
      $user = $this->User->find('all');
        $this->set(array(
            'user'=>$user,
           
        ));
    }
    public function view($id){
        $user = $this->User->findById($id);
        $this->set(array(
            'user'=>$user,
            
        ));
        
    }
    
}
