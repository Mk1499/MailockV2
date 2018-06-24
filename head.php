<html>
  <head>
    <title> Mail Lock V2 </title> 
    <link rel="shortcut icon" type="image/png" href="img/lock_mail-512.png"/>
    <link rel="stylesheet" href="CSS/bootstrap.min.css" > 
    <link rel="stylesheet" href="CSS/font-awesome.min.css" >  
    <link rel="stylesheet" href="CSS/style.css" >
 </head>

 <body>

           <!-- Starting our Navbar --> 
        
           <nav class="navbar navbar-inverse navbar-fixed-top">
            <!-- class navbar -fixed-top make navbar always on top at scrolling --> 
            
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
      <div class="navbar-header">
      
          <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#ournavbar" >
        
              <span class="sr-only">Toggle navigation</span>
        
              <span class="icon-bar"></span>
        
              <span class="icon-bar"></span>
        
              <span class="icon-bar"></span>
      </button>
     
          <a class="navbar-brand" href="#"><i class="fa fa-envelope"></i><span>MaiLock</span></a> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="ournavbar">
      
        <ul class="nav navbar-nav navbar-right">
        
            <li class="active"><a href="#">Sign In <span class="sr-only">(current)</span></a></li>
        
            <li><a href="#">   <?php 
            
             if (1==1){
                echo "Create Your Account" ;
            }
            else echo "Sign Out" ?>


            </a></li>
        
        </ul>
      </div><!-- /.navbar-collapse -->
  
            </div><!-- End of Container -->

        </nav>
    
        <!-- End our Navbar --> 
