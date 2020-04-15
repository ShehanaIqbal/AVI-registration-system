<?php 
	class admin{
		private $utility;
		public $password;

		public function __construct($psw){
    		$this->utility= new utility();
    		$this->password=$psw;
    	}

    	public function loginAdmin(){
    	    echo('ehre');
    		$isCorrect=$this->utility->checkAdminPsw($this->password);
    		if ($isCorrect){
    			return true;
    		}else{
    			return false;
    		}
    	}
	}
 ?>