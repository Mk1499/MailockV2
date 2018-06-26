<?php
include('head.php');
?>

<!-- Write Code Here --> 
<link href="CSS/signin.css" rel="stylesheet" > 

<section class="signIn">
    <div class="shadow">
<h1 class="text-center"> Sign In </h1>

<div class="container">
    <div class="row">
        <div > 
<form>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<?php 
include('foot.php') ; 
?>