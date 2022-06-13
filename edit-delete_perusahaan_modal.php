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
                                <form action="edit-perusahaan.php" onSubmit="return validasiPerusahaan()" method="post" role="form" enctype="multipart/form-data">
                                 
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Id Perusahaan <span class="text-red">*</span></label>         
                                      <div class="col-sm-8"><input type="text" class="form-control" id="id_perusahaan" name="id_perusahaan" placeholder="Id Perusahaan" value="<?php echo $row['id_perusahaan']; ?>" readonly></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Nama <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $row['nama']; ?>" required></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Logo <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="file" class="form-control" id="logo" name="logo" placeholder="Logo" required></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Pemilik <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="Pemilik" value="<?php echo $row['pemilik']; ?>" required></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Deskripsi <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" value="<?php echo $row['deskripsi']; ?>" required></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Status <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" id="status" name="status" placeholder="status" value="<?php echo $row['status_perusahaan']; ?>" required></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Kategori <span class="text-red">*</span></label>
                                      <div class="col-sm-8">
                                      <select class="form-control" name="kategori" required>
                                        <option disabled selected required> Pilih </option>
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
                                    <input type="submit" name="submit" class="btn btn-primary" value="Update">
                                  </div>
                                  
                                 
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- modal update  -->

                      <script>
                      function validasiPerusahaan() {
                        var id_perusahaan = document.getElementById("id_perusahaan").value;
                        var nama = document.getElementById("nama").value;
                        var logo = document.getElementById("logo").value;
                        var pemilik = document.getElementById("pemilik").value;
                        var deskripsi = document.getElementById("deskripsi").value;
                        var status = document.getElementById("status").value;

                        var setMessage = document.getElementById("errormsg");

                        //cek field id_perusahaan kosong atau tidak
                        if (id_perusahaan == "") {
                          setMessage.innerHTML = "Id Perusahaan tidak boleh kosong";
                          return false;
                        }
                        //cek field nama kosong atau tidak
                        if (nama == "") {
                          setMessage.innerHTML = "Nama tidak boleh kosong";
                          return false;
                        }
                        //cek field pemilik kosong atau tidak
                        if (pemilik == "") {
                          setMessage.innerHTML = "Pemilik tidak boleh kosong";
                          return false;
                        }
                        //cek field deskripsi kosong atau tidak
                        if (deskripsi == "") {
                          setMessage.innerHTML = "Deskripsi tidak boleh kosong";
                          return false;
                        }
                        //cek field status kosong atau tidak
                        if (status == "") {
                          setMessage.innerHTML = "Status tidak boleh kosong";
                          return false;
                        }
                        //cek field id_perusahaan hanya boleh angka
                        if (isNaN(id_perusahaan)) {
                          setMessage.innerHTML = "Id Perusahaan hanya boleh angka";
                          return false;
                        }else{
                          return true;
                        }
                      }

                    </script>