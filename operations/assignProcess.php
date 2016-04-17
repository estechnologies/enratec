<?php 
							
									require 'operations/connect.php';
									$database =  new connect();
									
									$empidQuery = "SELECT name FROM team";
									$options = $database->getRowsDatabase($empidQuery);
									
									
									for($i=0;$i < count($options);$i++){
							 ?>
							 
							 		<option value="<?php echo $options[$i]['name'];?>"><?php echo $options[$i]['name'];?></option>
<?php } ?>