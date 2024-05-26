<?php session_start(); ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<link rel="canonical" href="/spotlight/nasha-mukt-bharat-abhiyaan" />
<link rel="shortlink" href="/node/1598649" />
<link rel="shortcut icon" href="https://www.india.gov.in/sites/upload_files/npi/files/favicon_0.ico" type="image/vnd.microsoft.icon" />
<title>Admin Login</title>
<meta name="title" content="National Portal of India" />
<meta name="lang" content="English" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />

<meta name="keywords" content="National Portal of India, India Portal, NPI, Government Information, Government Services, one stop source of government information, single-window access to government information,  Government of India, GoI" />
<meta name="description" content="National Portal of India provides a single-window access to information and services that are electronically delivered from all Government Departments, Institutions and Organizations. It has been a popular source of information to a wide range of stakeholders - from citizens, to government, business and Indian Diasporas. It is a gateway to access Indian Government websites at Centre, State and District levels." />

<meta name="viewport" content="width=device-width, initial-scale=1" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body style="background-color: pink;">
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>Sign In Now</h2>
            <form method="post">
                <input type="text" class="ggg" name="username" placeholder="USER NAME" required="">
                <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
                    <div class="clearfix"></div>
                    <input type="submit" value="Sign In" name="btn_submit">
            </form>
            
    </div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>

<?php 

    include "config.php";

    if(isset($_POST['btn_submit']))
    {
        extract($_POST);

        $username=mysqli_real_escape_string($conn,$_POST['username']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        
        $log=mysqli_query($conn,"select * from tb_login where username='$username' and password='$password'") or die (mysqli_error($conn));
            
        if(mysqli_num_rows($log)>0)
        {
            $fetch=mysqli_fetch_array($log);
            
            $_SESSION['id']=$fetch['id'];
            $_SESSION['username']=$fetch['username'];
            
            echo "<script>";
            echo 'window.location.href="dashboard.php";';
            echo "</script>";
        }
        else
        {
            echo "<script>";
            echo "alert('Login Failed');";
            echo "</script>";
        }
        
    }

?>