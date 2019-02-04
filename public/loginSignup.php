<!DOCTYPE html>
<!--END OF YEAR PROJECT 2018/2019-->
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
                <a class="btn-primary btn-default" style="float: right; color: white; margin-bottom: 5px;" href="index.php">Home</a>
                <h1 style="text-align: center; color: white;">Login/Sign Up</h1>
            </header>
            <div class="clear"><h3 style="text-align: center;">For better platform ussage</h3></div>
            
            <div class="contents">
                <div class="form">
                    <div class="form-header">
                        <p><a class="active" href="?page=loginf" style="padding-right:25% ">Login</a><a href="?page=signu">Sign Up</a></p>
                    </div>
                    <div class="space">
                        <?php
                           if(@$_GET['page']){
                               $url = $_GET['page'].".php";
                               if(is_file($url)){
                                   include $url;
                               }
                               else{
                                   echo 'request file is not found !';
                               }
                           }
                           else{
                               include 'loginf.php';
                           }
                       ?>
                 </div>                    
                </div>
                
            </div>
            <footer>
                <p>Copyright reserved &copy; End of year project 2018/2019</p>
            </footer>
        </div>
    </body>
</html>
