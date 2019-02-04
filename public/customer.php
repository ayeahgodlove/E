<!DOCTYPE html>
<!--
 *****END OF YEAR PROJECT 2018/2019****
 ******AYEAH GODLOVE AKONI************
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>OneWay.com</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css"  href="../resources/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css"  href="../resources/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../resources/css/styles.css" />
        <link rel="stylesheet" type="text/css" href="../resources/css/style2.css" />


        <script src="../resources/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../resources/js/bootstrap.js" type="text/javascript"></script>
        </head>
    <body>
        <div class="container">
            <header>
                <img src="../resources/pic/logo1.png" alt="logo">
                <h3 style="text-align: center; margin-top:10%;">Welcome </h3>
                
            </header>
            <div class="clear"></div>
            <div class="contents" >
                <div class="nav-bar" style="margin-left: 50%">
                    <a class="btn-danger active" href="">Home</a>
                    <a class="btn-danger" href="?page=manageAccount">Manage Account</a>
                    <a class="btn-danger" href="?page=chooseSeat">Reservation</a>
                    <a class="btn-danger" href="?page=checkStatus">Check Status</a>

                    <a class="btn-danger" href="">logout</a>
                    
                </div>
          
                <div class="body">
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
                            include 'home.php';
                        }
                    ?>
                </div>
            </div>
            <footer>
                 <p>Copyright reserved &copy; End of year project 2018/2019</p>
            </footer>
        </div>
    </body>
</html>
