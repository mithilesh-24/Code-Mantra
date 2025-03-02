<!DOCTYPE html>
<html>
    <head>
        <style>
            .p1 {
                font-family: cursive;
                font-size: 150%;
                margin-left: 9%;
                margin-right: 9%;
            }
            h1 {
                margin-left: 3%;
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
            .topnav {
                overflow: hidden;
                background-color: #333;
                position:fixed;
                width: 100%;
                z-index: 2;
                top: 0%;
                margin-left: 0%;
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
            .code{
                display: inline;
                font-size: 22px;
                color: white;
                float: left;
                text-align: center;
                padding: 5px;
                margin: 5px;
                margin-right: 30px;
                }
            .content{
                margin-top: 5%;
            }
            </style>
    </head>
<body>
    <div class="topnav">
        <div class="code">Code Mantra</div>
        <a href="index.php"> Home</a>
        <a  class="active" href="tp.php">Terms and Condition</a>
        <a href="courses.php">Courses</a>
        <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
            <input type="text" placeholder="Search.." name="search2">
            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg></i></button>
        </form>
        <a href="Login.php" style="float: right;">Log-out</a>
        <a href="profile.php" style="float: right;">Profile</a>
    </div>
    <div class="content">
        <h1>Terms and Condition :-</h1>
    <p class="p1"><b>   1. Terms
    By accessing the website at <u>https://www.codemantra.com</u> , you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.<br><br>
    
    2. Use License
    Permission is granted to temporarily download one copy of the materials (information or software) on Code Mantra's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
    modify or copy the materials;
    use the materials for any commercial purpose, or for any public display (commercial or non-commercial);
    attempt to decompile or reverse engineer any software contained on Code Mantra's website;
    remove any copyright or other proprietary notations from the materials; or
    transfer the materials to another person or mirror the materials on any other server.
    This license shall automatically terminate if you violate any of these restrictions and may be terminated by Code Mantra at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.<br><br>
    3. Disclaimer
    The materials on Code Mantra's website are provided on an 'as is' basis. Code Mantra makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.
    Further, Code Mantra does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.
    <br><br>4. Limitations
    In no event shall Code Mantra or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on Code Mantra's website, even if Code Mantra or a Code Mantra authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.
    
    <br><br>5. Accuracy of materials
    The materials appearing on Code Mantra's website could include technical, typographical, or photographic errors. Code Mantra does not warrant that any of the materials on its website are accurate, complete or current. Code Mantra may make changes to the materials contained on its website at any time without notice. However Code Mantra does not make any commitment to update the materials.
    
    <br><br>6. Links
 Code Mantra has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Code Mantra of the site. Use of any such linked website is at the user's own risk.
    
    <br><br>7. Modifications
 Code Mantra may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.
    
    <br><br>8. Governing Law
    These terms and conditions are governed by and construed in accordance with the Indian Law, and you irrevocably submit to the exclusive jurisdiction of the courts in Bengaluru, India for any disputes.</p></b>
    <p class="p1" style="text-align: center;"><b>Thank you</b></p>
</div>
</body>
</html>