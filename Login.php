<?php 
    $valid=0;
    $invalid=0;
    if($_SERVER['REQUEST_METHOD']=='POST'){
      include 'connection.php';
      $username=$_POST['username'];
      $pass=$_POST['pass'];
      $sql="SELECT * FROM login_data WHERE username='$username' AND password='$pass'";
      $result=mysqli_query($con,$sql);
      if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          $valid=1;
          if($valid){
            session_start();
            $_SESSION['username']=$username;
            header('location:index.php');
        }
        }
        else{
         $invalid=1;
        }
      }
    }
?>
<html>
<head>
    <title>CODE MANTRA</title>
    <script>
        function valid(){
            let x=document.forms["form"]["name"].value;
            let y=document.forms["form"]["pass"].value;
            if(x==""&& y==""){
                alert("Fill the data");
                return false;
            }
        }
    </script>
    <style>
        .column {
            float: left;
            width: 55%;
            height: 91.5%;
            padding: 2%;
        }
        .column1{
            float: left;
            width: 37%;
            height: 91.5%;
            padding: 2%;
            color: white;
            background-color: #3498db ;
           
        }
        .video{
            background-image: url(photos/Loop\ Glow\ GIF.gif);
            background-size: cover;
            background-position: fixed;
        }
        .design{
            color: white;
            text-align: center;
        }
        .button {
            background-color: #f8c17f;
            border: none;
            color: black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 16px;
            }
        .button>input{
            border: none;
            background-color: #f8c17f;
        }
        .button input:hover{
            cursor: pointer;
        }
        .top{
            text-align: center;
            border: solid 1px black;
            padding: 15px;
            margin: 5%;
            border-radius: 16px;
            color: white;
            background-color: #5dade2;
        }
        .bottom{
            padding: 10px;
            text-align: center;
            margin: 5%;
            margin-bottom: 2%;
        }
        input{
            border-radius: 16px;
            margin: 4px 2px;
            padding: 10px 20px;
            width: 100%;
        }
        p{
            font-size: larger;
        }
        i{
            font-size: small;
        }
        .input:hover{
            background-color: #f9a847;
        }
        .button:hover{
            background-color: #f9a847;
        }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
    </style>
</head>
<body>
    <div style="height: 100%;">
    <div class="column video">
        <h1 class="design">Welcome to Code Mantra</h1>
    </div>
    <div class="column1">
            <div>
                <h2>Welcome back! <br>Login to your account</h2>
                <i>It's nice to see you again. Ready to code?</i>
                <div class="top">
                    <form action="Login.php" method="POST" id="form" onsubmit="valid">
                        <b>User-name </b><input type="text" name="username" id="name" placeholder="Enter username"><br><br>
                        <b>Password </b><input type="password" name="pass" id="pass" placeholder="Enter password"><br><br>
                        <input type="submit" class="button" value="submit" name="submit" id="submit">
                        <?php
                            if($valid){
                                header('location:index.php');
                            }
                        ?>
                        <?php 
                            if($invalid){
                                echo "<span>Invalid username or password</span>";
                            }
                        ?>
                    </form>
                </div>
            <div class="bottom">
                <h2>Don't have an account?</h2>
                <a href="signup.php" class="button">Sign up</a>
            </div>
        </div>
    </div>
</body>
</html>