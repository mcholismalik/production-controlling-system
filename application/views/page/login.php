<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="<?php echo base_url(); ?>berkas/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>berkas/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>berkas/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>berkas/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">PCS</h1>
            </div>
            <h3>Welcome to Production Controlling System</h3>
            <form class="m-t" role="form" method="POST" action="<?php echo base_url();?>auth/submitLogin">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                <a href="#"><small>Forgot password?</small></a>
            </form>
            <p class="m-t"> <small>Copyright &copy; Samudra Corp. 2019</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>berkas/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>berkas/js/bootstrap.min.js"></script>

</body>

</html>
