<!DOCTYPE html>
<!--End of year project 2018/2019 By Ayeah Godlove Akoni-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>OneWay.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" type="text/css"  href="../resources/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css"  href="../resources/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../resources/css/styles.css" />
        <link rel="stylesheet" type="text/css" href="../resources/css/index1.css" />

        <script src="../resources/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../resources/js/bootstrap.js" type="text/javascript"></script>
   
    </head>
    <body>
        <div class="container">
            <header style=" background-color: #255625;">
                <img style="height: 90px; width: 15%; margin-top:0px;" src="../resources/pic/logo1.png" alt="logo">
                <h1 style="text-align: center; color: white;">Saving Money and Time through OneWay.com</h1>
            </header>
             <div class="clear"></div>
             <div class="nav-bar">
                 <ul>
                     <li><a href="index.php">Home</a></li>
                     <li><a href="?page=chooseSeat" class="active">AddNewReservation</a></li>
                     <li><a href="?page=searchReservation">SearchPreviousReservation</a></li>
                     <li><a href="loginSignup.php">SignUp</a></li>
                     
                 </ul>
             </div>
             <div class="content1">
                  <?php
                           if(@$_GET['page'])
                            {
                               $url = $_GET['page'].".php";
                               if(is_file($url)){
                                   include $url;
                                }
                                else
                                {
                                     echo 'request file is not found !';
                                }
                            }
                        else{
                            include 'chooseSeat.php';
                        }
                    ?>
                   <div class="clear"></div>
             </div>
           
            <footer>
                <p>Copyright reserved &copy; End of year project 2018/2019</p>
            </footer>  
        </div>
    </body>
</html>
