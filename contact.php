<?php include_once('includes/header.php'); ?>
  <div class="contact">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/bg-contact.jpg" class="img-slider" alt="...">
          <div class="carousel-caption">
              <!-------- Capiton 1 Start -------->
              <h2> Talk to Us <br>About Your Project</h2>
              <h4>Our App Strategist will develop the best app strategy and App Designs Free of Cost for you</h4>
              <br> <br>
              <a href="#contactform"><button class="button"> GET STARTED <img src="images/icon-button.png" class="icon-button"> </button></a>
           
              <!------- Caption 1 End -------->
          </div>
        </div>
        
      </div>
    </div>

<!--------------------- Home slider end -------------------->

<!-- secction contact start -->
<section class="section_contact" id="contactform">
		<h3> LET'S TALK </h3>
		<p class="subtitle">Need to discuss your project, fill the form below and our strategist will call you in few moments</p>
		<br><br><br>
		<div class="container">
		
			<div class="col-lg-2">
			</div>
			

      <form action method="post" onSubmit="return formSubmit();">
        
        <div class="col-lg-4">
				  <div class="form-group">
					<label for="exampleInputEmail1">NAME</label>
					<input type="text" name="name" id="fullname" class="form-control" id="exampleInputname" placeholder="enter your name" required>
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">EMAIL</label>
					<input type="email" name="email" id="email" class="form-control" id="exampleInputemail" placeholder="enter your email" required>
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">PHONE</label>
					<input type="text" name="phone" id="phone" class="form-control" id="exampleInputphone" placeholder="enter your phone" required>
				  </div>
        </div>
			
        <div class="col-lg-4">
  				
				  <div class="form-group">
					<label for="exampleInputEmail1">QUERY TYPE</label>
					<select  id="qrytype" name="query" class="form-control" id="exampleInputquery" required>
					  <option>Select your query</option>
					  <option>IOS App Development</option>
					  <option>Anroid App Development</option>
					  <option>Mobile Game Development</option>
					  <option>Web Development</option>
					</select>
				  </div>
				  
				  <div class="form-group">
				  <label for="exampleInputEmail1">Enter brief description of your project</label>
				  <textarea class="form-control" id="comments" placeholder="enter your project brief" rows="3" required></textarea>
				  </div>
				  
				  <div class="full">
            <a href="#dialog_submit" id="modaltrigger" style="display:none">Check</a> <!-- added by JS -->
             <button type="submit" class="btn btn-default">SUBMIT</button>
          <!-- <p class="sm-text">Initial Designs in just 48 hours</p> -->
          </div>
        <!-- <button type="submit" class="btn btn-default">SUBMIT</button> -->

        </div>
        
			</form>

      <div id="dialog_submit" style="display: none;">Your message has been successfully submitted!</div>
			<div class="col-lg-2">
			</div>
		
		</div>
		<!----------- container end --------------->

</section>
<!--------------------- section contact end -------------->










<!--------------------- Section Services Start ------------->
<section class="section_services map">
	
    <div class="container">
    	
        <div class="contact">
        	<h3> CONTACT DETAILS </h3>
            
            <div class="col-md-6">
            	<br><br>
            	<img src="images/address.png">
                <br>
                <h5>ADDRESS</h5>
                668 Stony Hill Road, Suite 11,<br>
                Yardley, PA 19067<br>
                <a href="mailto:info@mobiwhiz.com">info@mobiwhiz.com</a>
            </div>
            
            <div class="col-md-6">
            	<br><br>
            	<img src="images/call3.png">
                <br>
                <H5>CALL US AT </H5>
                Tel:(+1) 267-933-0030
            </div>

        
        </div>
    </div>
	
</section>
<!-- Section Services End -->


</div>


<?php include_once('includes/footer.php'); ?>