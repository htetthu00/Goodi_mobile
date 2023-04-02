<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">

</head>
<body class="admin-login-font">
    <section class="vh-100">
        <div class="container-fluid h-custom mt-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <!-- <div class="col-md-9 col-lg-6 col-xl-5">
                    <h1 class="m-color ml-5">Welcome To</h1>
                    <h1 class="mb-5 m-color ml-5">Admin Dashboard</h1>
                    <img src="/images/b4.png" class="w-75 h-75" alt="">
                </div> -->
                <div class="col-md-8 col-lg-6 col-xl-4 card card-border login-card-shadow border-radius-10 p-2">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/images/logo.png" class="w-50 h-50" alt="">
                        </div>
                        <h3 class="card-title p-1 mb-1 m-color semi-bold">Hello,</h3>
                        <h3 class="card-title p-1 mb-5 m-color semi-bold">Welcome Back!</h3>
                        <form action="/admin/login" method="POST">
                            <div class="form-outline mb-3">
                                <!-- <label class="form-label" for="form3Example3">Email address</label> -->
                                <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Email" 
                                name="email" />
                            </div>
                            <div class="form-outline mb-3">
                                <!-- <label class="form-label" for="form3Example4">Password</label> -->
                                <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Password" 
                                name="password" />
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-0">
                                <input class="form-check-input me-2 m-color" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label m-color" for="form2Example3">
                                    Remember me
                                </label>
                                </div>
                                <a href="#!" class="forget-hover m-color">Forgot password?</a>
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2 form-outline">
                                <button type="submit" class="btn m-bg bt-hov white btn-lg form-control form-control-lg"
                                >Login</button>
                                <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                    class="link-danger">Register</a></p> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html> 
