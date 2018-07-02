
	<?php
	
	
	
	

    //include("connect.php");
    $sname = $_SESSION['username'];
        
    
    
      if (isset ($_POST['SendMsg']) and !empty($_POST['msg']) and !empty($_POST['to']) and !empty($_POST['subject'])) {
    $remail = $_POST['to'];
    $q = " SELECT UserName FROM members WHERE Email = '$remail' " ;
    $valid=$conn->query($q) ;
    $Rname=mysqli_fetch_array($valid);
    
    $test= mysqli_num_rows($valid);
    if($test <= 0){
    echo "<script> alert('Sorry but Recieved Email Not Found') ;</script>";	
    }
    else{
    
    $message = openssl_encrypt ($_POST['msg'], "AES-128-ECB", "maillock", 0 ,""); 
    $subject = $_POST['subject'] ; 
        
    $sql = "INSERT INTO chat (message,Msgsubject, Msgfrom, Msgto , RecName ) VALUES ( '$message' , '$subject','$sname' , '$remail','$Rname[0]') " ; 
                $conn->query($sql) ;
    
    echo "<script> alert('Successfully Sent') ;</script>";
    }
    }
    elseif (isset($_POST['SendMsg']) and (empty($_POST['msg']) or empty($_POST['remail']) or empty($_POST['subject']) )){
        
    echo " <br> <p> Please Write Email and Message Correct  "; 	
        
    }
        
        
        ?>
            
    
        </div>
        
        <?php include("foot.html") ; ?>