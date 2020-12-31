<?php
    require_once "../core/init.php";

    if(get('id-administrator')){
        header('location: ../index.php');
    }
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?=url()?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Petnitipan</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/icon.png">
    <!-- Sweet Alert -->
    <link href="./plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4>Sign In</h4></a>
        
                                <form class="mt-5 mb-5 login-input" action="" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username" name="val-username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="val-password">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" name="sign-in">Sign In</button>
                                </form>
                                <!-- <p class="mt-5 login-form__footer">Dont have account? <a href="page-register.html" class="text-primary">Sign Up</a> now</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include '../templates/footer.php';
?>

<?php


    if(is_clicked('sign-in')){
        $username = get('val-username');
        $password = get('val-password');

        $query  = "SELECT * FROM administrator WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        $hash   = mysqli_fetch_assoc($result)['password'];

        if(password_verify($password, $hash)){
            foreach($result as $row){
                $id_administrator   = $row['id_administrator'];
                $nama = $row['nama'];
                $id_shelter = $row['id_shelter'];
            }

            $_SESSION['id-administrator'] = $id_administrator;
            $_SESSION['nama'] = $nama;
            $_SESSION['id-shelter'] = $id_shelter;
            $_SESSION['login-first'] = false;
            
            echo "<script> window.location.replace('index.php') </script>";
        }else{
            swal('error', 'Username atau password salah!', '');
        }
    }
?>