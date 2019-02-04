
<!--
    END OF YEAR PROJECT 2018/2019
-->
<?php
  /*if(!isset($_SESSION['username']))
    {
        include 'staffLogin.php';
        die();
    }
   * 
   */
   
   
?>
<!DOCTYPE html>
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
                <h2>Welcome !
                <a class="btn-danger" href="">logout</a>
                </h2>
            </header>
            <div class="clear"></div>
            <div class="contents">
                <a class="btn-danger active"  href="">Home</a>
                <a class="btn-danger" href="?page=chooseSeat">Make New Reservation</a>
                <a class="btn-danger" href="?page=updateReservation">Update Reservation</a>
                <a class="btn-danger "  href="?page=reservationHistory">Reservation History</a>
                <a class="btn-danger "  href="?page=changePassword">Change Password</a>
                <a class="btn-danger "  href="?page=view">Feedback</a>
                <a class="btn-danger "  href="?page=notification">Notification</a>
                <hr>
                <section id="page">
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
                </section>
            </div>
            <div class="clear"></div>
        <footer>
            <p>Copyright reserved &copy; End of year project 2018/2019</p>
        </footer>
        </div>
       
    </body>
</html>
