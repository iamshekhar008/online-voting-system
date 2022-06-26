<?php
    session_start();
    $connect = mysqli_connect("localhost", "root", "", "online-voting-system");
    $getGroups = mysqli_query($connect, "select name, photo, votes, id from user where role=2 ");
        $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
        $_SESSION['groups'] = $groups;
    ?>
<html>
<head>
    
    <link rel="stylesheet" href="css/mainstyle.css">
    <title>Online Voting System</title>
</head>
<body>
    <div id="header">
        Online Voting System
        </div>
       <a class="innerhead" href="loginpage.php">Login</a> | <a class="innerhead"  href="./routes/register.php">Register Here</a> | <a class="innerhead" href="./routes/about.html">About</a>
           
        
  
    
    <hr>
      <br><br>
        <P style="color:white;font-size: 20px;">The stats for STUDENT UNINON ELECTION BIT PATNA 2022 are:</P>
      <div id='stats'>
      <?php

    
    
    for($i=0; $i<count($groups); $i++){
        ?>
        <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <img style="float: right" src="../uploads/<?php echo $groups[$i]['photo']?>" height="80" width="80">
                                <b>Group Name : </b><?php echo $groups[$i]['name']?><br><br>
                                <b>Votes :</b> <?php echo $groups[$i]['votes']?><br><br>
    </div>
        <?php                   
    }

?>            
                    <a href="./routes/Chart.php">Click here for more stats</a>
        </div>
            <br><br>
        <button class="vo" type="submit" name="vo"><a style="color:white;" href="loginpage.php">CLICK HERE TO CAST YOUR VOTE</a></button><br><br>
</body>
</html>
