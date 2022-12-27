<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php"); 
  }
?> 
<html>
    <head>
        <script src="https://kit.fontawesome.com/ce5e69de06.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 	
    
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
       
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
       
      
    <title> The Green Evenue </title>
    <link rel="stylesheet" type="text/css" href="style.css">  
    </head>
    <body>
      
        <!-- header -->
        <header class = "header" id= "header"> 
      
               <div class = " head-top">  
                <img src="pictures/hotel logo.jpg " width="100px" height="100px" style="border-radius: 50%;">
                    <div class = "site-name"> 
                         <span>THE GREEN EVENUE</span>       
                    </div>  
    <!--------dark /light theme using toggle --->  
    <div id="abc-sm">   
        <input type="checkbox" class="checkbox" id="chk" /> 
        <label class="label" for="chk">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="ball"></div> 
        </label>
        <script>
            const chk = document.getElementById('chk');
    
              chk.addEventListener('change', () => {
                  document.body.classList.toggle('dark');
    });
    
        </script> 
    </div>
    <!---------end toggle---------> 
    
                    <div class = "site-nav">
                    <span id = "nav-btn" onclick="openNav()">&#9776;<span> Menu</span> </span>
                    </div>
               </div> 
               <div class="cover">
                        <br><br><br><br><br><br><br><br><br>
               <div class = "head-bottom flex"> 
                  <b> <h2>NICE AND COMFORTABLE PLACE TO STAY</h2></b>
                   <b><p>The Green Evenue is the first 5* international luxury hotels of Dubai, ideally located at coastal area, between Abu Dhabi and Bhurj Arab highway and have  private pine tree forest, well set to proudly represent country on the map of luxury recreation engraving a new paragraph in the history of fabled indian  hospitality. Property combines bold contemporary design, bland of unique, extravagant features and most exceptional level of services.</p></b>

                    <!-- notification message -->
                   <?php if (isset($_SESSION['success'])) : ?>
                    <div class="error success" > 
      <h3>
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
      </h3>
      </div>
      <?php endif ?>

       <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    <div class="loggedin">Welcome <strong><?php echo $_SESSION['username']; ?></strong></div>
    <div class="head-btn"> <a href="index.php?logout='1'" style="color: white;">logout</a> </div>
    <?php endif ?>


              <br><br><br><br><br><br> 
               </div>     
           </header>               
        <!--  end of header --> 
    
      
     
    </div>
    </div>
    </header>
    <!-- side navbar -->
    <div id="hamburger" class="sidenav">
      <a class="closebtn" onclick ="closeNav()">&times;</a>
      <a href="index.html">Home</a>
      <a href="#services">Services</a>
      <a href="#rooms">Rooms</a>
      <a href="#reveiw">Reviews</a>
      <a href="Events.html">Events</a>
      <a href="wellness.html">Wellness</a>
      <a href="dining.html">Dining</a>
      <a href="contact.html">Contact Us</a>
      <button class = "btn"><a href="RoomsBook.html"><b>Book Rooms</b></a></button>
    
      <button class = "btn"><a href="eventsBook.html"><b>Book Events</b></a></button>
    </div>
    
       <script>
          function openNav(){
            document.getElementById("hamburger").style.display="block";
          }
          function closeNav(){
          document.getElementById("hamburger").style.display="none";
          }
       </script> 
     <!-- end of side navbar --> 
    
    <!--------------end navigation and header------------------>
    
    
    <!----------services --------------->
    <section class="services" id="services">
    
        <h1 class="title" style="padding: 20px;">Services</h1>
    
        <div class="box-container">
    
            <div class="box">
                
                    <img class="image" height=100% width=500px src="pictures/Food.jpg" alt="">
               
                <div class="content">
                    <img height=100px width=70px src="pictures/Food Logo 1.png" alt="" class="logo">
                    <h3>Food & Beverage Services</h3>
                    <p>
                        Service of Food made in the kitchen and Drinks prepared in the 
                        Bar to the Customers at the <strong>Food & Beverage</strong> premises.
                    </p>
                </div>
            </div>
            <div class="box">
                <img class="image" height=1900px width=500px src="pictures/night.jpg" alt="">
                <div class="content">
                    <img height=80px width=70px src="pictures/Party Logo.png" alt="">
                    <h3>Parties</h3>
                    <p>
                         Banquet hall, Pool Parties, B'day Parties,Kitty Party, Bars,Corporate Events,
                        Proffessional events,....many more. Life is short so party we must.<i><b>Eat,drink and enjoy</b></i>
                    </p>
                </div> 
            </div>  
            <div class="box">
                <img class="image" height=500px width=500px src="pictures/Security.jpg" alt="">
                <div class="content">
                    <img height=80px width=60px src="pictures/Security Logo.png" alt="">
                    <h3>Security</h3> 
                    <p> 
                        <b>Security</b> in a hotel is important because it's a security system in place to protect 
                        staff,guests and physical resources and assets.<i><b>Free from harm or risk</b></i>
                    </p>
                </div>
            </div> 
            <div class="box">
                <img class="image" height=900px width=600px src="pictures/Parking.jpg" alt="">
                <div class="content">
                    <img height=80px width=80px src=" pictures/Parking Logo.png" alt="">
                     <h3>Parking</h3>
                    <p>
                        <b>Parking</b> as a service to customers extends the true goals of business leaders
                        looking to please the individuals that will be spending money at their facility.
                    </p>
                </div>
            </div>
            <div class="box">
                <img class="image" height=500px width=500px src="pictures/staff.jpg" alt="">
                <div class="content">
                    <img  height=80px width=80px src="pictures/Customer Logo.png" alt="">
                    <h3>Cheerful Staff</h3>
                    <p>
                        Customer Service is critical to competing efficiently.Offering <b>Amazing Staff</b> is important if 
                        you want to retain customers and grow your business.
                    </p>
                </div>
            </div>
            <div class="box">
                <img class="image" height=500px width=500px src="pictures/WiFi.jpg" alt="" width="20px" height="20px">
                <div class="content">
                    <img height=80px width=80px src="pictures/WiFi Logo.png" alt="">
                    <h3>Internet Access</h3>
                    <p>
                        Hotel <b>Green Evenue</b> provides 24/7 guest service and Wi-Fi support. Our 
                        hotel has resulted in customers obtaining exceptional Wi-Fi services and enhanced
                        guest satisfaction.
                    </p>
                </div>
            </div>
    
        </div>
    
    </section>
    
    <!-- services section ends -->
    
    <!------------------rooms ---------------------->
    <section class="rooms sec-width" id="rooms">
        <div class="title">
        <h1> ROOMS </h1> 
    </div>
        <div class="rooms-container"> 
            <!--------first room --> 
           <article class="room" > 
               <div class="room-image"> 
                <img src="pictures/normalroom.jpg" style="height: 600px; width: 700px; " > 
            </div> 
            <div class="room-text"> 
               <h2>Normal Rooms</h2>  
            <ul>  
                <li>  
                    <i class="fas fa-arrow-alt-circle-right"></i>
                    <i>Free Wifi</i></li>
                <li> 
                    <i class="fas fa-arrow-alt-circle-right"></i>
                   <i> Breatfast Buffet available</i></li> 
                <li> 
                    <i class="fas fa-arrow-alt-circle-right"></i>
                   <i> Dryer and towels are available</i></li> 
            </ul> 
            
            <p><i>A room assigned to two people.this room is decorated with two queen-size beds. A standard room includes all kinds of basic facilities such as a table, chair, desk, cupboard, dressing table, DVD player, television, telephone, coffee maker and a private bathroom.</i></p>
            <p class="rate">
            <span>Rs 2000 /</span> Per Night </p>
           <a href="book Rooms.html"> <button type="button" class="btn">Book Now</button> </a>
            <br><br>
        </div> 
            </article> 
            <!----------end room1-----> 
    
               <!--------second room --> 
           <article class="room" > 
            <div class="room-image"> 
             <img src="pictures/room1.jfif" style="height: 550px; width: 700px; " > 
         </div> 
         <div class="room-text"> 
            <h2>Luxury Rooms</h2>  
         <ul>  
             <li> 
                 <i class="fas fa-arrow-alt-circle-right"></i>
                 <i>Free Wifi</i></li>
             <li> 
                 <i class="fas fa-arrow-alt-circle-right"></i>
                 <i>Free Breatfast Buffet</i></li>
             <li> 
                 <i class="fas fa-arrow-alt-circle-right"></i>
               <i> Parking is done by our driver safely</i></li>
         </ul> 
         
         <p><i>A room can be taken by more than two people. This room is decorated with a King-size bed. It includes all kinds of basic facilities such as a table, chair, desk,tablelamp, designer cupboard, a small dressing room, television, Landline, coffee maker and a private bathroom.</i></p>
         <p class="rate">
         <span>Rs 3000 /</span> Per Night </p>
         <a href="book Rooms.html"> <button type="button" class="btn">Book Now</button> </a>
         <br><br>
     </div> 
         </article> 
         <!----------end room1-----> 
    
            <!--------third room --> 
            <article class="room" > 
                <div class="room-image"> 
                 <img src="pictures/balcontroom.jpg" style="width: 700px; " > 
             </div> 
             <div class="room-text"> 
                <h2>Luxury Rooms with balcony veiw</h2>  
             <ul>  
                 <li> 
                     <i class="fas fa-arrow-alt-circle-right"></i>
                    <i>Free Wifi</i></li>
                 <li> 
                     <i class="fas fa-arrow-alt-circle-right"></i>
                    <i>Breatfast Buffet available</i></li>
                 <li> 
                     <i class="fas fa-arrow-alt-circle-right"></i>
                     <i>Balcony veiw</i></li>
             </ul> 
             
             <p><i>A room assigned to two people or more. This room is decorated with a king-size bed. It includes all kinds of basic facilities such as a cupboard, dressing table, DVD player, television, telephone, coffee maker and a private bathroom. Additionally, it has 2 Sofa sets and a table for Candle Light Dinner. One special thing is balcony which has a beautiful veiw of the surroundings which people love to enjoy at the night time.</i></p> 
             <p class="rate">
             <span>Rs 4000 /</span> Per Night </p>
             <a href="book Rooms.html"> <button type="button" class="btn">Book Now</button> </a>
             <br><br>
         </div> 
             </article> 
             <!----------end room1-----> 
    
        </div> 
    </section>   
    <!----------end of rooms------------> 
    
    
    
    <!-------------------customer reveiw section--------------------->
    <h1 class="title" style="margin-left: 20px;" id="reveiw">Reviews</h1>
    <div class="custom">
    <section class = "customers" id = "customers"> 
        <div class = "sec-width"> 
           
            </div>
            <div class = "customers-container">
                <!---------first customer------------->
                <div class = "customer">
                    
                    <h3>We Loved it</h3> 
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p>It feels too good to write to you and in my opinion your hotel is one of the best hotel I have ever visited. It's not only cheap but  also full of basic amenities. It was great pleasure to spend my precious time in such a comfortable and friendly atmosphere. The rooms are quite lively,modern,comfortable and unique in appearance. I like to visit again here..!!
                        </p>
                    <img  src = "pictures/Khushleen 1.jpg" alt = "customer image"> 
                    <span>Khushleen,Ambala</span> 
                </div>
                
                <!-- end of first customer -->
    
                <!-- second customer -->
                <div class = "customer">
                    
                    <h3>Comfortable Living</h3>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <p>The hotel has a familiar environment. Rooms are very typical, clean and comfortable. It's a five minutes walk to the center of Fira. The staff is superb. They were very welcoming and gave us very good tips for restaurants and spots for the amazing sunset. Delicious breakfast. The swimming pool area is nice too. There is an area to park your vehicle. So, it definitely deserves a 5 stars evaluation.</p> 
                    <img  src = "pictures/kashishnew.jpg" alt = "customer image" >
                    <span>Kashish,Panipat</span>
                </div>
                <!-- end of single customer -->
                <!-- Third customer -->
                <div class = "customer">
                    
                    <h3>Nice Place</h3>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <p>Room service, meals at the restaurant was fantastic. I had lunch ober there  which was amazing. Like all hotels in Dubai, hotel taxis are  pricy about 50%-60% more, I did not like the fact that as soon as you step out of the hotel they try to up sell their cars.I also like the pool area which looks preety in evening.Overall, the experience about the " The green Evenue " was Fabulous.
                    
                    </p>
                    <img src = "pictures/Kuber.jpg" alt = "customer image">
                    <span>Kuber,Patiala</span>
                </div>
                <!-- end of single customer --> 
    
                <!---------------fourth customer----------->
                <div class = "customer">
    
                    <h3>Fabulous</h3>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p>Everything about this apartment was perfect. We felt like we were in a luxury hotel with the provided amenities. In fact, the residences are a separate part of an amazing hotel, and we were able to use the infinity pool, gym, as well as the valet service. Our bags were taken care of by the staff. The view from the balcony was absolutely breathtaking. The rooms were very spacious and everything was spotless. </p> 
                    <img src = "pictures/Khyati.jpg" alt = "customer image">
                    <span>Khyati,Sangrur</span>
                </div>
            </div>
      </section>
    </div>
    
    <!-----------footer----------> 
    <footer>
        <div class="footer-container" >
            <div>
            <h2>About Us</h2>
            <p>This is a small dispription about our restaurant name <code>The Green Evenue</code>. Hope you all like it and will come to our place to have some delicious cuisines.</p>
        <ul class="social-icon">
            <li class="flex">
                <a href="https://twitter.com/i/flow/login" target="blank"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="flex"> <a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook" ></i></a> </li>
            <li class="flex">  <a href="https://www.pinterest.com/" target="blank"><i class="	fab fa-pinterest" ></i></a>
                </li>
                <li class="flex">  <a href="https://www.instagram.com/" target="blank"><i class="	fab fa-instagram"></i></a> </li>
        </ul>
              </div>
        
              <div >
                  <h2>Useful Links</h2>
                  <a href="#" class="list">Blog</a>
                  <a href="#" class="list">Rooms</a>
                  <a href="#"class="list">Subscription</a>
                  <a href="#" class="list">Gift Voucher</a>
              </div>
        
              <div>
                <h2>Privacy</h2>
                <a href="#" class="list">Contact Us</a>
                <a href="#" class="list">About us</a>
                <a href="#" class="list">Career</a>
                <a href="#" class="list">Services</a>
              </div>
        
              <div>
                  <h2>Have a Question</h2>
                  <div class="contact-item">
                     <span> <i class="fas fa-map-marker-alt"></i> </span>
                     <span> 5585 Al Jadaf Area, Oud Metha Road, Dubai, United Arab Emirates </span>
                  </div>
        
                  <div class="contact-item">
                    <span> <i class="fas fa-phone-alt"></i> </span>
                    <span> +91 7415468698 </span> 
                 </div>
        
                 <div class="contact-item">
                    <span> <i class="fas fa-envelope"></i> </span>
                    <span> dmkhushleen@gmail.com</span> 
                 </div>
              </div>
        
        </div>
        </footer>
    
    
    
     
    
    
    </body>
    </html>