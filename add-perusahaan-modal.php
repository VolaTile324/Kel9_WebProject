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
                <form action="add-perusahaan.php" onSubmit="return cekPer()" method="post" role="form" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Id Perusahaan <span class="text-red">*</span></label>         
                                      <div class="col-sm-8"><input type="text" class="form-control" name="id_perusahaan" placeholder="Id Perusahaan" required></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Nama <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="nama" placeholder="Nama" required></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Logo <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="file" class="form-control" name="logo" placeholder="Logo" required></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Pemilik <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="pemilik" placeholder="Pemilik" required></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Deskripsi <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" required></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Status <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="status" placeholder="status" required></div>
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
                                    <input type="submit" name="submit" class="btn btn-primary" value="Insert">
                                  </div>
                                </form>
                </div>
              </div>
            </div>
          </div>
        </div><!-- modal insert close -->


        <!-- script validasi form -->

<script>
  function cekPer() {
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