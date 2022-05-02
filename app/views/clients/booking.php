

<body>
    <!-- Table Reservation Form -->
    <section id="book-a-table" class="book-a-table" style="background-color:#6f42c1">
        <div class="container" data-aos="fade-up">
            <div class="row">
    			<div class="col-md-8 offset-md-2 text-center">
    				<h2 class="text-light my-5"> <b>Book A Table</b></h2>
    			</div>
    		</div>

          


                <?php  //  if(!isset($_SESSION['idPCl']) && empty($_SESSION['idPCl'])){ ?>
                
                    <table class="table table-striped text-light table-hover w-50 mx-auto">
                <thead>
                    <tr>
                        
                        <th>gareD</th>						
                        <th>gareA</th>
                        <th>HoursD</th>
                        <th>HoursA</th>
                        <th>price</th>
                        <th>Place</th>
                        <th>Train</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>
            <?php foreach($tripsG as $rowG) {?>

                <tr>
                <td> <?php echo $rowG['gareD']; ?> </td>            
                <td> <?php echo $rowG['gareA']; ?> </td>
                <td> <?php echo $rowG['HoursD']; ?> </td>
                <td> <?php echo $rowG['HoursA']; ?> </td>
                <td> <?php echo $rowG['price']; ?> </td>
                <td> <?php echo $rowG['nbrPlace']; ?> </td>
                <td> <?php echo $rowG['nomT']; ?> </td>
                <td>
                <a href="" name="reserve" class="edit" title="Reserve" data-toggle="modal" data-target="<?php echo '#reserve'.$rowG['idT'] ?>"  data-whatever="@mdo"><button class="btn btn-primary" > Reserve</button></a>
                </td>
           

                
<!-- start update trip -->

<div class="modal fade" id="<?php echo 'reserve'.$rowG['idT'] ?>" tabindex="-1" aria-labelledby="reserve" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header text-light" style="background-color:rgb(146, 25, 120)">
                <h5 class="modal-title" id="reserve">RESERVE A TRIP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-dark bg-light">
            <form action="<?php echo '/Clients/bookingUs/'.$rowG['idT'] ?>" method="POST">
                <div class="form-group">
                <label for="exampleHoursD">Day</label>
                <input type="date" class="form-control" name="day" id="exampleHoursD" value="<?php echo date("Y-%-%") ?>" >
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn text-light"  style="background-color:rgb(146, 25, 120)">Reserve</button>
            </div>
            </div>
</form>
</tr> 
<?php } ?> 
                </tbody>
                
                </table>
<!-- end show infos trips -->
        </div>
    </div>
<!-- end update trip -->
























                <!-- <div class="col-md-12 form-group">
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Your last name">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Your first name">
                </div>
                <div class="col-md-12 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                </div>
                <div class="col-md-12 form-group">
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone">
                </div>
               
                <div class="col-md-12 form-group">
                 <input type="datetime-local" name="HoursD" class="form-control">
                </div> -->
                
<!--         
                <div class="col-md-12 form-group">
                <select  class="form-control" name="gareD">
                    <option>Gare départ</option>
                    <?php foreach($tripsD as $rowgareD){ ?>
                    <option  class="form-control"> 
                    <?php echo $rowgareD['gareD']?>
                    </option>
                    <?php }  ?>
                    </select>  
                </div>
                <div class="col-md-12 form-group">
                <select  class="form-control" name="gareA">
                    <option>Gare arrivée</option>
                    <?php //foreach($tripsA as $rowgareA){ ?>
                    <option  class="form-control"> 
                    <?php //echo $rowgareA['gareA']?>
                    </option> -->
                 
                    <!-- </select>                
                  </div>
                    </div> -->
                <!-- <div class="col-lg-4 col-md-6 form-group">
              <label class="option my-sm-0 my-2 text-light">
                   <input type="radio" name="radio" checked >Round Trip <span class="checkmark"></span>
                 </label> <label class="option my-sm-0 my-2 text-light mx-2"> 
                <input type="radio" name="radio">One Way <span class="checkmark"></span> </label>
                </div> -->
                              <!-- <button type="submit" class="btn btn text-light float-right mt-3" style="background-color:#6206A8">Book Now</button> -->

              </div>
              
            <br><br><br><br><br>
            </form>
        </div>
    </section>
    <br><br><br><br><br><br>
    <!-- End Table Reservation Form -->
</body>
</html>
