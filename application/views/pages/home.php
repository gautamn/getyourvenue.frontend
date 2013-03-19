<div class="MainArea">
      <div class="FeaturedAllied"><h3>Featured Venues</h3>
      <?php 
      	$this->load->model("venue_model");
      	$venueM=new Venue_model();
      	$venues=$venueM->get_featured_venue(4);
      ?>
      <?php if(count($venues)>0){?>
      <ul>
      	<?php foreach($venues as $venue){?>
      	<li><img src="<?php echo CDN_URI?>assets/images/featured-1.jpg" alt="<?php echo $venue['image_alt_tag']?>" height="83" width="133"><br><?php echo $venue['name']?></li>
		<?php }?>
      </ul>
      <?php }?>
      </div>
      <div class="FeaturedAllied"><h3>Allied Services</h3>
      <?php 
      	$this->load->model("Alliedservices_model");
      	$alliedServicesM=new Alliedservices_model();
      	$alliedServices=$alliedServicesM->get_featured_allied_services(4);
      ?>
      <?php if(count($alliedServices)>0){?>
      <ul>
	      <?php foreach($alliedServices as $alliedService){?>
	      	<li><img src="<?php echo CDN_URI?>assets/images/allied-1.jpg" alt="" height="83" width="133"><br><?php echo $alliedService['HEADING']?></li>
	      <?php }?>
      </ul>
      <?php }?>
      </div>
      <h1>Your One Stop Shop For Wedding Venues in Delhi and NCR</h1>
      <div class="ContentBox">
      <p>GetYourVenue.com is a breakthrough organization which aims at 
bringing about a paradigm shift in the way wedding 
venues were being booked till date. We at GetYourVenue understand the 
need of selecting the best possible location 
for your big day because special moments happen once in a lifetime. We 
therefore offer you the most robust search for venues of your preferred 
region, capacity &amp; budget, right from the relative comfort of your 
home. Shortlist your choices with just a click of your mouse &amp; a 
call to us &amp; our dedicated one on one sales team will be right there
 at your service. We make sure that you get the place of your choice 
booked for you at the best rates available.</p>

<p>We therefore offer you the most robust search for venues of your 
preferred region, capacity &amp; budget, right from the relative comfort
 of your home. Shortlist your  &amp; our dedicated one on one sales team
 will be right there at your service. We make sure that you get the 
place of your choice booked for you at the best rates available.</p>
      </div>
    </div>