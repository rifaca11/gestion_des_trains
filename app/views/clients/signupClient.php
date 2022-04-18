
    <main class="page-auth">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="auth-wrapper">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h2 class="auth-section-title">Create account</h2>
                                <p class="auth-section-subtitle">Create your account to continue.</p>
                                <form action="/Login/register" method="POST">
                                    <div class="form-group">
                                        <label for="firstname">First Name <sup>*</sup></label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="laststname">Last Name <sup>*</sup></label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="firstname">Tele <sup>*</sup></label>
                                        <input type="number" class="form-control" id="tele" name="tele" placeholder="Tele" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City <sup>*</sup></label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="dateN">Date Naissance <sup>*</sup></label>
                                        <input type="date" class="form-control" id="dateN" name="dateN" placeholder="DateN" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <sup>*</sup></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    </div>
                                   
                                    <button class="btn btn-primary btn-auth-submit" type="submit">Create account</button>
                                </form>
                                <p class="mb-0">
                                    <a href="/home/loginC" class="text-dark font-weight-bold">Already have an acocunt? Sign in</a>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <img src="/assets/img/Register.png" alt="login" class="img-fluid">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>