

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
                <td>
                <a href="" name="reserve" class="edit" title="Reserve" data-toggle="modal" data-target="<?php echo '#reserve'.$rowG['idT'] ?>"  data-whatever="@mdo"><button class="btn btn-primary"> Reserve</button></a>
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
            <form action="<?php echo '/home/booking/'.$rowG['idT'] ?>" method="POST">
                
                <div class="form-group">
                <label for="examplefirstname">First name</label>
                <input type="text" class="form-control" name="firstname" id="examplefirstname">
                </div>

                <div class="form-group">
                <label for="examplelastname">Last name</label>
                <input type="text" class="form-control" name="lastname" id="examplelastname">
                </div>

                <div class="form-group">
                <label for="exampleemail">Email</label>
                <input type="email" class="form-control" name="email" id="exampleemail">
                </div>

                <div class="form-group">
                <label for="exampletele">Tele</label>
                <input type="text" class="form-control" name="tele" id="exampletele">
                </div>

                <div class="form-group">
                <label for="exampleHoursD">Day</label>
                <input type="date" class="form-control" name="day" id="exampleHoursD" value="<?php echo date("Y-%-%") ?>">
                </div>







                

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn text-light" style="background-color:rgb(146, 25, 120)">Reserve</button>
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
























            
              </div>
              
            <br><br><br><br><br>
            </form>
        </div>
    </section>
    <br><br><br><br><br><br>
    <!-- End Table Reservation Form -->
</body>
</html>
