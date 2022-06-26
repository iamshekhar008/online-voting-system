<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            <a style=" text-align: right;color:white;" href="../Index.php"> Click here to goto HOME</a>
            <hr>
             <div id="reg">
            <h2>Registration</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="Text" name="mob" placeholder="Roll Id/Party Id" required> <p style="color: white;" >*if applying as group provide party id insteadOf Roll Id</p> <br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Branch" required>
                        <br><br>
                    <div id="upload" style="width: 30%">
                        Upload ID CARD image: <input type="file" id="profile" name="image" required>
                        <p>*upload your party symbol if you are applying as group</p>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button class="loginbtn glow-button" type="submit" name="registerbtn">Register</button><br><br>
                   
                </form>
                </div>
              <p style="color:white;"> Already user? <a href="../loginpage.php">Login here</a></p> 
            </center>
    </body>
</html>