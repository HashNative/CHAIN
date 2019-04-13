

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hash Chain | Login</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">HN</h1>

            </div>
            <h3>Welcome to Hash Chain</h3>
            
            <p>Login in. To see it in action.</p>
            <?php echo validation_errors(); ?>  

            <?php if(!empty($errors)) {
                  echo $errors;
              } ?>
            <form class="m-t" role="form" action="<?php echo base_url('auth/login') ?>" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            </form>
            <p class="m-t"> <small>Hash Chain powered by Hash Native &copy; 2019</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>

</body>

</html>

