<?php

class Home extends Controller
{
    public $user;
    
    public function __construct()
    {

        $this->user = $this->model('User');
    }
    public function setVars()
    {
        
        if (isset($_POST['name'])) {
            $_SESSION['name'] = $_POST['name'];
        }
        if (isset($_POST['lastName'])) {
            $_SESSION['lastName'] = $_POST['lastName'];
        }
        if (isset($_POST['telephone'])) {
            $_SESSION['telephone'] = $_POST['telephone'];
        }
        if (isset($_POST['street'])) {
            $_SESSION['street'] = $_POST['street'];
        }
        if (isset($_POST['houseNumber'])) {
            $_SESSION['houseNumber'] = $_POST['houseNumber'];
        }
        if (isset($_POST['zipCode'])) {
            $_SESSION['zipCode'] = $_POST['zipCode'];
        }
        if (isset($_POST['city'])) {
            $_SESSION['city'] = $_POST['city'];
        }
        if (isset($_POST['accOwner'])) {
            $_SESSION['accOwner'] = $_POST['accOwner'];
        }
        if (isset($_POST['iban'])) {
            $_SESSION['iban'] = $_POST['iban'];
        }

    }
    public function goToView1($io)
    {
        
        $this->setVars();
        $this->view('templates/header');
        
        if(isset($_SESSION['step'])){
            switch($_SESSION['step']){
                case '2':  if($io=="1"){$this->view('form/view1');}
                            else{
                                $this->view('form/view2');
                            }
                break;
                case '3':  $this->view('form/view3');
                break;
                default:   $this->view('form/view1');
            }
        }
        else{
            $_SESSION['name']='';
            $_SESSION['lastName']='';
            $_SESSION['telephone']='';
            $_SESSION['street']='';
            $_SESSION['houseNumber']='';
            $_SESSION['zipCode']='';
            $_SESSION['city']='';
            $_SESSION['accOwner']='';
            $_SESSION['iban']='';
            $_SESSION['step']="1";
            $this->view('form/view1');
        }
        $this->view('templates/footer');
    }
    public function goToView2()
    {
        $_SESSION['step']='2';
        $this->setVars();
        //$this->user=$this->model('User',$_POST['name'],$_POST['lastName'],$_POST['telephone']);
        $this->view('templates/header');
        $this->view('form/view2');
        $this->view('templates/footer');
    }
    public function goToView3()
    {
        $_SESSION['step']='3';
         $this->setVars();
        $this->view('templates/header');
        $this->view('form/view3');
        $this->view('templates/footer');
    }
    public function setView3()
    {
        $allInfos=array();
        $this->setVars();
        $allInfos['name']= $_SESSION['name'];
        $allInfos['lastName']= $_SESSION['lastName'];
        $allInfos['telephone']= $_SESSION['telephone'];
        $allInfos['street']= $_SESSION['street'];
        $allInfos['houseNumber']= $_SESSION['houseNumber'];
        $allInfos['zipCode']= $_SESSION['zipCode'];
        $allInfos['city']= $_SESSION['city'];
        $allInfos['accOwner']= $_SESSION['accOwner'];
        $allInfos['iban']= $_SESSION['iban'];
        $id='';
        $this->view('templates/header');
        $lastInsertId=$this->user->insertUserDb($allInfos);
        if($lastInsertId=="x"){
            $id="1";
            $result="internal Error in DB";            
        }elseif($lastInsertId=="e"){
            $id="1";
            $result="User already Exists";
        }else{            
            $id=$this->user->sendOutRequest($lastInsertId,$allInfos['accOwner'],$allInfos['iban']);
            if($id=="1"){
                $result="Error in external system";}
            else{
                $result="successfully registered";
            }
        }
        $_SESSION['id']=$id;
        $_SESSION['result']=$result;
        $this->view('form/view4');
        $this->view('templates/footer');
        session_destroy();

    }

}
