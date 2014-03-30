<?php

include_once('../../includes/services/CurrentPage.php');

?>
<header class="navbar navbar-static-top bs-docs-nav u_header" id="top" role="banner">
              <div class="container">
                 <div class="navbar-header">
     
                 <a href="/index.php" class="navbar-brand"><img class="logo img col-sm-4" src="../img/uict.jpg" alt="uict logo"
		/></a>   	
                </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
               
                     <ul class="nav navbar-nav navbar-right">
                            <li class= "<?php echo CurrentPage::$currentPage == "home"?'active':'list'; ?>" ><a href="index.php">Home</a></li>
                            <li class= "<?php echo CurrentPage::$currentPage == "projects"?'active':'list'; ?>"><a href="../includes/controller/ProjectController.php" >Projects</a></li>
                            <li class= "<?php echo CurrentPage::$currentPage == "events"?'active':'list'; ?>"><a href="events.php">Events</a></li>
                            <li class= "<?php echo CurrentPage::$currentPage == "about"?'active':'list'; ?>"><a href="about.php">About</a></li>
                            <li class= "<?php echo CurrentPage::$currentPage == "signin"?'active':'list'; ?>"><a href="login.php">Sign In</a></li>
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