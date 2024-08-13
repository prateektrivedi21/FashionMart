<?php
require 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.jpg" />
    <title>Fashion Mart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>LOGIN</h3>
                        </div>
                        <div class="panel-body">
                            <p>Login to make a purchase.</p>
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Login" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">Don't have an account yet? <a href="signup.php">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <center>
                    <h2>Connect with us</h2>
                    <table>
                        <tr>
                            <td><a class="footer-link" href="https://www.linkedin.com/in/theprateektrivedi/"><i class="bi bi-linkedin">Linkedin</i></a></td>
                            <td><a class="footer-link" href="https://github.com/geu-acm"><i class="bi bi-github"></i>Github</a></td>
                            <td><a class="footer-link" href="https://www.instagram.com/fashionmart_india_/"><i class="bi bi-instagram">Instagram</i></a></td>
                        </tr>
                    </table>
                </center>
            </div>
            <div class="container">
                <center>
                    <p class="copyright"><i> Copyright &copy; 2023 Prateek Trivedi. All right reserved</i></p>
                </center>
            </div>
        </footer>
    </div>
</body>

</html>