
<?php
include('PHPCode/head.php') ; 
$auth = 0 ;
?>

<!-- Write  your code Here  --> 

<section class="index">

<div class = "Shadow">
  <div class="container">
    <div class="row">
    <?php
    $auth = $_SESSION['auth'] ; 
    if($auth){
  
     // include ('PHPCode/auth.php') ;
     include ('sendMsg.php') ;
    }

    else{
    /*  echo " 
      <div class='col-sm-6'>
      <h1>The ease & simplicity of MaiLock, available across devices</h1>
      <a href='Signup.php'><button class='btn btn-danger' > 
     Create Your Free Accont Now  
      </button></a>
      </div>

      " ; */ 

      include('welcome.html') ;
    }
    ?>
      
  </div>
  </div>
</div> 
</section>
<?php

include('foot.html')
?>
