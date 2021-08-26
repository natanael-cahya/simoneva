
                         <div class="modal-body">
                             <div class="card">
                                 <div class="card-body">
                                        <?php $a=$this->uri->segment(5);?>
                                        <?php
                                                foreach ($ex as $kat_id):
                                                 
                                              ?>
                                     <form method="post" class="forms-sample" action="<?= base_url('admin/audit/crud_auditE/up_auditE/').$a ?>">
                                        
                                        <div class="form-group">
                                             <label for="exampleInputEmail3">Check List</label>
                                             <input type="text" class="form-control" name="eva" id="exampleInputEmail3" placeholder="" value="<?php  echo $kat_id->evaluasi_ext ; ?>">
                                         </div>
                                         <div class="form-group">
                                             <label for="exampleInputEmail3">Rekomendasi</label>
                                             <input type="text" class="form-control" name="rekom" id="exampleInputEmail3" placeholder="" value="<?php  echo $kat_id->rekomendasi ; ?>">
                                         </div>
                                         <div class="form-group">
                                             <label for="exampleInputName1">Nama Area</label>
                                             <select class="form-control" name="are">
                                                <option selected="<?= $kat_id->id_area ?>" value="<?= $kat_id->id_area ?>">==JANGAN DIUBAH BILA TAK INGIN DIRUBAH==</option>
                                                <?php foreach ($are as $keyzz) :
                                                   ?>
                                                <option value="<?= $keyzz->id_area ?>"><?= $keyzz->nama_area ?></option>
                                                 <?php endforeach;  ?>
                                             </select>
                                         </div>
                                        
                                         
                                        <div class="form-group">
                                             <label for="exampleInputName1">Kategori Area</label>
                                             <select class="form-control" name="kate">
                                             <option value="<?= $kat_id->id_kategori_area ?>">===== JANGAN DIGANTI JIKA TAK INGIN DIRUBAH =====</option>
                                             <?php 
                                                foreach ($kat as $ka): 
                                                ?>
                                                <option value="<?= $ka['id_kategori_area'] ?>"><?= $ka['nama_kategori'] ?></option>
                                            <?php endforeach; ?>
                                             </select>
                                         </div>
                                          <div class="form-group">
                                             <label for="exampleInputName1">Bidang PIC</label>
                                             <select class="form-control" name="bdg">
                                             <option value="<?= $kat_id->id_bidang ?>"><?= $kat_id->id_bidang ?>===== JANGAN DIGANTI JIKA TAK INGIN DIRUBAH =====</option>
                                             <?php 
                                                foreach ($pic as $ka): 
                                                ?>
                                                <option value="<?= $ka->id_bidang ?>"><?= $ka->nama_bidang ?></option>
                                            <?php endforeach; ?>
                                             </select>
                                         </div>
                                         <?php endforeach; ?>

                             <button type="submit" class="btn btn-primary">EDIT</button>
                            <a href="<?= base_url('admin/audit/crud_auditE/r_auditE'); ?>" class="btn btn-secondary" data-dismiss="modal">BATAL</a>
                                 </div>
                             </div>
                         </div>
                         <div class="modal-footer">
                             
                             </form>
                                
                         </div>
                     </div>
                 </div>
