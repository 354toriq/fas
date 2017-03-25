
  <?php $no =1 ?><?php foreach($table_tpq as $delete_tpq){ ?>
<!-- Hapus Data tpq -->
<div class="modal fade" id="hapus_tpq<?php echo $delete_tpq->id_tpq;?>" role="dialog" >
    <div class="modal-dialog">
       <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Apakah Anda Ingin Menhapus Data Ini?</h4>
        </div>
        <div class="modal-body">
      <table class="table">
          <tr>

              <td>
          <center>
                  <button class="btn btn-success button" data-dismiss="modal" onclick="delete_tpq('<?php echo $delete_tpq->id_tpq;?>')"><span>Ya, Hapus Data ini</span></button>
                  <button class="btn btn-danger button"data-dismiss="modal"><span>Tidak,Jangan Hapus Data Ini</span></button>
          </center>    
          </td>
          </tr>
       
      </table>
  </div>
     <div class="modal-footer">
           
       <button  id="deleteclose" class="btn btn-default" data-dismiss="modal"><span>Close</span></button>
    </div>
  </div>

</div>
</div>
<?php } ?>


<!-- Edit Data lomba -->

<?php $no =1 ?><?php foreach($table_tpq as $edit_tpq){ ?>
<div id="edit_tpq<?php echo $edit_tpq->id_tpq;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data TPQ</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tr>
              <td>Nama TPQ<td>
              <td><input class="form-control" type="text" id="nama_tpq<?php echo $edit_tpq->id_tpq;?>" value="<?php echo $edit_tpq->nama_tpq;?>"></td>
          </tr>
          <tr>
              <td>Wilayah TPQ<td>
              <td><input class="form-control" type="text" id="wilayah_tpq<?php echo $edit_tpq->id_tpq;?>" value="<?php echo $edit_tpq->wilayah_tpq;?>"></td>
          </tr>
        </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="edit_tpq('<?php echo $edit_tpq->id_tpq;?>')">Edit</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>