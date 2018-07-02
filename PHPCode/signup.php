<?php 

$auth = 0 ;
$username = "" ;
if (isset ($_POST['submit']) and !empty($_POST['username']) and !empty($_POST['password2']) and !empty($_POST['email'])
				and !empty($_POST['password1']) ) {
                    $pass1 = $_POST['password1']  ;
                    if (strlen($pass1) <=  8) {
                        echo " <script> alert('Your password is so small and weak please choose other one '); </script>"	;
                    exit() ; 
                    
                    } 
                    $pass =  openssl_encrypt ($_POST['password1'], "AES-128-ECB", "maillock", 0 ,"");
                    $pass2 =  openssl_encrypt ($_POST['password2'], "AES-128-ECB", "maillock", 0 ,"");
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    
                    $q = " SELECT UserName FROM members WHERE Email = '$email'" ;
                    $valid=	$conn->query($q) ;
                    $test= mysqli_num_rows($valid);
                      
                    
                      
                        if (strlen($pass) <=  8) {
                        echo " <script> alert('Your password is so small and weak please choose other one '); </script>"	;
                    }
                    elseif($test>0)
                    {
                        echo "<p> This email is aleardy member if you forget your password please <a href = 'restore.php'> Click here </a> </p> " ;   
                    }
                    elseif (isset ($_POST['submit']) and (empty($_POST['username']) or empty($_POST['password2']) or empty($_POST['email']) or empty($_POST['password1'])) ) { 
                        
                        echo" <script> alert('all field must be completed Filled') </script> " ;
                        
                       }
                       elseif($pass !=$pass2){
                       
                        echo " <script> alert('two passwords must be matched' ) ; </script>" ;
                    }

                   elseif($pass == $pass2 ){
                    
                    $sql = "INSERT INTO members (UserName,Email,Password) VALUES ('$username','$email','$pass')";
                    
                        $conn->query($sql) ;
                        $auth = 1 ; 

                    
                    header("Location:inbox.php") ;
                    }
                   
                    
                    
                    }
                    $_SESSION['email'] = $email ; 
                    $_SESSION['auth'] = $auth ;
                     $_SESSION['username'] = $username
                    
                    ?>  
