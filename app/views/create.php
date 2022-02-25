
</head>
<body>
<div class="container-fluid text-light ">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row w-100">
                    <div class="col-xs-5 m-4">
                      <h2>Trips <b>Management</b></h2>
                      <br>         
                       <a href="#" class="btn btn-light"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                           <i class="material-icons"></i> 
                           <span>Add New Trip</span>
                        </a>


                        <!-- create new trip -->

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header text-light" style="background-color:rgb(146, 25, 120)">
                                            <h5 class="modal-title" id="exampleModalLabel">CREATE A NEW TRIP</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-dark bg-light">
                                        <form action="/admin/AddTrips" method="POST">
                                           
                                        <div class="form-group">
                                            <label for="examplegareD">Gare Depart</label>
                                            <input type="text" class="form-control" name="gareD" id="examplegareD">
                                            </div>

                                            <div class="form-group">
                                            <label for="examplegareA">Gare Arrive</label>
                                            <input type="text" class="form-control" name="gareA" id="examplegareA">
                                            </div>

                                            <div class="form-group">
                                            <label for="exampledateD">Date Depart</label>
                                            <input type="datetime-local" class="form-control" name="dateD" id="exampledateD">
                                            </div>

                                            <div class="form-group">
                                            <label for="exampledateD">Date Arrive</label>
                                            <input type="datetime-local" class="form-control" name="dateA" id="exampledateA">
                                            </div>

                                            <div class="form-group">
                                            <label for="exampleprice">Price</label>
                                            <input type="number" class="form-control" name="price" id="exampleprice">
                                            </div>
                                           
                                            <div class="form-group">
                                            <select  class="form-control" name="states" id="exemplestates">
                                            <option>States</option>
                                            <?php foreach($trips as $rowStates){ ?>
                                            <option  class="form-control" > 
                                            <?php echo $rowStates['states']?>
                                            </option>
                                            <?php }  ?>
                                            </select>    
                                            </div>


                                            <div class="form-group">
                                            <select  class="form-control" name="idTr" id="exempletrain">
                                            <option>Choose a train </option>
                                            <?php foreach($train as $rowTrain){ ?>
                                            <option  class="form-control" value="<?php echo $rowTrain['idTr']?>"> 
                                            <?php echo $rowTrain['nomT']?>
                                            </option>
                                            <?php }  ?>
                                            </select>    
                                            </div>


                                            
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn text-light" style="background-color:rgb(146, 25, 120)">Create</button>
                                        </div>
                                    </div>

                                </form>

                                    </div>
                                </div>

                        <!-- end new trip -->

                        


                    </div>
                   
                </div>
            </div>
            <table class="table table-striped text-light table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>gareD</th>						
                        <th>gareA</th>
                        <th>dateD</th>
                        <th>dateA</th>
                        <th>price</th>
                        <th>states</th>
                        <th>train</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>
            <?php foreach($trips as $row){ ?>

                    <tr>
                <td> <?php echo $i; $i++; ?> </td>
                <td> <?php echo $row['gareD']; ?> </td>
                <td> <?php echo $row['gareA']; ?> </td>
                <td> <?php echo $row['dateD']; ?></td>
                <td> <?php echo $row['dateA']; ?> </td> <b class="float-right"></b>
                <td><?php echo  $row['price']; ?></td>
                <td><?php echo  $row['states']; ?></td>
                <td><?php echo  $row['nomT']; ?></td>
                <td>
                <a href="" name="update" class="edit" title="Edit" data-toggle="modal" data-target="#updateLabel" data-whatever="@mdo"><i class="las la-edit"></i></a>




<!-- start update trip -->

<div class="modal fade" id="updateLabel" tabindex="-1" aria-labelledby="updateLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header text-light" style="background-color:rgb(146, 25, 120)">
                <h5 class="modal-title" id="updateLabel">Update A TRIP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-dark bg-light">
            <form action="/admin/UpdateTrips/<?php echo $row['idT']; ?>" method="POST">

                <div class="form-group">
                <label for="examplegareD">Gare Depart</label>
                <input type="text" class="form-control" name="gareD" id="examplegareD" value="<?php echo $row['gareD']; ?>">
                </div>

                <div class="form-group">
                <label for="examplegareA">Gare Arrive</label>
                <input type="text" class="form-control" name="gareA" id="examplegareA" value="<?php echo $row['gareA']; ?>">
                </div>

                <div class="form-group">
                <label for="exampledateD">Date Depart</label>
                <input type="datetime" class="form-control" name="dateD" id="exampledateD" value="<?php echo $row['dateD']; ?>">
                </div>

                <div class="form-group">
                <label for="exampledateA">Date Arrive</label>
                <input type="datetime" class="form-control" name="dateA" id="exampledateA" value="<?php echo $row['dateA']; ?>">
                </div>

                <div class="form-group">
                <label for="exampleprice">Price</label>
                <input type="number" class="form-control" name="price" id="exampleprice" value="<?php echo $row['price']; ?>">
                </div>

                <div class="form-group">
                <select  class="form-control" name="idTr" id="exempletrain">
                <option>Choose a train </option>
                <?php foreach($train as $rowTrain){ ?>
                <?php 
                if($row['nomT'] === $rowTrain['nomT']) 
                {
                ?>
                <option selected class="form-control" value="<?php echo $rowTrain['idTr']?>"> 
                <?php echo $rowTrain['nomT']?>
                </option>
                <?php }  
                else {?>
                
                <option class="form-control" value="<?php echo $rowTrain['idTr']?>"> 
                <?php echo $rowTrain['nomT']?>
                </option>
                <?php }} ?>
                </select>    
                </div>
                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn text-light" style="background-color:rgb(146, 25, 120)">Update</button>
            </div>
            </div>
</form>
               
        </div>
    </div>
                        <!-- end update trip -->

                <a href="" class="delete" title="Cancel" data-toggle="modal" data-target="#deleteLabel" ><i class="las la-eraser"></i></a>
                </td>
                    </tr>
                    <?php } ?>
                </tbody>
                
            </table>
            <br>
            <!-- <div class="clearfix">
                <ul class="pagination w-50 text-center d-flex justify-content-center m-auto">
                    <li class="page-item"><a href="#" class="page-link"><<</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">>></a></li>
                </ul>
            </div> -->
        </div>
    </div>        
</div>  

            <!-- start delete trip -->
            <form action="/admin/CancelTrips/<?php echo $row['idT']; ?>" method="POST">
            <div class="modal" tabindex="-1" id="deleteLabel" tabindex="-1" aria-labelledby="deleteLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header text-light" style="background-color:rgb(146, 25, 120)">
                    <h5 class="modal-title">Delete a trip</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p> <h4>Are You Sure To ignored?</h4></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn text-light" style="background-color:rgb(146, 25, 120)">ignore</button></a>
                </div>
                </div>
            </div>
            </form>
            </div>
    

</body>
</html>



