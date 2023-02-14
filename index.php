<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LOGIN FORM</title>
    <style>
        .gradient-custom-2 {
            background: #fccb90;

            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <h4 class="mt-1 mb-5 pb-1">Free testing webform </h4>
                                    </div>

                                    <form action="login.php" method="post">
                                        <p class="text-center text-primary">Enter username and password for try to
                                            crack. </p>
                                        <?php if (isset($_GET['error'])) { ?>
                                            <p class="alert alert-danger p-2" style="font-size: 17px;">
                                                <?php echo $_GET['error']; ?>
                                            </p>
                                        <?php } ?>
                                        <div class="form-outline mb-4">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control" name="uname"
                                                placeholder="Enter username" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Enter password" />
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit"> Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4 fst-italic">Crack Me</h4>
                                    <p class="small mb-0 fst-italic">Free testing online webform for
                                        <span class="text-warning">CodeCrackers*</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>