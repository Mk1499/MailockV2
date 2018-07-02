<?php
include ('PHPCode/head.php');
//include ("connect.php") ;
?>

<!-- Write Code Here --> 
<link href="CSS/signin.css" rel="stylesheet" > 
<section class="Reg">
<div class="login-area">
        <div class="bg-image">
            <div class="login-signup">
                <div class="container">

<div id="register" class="tab-pane">
        <div class="login-inner">
             <div class="title">
                 <h1>Welcome <span>back!</span></h1>
             </div>
             <div class="login-form">
                 <form method = "POST" action =' ' >
                     <div class="form-details">
                         <label class="user">
                             <input type="text" name="username" placeholder="Full Name" id="username">
                         </label>
                         <label class="mail">
                             <input type="email" name="email" placeholder="Email Address" id="mail">
                         </label>
                         <label class="pass">
                             <input type="password" name="password1" placeholder="Password" id="password">
                         </label>
                         <label class="pass">
                             <input type="password" name="password2" placeholder="Confirm Password" id="password">
                         </label>
                     </div>
                     <button type="submit" class="form-btn" onsubmit="" name="submit">Send</button>
                 </form>
             </div>
         </div>
     </div>
     </div></div></div></div>
</section>


<?php 
include('PHPCode/signup.php') ; 
?> 



<?php 
include('foot.html') ; 
?>

