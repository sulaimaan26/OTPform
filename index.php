<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Bypass OTP | Selenium Testing</title>
    <link rel="shortcut icon" type="image/ico" href="/otp/home.ico"/>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <script type="text/javascript" src="/otp/js/custom.js"></script>

</head>
<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-body">
                    <h2 class="title">Bypass OTP</h2>
                    <form name="myform" method="post" action="result.php" onsubmit="return validateform()" autocomplete="off">
                    <div class="input-group">
                        <input class="input--style-3"  type="number" pattern="[0-9]*" inputmode="numeric" placeholder="Mobile number" maxlength="10" name="number" id="number" oninput="moveCursor(this,'otp')">
                    </div>
                        <div class="input-group">
                            <input class="input--style-3 input--style-2"  type="number" pattern="[0-9]*" inputmode="numeric" placeholder="OTP" maxlength="6" name="otp" id="otp" oninput="moveCursor2(this,'submit')">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" id="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</body>

</html>
<!-- end document-->
