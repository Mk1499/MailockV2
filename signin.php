<?php
include('PHPCode/head.php');
?>

<!-- Write Code Here --> 
<link href="CSS/signin.css" rel="stylesheet" > 
<section class="signIn">
 <div class="login-area">
        <div class="bg-image">
            <div class="login-signup">
                <div class="container">
                        <div id="login" >
                            <div class="login-inner">
                                <div class="title">
                                    <h1>Welcome <span>back!</span></h1>
                                </div>
                                <div class="login-form">
                                    <form method ="POST" action=''>
                                        <div class="form-details">
                                            <label class="user">
                                                <input type="text" name="username" placeholder="Username" id="username">
                                            </label>
                                            <label class="pass">
                                                <input type="password" name="password" placeholder="Password" id="password">
                                            </label>
                                        </div>
                                        <button type="submit" class="form-btn" name="login">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
include ('PHPCode/signin.php') ; 
include ('foot.html') ; 
?>