<?php include_once('includes/header.php'); ?>

  <div  class="industries" >
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/bg-industries.jpg" class="img-slider" alt="...">
          <div class="carousel-caption">
              <!-------- Capiton 1 Start -------->
              <h2> Developing Enterprise<br>Mobile Solutions to Industry Needs!</h2>
              <h4>Design, Development, and Marketing of Extraordinary Apps</h4>
              <br> <br>
              <a href="contact.html"><button class="button"> GET STARTED <img src="images/icon-button.png" class="icon-button"> </button></a>
              
              <!------- Caption 1 End -------->
          </div>
        </div>
        
      </div>
    
      
    </div>
<!--------------------- Home slider end -------------------->



<!--------------------- Section Services Start ------------->
<section class="section_services">
	
    <div class="container">
        <h3> INDUSTRIES</h3>
        <p class="subtitle">MobiWhiz has the credit to work on some of the top mobile apps and games developed for both startups and enterprises in various industries</p>
		<br><br>
    </div>
    
    <div class="container industries">
    	<div class="col-md-3 list-items">
        	<ul>
                <li>Automotive</li>
                <li>Communication</li>
                <li>Education</li>
            </ul>
        </div>
        
    	<div class="col-md-3 list-items">
        	<ul>
                <li>Financial Services</li>
                <li>Logistics</li>
                <li>medical and healthcare</li>
            </ul>
        </div>
        
        <div class="col-md-3 list-items">
        	<ul>
                <li>Manufacturing</li>
                <li>Media and Entertainment</li>
                <li>retail</li>
            </ul>
        </div>
        
        <div class="col-md-3 no-border">
        	<ul>
                <li>Real Estate</li>
                <li>Restaurants and Hotels</li>
            </ul>
        </div> 
    </div>
    
    
    <div class="container industries2">
    	<p>MobiWhiz has worked on some of the renowned retail brands to create their mobile application. The application has been focused towards both shoppers and retailers
to be able to connect in new ways that have become the driving influence on the future of the retail industry. Retailers are making the most of it by enabling customers to search,
review, or purchase the products and services on the go!</p>

		<img src="images/phone.png">
    </div>
    
	
</section>
<!--------------------- Section Services End ------------->




<!--------------------- Section IOS start ------------->
<section class="section_services">
   	<div class="container">
    		
         
        
    </div>
</section>
<!--------------------- Section IOS End --------------->











<!-- secction contact start -->
<section class="section_contact">
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



</div>

<?php include_once('includes/footer.php'); ?>