<?php
use Illuminate\Support\Facades\Route;
$currentPaths= Route::getFacadeRoot()->current()->uri();	
$url = URL::to("/");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    

   @include('style')
	




</head>
<body class="index">

    

    <!-- fixed navigation bar -->
    @include('header')

    
    
    
    
    <section class="probootstrap-hero probootstrap-hero-inner jumbotron-cover" style="background-image: url(<?php echo $url;?>/local/resources/views/theme/img/header_new.jpg); background-position:center;"  data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Contact Us</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
    
    
    
    
    
    <section class="probootstrap-section">
        <div class="container">
        
        <div class="row">
        <div class="map-wrapper">


                             <?php if(!empty($setting[0]->site_address)){?>
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.8870936733506!2d90.37532081476894!3d23.787034584571344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c73585cef5e5%3A0xcb6b7d1a6c0e8ed3!2sGreen%20University%20of%20Bangladesh!5e0!3m2!1sen!2sbd!4v1661885108792!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   
    <?php } ?>

                        </div>
        </div>
        
        
        <div class="row">
         @if(Session::has('success'))
         <div class="clearfix height10"></div>
                <div class="col-md-12">
                
                        <div class="alert alert-success">
                
                          {{ Session::get('success') }}
                
                        </div>
                </div>
                <div class="clearfix height10"></div>
                    @endif
                    
                    
                    
                    @if(Session::has('error'))
                    <div class="clearfix height10"></div>
                <div class="col-md-12">
               
                        <div class="alert alert-danger">
                
                          {{ Session::get('error') }}
                
                        </div>
                </div>
                 <div class="clearfix"></div>
                    @endif
                    
                    
                    </div>
        
        <?php if(empty(Session::has('success'))){?>
        <div class="height50 clearfix"></div>
        <?php } ?>
        
          <div class="row">
          <div class="col-md-5 probootstrap-animate">
          <form class="probootstrap-form" role="form" method="POST" action="{{ route('contact-us') }}" id="formID" enctype="multipart/form-data">
          {{ csrf_field() }}
          
          
              <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control validate[required]" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control validate[required,custom[email]]" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="subject">Phone No</label>
                <input type="text" class="form-control validate[required]" id="phone_no" name="phone_no">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea cols="30" rows="10" class="form-control validate[required]" id="msg" name="msg"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
              </div>
            </form>
          </div>
          
          
          
          
          
          
          
          <div class="col-md-6 col-md-push-1 probootstrap-animate">
            
            
            <h4>Our Address</h4>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-pin"></i> <span><?php echo $setting[0]->site_address;?></span></li>
              <li><i class="icon-email"></i><span><?php echo $users[0]->email;?></span></li>
              <li><i class="icon-phone"></i><span><?php echo $users[0]->phone;?></span></li>
            </ul>

            
            
          </div>
        </div>
        </div>
      </section>
    
    
    
    
   
	
	
	
	
	
	
	
	
	 <div class="clearfix"></div>
	
	
	
	

      

      @include('footer')
       
</body>
</html>