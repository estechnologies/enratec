<?php 
                            
                                $teamQuery = "SELECT name FROM team";
                                $users = $database->getRowsDatabase($teamQuery);
                                
                                for($i = 0; $i < count($users); $i++){
                             ?>
                                <option <?php if($users[$i]['name'] == $rows[0][$requireAssign]){ echo 'selected';} ?> value="<?php echo $users[$i]['name'];?>"><?php echo $users[$i]['name'];?></option>
                            <?php } ?>