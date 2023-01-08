
                                      
                                         <div class="input-group">
                                         	   <?php foreach ($kepala as $k) 
                                          ?>
                                        <input style="padding-bottom: 10px;width:300px; margin-left:55px;text-align:right"  value="<?php echo number_format($k->kepala,0,',','.') ?>" readonly  type="text" name="kepala_" class="form-control">
                                         <input style="padding-bottom: 10px;width:650px; margin-left:45px;text-align:right"  value="<?= $k->kepala ?>" readonly  type="hidden" name="hargakepala" id="hargakepala" class="form-control">
                                        
                                  </div>
                              