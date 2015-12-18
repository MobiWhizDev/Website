	
    <!-- Home Slider contact Form -->
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>		<h2>LET'S TALK</h2>
          	<p>Need to discuss your project, fill the form below and our strategist will call you in few moments</p>
          	</div>
          
          
          <form action method="post" onSubmit="return formSubmit();">
                <div class="col-lg-5">
                    <div class="form-group">
                    	<br><br>
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
                <div class="col-lg-5">
                    <div class="form-group">
                    	<br><br>
                        <label for="exampleInputEmail1">QUERY TYPE</label>
                        <select id="qrytype" name="query" class="form-control" id="exampleInputquery" required>
                            <option>Select your query</option>
                            <option>IOS App Development</option>
                            <option>Anroid App Development</option>
                            <option>Mobile Game Development</option>
                            <option>Web Development</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-7">
                	<div class="form-group">
                        <label for="exampleInputEmail1">Enter brief description of your project</label>
                        <textarea class="form-control" id="comments" placeholder="enter your project brief" rows="3" required></textarea>
                    </div>
                    <div class="full">
                        <a href="#dialog_submit" id="modaltrigger" style="display:none">Check</a>
                        <!-- added by JS -->
                        <button type="submit" class="btn btn-default form-button"></button>
                    </div>
                </div>
                
            </form>
            <div id="dialog_submit" style="display: none;">Your message has been successfully submitted!</div>
          
        </div>
      </div>
    </div>
    <!-- Home Slider contact Form End -->
    
    <!--------------------- section footer start -------------->                    
    <section class="section_footer">
        <div class="container">
            <div class="col-sm-3 footer-col">
                <h4> CONTACT US </h4>
                <img src="images/red-line.png">
                <ul>
                    <li><img src="images/icon-address.png">&nbsp;&nbsp;668 Stony Hill Road, </li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suite 11, </li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yardley, PA 19067 </li>
                    <li><img src="images/icon-call.png">&nbsp;&nbsp;<span class="color-red">(+1)267-933-0030</span></li>
                    <li><img src="images/icon-msg.png">&nbsp;&nbsp;<a href="mailto:info@mobiwhiz.com"><span class="color-red">info@mobiwhiz.com </span></a></li>
                </ul>
            </div>
            <div class="col-sm-3 footer-col">
                <h4> MOBIWHIZ </h4>
                <img src="images/red-line.png">
                <ul>
                    <li><a href="services.php">Our Services </a></li>
                    <li><a href="approach.php">Our Approach </a></li>
                    <li><a href="portfolio.php">Portfolio </a></li>
                    <li><a href="about.php">About Us </a> </li>
                </ul>
            </div>
            <div class="col-sm-2 footer-col footer-col2">
                <h4>&nbsp;  </h4>
                <br>
                <ul>
                    <li><a href="industries.php">Industries </a></li>
                    <li><a href="contact.php">Contact Us </a></li>
                    <li><a href="terms.php">Terms & Conditions </a></li>
                    <li><a href="privacy.php">Privacy Policy </a></li>
                </ul>
            </div>
            <div class="col-sm-4 footer-col footer-col4">
                <h4> GET CONNECTED WITH US </h4>
                <img src="images/red-line.png">
                <br>
                <br>
                <br>
                <a href="https://www.facebook.com/MobiwhizDigital/" target="_blank">
                <button type="button" class="btn btn-default button-social" data-toggle="tooltip" data-placement="bottom" title="Facebook">
                     <img src="images/facebook.png"> 
                </button>
                </a>
                
                <a href="https://twitter.com/mobiwhizdigital" target="_blank">
                <button type="button" class="btn btn-default button-social" data-toggle="tooltip" data-placement="bottom" title="Twitter">
                     <img src="images/twitter.png"> 
                </button>
                </a>
                
                <a href="https://plus.google.com/106564856546637987874" target="_blank">
                <button type="button" class="btn btn-default button-social" data-toggle="tooltip" data-placement="bottom" title="Google+">
                     <img src="images/google.png"> 
                </button>
                </a>
                
                <a href="https://www.pinterest.com/mobiwhiz/" target="_blank">
                <button type="button" class="btn btn-default button-social" data-toggle="tooltip" data-placement="bottom" title="Pinterest">
                     <img src="images/pinterest.png"> 
                </button>
                </a>
            </div>
            <div class="col-lg-12 footer-text">
                © 2015 – MobiWhiz, A Humming Bird International LLC Company.
            </div>
        </div>
        <!---------- container end ---------------->
    </section>
    <!--------------------- section footer end ---------------->
    </div>
    <!------------- container outer end -------------------->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
    <script src="js/script.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/55f6d2154b5198806a89ca5f/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
