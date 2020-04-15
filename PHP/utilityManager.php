<?php
	 require_once('DBController.php');
	 require_once('config.php');
	?>

<?php
	class utility{
		private $controller;

		public function __construct(){
			$this->controller= new DBController();
		}

	///////////////////////////////////////////////////////
		public function addAdmin($name,$regNo,$username,$branch,$password){
		    $query="INSERT INTO
		        admin
		        (name, regNo, username, password, branchID, isActive)
		        VALUES
		        ('$name', '$regNo', '$username', '$password', '$branch', 1 )
		    ";
		    $result=$this->controller->insertQuery($query);
            if($result){
                return true;
            }else{
                return false;
            }
        }
    ///////////////////////////////////////////////////////
        public function addGeneralUser($name,$regNo,$username,$branch,$password){
            $query="INSERT INTO
            		        users
            		        (name, regNo, username, password, branchID, isActive)
            		        VALUES
            		        ('$name', '$regNo', '$username', '$password', '$branch', 1 )
            		    ";
            		    $result=$this->controller->insertQuery($query);
                        if($result){
                            return true;
                        }else{
                            return false;
                        }
        }

    //////////////////////////////////////////////////////
        public function checkAdminPsw($password){
            if ($password=='admin123' ){
                return true;
            }else{
                return false;
            }
        }

    //////////////////////////////////////////////////////
      public function getAdminList(){
            $query="SELECT * FROM admin INNER JOIN  branch ON admin.branchID=branch.branchID";
            $result=$this->controller->runQuery($query);
            return $result;
      }

      ////////////////////////////////////////////////////
      public function getUserList(){
          $query="SELECT * FROM users INNER JOIN  branch ON users.branchID=branch.branchID";
          $result=$this->controller->runQuery($query);
          return $result;
      }

      public function RemoveAdmin($id){
           $query = "UPDATE admin SET isActive = 0 WHERE  adminID=$id";
           $result=$this->controller->updateQuery($query);
            if ($result){
                return $result;
            }else{
                return false;
            }
      }

      public function RemoveUser($id){
             $query = "UPDATE users SET isActive = 0 WHERE  userID=$id";
             $result=$this->controller->updateQuery($query);
              if ($result){
                  return $result;
              }else{
                  return false;
              }
       }

      public function EditAdmin($id){
          $query="SELECT * FROM admin INNER JOIN  branch ON admin.branchID=branch.branchID WHERE adminID='$id'";
          $result=$this->controller->runQuery($query);
          return $result;
      }

      public function EditUser($id){
          $query="SELECT * FROM users INNER JOIN  branch ON users.branchID=branch.branchID WHERE userID='$id'";
          $result=$this->controller->runQuery($query);
          return $result;
      }

      public function UpdateAdmin($name,$regNo,$username,$branchID,$id){
           $query = "UPDATE admin SET name='$name',regNo='$regNo',username='$username',branchID='$branchID' WHERE  adminID=$id";
           $result=$this->controller->runQuery($query);
           return $result;
      }

      public function UpdateUser($name,$regNo,$username,$branchID,$id){
           $query = "UPDATE users SET name='$name',regNo='$regNo',username='$username',branch='$branchID' WHERE  userID=$id";
           $result=$this->controller->runQuery($query);
           return $result;
      }
  }