<html>
<head>
	<title>SharedPost</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">SharedPost</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares </a>
            </li>
        </ul>

        <ul class="navbar-nav navbar-right">

        <?php if(isset($_SESSION['is_logged_in'])) : ?>

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?> </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout </a>
            </li>  

        <?php else: ?>

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register </a>
            </li>      

        <?php endif; ?>

        </ul>
    </div>
    </nav>
    
    <!-- content under navbar currently -->
    <div class="d-flex justify-content-center" style="margin-top: 3.5%;">
        <div class="row">
        <?php require($view); ?>
        </div>
    </div>

</body>
</html>