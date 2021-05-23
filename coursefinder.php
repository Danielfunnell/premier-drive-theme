<?php /* Template Name: Coursefinder */ ?>
<?php get_header();?>



<div class="content">

<div class="container">

    <div class="row">

       
        
            <div class="container">
      <div class="row">
        <div class="col-md-8">
         
            <form id="form" class="survey-signup form">
              
              <h3 class= "u-margin-bottom-form">Which <span class="text-background">Intensive?</span></h3>
              
              <p>Run through our course finder to give you an idea of which intensive driving course would suit you.</p>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                          <label for="first-name">First Name</label>
                          <input type="text" class="form-control form-control-lg" id="first-name">
                          <label for="last-name">Last Name</label>
                          <input type="text" class="form-control form-control-lg" id="last-name">
                        </div>
                        
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <button type="submit" class="btn btn-lg btn-primary btn-block survey-signup__submit">Start</button>
                
        
            </form>
           
        
        
        
          
          <div class="question-box form">
            <h3 class= "u-margin-bottom-form">Which <span class="text-background">Intensive?</span></h3>
           
            <div class="question-box__progress-bar" id="progress-bar">
              
              <div class="question-box__step">
                <div class="question-box__bullet">1</div>
                <span class="question-box__line"></span>
              </div>
              <div class="question-box__step">
                <div class="question-box__bullet">2</div>
                <span class="question-box__line"></span>
              </div>
              <div class="question-box__step">
                <div class="question-box__bullet">3</div>
                <span class="question-box__line"></span>
              </div>
              <div class="question-box__step">
                <div class="question-box__bullet">4</div>
              </div>
              
            </div>
            <div class="question-box__container" id="question-container">
                
            
                
            </div>
        
            <button class="btn btn-lg btn-primary btn-block next-button" id="submit">Next</button>
            <button id="finish">Finish</button>
            
        
            <div class="question-box__results" id="results">
                
             
            </div>
          </div>
            
        </div>
        
        <div class="col-md-4">
          <div class="question-box__side">
            <h6>*Please note</h6>
          <p><small>This course finder app is only recommends which intensive course as a rough guide. We would always recommend booking an assessment lesson to get a better idea.</small> </p>
          <a href="<?php echo site_url('/book-online');?>" class="text-button">Book now <i class="ion-chevron-right text-button__icon"></i></a>
          </div>
          
        </div>
      </div>
      
    </div>

            

        

    </div>

   
        

    


    </div>

    


</div>
    
    

<?php get_footer();?>






