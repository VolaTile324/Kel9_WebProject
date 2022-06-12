 <!-- modal insert -->
 <div class="example-modal">
          <div id="addnew" class="modal fade" role="dialog" style="display:none;">
            <div class="modal-dialog"> 
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h3 class="modal-title">Input Perusahaan Baru</h3>
                </div>
                <div class="modal-body">
                <form action="add-perusahaan.php" method="post" role="form" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Id Perusahaan <span class="text-red">*</span></label>         
                                      <div class="col-sm-8"><input type="text" class="form-control" name="id_perusahaan" placeholder="Id Perusahaan"></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Nama <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="nama" placeholder="Nama"></div>
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
                                      <div class="col-sm-8"><input type="text" class="form-control" name="pemilik" placeholder="Pemilik"></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Deskripsi <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Status <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="status" placeholder="status"></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Kategori <span class="text-red">*</span></label>
                                      <div class="col-sm-8">
                                        <select class="form-control" name="kategori">
                                          <?php
                                            $kategori_sql = "SELECT * FROM daftar_kategori";
                                            $result_kategori = mysqli_query($conn, $kategori_sql);
                                            while ($row = mysqli_fetch_assoc($result_kategori)) {
                                              echo "<option value='".$row['nama_kategori']."'>".$row['nama_kategori']."</option>";
                                            }
                                          ?>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button id="noedit" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                                    <input type="submit" name="submit" class="btn btn-primary" value="Insert">
                                  </div>
                                </form>
                </div>
              </div>
            </div>
          </div>
        </div><!-- modal insert close -->
