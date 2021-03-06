<div id="edit-<?php echo $n['id_mapel']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">EDIT DATA</h3>
      </div>

      <div class="modal-body">
      <?php echo form_open('administrator/mapel/update/' . $n['id_mapel']); ?>
      <input readonly hidden name="id_mapel" required="required" value="<?php echo $n['id_mapel']; ?>" type="text">

        <div class="form-group has-success has-feedback">
          <div class="input-group">
            <span class="input-group-addon wd-addon">Kode MP</span>
            <input name="kode_mapel" required="required" value="<?php echo $n['kode_mapel']; ?>" type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
          </div>
        </div>

        <div class="form-group has-success has-feedback">
          <div class="input-group">
            <span class="input-group-addon wd-addon">Nama MP</span>
            <input name="nama_mapel" required="required" value="<?php echo $n['nama_mapel']; ?>" type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
          </div>
        </div>

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Perbaharui</button>
      </div>
      <?php echo form_close(); ?>

    </div>
  </div>
</div> <!-- End Modal -->