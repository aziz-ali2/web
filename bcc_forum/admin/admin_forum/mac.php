   <?php  include('header.php');  ?> 
  
  
 
 <script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_tweets1').load('feed_mac.php') ;
}, 30000); //refresh div every 10000 milliseconds or 10 seconds
 
var auto_refresh = setInterval(
function ()
{
$('#load_tweets2').load('sidebar.php') ;
}, 10000); //refresh div every 10000 milliseconds or 10 seconds


var auto_refresh = setInterval(
function ()
{
$('#load_tweets3').load('navbar.php') ;
}, 10000); //refresh div every 10000 milliseconds or 10 seconds

</script>
 <div id="load_tweets3"> 
 <?php
 // Turn off error reporting

  include('navbar.php'); 
 
  ?>
 </div>
  <body id="home">
  

 
  <center>
  <table>
  <tr>
  <td>
 
	<div class="container-fluid">
	 
		<div class="row">
		 
			<div class="col-md-3">
            	<div class="alert alert-info">
             <form method="post" action="search_result.php">
                
                  <table><tr>
                  <td>
                  <input type="text" name="search" class="form-control" placeholder="Search . ." required> 
                  </td>
                  <td>&nbsp;</td>
                  <td>
                  <button type="submit" class="btn btn-info"><li class="fa fa-search"></li> Search</button>
                  </td>
                  </tr></table>
                  
                   </form>
                  <hr />
               <div id="load_tweets2"> 
   	<?php    include('sidebar.php'); ?>
       </div>
       </div>
       </div>
			<div class="col-md-9">
				<div class="jumbotron alert-success">
										<ul class="nav nav-tabs">
									<li ><a href="home.php"><img src="../../images/fitness.png" width="40" height="40" />FITNESS</a></li>
									 	<li class="active"><a href="mac.php"><img src="../images/nutrition.png" width="40" height="40" /> NUTRITION</a></li>
                                        <li ><a href="linux.php"><img src="../images/product.png" width="40" height="40" />PRODUCTS</a></li>
									 	 
										    
									 	 
                                        </ul>
                                        	 
                                             
						<div id="load_tweets1"> 
							 <?php  include('feed_mac.php');  ?>
                             </div>
                         
						</div>
             
                            
                             
					
			</div>
		  <center>
		 	<?php include('footer.php'); ?> 
            </center>
		</div>
	</div>
     </td>
  </tr>
  </table>
  </center>
 
  
 </body>