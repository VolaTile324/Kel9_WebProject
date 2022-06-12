<!-- modal insert -->
<div class="example-modal">
          <div id="addnew" class="modal fade" role="dialog" style="display:none;">
            <div class="modal-dialog"> 
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h3 class="modal-title">Input Kategori Baru</h3>
                </div>
                <div class="modal-body">
                <form action="add-kategori.php" method="post" role="form">
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Id Kategori <span class="text-red">*</span></label>         
                                      <div class="col-sm-8"><input type="text" class="form-control" name="id_kategori" placeholder="Id Kategori"></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Nama Kategori<span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori"></div>
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