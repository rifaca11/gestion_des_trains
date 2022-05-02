<section class="py-5 mb-5" >
    
    <div class="container py-5">
        <div class="header-content">
            <div class="row">
                <div class="col-md-6">
                    <h1>Welcome <b style="color:rgb(231, 43, 131)"><?php echo $_SESSION['firstnameCl'].'  '. $_SESSION['lastnameCl']?></b> to our website for booking train</h1>
                    <p class="text-dark p-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias unde, ipsam vero similique neque commodi. </p>
                    <a href="/Clients/bookingUs"><button class="btn btn-primary mb-4">Book Now</button></a>
                </div>
                <div class="col-md-6">
                    <img src="/assets/img/profil.svg" alt="app" width="388px" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
                   <!-- section -->
                   <div class="container">
    <h1>Search Here</h1>
    <br><br>
    <!-- first -->
    <div class="first-form">
        <div class="first-title">
            <!-- <span id="title">Book Your Trip Now</span> -->
            <form class="first" action="/Clients/searchC/" method="POST">
                <div class="mb-3">
                    <label class="form-label">Depart</label>
                    <input type="text" name="gareD" class="form-control" required >
                </div>
                <div class="mb-3">
                    <label class="form-label">Arrive</label>
                    <input type="text" name="gareA" class="form-control" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4 mb-3">Search</button>
            </form>
        </div>
    </div>

            </div>




    <div class="container py-5">
    <h1>The popular cities</h1>
    <br><br>
    <div class="row w-150 text-center d-flex justify-content-center">
         
            <div class="col-md-4 text-center d-flex justify-content-center my-4">
                <div class="card" style="width: 18rem">
                    <img src="/assets/img/safi.jpg" class="card-img-top" height="150" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Safi</h5>
                        <p class="card-text">
Safi is a city of Morocco, located on the Atlantic coast. It benefits from its position as a crossroads between the major centres of Morocco such as Casablanca, Agadir and Marrakech. Its port is one of the most important in the country. 
Since the 1960s, the city has also been home to an important industrial complex for the processing of phosphate. 
                        </p>
                    </div>
                </div>
            </div>
        
            <div class="col-md-4 text-center d-flex justify-content-center my-4">
                <div class="card" style="width: 18rem">
                    <img src="/assets/img/casa.png" class="card-img-top" height="150" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Casablanca</h5>
                        <p class="card-text">
Casablanca is a large, modern city, but the former French colonial post still allows myriad movie moments for those who want to revisit love in the medina and Old City. Casa (as locals call it) isn’t too touristy, but it’s the most cosmopolitan
 and Western-feeling city in Morocco. Visit The King Hassan II Mosque and Casa's Medina.
                        </p>                  
                      </div>
                </div>
            </div>
        
            <div class="col-md-4 text-center d-flex justify-content-center my-4">
                <div class="card" style="width: 18rem">
                    <img src="/assets/img/fes.jpg" class="card-img-top" height="150" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fes</h5>
                        <p class="card-text">
Fez is the second largest city in Morocco (by population), after Casablanca. Fez is a one of the royal northeastern city in Morocco which is also known as the country’s cultural and spiritual center. Fez has gained its popularity because it has the 
best preserved old city in the Arab world, the rambling, intricate medina of Fes El Bali.
                        </p>                    
                    </div>
                </div>
            </div>
    </div>
</div>

</section>