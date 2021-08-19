
<?php
class Account{
    
		private $errorArray;

        public function __construct() {
			$this->errorArray = array();		
        }
        public function register($un,$em,$nu ,$pw, $pw2) {
                $this->validateUsername($un);
				$this->validatePasswords($pw, $pw2);
				$this->validateEmails($em);

                if(empty($this->errorArray) == true){
				
				
					$con = mysqli_connect("localhost","root","","beauty");
				$qy="insert into signup(u_name ,email , number, password) values ('$un' ,'$em' , '$nu' , '$pw') ";
				header('location:log1.php');
				mysqli_query($con , $qy);
                }
                else {
                    return false;
                }
        }
            
		public function getError($error) {
			if(!in_array($error, $this->errorArray)) {
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>";
        }
        
		private function validateUsername($un) {

			if(strlen($un) > 25 || strlen($un) < 5) {
				array_push($this->errorArray, "username must be between 5 and 25 characters");
				return;
			}

		}

		private function validateEmails($em) {

			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, "Invalid email id");
				return;
			}

			$con2 = mysqli_connect("localhost","root","","beauty");
			$qy2=" SELECT * FROM signup WHERE email='$em' ";
			$checkEmailQuery = mysqli_query($con2,$qy2);

			// $checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email='$em'");
			if(mysqli_num_rows($checkEmailQuery) != 0) {
				array_push($this->errorArray, "Email already use");
				return;
			}

		}

		private function validatePasswords($pw, $pw2) {
			
			if($pw != $pw2) {
				array_push($this->errorArray, "Password doesn't match");
				return;
			}

			if(preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, "Password should hava only characters and numbers");
				return;
			}

			if(strlen($pw) > 30 || strlen($pw) < 5) {
				array_push($this->errorArray, "Password should be between 5 and 30 characters");
				return;
			}

		}


    }
    
?>