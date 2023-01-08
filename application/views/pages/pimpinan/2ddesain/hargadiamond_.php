
                                         <div class="input-group">
                                          
                                          <?php foreach ($diamond as $d) 
                                          ?>
                                           <input style="padding-bottom: 10px;width:300px; margin-left:40px;text-align: right"  type="text" name="diamond_" value="<?php echo number_format($d->hargadiamond,0,',','.') ?>" readonly class="form-control">
                                           <input style="padding-bottom: 10px;width:550px; margin-left: 27px;text-align: right" id="hargadiamond" type="hidden" name="hargadiamond" value="<?= $d->hargadiamond ?>" readonly class="form-control">
                                            <input style="padding-bottom: 10px;max-width: 300px; margin-left: 37px;text-align: right"  type="hidden" name="totaljumlah" value="<?=$d->totaljumlah?>" readonly class="form-control">
                                             <input style="padding-bottom: 10px;max-width: 300px; margin-left: 37px;text-align: right"  type="hidden" name="totalberat" value="<?=$d->totalberat?>" readonly class="form-control">
                                  </div>
                                  