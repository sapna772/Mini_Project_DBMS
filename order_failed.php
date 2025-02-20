<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        session_start(); 
        include("conn_db.php"); 
        include('head.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet">

    <title>Failed to place an order | EATERIO</title>
</head>

<body class="d-flex flex-column h-100">
    <?php include('nav_header.php')?>
    <div class="mt-5"></div>
    <div class="container form-signin text-center reg-fail mt-auto">
            <?php
                if(isset($_GET["err"])){
                    $error_code = $_GET["err"];
                    $err_type = 1;
                    $display_msg =  "Error Code: {$error_code}";
                }else if(isset($_GET["pmt_err"])){
                    $err_type = 2;
                    $display_msg = "Message: ".ucfirst($_GET["pmt_err"]);
                }
            ?>
            <i class="mt-4 bi bi-exclamation-circle text-danger h1 display-2"></i>
            <h3 class="mt-2 mb-3 fw-normal text-bold">Unable to place your order</h3>
            <p class="mb-3 fw-normal text-bold">
                <?php 
                    switch($err_type){
                        case 1: echo "Sorry, the system has encountered with this error"; break;
                        case 2: echo "There is a problem with your payment"; break;
                        default: echo "There is an error in our system.";
                    }
                ?>
            <br/>
                <code><?php echo $display_msg;?></code>
            </p>
            <a class="btn btn-danger btn-sm w-50" href="index.php">Return to Home</a>
    </div>

    <footer
        class="footer d-flex flex-wrap justify-content-between align-items-center px-5 py-3 mt-auto bg-secondary text-light">
        <span class="smaller-font">&copy; 2021 SeriousEater Group<br /><span class="xsmall-font">Pujitha. Sadana. Sapna
                </span></span>
        <ul class="nav justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-light" target="_blank" href="https://github.com/waterthatfrozen/EATERIO"><i
                        class="bi bi-github"></i></a></li>
        </ul>
    </footer>
</body>

</html>