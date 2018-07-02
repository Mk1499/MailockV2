
				   
			<!--	<form action='' method='post' id="sending">
            
                    <h1 class = "text-center"> Send New Message Here</h1>


				<br />
			<label class="h3"> To: </label> 
				<input type = "email"  id= "remail"  name="remail"  /> 



				<div class="form-group">
			<label class="h3"> Massage : </label> 
				<textarea name="msg" form="sending" class="form-control">Enter your Message here...</textarea> 
				
				
				<br />
    <button tybe="submit" name="send" class="btn btn-danger"> Send </button>
				</form> --> 



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
                                    <h1>Send New <span>Message</span></h1>
                                </div>
                                <div class="login-form">
                                    <form method ="POST" action=''>
                                        <div class="form-details">
                                            <label class="user">
                                                <input type="text" name="to" placeholder="TO" id="to">
                                            </label>
                                            <label class="user">
                                                <input type="text" name="subject" placeholder="Subject" id="subject">
                                            </label>
                                        </div>
										<div class="form-details">
                                            <label class="user">
                                                <input type="text" name="msg" placeholder="Enter your Msg Here" id="msg">
                                            </label>
                                            
                                        </div>
                                        <button type="submit" class="form-btn" name="SendMsg">Send</button>
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
    include('PHPCode/sendMsg.php')
    ?>
	
	