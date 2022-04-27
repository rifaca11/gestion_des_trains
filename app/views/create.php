
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
        <div class="modal-header text-light" style="background-color:#240c3fd3;">
            <h5 class="modal-title" id="exampleModalLabel">CREATE A NEW TRIP</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-dark bg-light">
        <form action="/admin/AddTrips/" method="POST">
            
        <div class="form-group">
            <label for="examplegareD">Gare Depart</label>
            <input type="text" class="form-control" name="gareD" id="examplegareD" required>
            </div>

            <div class="form-group">
            <label for="examplgareA">Gare Arrive</label>
            <input type="text" class="form-control" name="gareA" id="examplegareA" required>
            </div>

            <div class="form-group">
            <label for="exampleHoursD">Date Depart</label>
            <input type="time" class="form-control" name="HoursD" id="exampleHoursD" required>
            </div>

            <div class="form-group">
            <label for="exampleHoursD">Date Arrive</label>
            <input type="time" class="form-control" name="HoursA" id="exampleHoursA" required>
            </div>

            <div class="form-group">
            <label for="exampleprice">Price</label>
            <input type="number" class="form-control" name="price" id="exampleprice" required>
            </div>
            

            

            <div class="form-group">
            <select  class="form-control" name="idS" id="exemplestates">
            <option>States</option>
            <?php foreach($states as $rowStates){ ?>
            <option  class="form-control" value="<?php echo $rowStates['idS']?>">
            <?php echo $rowStates['status']?>
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
            <button type="submit" class="btn text-light" style="background-color:#240c3fd3;">Create</button>
        </div>
    </div>

</form>

    </div>
</div>

<!-- end new trip -->

                        


                    </div>
                   
                </div>
            </div>
<!-- show infos trips  -->
            <table class="table table-striped text-light table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>gareD</th>						
                        <th>gareA</th>
                        <th>HoursD</th>
                        <th>HoursA</th>
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
                <td> <?php echo $row['HoursD']; ?></td>
                <td> <?php echo $row['HoursA']; ?> </td> <b class="float-right"></b>
                <td><?php echo  $row['price']; ?></td>
                <td><?php echo  $row['status']; ?></td>
                <td><?php echo  $row['nomT']; ?></td>
                <td>
                <a href="" name="update" class="edit" title="Edit" data-toggle="modal" data-target="<?php echo '#updateLabel'.$row['idT']; ?>" data-whatever="@mdo"><i class="las la-edit"></i></a>
                <!-- <a href="" class="delete" title="Cancel" data-toggle="modal" data-toggle="modal" data-target="<?php echo '#deleteLabel'.$row['idT']; ?>" ><i class="las la-eraser"></i></a> -->
                </td>
                        </tr>
            


<!-- start update trip -->

<div class="modal fade" id="<?php echo 'updateLabel'.$row['idT']; ?>" tabindex="-1" aria-labelledby="<?php echo 'updateLabel'.$row['idT']; ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header text-light" style="background-color:#240c3fd3;">
                <h5 class="modal-title" id="<?php echo 'updateLabel'.$row['idT']; ?>">Update A TRIP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-dark bg-light">
            <form action="/admin/UpdateTrips/<?php echo $row['idT']; ?>" method="POST">

                <div class="form-group">
                <label for="examplegareD">Gare Depart</label>
                <input type="text" class="form-control" name="gareD" id="examplegareD" value="<?php echo $row['gareD']; ?>" required>
                </div>

                <div class="form-group">
                <label for="examplegareA">Gare Arrive</label>
                <input type="text" class="form-control" name="gareA" id="examplegareA" value="<?php echo $row['gareA']; ?>" required>
                </div>

                <div class="form-group">
                <label for="exampleHoursD">Date Depart</label>
                <input type="time" class="form-control" name="HoursD" id="exampleHoursD" value="<?php echo $row['HoursD']; ?>" required>
                </div>

                <div class="form-group">
                <label for="exampleHoursA">Date Arrive</label>
                <input type="time" class="form-control" name="HoursA" id="exampleHoursA" value="<?php echo $row['HoursA']; ?>" required>
                </div>

                <div class="form-group">
                <label for="exampleprice">Price</label>
                <input type="number" class="form-control" name="price" id="exampleprice" value="<?php echo $row['price']; ?>" required>
                </div>

                <div class="form-group">
                <select  class="form-control" name="idS" id="exempletrain">
                <option>Choose a states </option>
                <?php foreach($states as $rowStates){ ?>
                <?php 
                if($row['status'] === $rowStates['status']) 
                {
                ?>
                <option selected class="form-control" value="<?php echo $rowStates['idS']?>"> 
                <?php echo $rowStates['status']?>
                </option>
                <?php }  
                else {?>
                
                <option class="form-control" value="<?php echo $rowStates['idS']?>"> 
                <?php echo $rowStates['status']?>
                </option>
                <?php }} ?>
                </select>   
                </div>


                <div class="form-group">
                <select  class="form-control" name="idTr" id="exempletrain">
                <option>Choose a train </option>
                <?php foreach($train as $rowStates){ ?>
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
                <button type="submit" class="btn text-light" style="background-color:#240c3fd3;">Update</button>
            </div>
            </div>
</form>
               <?php } ?>       
                </tbody>
                    
                </table>
<!-- end show infos trips -->
        </div>
    </div>
<!-- end update trip -->

                
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
           
            <!-- <div class="modal" tabindex="-1" id="<?php //echo 'deleteLabel'.$row['idT']; ?>" tabindex="-1" aria-labelledby="<?php echo 'deleteLabel'.$row['idT']; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header text-light" style="background-color:#240c3fd3;">
                    <h5 class="modal-title" id="<?php echo 'deleteLabel'.$row['idT']; ?>>Delete a trip</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <form action="/admin/DeleteTrips/<?php echo $row['idT']; ?>" method="POST">
                    <p> <h4>Are You Sure To ignored?</h4></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn text-light" style="background-color:#240c3fd3;">ignore</button></a>
                </div>
                </form>
                </div>
            </div>
            </div> -->
    

</body>
</html>



