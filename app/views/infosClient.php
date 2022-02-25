
</head>
<body>
<div class="container-fluid text-light ">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row w-100">
                    <div class="col-xs-5 m-4">
                      <h2>Clients <b>Infos</b></h2>
                      <br>         

                    </div>
                   
                </div>
            </div>
            <table class="table table-striped text-light table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>First name</th>	
                        <th>Last name</th>					
                        <th>Email</th>
                        <th>Tele</th>
                        <th>City</th>
                        <th>Date de naissance</th>
                     
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>
            <?php foreach($person as $rowClient){ ?>

                <tr>
                <td> <?php echo $i; $i++; ?> </td>
                <td> <?php echo $rowClient['firstname']; ?> </td>
                <td> <?php echo $rowClient['lastname']; ?> </td>
                <td> <?php echo $rowClient['email']; ?></td>
                <td> <?php echo $rowClient['tele']; ?></td>
                <td> <?php echo $rowClient['city']; ?></td>
                <td> <?php echo $rowClient['dateN']; ?></td>
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
                        </div>
                        </div>

</body>
</html>



