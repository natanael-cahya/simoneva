
                         <div class="modal-body">
                             <div class="card">
                                 <div class="card-body">
                                        <?php $a=$this->uri->segment(5);?>
                                        <?php
                                                foreach ($editt as $kat_id):
                                                $sel=$kat_id->id_s5; 
                                              ?>
                                     <form method="post" class="forms-sample" action="<?= base_url('admin/audit/crud_list_audit/u_auditl/').$a ?>">
                                        <input type="hidden" name="id" value="<?= $kat_id->id_kategori_area ?>">
                                        <div class="form-group">
                                             <label for="exampleInputEmail3">Check List</label>
                                             <input type="text" class="form-control" name="periksa" id="exampleInputEmail3" placeholder="" value="<?php  echo $kat_id->kat_deskripsi ; ?>">
                                         </div>
                                         <div class="form-group">
                                             <label for="exampleInputEmail3">deskripsi</label>
                                             <textarea name="des" class="form-control"><?php  echo $kat_id->deskripsi_eva ; ?></textarea>
                                            
                                         </div>
                                         <div class="form-group">
                                             <label for="exampleInputName1">Kategori S5</label>
                                             <select class="form-control" name="s5">
                                                <option selected="<?= $sel ?>" value="<?= $sel ?>">==JANGAN DIUBAH BILA TAK INGIN DIRUBAH==</option>
                                                <?php foreach ($es5 as $keyzz) :
                                                   ?>
                                                <option value="<?= $keyzz['id_s5'] ?>"><?= $keyzz['deskripsi_s5'] ?></option>
                                                 <?php endforeach;  ?>
                                             </select>
                                         </div>
                                        
                                        
                                        <div class="form-group">
                                             <label for="exampleInputName1">Kategori Area</label>
                                             <select class="form-control" name="kat_area">
                                              
                                              
                                             
                                             <option value="<?= $kat_id->id_kategori_area ?>">===== JANGAN DIGANTI JIKA TAK INGIN DIRUBAH =====</option>
                                             <?php 
                                                foreach ($kate as $ka): 
                                                ?>
                                                <option value="<?= $ka['id_kategori_area'] ?>"><?= $ka['nama_kategori'] ?></option>
                                            <?php endforeach; ?>
                                             </select>
                                         </div>
                                          <?php endforeach; ?>

                             <button type="submit" class="btn btn-primary">EDIT</button>
                            <a href="<?= base_url('admin/audit/crud_list_audit/v_list_audit'); ?>" class="btn btn-secondary" data-dismiss="modal">BATAL</a>
                                 </div>
                             </div>
                         </div>
                         <div class="modal-footer">
                             
                             </form>
                                
                         </div>
                     </div>
                 </div>
