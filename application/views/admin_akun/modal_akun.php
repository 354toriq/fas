
  <?php $no =1 ?><?php foreach($table_akun as $delete_akun){ ?>
<!-- Hapus Data AKun -->
<div class="modal fade" id="hapus_akun<?php echo $delete_akun->id_akun;?>" role="dialog" >
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
                  <button class="btn btn-success button" data-dismiss="modal" onclick="delete_akun('<?php echo $delete_akun->id_akun;?>')"><span>Ya, Hapus Data ini</span></button>
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


<!-- Edit Data AKun -->

<?php $no =1 ?><?php foreach($table_akun as $edit_akun){ ?>
<div id="edit_akun<?php echo $edit_akun->id_akun;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Akun</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tr>
              <td>Username</td>
              <td><input class="form-control" type="text" id="username<?php echo $edit_akun->id_akun;?>" value="<?php echo $edit_akun->username;?>"></td>
          </tr>
          <tr>
              <td>Password</td>
              <td><input class="form-control" type="Password" id="password<?php echo $edit_akun->id_akun;?>" value="<?php echo $edit_akun->password;?>"></td>
          </tr>
          <tr>
              <td>Hak Akses</td>
              <td>
                <select class="form-control" id="role<?php echo $edit_akun->id_akun;?>">
                  <option value="">Pilih Hak Akses</option>
                  <option value="1" <?php if($edit_akun->role == 1) echo "selected"; 
                  else {echo "";}?>
                                  >Admin</option>
                  <option value="2" <?php if($edit_akun->role == 2) echo "selected";
                  else {echo "";}?>
                                  >Peserta/Guru</option>
                </select>
              </td>
          </tr>
        </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="edit_akun('<?php echo $edit_akun->id_akun;?>')">Edit</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>