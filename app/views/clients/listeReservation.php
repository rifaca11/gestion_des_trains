
<body>
    <!-- Table Reservation Form -->
    <section id="book-a-table" class="book-a-table" style="background-color:#6f42c1">
        <div class="container" data-aos="fade-up">
            <div class="row">
    			<div class="col-md-8 offset-md-2 text-center">
    				<h2 class="text-light my-5"> <b>Your booking</b></h2>
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
                <?php $i=1; 
                // print_r($tripsR);
                ?>
            <?php foreach($tripsR as $rowR) {

                  ?>
                <tr>
                <td> <?php echo $rowR['gareD']; ?> </td>
                <td> <?php echo $rowR['gareA']; ?> </td>
                <td> <?php echo $rowR['HoursD']; ?> </td>
                <td> <?php echo $rowR['HoursA']; ?> </td>
                <td> <?php echo $rowR['price']; ?> </td>
                <td>
    
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="<?php echo '#reserve'.$rowR['idRes'] ?>">
                     cancel
                    </button>

                <!-- Modal -->
                <div class="modal fade" id="<?php echo 'reserve'.$rowR['idRes'] ?>" tabindex="-1" aria-labelledby="<?php echo 'exem'.$rowR['idRes'] ?>" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="<?php 'exem'.$rowR['idRes']; ?>">Cancel book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">        
                              <form action="<?php echo '/Clients/CancelReservation/'.$rowR['idRes']; ?>" method="POST">
                                    <p> <h4>Are You Sure To Canceled?</h4></p>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn text-light" style="background-color:rgb(146, 25, 120)">cancel</button></a>
                  </div>
                        </form>
                </div>
              </div>
                </div>


            
              
                
       
</tr> 
<?php } ?> 
                </tbody>
                
                </table>


              </div>
              
            <br><br><br><br><br>
            
        </div>
    </section>
    <br><br><br><br><br><br>
 










<!-- <a href="" class="edit" title="cancel" data-toggle="modal" data-target="<?php // echo '#exampleModalLabel'.$rowR['idRes']; ?>"><button class="btn-light p-1"> Cancel</button></a>
                </td>
<div class="modal fade" id="<?php //'res'.$rowR['idRes']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="<?php // 'exampleModalLabel'.$rowR['idRes']; ?>">Cancel book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">        
                   <form action="<?php// echo '/admin/CancelReservation/'.$rowR['idRes']; ?>" method="POST">
                        <p> <h4>Are You Sure To Canceled?</h4></p>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn text-light" style="background-color:rgb(146, 25, 120)">ignore</button></a>
      </div>
            </form>
    </div>
  </div>
</div> -->