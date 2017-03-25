
<!--  Add Data lomba-->
<div id="add_lomba" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data lomba</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tr>
              <td>Nama Lomba</td>
              <td><input class="form-control" type="text" id="nama_lomba"></td>
          </tr>
        </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success"  data-dismiss="modal" onclick="add_lomba()">Tambah</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div>
    </div>

  </div>
</div>

<div id="modal_sub">
  <?php $no =1 ?><?php foreach($table_lomba as $delete_lomba){ ?>
<!-- Hapus Data lomba -->
<div class="modal fade" id="hapus_lomba<?php echo $delete_lomba->id_lomba;?>" role="dialog" >
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
                  <button class="btn btn-success button" data-dismiss="modal" onclick="delete_lomba('<?php echo $delete_lomba->id_lomba;?>')"><span>Ya, Hapus Data ini</span></button>
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

<?php $no =1 ?><?php foreach($table_lomba as $edit_lomba){ ?>
<div id="edit_lomba<?php echo $edit_lomba->id_lomba;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data lomba</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tr>
              <td>Nama Lomba</td>
              <td><input class="form-control" type="text" id="nama_lomba<?php echo $edit_lomba->id_lomba;?>" value="<?php echo $edit_lomba->nama_lomba;?>"></td>
          </tr>
        </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="edit_lomba('<?php echo $edit_lomba->id_lomba;?>')">Edit</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>
</div>
<script>
 function refresh_lomba(){
        $.ajax({
            url:'lomba_refresh',
            method: 'post',
            data:'id_lomba=1s',                 
            dataType:'html',
            success: function(data){
                $('#modal_sub').html(data);                
            }
        });

       return false; 
    }

    function add_lomba(){
        $.ajax({
            url:'add_lomba',
            method: 'post',
            data:'nama_lomba='+$('#nama_lomba').val(),                   
            dataType:'html',
            success: function(data){
               $('#tabel_lomba').html(data);
                refresh_lomba();
                toastr.optionsOverride = 'positionclass = "toast-bottom-right"';
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success($('#nama_lomba').val()+'   '+'Telah Di Tambah!');  
                $('#nama_lomba').val(null);                
            }
        });

       return false; 
    }

     function delete_lomba(id_lomba){
        $.ajax({
            url:'delete_lomba',
            method: 'post',
            data:'id_lomba='+id_lomba,                   
            dataType:'html',
            success: function(data){
                $('#tabel_lomba').html(data);
                toastr.optionsOverride = 'positionclass = "toast-bottom-right"';
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success('Data Telah Di Hapus!');                  
            }
        });

       return false; 
    }

    function edit_lomba(id_lomba){
        $.ajax({
            url:'edit_lomba',
            method: 'post',
            data:
                    'nama_lomba='+$('#nama_lomba'+id_lomba).val()+
                    '&id_lomba='+id_lomba,                   
            dataType:'html',
            success: function(data){
                $('#tabel_lomba').html(data);
                toastr.optionsOverride = 'positionclass = "toast-bottom-right"';
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success($('#nama_lomba').val()+'   '+'Telah Di Edit!');                  
            }
        });

       return false; 
    }



</script>