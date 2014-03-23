<?php 
  /*
   require_once('../includes/model/session.php');
   require_once('../includes/helper/functions.php');

   if($session->is_logged_in == false){
       redirect('login.php');
   }
   */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home | UICT Community</title>

<meta name="viewport" content="width=device-widht, initial-scale=1.0">
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Gafata" />
<link rel="stylesheet" type="text/css" href="../css/main.css"/>

       <body>
	      <div id="page">
	      <header class="navbar navbar-static-top bs-docs-nav u_header" id="top" role="banner">
              <div class="container">
                 <div class="navbar-header">
     
                 <a href="/index.php" class="navbar-brand"><img class="logo img col-sm-4" width="60" src="../img/uict.jpg" alt="uict logo"
		/></a>   	
                </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
               
                     <ul class="nav navbar-nav navbar-right">
                            <li class="active" ><a href="#home">Home</a></li>
                            <li class="list"><a href="#projects">Projects</a></li>
                            <li class="list"><a href="#events">Events</a></li>
                            <li class="list"><a href="#about">About</a></li>
                            <li class="list"><a href="login.php">Sign In</a></li>
                            <li ><a><i  title="click to search" data-toggle="dropdown"
				class="dropdown-toggle glyphicon glyphicon-search"></i>
                                </a>
                            </li>
                     </ul>
                </nav>
               </div>
         <div class="for_search">
                       <div class="container">
                         <div class="btn-group pull-right" >
                        <div id="search">
                            <form action="search.php" method="get">
                                <ul class="nav dropdown-menu" role="menu">
                                <li><input class="text_"type="text" name="searchQuery" alt="forSearch" id="searchQuery"  
				     placeholder="search"/></li>
                                <li><input class="btn " type="submit" name="submit" id="submit" value="submit" /></li>
				</ul>
                            </form>
                        </div>
                        </div>
			</div>
                    </div>
            </header>
	      <div class="container">
		     <div class="row u_row">
			    <div class="col-lg-6">
				   <div class="row ">
					  
					  <div class="col-lg-3 offset">
						 <img class="img img-thumbnail" src="../img/profile_photo.jpg" />
					  <a href="profile.php" title="Checkout Profile" >Samweli Twesa</a>
					  </div>
					  <div class="col-lg-6 col-md-offset-3">
						 <form action="../controller/search.php" method="get">
							<div class="input-group">
							<input type="text" class="form-control-min" size="40"  placeholder="Search a colleague"  />
							<span class="input-group-btn">
						        <input type="submit" class="btn btn-primary" value="Search" />
							</span>
							</div>
						 </form>
					  </div>
					
				   </div>
				   <div class="row u_row">
					<div class="col-lg-6">
					  <ul class="nav navigation-menu" >
						 <li  class="active-menu list-menu"><a><i class="diff glyphicon glyphicon-pushpin"></i> Enrolled Projects</a></li>
						 <li  class="list-menu"><a><i class="diff glyphicon glyphicon-book"></i> OnGoing Projects</a></li>
						 <li  class="list-menu"><a><i class="diff glyphicon glyphicon-map-marker"></i> Enrolled Projects</a></li>
						 <li  class="list-menu"><a><i class="diff glyphicon glyphicon-bookmark"></i> Enrolled Projects</a></li>
					  </ul>
					</div>
				   </div>
			    </div>
		     </div>
	      </div>
	      </div>
       </body>