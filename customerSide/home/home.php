<?php include_once('../components/header.php')?>
<!-- Hero Section with Video Background and Text Overlay -->
<section id="hero" style="position: relative;">
    <video autoplay loop muted playsinline poster="your-poster-image.jpg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
        <source src="../image/large.mp4" type="video/mp4">
        <!-- Add additional source elements for 
        1.  SteakOnGrillCloseup

        other video formats if needed -->
    </video>
    <!-- <div class="hero container" style="position: relative; z-index: 1;">
        <div>
            <h1><strong><h1 class="text-center" style="font-family:Copperplate; color:whitesmoke;"> KOUSHIK'S CAFE</h1><span></span></strong></h1>
            <h1><strong style="color:white;">& RESTAURANT<span></span></strong></h1>
            <a href="#projects" type="button" class="cta">MENU</a>
        </div>
    </div> -->
    <div class="hero container" style="position: relative; z-index: 1;">
    <div>
        <h1 class="text-center" style="font-family: Copperplate; color: whitesmoke;">
            <strong>KOUSHIK'S CAFE</strong>
        </h1>
        <h1>
            <strong style="color: white;">& RESTAURANT</strong>
        </h1>

        <!-- Redirect Button -->
        <a href="http://localhost/RestaurantProject/adminSide/posBackend/orderItem.php?bill_id=&table_id=4" type="button" class="cta">
            MENU
        </a>
    </div>
</div>

</section>
<!-- End Hero Section -->
  
  
  
  <!-- menu Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Me<span>n</span>u</h1>
      </div>
     
        
       <select style="text-align:center;" id="menu-category" class="menu-category">
        <option value="blue">ALL ITEMS</option>
        <option value="yellow">MAIN DISHES</option>
        <option value="red">SIDE DISHES</option>
        <option value="green">DRINKS</option>
      </select>
        
    <div class="yellow msg"> 
     
        <div></div>
      <div class="mainDish">
           <h1 style="text-align:center;">MAIN DISHES</h1>
          <?php foreach ($mainDishes as $item): ?>
      <p>
        <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
        <span class="item-price">₹<?php echo $item['item_price']; ?></span><br>
        <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
        <hr>
        
      </p>
    <?php endforeach; ?>
      </div>
    </div>
      
      
    <div class="red msg">
        <div></div>
      <div class="sideDish">
           <h1 style="text-align:center">SIDE DISHES</h1>
          <?php foreach ($sides as $item): ?>
      <p>
        <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
        <span class="item-price">₹<?php echo $item['item_price']; ?></span><br>
        <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
        <hr>
      </p>
    <?php endforeach; ?>
      </div>
    </div>
        
      
      
    <div class="green msg">
        <div></div>
      <div class="drinks">
           <h1 style="text-align:center">DRINKS</h1>
          <?php foreach ($drinks as $item): ?>
      <p>
        <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
        <span class="item-price">₹<?php echo $item['item_price']; ?></span><br>
        <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
        <hr>
      </p>
    <?php endforeach; ?>
      </div>
    </div>
      
      
       <div class="blue msg">
          
      <div class="mainDish">
           <h1 style="text-align:center">MAIN DISHES</h1>
          <?php foreach ($mainDishes as $item): ?>
      <p>
        <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
        <span class="item-price">₹<?php echo $item['item_price']; ?></span><br>
        <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
        <hr>
      </p>
    <?php endforeach; ?>
      </div>
             
           
     
      <div class="sideDish">
           <h1 style="text-align:center">SIDE DISHES</h1>
          <?php foreach ($sides as $item): ?>
      <p>
        <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
        <span class="item-price">₹<?php echo $item['item_price']; ?></span><br>
        <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
        <hr>
      </p>
    <?php endforeach; ?>
      </div>
            
      
      <div class="drinks">
           <h1 style="text-align:center">DRINKS</h1>
          <?php foreach ($drinks as $item): ?>
      <p>
        <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
        <span class="item-price">₹<?php echo $item['item_price']; ?></span><br>
        <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
        <hr>
      </p>
    <?php endforeach; ?>
      </div>
          
      </div>
    </div>
  </section>
  <!-- End menu Section -->


  
  <!-- About Section -->
<section id="about" ">
  <div class="about container">
    <div class="col-right">
        <h1 class="section-title" >About <span>Us</span></h1>
        <h2>KOUSHIK'S RESTAURANT HISTORY:</h2>
 <P> Welcome to Koushik's restaurant, where great food meets modern convenience! Our restaurant is dedicated to providing a seamless dining experience by combining delicious cuisine with cutting-edge technology.
 </p>
 <p>With our interactive table-ordering system, you can browse our dynamic menu, place orders directly from your table, and track your food’s preparation time in real time. Whether you’re here for a quick bite or a fine dining experience, we ensure fresh ingredients, fast service, and a cozy ambiance.
 </p>
 <p>At Koushik's restaurant, we believe in innovation, customer satisfaction, and making every meal memorable. Enjoy your favorite dishes with ease, and let us take care of the rest!
 </p>
 <p>We look forward to serving you! 🍽️✨
 </p>
    
      </div>
    </div>
  </section>
  <!-- End About Section -->
  
  
 <!-- Contact Section -->
<section id="contact">
  <div class="contact container">
    <div>
      <h1 class="section-title">Contact <span>info</span></h1>
    </div>
    <div class="contact-items">
      <div class="contact-item contact-item-bg">
        <div class="contact-info">
          <div class='icon'><img src="../image/icons8-phone-100.png" alt=""/></div>
          <h1>Phone</h1>
          <h2>+91 8870136367</h2>
        </div>
      </div>
      
      <div class="contact-item contact-item-bg"> 
        <div class="contact-info">
          <div class='icon'><img src="../image/icons8-email-100.png" alt=""/></div>
          <h1>Email</h1>
          <h2>Koushikraja770@gmail.com</h2> 
        </div>
      </div>
      
      <div class="contact-item contact-item-bg">
        <div class="contact-info">
          <div class='icon'> <img src="../image/icons8-home-address-100.png" alt=""/></div>
          <h1>Address</h1>
          <h2>6/129,King's Castle, Vaiyampalayam, Coimbatore-641110</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->

<?php 
include_once('../components/footer.php');
?>