 <!-- section -->

    <!-- table result of trip -->
    <div class="table-responsive col-lg-10 m-auto border mt-5">
			<table class="table table-hover table-borderless">
				<thead class="table-dark">
					<tr>
						<th scope="col">Departure City</th>
						<th scope="col">Arrival City</th>
						<th scope="col">Date of Departure</th>
						<th scope="col">Arrival Date</th>
						<th scope="col">Price</th>
						<th scope="col">Book</th>
						<!-- <th scope="col">Cancel</th> -->
					</tr>
				</thead>
				<tbody>
					<?php foreach($getTrips as $trips) : ?>
					<tr>
						<td><?php echo $trips['gareD']; ?></td>
						<td><?php echo $trips['gareA'];?></td>
						<td><?php echo $trips['HoursD']; ?></td>
						<td><?php echo $trips['HoursA'];?></td>
						<td><?php echo $trips['price'];?></td>
						<td>
                            <button type="submit" name="book" class="btn btn-primary editbtn" >Book</button> 
                            <!-- <button type="submit" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Book</button>  -->
							
						</td>
						
					</tr>
                    <?php endforeach; ?>
				</tbody>
			</table>
		</div>





    <!-- modal popup -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Book Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <input type="hidden" name="idT" value="<?php echo $trips['idT']; ?>">
                        <div class="mb-3">
                            <label class="form-label required">Departure City</label>
                            <input type="text" class="form-control" value="<?php echo $trips['gareD']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Arrival City</label>
                            <input type="text" class="form-control" value="<?php echo $trips['gareA']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Date of Departure</label>
                            <input type="text" class="form-control" value="<?php echo $trips['HoursD']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Arrival Date</label>
                            <input type="text" class="form-control" value="<?php echo $trips['HoursA']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">prix</label>
                            <input type="text" class="form-control" value="<?php echo $trips['price']; ?>">
                        </div>
                       
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </a>
                    
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    

    <!-- pop up modal with bootstrap   -->

    <div class="modal fade" id="BookingModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Trip Information </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label> Departure City </label>
                            <input type="text" name="gareD" id="gareD" class="form-control" readonly >
                        </div>

                        <div class="form-group">
                            <label> Arrivale City </label>
                            <input type="text" name="gareA" id="gareA" class="form-control" readonly >
                        </div>

                        <div class="form-group">
                            <label> Date of Departure </label>
                            <input type="time" name="HoursD" id="HoursD" class="form-control" readonly >
                        </div>

                        <div class="form-group">
                            <label> Arrival Date </label>
                            <input type="time" name="HoursA" id="HoursA" class="form-control" readonly >
                        </div>
                        <div class="form-group">
                            <label> Price </label>
                            <input type="text" name="price" id="price" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label> First Name </label>
                            <input type="text" name="firstname" class="form-control" value="<?=$_SESSION["firstnameCl"]?>"  readonly>
                        </div>
                        <div class="form-group">
                            <label> Last Name </label>
                            <input type="text" name="lastname" class="form-control" value="<?=$_SESSION["lastnameCl"]?>"  readonly>
                        </div>
                        <div class="form-group">
                            <label> Phone Number </label>
                            <input type="text" name="tele" class="form-control" value="<?=$_SESSION["teleCl"]?>"  readonly>
                        </div>
                        <div class="form-group">
                            <label> Email Address </label>
                            <input type="text" name="email" class="form-control" value="<?=$_SESSION["emailCl"]?>"  readonly>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="insert" class="btn btn-primary">Confirm</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



