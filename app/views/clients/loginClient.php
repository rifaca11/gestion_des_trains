<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">

</head>

    <main class="page-auth">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="auth-wrapper">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h2 class="auth-section-title">Log In</h2>
                                <p class="auth-section-subtitle">Sign in to your account to continue.</p>
                                <form action="/Clients" method="POST">
                                    <div class="form-group">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email *">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <sup>*</sup></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password *">
                                    </div>
                                    <div class="form-actions-wrapper d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="keepLogin">
                                            <label class="form-check-label" for="keepLogin">
                                                keep me login
                                            </label>
                                        </div>
                                        <a href="#!" class="forgot-password-link">Forgot password?</a>
                                    </div>
                                   <button class="btn btn-primary btn-auth-submit" type="submit">Submit</button>
                                </form>
                                <p class="mb-0">
                                    <a href="/home/signup" class="text-dark font-weight-bold">New Client ? Sign Up</a>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <img src="/assets/img/login.png" alt="login" class="img-fluid">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    </footer> -->
    <script src="/assets/jquery/jquery.min.js"></script>
    <script src="/assets/popper.js/popper.min.js"></script>
    <script src="/assets/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>