
</head>
<body>
<div class="container-fluid text-light ">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row w-100">
                    <div class="col-xs-5 m-4">
                      <h2>Admin <b>Profil</b></h2>
                      <br>         
                      <div class="mx-3">
      
    </div>
    <div class="container-fluid py-4 mx-3" >

    <form action="" method="POST">
        <div class="row">
            <div class="col-6">
                <input name="firstname" type="text" class="form-control" placeholder="First Name" aria-label="First Name" value="<?php echo $infosA['firstname']; ?>" required>
            </div>
            <div class="col-6">
                <input type="text" name="lastname" class="form-control" placeholder="Last Name" aria-label="Last Name" value="<?php echo $infosA['lastname']; ?>" required>
            </div>
        </div>
        <br>
        <div class="row">
                <div class="col-6">                                                                
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" value="<?php echo $infosA['email']; ?>" required>
                </div>
                <div class="col-6">
                    <input type="number" name="tele" class="form-control" placeholder="Tel" aria-label="Tel" value="<?php echo $infosA['tele']; ?>" required>
                </div>
        </div>
        <br>
        <div class="row">
                <div class="col-6">                                                                
                    <input type="text" name="city" class="form-control" placeholder="City" aria-label="City" value="<?php echo $infosA['city']; ?>" required>
                </div>
                <div class="col-6">
                    <input type="date" name="dateN" class="form-control" placeholder="DateN" aria-label="DateN" value="<?php echo $infosA['dateN']; ?>" required>
                </div>
        </div>
        <br>
        <div class="row">
                <div class="col-6">
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="password" required>
                </div>
                <div class="col-6">
                    <button class="btn btn w-100 text-light" type="submit" name="update" style="background-color:#240c3fd3;">update</button>
                </div>
        </div>
        <br>
    </form>  
 </div>
 

</body>
</html>



