<html>
    <head>
        <style>
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
</html>
<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='24csec03';
$DATABASE='codemantra';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($con){
   //echo connection successfully;
}
else{
    die(mysqli_error($con));
}
?>