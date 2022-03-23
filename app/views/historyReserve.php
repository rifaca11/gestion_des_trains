
</head>
<body>
<div class="container-fluid text-light ">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row w-100">
                    <div class="col-xs-5 m-4">
                      <h2>History <b>Reservations</b></h2>
                      <br>         

                    </div>
                   
                </div>
            </div>
            <table class="table table-striped text-light table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Status</th>
                        <th>First name</th>						
                        <th>Email</th>
                        <th>gareD</th>
                        <th>gareA</th>
                        <th>HoursA</th>
                        <th>HoursD</th>
                        <th>day</th>
                        <th>Price</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>
            <?php foreach($reservation as $rowReserve){ ?>

                <tr>
                <td> <?php echo $i; $i++; ?> </td>
                <td> <?php echo $rowReserve['status']; ?> </td>
                <td> <?php echo $rowReserve['firstname']; ?> </td>
                <td> <?php echo $rowReserve['email']; ?></td>
                <td> <?php echo $rowReserve['gareD']; ?></td>
                <td> <?php echo $rowReserve['gareA']; ?></td>
                <td> <?php echo $rowReserve['HoursD']; ?></td>
                <td> <?php echo $rowReserve['HoursA']; ?></td>
                <td> <?php echo $rowReserve['day']; ?></td>
                <td> <?php echo $rowReserve['price']; ?></td>
                </tr>
                    
                </tbody>

                <?php } ?>
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
                        </div>
                        </div>

</body>
</html>



