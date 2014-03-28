
<!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset="utf-8" />
            <title>Registration</title>
            <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"> 
            <link href="../css/bootstrap-theme.css" type="text/css" rel="stylesheet"> 

            <link rel="stylesheet" type="text/css" href="../css/style.css" />
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" />
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Gafata" />
            <link rel="stylesheet" type="text/css" href="../css/main.css"/>
            
        </head>
        <body>
            <div id="page">
			<header class="navbar navbar-static-top bs-docs-nav u_header" id="top" role="banner">
              <div class="container">
                 <div class="navbar-header">
     
                 <a href="/index.php" class="navbar-brand"><img class="logo img col-sm-4" src="../img/uict.jpg" alt="uict logo"
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
			<div class="row ">
                    <!-- u_header -->
                      <div id="bannerForRegistration">
                            <div class="message">
                                <span>Registration Form </span>
                            </div>
                            
                        </div>
						</div>
                        <!-- banner -->
                      <!-- header -->
                     <div class="row u_row">
					 <div class="col-lg-6 u_row">
					<form action="">
							<div class="form">
								<legend>Personal information:</legend>
								Name: <input type="text" size="30"><br>
								last name: <input type="text" size="30"><br>
								Degree Program: <input type="text" size="30"><br>

								Sex:<br>
								<input type="radio" name="sex" value="male">Male<br>
								<input type="radio" name="sex" value="female">Female<br>
								Marital status:<br>
								<input type="radio" name="marital" value="single">single<br>
								<input type="radio" name="marital" value="married">Married<br>
							</div>
					</form>
					
					
                    <div class="col-lg-6 u_row">
                        
					<form action="">
						<fieldset>
							<legend>Contacts:</legend>
							Mailing Address: <input type="text" size="30"><br>
							E-mail: <input type="text" size="30"><br>
							Cell phone: <input type="text" size="15">
						</fieldset>
					</form>
					</div>
					</div>
					
					<div class="row u_row" >
                     <div class="col-lg-6">      
                    <form action="">
						<fieldset>
							<legend>Personal Profile:</legend>
							<h4>skills</h4>:<textarea rows="3" cols="60"></textarea>
									<h4>Hobbies & Interests</h4>:<textarea rows="3" cols="60"></textarea>
						</fieldset>

					</form>
                           
                   <input type="submit" value="Submit">
                      <!-- content -->
                      
				</div>
				</div>
				<div class="content">
                      <div class="u_footer">
                        <div class="footer_content">
                        <div class="u_social">
                            <ul class=" nav u_footer_nav">
                                <li><a href="www.facebook.com/uict" > <img src="../img/fb-icon.jpg" alt="facebook logo" width="20" height="20" /> Facebook </a></li>
                                 <li><a href="www.twitter.com/uict" ><img src="../img/twitter-icon.jpg" alt="twitter logo" width="20" height="20" /> Twitter </a></li>
                                  <li><a href="www.google+.com/uict" ><img src="../img/google.jpg" alt="google+ logo"  width="20" height="20"/> Google+ </a></li>
                            </ul>
                        </div>
                        <div class="container">
                        <div class="u_links">
                            <ul class="nav u_footer_nav">
                                <li><a href="#about" >About</a></li>
                                <li><a href="#terms" >Terms</a></li>
                                <li><a href="#privacy">Privacy</a></li>
                            </ul>
                        </div>
                        <div class="u_links">
                            <ul class="nav u_footer_nav">
                                <li><a href="#events" >Events</a></li>
                                <li><a href="#projects" >Project</a></li>
                                <li><a href="#contacts" >Contacts</a></li>
                            </ul>
                        </div>
                        </div>
                        </div>
                        <div class="container">
                        <div class="nav pull-right">
                            <p>&copy;2014 UICT Community</p>
                        </div>
                        </div>
                        
                      </div>
                    </div>
            </div>
        </body>
    </html>