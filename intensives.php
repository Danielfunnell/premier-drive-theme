<?php /* Template Name: Intensive Courses */ ?>

<?php get_header();?>


<section class="hero--intensive">
            <div class="hero__text-box mt-5">
                <h1 class="display-3"><span class="hero__text-box__span">Short for time?</span> Book one of our intensive driving courses!</h1>
                <ul class="hero__list">
                    
                </ul>
                    <a href="course-finder" class="large-btn btn-block btn btn-primary">Get started</a>
                    <a href="course-finder" class="btn btn-primary btn-lg small-btn">Get started</a>
            </div>
 </section>


 <section class="welcome">
            <div class="container">
                <div class="welcome__text-box">
                        <h2 class="u-center-text display-4 mt-4">Our Intensive Driving Courses</h2>
                    <div class="welcome__para u-center-text">
                        <p class="lead p-3 u-margin-bottom">Premier Drive’s intensive driving courses are quite simply designed to get you through your test quicker. They are recommended for people who don’t have much spare time but want to learn hard during a week’s holiday that they have coming up etc. They can be tailor-made to suit your requirements and availability. Intensive courses are usually done completed over a week and semi-intensive over 2-3 weeks for those of you with a bit more time. The number of hours you require depends on your current standard.
                        </p>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="intensive-courses__for-you container-fluid">
          <div class="intensive-courses__heading">
            <h2 class="u-center-text display-4">Is it for you?</h2>
         </div>
          
            <div class="container">
              <div class="row">
                <div class="intensive-courses__question--first fade-in">
                  <p><strong>If you’ve passed your theory test and pressed for time then <span>YES &#10003;</span></strong></p>
                  <p>If you have not passed your theory test you need to take in to account that there is usually on average a 1-2 week waiting list for a theory test and a 3-4 week wait for a practical. You still have options though.</p>
                </div>
                </div>
              </div>
                 
              <div class="container">
              <div class="row">
              <div class="col-md-6">
                <div class="intensive-courses__question fade-in">
                  <p><strong>Option 1</strong></p>
              <p> Start taking weekly regular driving lessons and then intensify them once you have passed your theory and nearing your practical test date.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="intensive-courses__question fade-in">
                  <p><strong>Option 2</strong></p>
              <p>Start your Intensive or semi-intensive course now and study and pass your theory test as soon as possible. Then decrease your hours depending on your level of ability nearing your practical test date.
              </p>
                </div>
                
              </div>
            </div>
              </div>
            
             
        </section>

        <section class="intensive-courses">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="intensive-courses__how">
                  <h5 class="intensive-courses__heading display-4">How they <span>work!</span></h5>
                <div class="timeline">
                  <p class="timeline__para fade-in"><strong>Apply to the DVLA to get your provisional licence.</strong> The cost is currently £34. <a href="https://www.gov.uk/apply-first-provisional-driving-licence">Apply online &rarr;</a></p>
                  <p class="timeline__para fade-in"><strong>Study and pass your theory.</strong> We can recommend these  <a href="https://www.gov.uk/apply-first-provisional-driving-licence"> apps</a> in order to revise for it. You can also start weekly driving lessons now if you have time. This will mean your intensive course will require less hours once you are ready for it.</p>
                  <p class="timeline__para fade-in"><strong>Run our course finder app.</strong> This will give you a rough idea on which one of our intensive course would suit you. <a href="<?php echo site_url('course-finder'); ?>" class="btn btn-primary btn-sm">Run now!</a></p>
                  <p class="timeline__para fade-in"><strong>Book an assessment lesson.</strong>This will give you an opportunity to meet your instuctor before committed to an intensive. We can also look at possible dates and times for the intensive and practical driving test. <a href="<?php echo site_url('/product/assessment-lesson'); ?>" class="btn btn-primary btn-sm">Book now!</a></p>
                  <p class="timeline__para fade-in"><strong>Pay your depsoit.</strong> If you are happy to go ahead we would require a £150 non refundable desposit. This is so we can secure dates and times for your intensive and to book a driving test for the end of your course.</p>
                  <p class="timeline__para fade-in"><strong>Pay the remaining balance</strong> Two weeks before your intensive starts we will require payment of the  remaining balance for your intensive driving course. </p>
                  <p class="timeline__para fade-in"><strong>Take your intensive course and your practical driving test and hopefully <span>PASS!</span></strong></p>
                  
                </div>
                </div>
                
               
              </div>
              <div class="col-md-6">
               
                  
               
                  <div class="intensive-courses__side">
                    <h5>Still not sure</h5>
                    <p><small>Visit our frequently asked questions page for more information</small></p>
                    <a href="<?php echo site_url('intensive-courses/faqs'); ?>" class="text-button">FAQs <i class="ion-chevron-right text-button__icon"></i></a> 
        
                  </div>
              </div>
            </div>
          </div>
          <div class="intensive-courses__img">
                    <img src="<?php bloginfo('template_directory');?>/src/img/gear-min.png" alt="gears" class="intensive-courses__gear">
                  </div>
        </section>

<?php get_footer()?>
