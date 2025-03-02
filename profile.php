<html>
    <head>
        <title>Code Mantra</title>
        <link rel="stylesheet" href="index.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        .topnav {
            overflow: hidden;
            background-color: #333;
            position:fixed;
            width: 100%;
            z-index: 2;
            top: 0%;
        }
        
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .topnav a:hover {
            background-color: red;
            color: white;
        }
        
        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
        * {
        box-sizing: border-box;
        }
        .example{
            display: inline-block;
        }
        form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
        }

        form.example button {
        float: left;
        width: 20%;
        padding: 10px;
        background: #2196F3;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        cursor: pointer;
        }

        form.example button:hover {
        background: #0b7dda;
        }

        form.example::after {
        content: "";
        clear: both;
        display: table;
        }
    .content{
        text-align: center;
        margin: 35%;
        margin-top: 5%;
    }
  </style>
    </head>
    <body>
        <div class="topnav">
            <div class="code">Code Mantra</div>
            <a href="index.php"> Home</a>
            <a href="tp.php">Terms and Condition</a>
            <a href="courses.php">Courses</a>
            <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                <input type="text" placeholder="Search.." name="search2">
                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                  </svg></i></button>
            </form>
            <a href="Login.php" style="float: right;">Log-out</a>
            <a href="profile.php" class="active" style="float: right;" disabled>Profile</a>
        </div>
        <div class="card content" style="width:400px">
            <img class="card-img-top" src="photos/person.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Profile</h4>
              <p class="card-text"></p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
    </body>
</html>