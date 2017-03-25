<div id="footer_id">
<!--  Add Data Akun-->
<div id="add_akun" class="modal fade" role="dialog">
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
              <td><input class="form-control" type="text" id="username"></td>
          </tr>
          <tr>
              <td>Password</td>
              <td><input class="form-control" type="Password" id="password"></td>
          </tr>
          <tr>
              <td>Hak Akses</td>
              <td>
                <select class="form-control" id='role'>
                  <option value="">Pilih Hak Akses</option>
                  <option value="1">Admin</option>
                  <option value="2">Peserta/Guru</option>
                </select>
              </td>
          </tr>
        </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success"  data-dismiss="modal" onclick="add_akun()">Tambah</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div>
    </div>

  </div>
</div>

<div id="modal_sub">
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
</div>
<script>
 function refresh_akun(){
        $.ajax({
            url:'akun_refresh',
            method: 'post',
            data:
                    'id_akun='+$('#id_akun').val(),                 
            dataType:'html',
            success: function(data){
                $('#modal_sub').html(data);                
            }
        });

       return false; 
    }
    function add_akun(){
        $.ajax({
            url:'add_akun',
            method: 'post',
            data:
                    'username='+$('#username').val()+
                    '&password='+$('#password').val()+
                    '&role='+$('#role').val(),                   
            dataType:'html',
            success: function(data){
                $('#tabel_akun').html(data);
                refresh_akun();
                toastr.optionsOverride = 'positionclass = "toast-bottom-right"';
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success($('#username').val()+'   '+'Telah Di Tambah!');    
                $('#username').val(null);
                $('#password').val(null);            
            }
        });

       return false; 
    }

     function delete_akun(id_akun){
        $.ajax({
            url:'delete_akun',
            method: 'post',
            data:'id_akun='+id_akun,                   
            dataType:'html',
            success: function(data){
                $('#tabel_akun').html(data);
                toastr.optionsOverride = 'positionclass = "toast-bottom-right"';
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success('Data Telah Di Hapus!');                  
            }
        });

       return false; 
    }

    function edit_akun(id_akun){
        $.ajax({
            url:'edit_akun',
            method: 'post',
            data:
                    'username='+$('#username'+id_akun).val()+
                    '&password='+$('#password'+id_akun).val()+
                    '&role='+$('#role'+id_akun).val()+
                    '&id_akun='+id_akun,                   
            dataType:'html',
            success: function(data){
                $('#tabel_akun').html(data);
                toastr.optionsOverride = 'positionclass = "toast-bottom-right"';
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success($('#username').val()+'   '+'Telah Di Edit!');                  
            }
        });

       return false; 
    }



</script>
</div>