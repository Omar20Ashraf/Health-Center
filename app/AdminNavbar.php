<?php 
namespace App; 

  use Illuminate\Database\Eloquent\Model;
  class AdminNavbar extends Model
 { 

 	 public function nav($title,$showRoute,$showName,$addRoute,$addName)
 	{
 ?>
 		<li class="submenu">
	        <a href="#">
	            <i class="glyphicon glyphicon-list"></i>
	            	$title
	            <span class="caret pull-right"></span>
	        </a>
	         <!-- Sub menu -->
	        <ul>
	              <!-- Show Contact Information in Admin Pae  -->
	            <li> 
	            	<a href="<?php  route($showRoute . '.' .'index') ?>">
	                	<?php echo 'Show'.' '.$showName ; ?>
	           		 </a>
	        	</li>

	             <!-- Add Contact Information -->
	            <li>
	            	<a href="<?php route($addRoute . '.' .'create') ?>">
	                    <?php echo 'Show'.' '.$addName ; ?>
	                </a>
	            </li>
	        </ul>
    	</li> 	
 	 }

 } 
