
                         <div class="modal-body">
                             <div class="card">
                                 <div class="card-body">
                                        <?php $a=$this->uri->segment(5);?>
                                        <?php
                                                foreach ($join as $kat_id): 
                                              ?>
                                     <form method="post" class="forms-sample" action="<?= base_url('index.php/admin/area/crud_area/u_area/').$a ?>">
                                        <div class="form-group">
                                             <label for="exampleInputEmail3">Kode Area</label>
                                             <input type="text" class="form-control" id="exampleInputEmail3" placeholder="" readonly="readonly" value="<?php  echo $kat_id->id_area ; ?>UIHUEH764857JKITFGF9">
                                         </div>
                                         <div class="form-group">
                                             <label for="exampleInputName1">Nama Area</label>
                                             <input type="text" class="form-control" name="nama_area" id="exampleInputName1" placeholder="Name" value="<?php echo $kat_id->nama_area ;  ?>" required="">
                                         </div>
                                         <div class="form-group">
                                             <label for="exampleInputName1">AUDITEE</label>
                                             <input type="text" class="form-control" name="auditee" id="exampleInputName1" placeholder="Name" value="<?php echo $kat_id->auditee ;  ?>" required="">
                                         </div>
                                         <?php endforeach; ?>
                                        <div class="form-group">
                                             <label for="exampleInputName1">Kategori Area</label>
                                             <select class="form-control" name="kat_area">
                                              
                                              
                                             
                                             <option value="<?= $a ?>">===== JANGAN DIGANTI JIKA TAK INGIN DIRUBAH =====</option>
                                             <?php 
                                                foreach ($kategori_area as $ka): 
                                                ?>
                                                <option value="<?=$ka['id_kategori_area'];?>"><?=$ka['nama_kategori'];?></option>
                                            <?php endforeach; ?>
                                             </select>
                                         </div>

                             <button type="submit" class="btn btn-primary">EDIT</button>
                            <a href="<?= base_url('admin/area/crud_area/v_area'); ?>" class="btn btn-secondary" data-dismiss="modal">BATAL</a>
                                 </div>
                             </div>
                         </div>
                         <div class="modal-footer">
                             
                             </form>
                                
                         </div>
                     </div>
                 </div>
