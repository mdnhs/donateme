<!DOCTYPE html>
<html lang="en">
<head>

   

   @include('style')
	




</head>
<body>

    <?php $url = URL::to("/"); ?>

    <!-- fixed navigation bar -->
    @include('header')

    <!-- slider -->
    

    

	
    
	<section class="probootstrap-hero probootstrap-hero-inner jumbotron-cover" style="background-image: url(<?php echo $url;?>/local/resources/views/theme/img/header_new.jpg); background-position:center;"  data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Create Campaign</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
	
	
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	 
	 
	 <section class="probootstrap-section">
        <div class="container">
        
        
        
        
        
        
        <div class="col-md-12">
        
        <div class="row">
        
	 @if(Session::has('success'))

	    <div class="alert alert-success">

	      {{ Session::get('success') }}

	    </div>

	@endif


	
	
 	@if(Session::has('error'))

	    <div class="alert alert-danger">

	      {{ Session::get('error') }}

	    </div>

	@endif
	 
     </div>
     
     
     
    <div class="row">
        <div class="col-md-3">
            @include('profile_menu')
        </div>
        <div class="col-md-9 well admin-content" id="account_settings">
            
            <form class="form-horizontal" role="form" method="POST" action="{{ route('create-campaign') }}" id="formID" enctype="multipart/form-data">
                        {{ csrf_field() }}
<div class="height20"></div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Campaign Title</label>

                            <div class="col-md-6">
                                <input id="camp_title" type="text" class="form-control validate[required] text-input radiusoff" name="camp_title">

                               
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Choose Category</label>

                            <div class="col-md-6">
                               <select name="camp_category" class="form-control validate[required] text-input radiusoff">
							  
							  <option value=""></option>
							   <?php if(!empty($category_count)){?>
                               <?php foreach($category as $categories){?>
                               <option value="<?php echo $categories->id;?>"><?php echo $categories->cat_name;?></option>
                               <?php } ?>
							   <?php } ?>
							</select>

                               
                            </div>
                        </div>

                        				
                                        
                          <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Campaign Goal - (<?php echo $setting[0]->site_currency;?>)</label>

                            <div class="col-md-6">
                                <input id="camp_goal" type="number" class="form-control validate[required] text-input radiusoff" name="camp_goal">

                               
                            </div>
                        </div>   
                        
                        
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Priorty</label>

                            <div class="col-md-6">
                               <select id="camp_location" name="camp_location" class="form-control validate[required] text-input radiusoff">
							  
							  <option value=""></option>
                              <?php if(!empty($priorty_count)){?>
                               <?php foreach($priorty as $pr){?>
                               <option value="<?php echo $pr->id;?>"><?php echo $pr->type;?></option>
                               <?php } ?>
                               <?php } ?>
							</select>

                               
                            </div>
                        </div>           
                               		
						
						
						<div class="form-group">
                            <label for="phoneno" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input type="file" id="camp_image" name="camp_image" class="form-control radiusoff">
								@if ($errors->has('camp_image'))
                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('camp_image') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-group{{ $errors->has('camp_desc') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">About the campaign</label>

                            <div class="col-md-6">
                                

                               <textarea id="id_cazary_full" name="camp_desc" placeholder="" class="form-control validate[required] txteditor"></textarea>
                               @if ($errors->has('camp_desc'))
                                    <span class="help-block">
                                        <strong>This field is required.</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
						
						
						
						
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
							
							
                                <button type="submit" class="btn btn-primary">
                                    Create Campaign
                                </button>
							
                            </div>
                        </div>
                    </form>
            
            
        </div>
        
        
        <?php /*?><div class="col-md-9 well admin-content" id="Profile">
            Widgets
        </div>
        <div class="col-md-9 well admin-content" id="Activity">
            Pages
        </div>
        <div class="col-md-9 well admin-content" id="Devices">
            Charts
        </div>
        <div class="col-md-9 well admin-content" id="Messaging">
            Table
        </div>
        <div class="col-md-9 well admin-content" id="InstallationJobs">
            Forms
        </div><?php */?>
        
    </div>


     
     
     
     
	 
	 
	 
	 
	 
    


	 
	 
	  
            
            
            
        </div>
   
    </section>



      @include('footer')
</body>
</html>