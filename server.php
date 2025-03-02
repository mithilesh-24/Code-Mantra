<?php
  $register=0;
  $unregister=0;
  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connection.php';
    $name =$_POST['name'];
    $email =$_POST['ename'];
    $username=$_POST['uname'];
    $pass=$_POST['pswd'];
    $sql="SELECT * FROM login_data WHERE email='$email' AND username='$username'";
    $result=mysqli_query($con,$sql);
    if($result){
      $num=mysqli_num_rows($result);
      if($num>0){
        $unregister=1;
      }
      else{
        $sql="INSERT INTO login_data values('$name','$email','$username','$pass')";
        $result=mysqli_query($con,$sql);
        if($result){
          $register=1;
        }
        else{
          die(mysqli_error($con));
        }
      }
    }
  }
?>
<html>
    <head>
        <title>COde Mantra</title>
        <style>
            body{
                background-image: url(photos/signup.gif);
                background-size: cover;
                color: white;
            }
            .design{
                margin: 20%;
                border: 2px solid black;
                text-align: center;
                padding: 30px;
                margin-top: 5%;
            }
            .button{
                display: inline-block;
                background-color: #28b463;
                color: white;
                padding: 15px 30px;
                text-decoration: none;
                border-radius: 5px;
                font-size: 1.2em;
                border-radius: 16px;
                transition: transform .2s;
            }
            .button:hover{
                background-color: #239b56;
                transform: scale(1.2); 
            }
        </style>
    </head>
    <body>
<?php 
  if($register){
    echo "
    <div class='design'>
    <h2>You have created a account. click login and learn everything</h2><br><br>
    <a href='login.php' class='button'>login</a>
    </div>
    ";
    }
?>
<?php 
    if($unregister){
        echo "
        <div class='design'>
        Entered data is already exist<br><r><br>
        <a href='signup.php' class='button'>back</a>
        </div>
        ";
    }
?>
</body>
</html>