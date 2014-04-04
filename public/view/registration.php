<?php


include('./includes/services/Loader.php');
$loader = new Loader();

try{
$loader->service('Template.php');
$loader->service('CurrentPage.php');
}
catch(Exception $e){
 echo 'Message: '. $e->getMessage();
}

$template = new Template();


// variable to detect the index page

?>

<!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset="utf-8" />
            <title>Registration</title>
	    
	    <?php
	  
	    $cssFiles = array("bootstrap.min.css","bootstrap-theme.css","style.css","main.css");
	    
	    foreach($cssFiles as $file){
	    echo '<link rel="stylesheet" type="text/css" href="../public/css/'.$file.'" />';	    }
	    
	    ?>
	    
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" />
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Gafata" />
        
            
        </head>
        <body>
            <div id="page">
		    <div id="header">
		    <?php
		      try{
			$template->render('header.php');
		      }
		      catch(Exception $e){
			echo 'Message: '. $e->getMessage();
		      }
		    
		    ?>
		    </div>
			<div class="container">
			<div class="row ">
                    <!-- u_header -->
                      <div id="bannerForRegistration">
                            <div class="">
                                <h2>Registration Form </h2>
                            </div>
                            
                        </div>
			</div>
                        <!-- banner -->
                      <!-- header -->
                     <div class="row">
			<form action="<?php echo URL; ?>home/register" class="form-horizontal u_row" method="post" role="form">
			<div class="col-lg-6 u_row">
				
				    
				    <legend>Personal information:</legend>
				    <div class="form-group">
				    <label class="col-sm-2 control-label" >FirstName:</label>
				    
				    <div class="col-sm-6">
					<input name="firstname" type="text" class="form-control" />
				    </div>
				    </div>
				    
				    <div class="form-group">
				      <label class="col-sm-2 control-label" >LastName:</label>
				      <div class="col-sm-6">
					<input name="lastname" type="text" class="form-control" />
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="col-sm-2 control-label" >Degree Program:</label>
				      <div class="col-sm-6">
					<input name="degree_program" type="text" class="form-control" />
				      </div>
				    </div>
				    
				    <div class="form-group">
				      <label class="col-sm-2 control-label" >Sex:</label>
				      <div class="radio col-sm-3">
					<label>
					<input name="gender" type="radio" class="form-control" value="male" selected="selected" /> Male
					</label>
				      </div>
				      
				      <div class="radio col-sm-3">
					<label>
					<input name="gender" type="radio" class="form-control" value="female"/> Female
					</label>
				      </div>
				    </div>
				    
				    <div class="form-group">
				    
				      <label class="col-sm-2 control-label" >Marital status:</label>
				      <div class="radio col-sm-3">
					<label>
					<input name="maritial_status" type="radio" class="form-control" value="single" selected="selected" /> Single
					</label>
				      </div>
				      
				      <div class="radio col-sm-3">
					<label>
					<input name="maritial_status" type="radio" class="form-control" value="married"  /> Married
				        </label>
				    </div>
				      </div>
				
					
	    	
	                   <div class="u_row">
			    <legend>Contacts:</legend>
			    
		               <div class="form-group">
				  <label class="col-sm-2 control-label" >Mailing Address:</label>
				  <div class="col-sm-6">
				    <input class="form-control" name="mailing_address" type="text"  />
				  </div>
				</div>
			       <div class="form-group">
				  <label class="col-sm-2 control-label" >E-mail:</label>
				  <div class="col-sm-6">
				    <input name="email" type="text" class="form-control" />
				  </div>
				</div>
			       <div class="form-group">
				  <label class="col-sm-2 control-label" >Cell phone:</label>
				  <div class="col-sm-6">
				    <input name="phonenumber" type="text" class="form-control" />
				  </div>
				</div>
				
			    </div>
			
		    </div>
		
		    	
		    <div class="row u_row" >
                          <div class="col-lg-6 u_row">
		    
			
				<legend>Personal Profile:</legend>
				
				<div class="form-group">
				  <label class="col-sm-2 control-label" >Skills:</label>
				  <div class="col-sm-6">
				    <textarea name="skills" rows="3" cols="60" class="form-control" ></textarea>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label" >Hobbies & Interests:</label>
				  <div class="col-sm-6">
				    <textarea name="hobbies" rows="3" cols="60" class="form-control" ></textarea>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label" >Upload Picture:</label>
				  <div class="col-sm-6">
				    <input type="file" class="f" name="picture" /> 
				  </div>
				</div>
				
				

                      
			    </div>
			  <div class="col-lg-6 u_row">
		              <div >
			
				<legend>Sensitive Details:</legend>
				
				<div class="form-group">
				  <label class="col-sm-2 control-label" >Password:</label>
				  <div class="col-sm-6">
				    <input class="form-control" name="password" type="password"  />
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label" >Repeat Password:</label>
				  <div class="col-sm-6">
				    <input class="form-control" name="repeatedPassword" type="password"  />
				  </div>
				</div>
				<div class="form-group">
				    <div class="col-sm-3">
				     <input type="submit" value="Submit" class="u_button form-control u_row" />
				    </div>
				</div>
				</div>

                      
			    </div>
			  
			</div>
		      </form>
		     </div>
		     <!--container -->
		    
		    
		    <div class="content">
                      <?php
		      try{
			$template->render('footer.php');
		      }
		      catch(Exception $e){
			echo 'Message: '. $e->getMessage();
		      }
		    
		    ?>
                    </div>
            </div>
        </body>
    </html>