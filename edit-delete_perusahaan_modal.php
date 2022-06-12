  <!-- modal update -->
  <div class="example-modal">
                        <div id="edit_<?php echo $row['id_perusahaan']; ?>" class="modal fade" role="dialog" style="display:none;">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3 class="modal-title">Edit Data</h3>
                              </div>
                              <div class="modal-body">
                                <form action="edit-perusahaan.php" method="post" role="form" enctype="multipart/form-data">
                                 
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Id Perusahaan <span class="text-red">*</span></label>         
                                      <div class="col-sm-8"><input type="text" class="form-control" name="id_perusahaan" placeholder="Id Perusahaan" value="<?php echo $row['id_perusahaan']; ?>" readonly></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Nama <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $row['nama']; ?>"></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Logo <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="file" class="form-control" name="logo" placeholder="Logo"></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Pemilik <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="pemilik" placeholder="Pemilik" value="<?php echo $row['pemilik']; ?>"></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Deskripsi <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="<?php echo $row['deskripsi']; ?>"></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Status <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="status" placeholder="status" value="<?php echo $row['status_perusahaan']; ?>"></div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button id="noedit" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                                    <input type="submit" name="submit" class="btn btn-primary" value="Update">
                                  </div>
                                  
                                 
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- modal update  -->

  

  <!-- modal delete -->
  <div class="example-modal">
                        <div id="delete_<?php echo $row['id_perusahaan']; ?>" class="modal fade" role="dialog" style="display:none;">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3 class="modal-title">Konfirmasi Delete Data</h3>
                              </div>
                              <div class="modal-body">
                                <h4 align="center" >Apakah anda yakin ingin menghapus perusahaan id <?php echo $row['id_perusahaan'];?><strong><span class="grt"></span></strong> ?</h4>
                              </div>
                              <div class="modal-footer">
                                <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                                <a href="delete-perusahaan.php?id_perusahaan=<?php echo $row['id_perusahaan']; ?>" class="btn btn-primary">Hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- modal delete -->