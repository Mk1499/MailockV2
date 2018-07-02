<?php include ('PHPCode/head.php') ; ?> 
<link rel="stylesheet" href="CSS/inbox.css">
<section>

  <h1>Fixed <span>Table header</span></h1>

  <div class="container">
      <div class="row">
          <div class = "col-sm-3">
              <?php include('sidebar.php') ?>
               </div> </div>  
<div class="col-sm-9">
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>from</th>
          <th>Subject</th>
          <th>Message</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">

    <?php 
    $email = $_SESSION['email'];

    $sql="SELECT  Msgsubject ,Msgfrom , message FROM chat where Msgto='$email'";
    $result= $conn->query($sql) ;

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
        echo "<td>" . $row['Msgfrom'] . "</td>";
        echo "<td>" . $row['Msgsubject'] . "</td>";
        echo "<td>" .openssl_decrypt($row['message'], "AES-128-ECB", "maillock", 0, "") . "</td>";
    echo "</tr>" ;
        }
    
    }

    else {
        echo "<h3 class='text-center'>Sorry but your Inbox is Empty now </h3> " ;
    }
    ?>
      </tbody>
    </table>
  </div>
  </div></div>
</div>
</section>

<?php 
include('foot.html'); 
?>