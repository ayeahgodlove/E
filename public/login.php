<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>oneway.com</title>
        
        <link rel="stylesheet" type="text/css"  href="../resources/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css"  href="../resources/css/bootstrap.css" >
        <link rel="stylesheet" type="text/css" href="../resources/css/styles.css" >
        
        <script src="../resources/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../resources/js/bootstrap.js" type="text/javascript"></script>
        <style>
            /* Full-width input fields */
            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
                background-color: cadetblue;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            /* Center the image and position the close button */
            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
                position: relative;
            }

            img.avatar {
                width: 30%;
                border-radius: 50%;
            }

            .container1{
                padding: 20px;
            }

            span.psw {
                float: right;
                padding-top: 0px;
            }

         

            /* Modal Content/Box */
            .modal-content {
              
                margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
            }

            /* Add Zoom Animation */
           

            @-webkit-keyframes animatezoom {
                from {-webkit-transform: scale(0)} 
                to {-webkit-transform: scale(1)}
            }

            @keyframes animatezoom {
                from {transform: scale(0)} 
                to {transform: scale(1)}
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                   display: block;
                   float: none;
                }
               
            }
        </style>
    </head>
    <body >

             
        <form class="modal-content " action="" >
                    <div class="imgcontainer">
                        <img src="../resources/pic/logo1.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="container1">
                      <label><b>Username</b></label>
                      <input type="text" placeholder="Enter Username" name="uname" required>

                      <label><b>Password</b></label>
                      <input type="password" placeholder="Enter Password" name="psw" required>

                      <button type="submit">Login</button>
                      <input type="checkbox" checked="checked"> Remember me
                    </div>
                    <div class="container1" style="background-color:#f1f1f1">
                          <span class="psw">Forgot <a href="#">password?</a></span>
                          
                   </div>
                  </form>
        <footer>
              <p>Copyright reserved &copy; End of year project 2018/2019</p>
        </footer>
    </body>
</html>
