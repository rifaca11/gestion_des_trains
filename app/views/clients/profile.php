
<br>

<div class="container reserv-slide">

    <div class="row main-slide-content">
        <div class="col-6">
            <h3><?php echo $_SESSION['firstnameCl'].'  '. $_SESSION['lastnameCl']?></h3><br>
        </div>
        <br>
    </div>
</div>  
<br>
<div class="container">
<form action="" method="POST">
        <div class="row">
            <div class="col-6">
                <input name="firstname" type="text" class="form-control" placeholder="First Name" aria-label="First Name" value="<?php echo $infosP['firstname']; ?>">
            </div>
            <div class="col-6">
                <input type="text" name="lastname" class="form-control" placeholder="Last Name" aria-label="Last Name" value="<?php echo $infosP['lastname']; ?>">
            </div>
        </div>
        <br>
        <div class="row">
                <div class="col-6">                                                                
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" value="<?php echo $infosP['email']; ?>">
                </div>
                <div class="col-6">
                    <input type="number" name="tele" class="form-control" placeholder="Tel" aria-label="Tel" value="<?php echo $infosP['tele']; ?>">
                </div>
        </div>
        <br>
        <div class="row">
                <div class="col-6">                                                                
                    <input type="text" name="city" class="form-control" placeholder="City" aria-label="City" value="<?php echo $infosP['city']; ?>">
                </div>
                <div class="col-6">
                    <input type="date" name="dateN" class="form-control" placeholder="DateN" aria-label="DateN" value="<?php echo $infosP['dateN']; ?>">
                </div>
        </div>
        <br>
        <div class="row">
                <div class="col-6">
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="password">
                </div>
                <div class="col-6">
                    <button class="btn btn-primary w-100" type="submit" name="update">update</button>
                </div>
      
        </div>
        <br>
    </form>
</div>
<br><br>