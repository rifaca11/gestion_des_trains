<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Bootstrap Table Reservation Form Template Design</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Bootstrap JS -->
  	<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Table Reservation Form -->
    <section id="book-a-table" class="book-a-table" style="background-image:url('/assets/img/train2.jpg')">
        <div class="container" data-aos="fade-up">
            <div class="row">
    			<div class="col-md-8 offset-md-2 text-center">
    				<h2 class="text-light my-5"> <b>Book A Table</b></h2>
    			</div>
    		</div>

            <form action="" method="post" role="form">
              <div class="form-row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Your last name">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Your first name">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="date" name="date" class="form-control" id="date" placeholder="Date">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="time" class="form-control" name="time" id="time" placeholder="Time">
                </div>

                <div class="col-lg-4 col-md-6 form-group">
              <label class="option my-sm-0 my-2 text-light">
                   <input type="radio" name="radio" checked >Round Trip <span class="checkmark"></span>
                 </label> <label class="option my-sm-0 my-2 text-light mx-2"> 
                <input type="radio" name="radio">One Way <span class="checkmark"></span> </label>
                </div>

                
              </div>
              <button type="submit" class="btn btn text-light float-right mt-3" style="background-color:#6206A8">Book Now</button>
            </form>
        </div>
    </section>
    <!-- End Table Reservation Form -->
</body>
</html>
