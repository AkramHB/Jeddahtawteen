<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>البرنامج التدريبي لتوطين الوظائف بمحافظة جدة-منصة التقييم</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets1/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets1/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets1/css/form-elements.css">
        <link rel="stylesheet" href="assets1/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets1/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets1/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets1/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets1/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets1/ico/apple-touch-icon-57-precomposed.png">
<style>


@import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
* {
    font-family: 'Droid Arabic Kufi', serif !important;
}
 html, body {
            overflow-x: hidden;
          }</style>



    </head>

    <body>
            <?php
            error_reporting(0);



     if($_POST["username"] && $_POST["password"]){

         if($_POST["username"] == "admin" && $_POST["password"] == "0550496601"){
            $_SESSION["privilege"] = "admin";
            echo '<script type="text/javascript">' . "\n"; 
            echo 'window.location="info/committee-display-individuals.php";'; 
            echo '</script>';
         }

     }
?>


        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                                <img src="assets/images/footer/ProgramLogo.png" class="img-fluied">
                             <br> <br>
                            <h1><strong>أهلا بكم في منصة التقييم</strong>  </h1>
                           
                            <div class="description">
                             
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top" style="background-color:#f1eff0;">
                        		<div class="form-top-left">
                        			<h3>الدخول إلى حسابك</h3>
                            		<p>فضلا أدخل اسم المستخدم والرقم السري الخاص بك:</p>
                        		</div>
                        		<div class="form-top-right">
<img src="https://cdn4.iconfinder.com/data/icons/outline-2/64/logout-64.png">                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
			                        </div>
			                        <button type="submit" class="btn" style="background-color:#426853; color:#caae27;"> Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                 
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets1/js/jquery-1.11.1.min.js"></script>
        <script src="assets1/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets1/js/jquery.backstretch.min.js"></script>
        <script src="assets1/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets1/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>