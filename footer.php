<footer>

                <div class="container">
                    <div class="row">
                    <div class="col-lg-5">
                        <h5>Menu</h5>
                        <div class="row">
                            <div class="col-6">
                                <ul class="footer__menu">
                                    <li class="footer__list"><a href="<?php echo site_url();?>">Home</a></li>
                                    <li class="footer__list"><a href="#">About</a></li>
                                    <li class="footer__list"><a href="<?php echo site_url('/driving-lessons');?>">Weekly lessons</a></li>
                                    <li class="footer__list"><a href="<?php echo site_url('/intensive-courses');?>">Intensive courses</a></li>
                                    <li class="footer__list"><a href="<?php echo site_url('/areas-we-cover');?>">Areas we cover</a></li>
        
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="footer__menu">
                                    <li class="footer__list"><a href="<?php echo site_url('/testimonial');?>">Testimonials</a></li>
                                    <li class="footer__list"><a href="#">Terms and conditions</a></li>
                                    <li class="footer__list"><a href="<?php echo site_url('/covid-19-policy');?>">Covid-19 policy</a></li>
                                    <li class="footer__list"><a href="<?php echo site_url('#contact-us');?>">Contact-us</a></li>
        
                                </ul>
                            </div>
                        </div>
                        
                    </div>
            
                   
                     
                    
                    <div class="col-lg-7">
                        <div class="sub-text-box">
                            <h5>Subscribe to our newsletter</h5>	
                        <p>Join our subscribers list to get the latest news, updates and special offers delivered directly in your inbox.</p>
                        <form action="/.netlify/functions/subscribe" class="form-inline" method="POST">
                                <input type="email" class="sub-input" id="subscribe" placeholder="Your email">
                            <div class="form-button">
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </div>
                            
                            
                        </form>
                        <ul class="social-links">
                            <li class="social-links__list"><a href="#" class="social-links__anchor"><i class="ion-social-facebook"></i></a></li>
                            <li class="social-links__list"><a href="#" class="social-links__anchor"><i class="ion-social-twitter"></i></a></li>
                            <li class="social-links__list"><a href="#" class="social-links__anchor"><i class="ion-social-googleplus"></i></a></li>
                            <li class="social-links__list"><a href="#" class="social-links__anchor"><i class="ion-social-instagram"></i></a></li>
                        </ul>
                        </div>
                        
                      
                        
                        
                    </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="footer__bottom">
                    Copyright&copy;2020 Premier-Drive all rights reserved
                    </div>
                </div>
            


</footer>


<?php wp_footer();?>



</body>
</html>