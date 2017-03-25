
<!--  Add Data tpq-->
<div id="add_tpq" class="modal fade" role="dialog">
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
              <td>Nama TPQ</td>
              <td><input class="form-control" type="text" id="nama_tpq"></td>
          </tr>
           <tr>
              <td>Wilayah TPQ</td>
              <td><input class="form-control" type="text" id="wilayah_tpq"></td>
          </tr>
        </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success"  data-dismiss="modal" onclick="add_tpq()">Tambah</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div>
    </div>

  </div>
</div>

<div id="modal_sub">
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
</div>
<script>

 function refresh_tpq(){
        $.ajax({
            url:'tpq_refresh',
            method: 'post',
            data:'id_tpq=1s',                 
            dataType:'html',
            success: function(data){
                $('#modal_sub').html(data);                
            }
        });

       return false; 
    }

    function add_tpq(){
        $.ajax({
            url:'add_tpq',
            method: 'post',
            data:'wilayah_tpq='+$('#wilayah_tpq').val()+
                    '&nama_tpq='+$('#nama_tpq').val(),                  
            dataType:'html',
            success: function(data){
                $('#tabel_tpq').html(data);
                refresh_tpq();

                toastr.optionsOverride = 'positionclass = "toast-bottom-right"';
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success($('#nama_tpq').val()+'   '+'Telah Di Tambah!');  
                $('#wilayah_tpq').val(null);
                $('#nama_tpq').val(null);                
            }
        });

       return false; 
    }

     function delete_tpq(id_tpq){
        $.ajax({
            url:'delete_tpq',
            method: 'post',
            data:'id_tpq='+id_tpq,                   
            dataType:'html',
            success: function(data){
                $('#tabel_tpq').html(data);
                
                toastr.optionsOverride = 'positionclass = "toast-bottom-right"';
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success('Data Telah Di Hapus!');                  
            }
        });

       return false; 
    }

    function edit_tpq(id_tpq){
        $.ajax({
            url:'edit_tpq',
            method: 'post',
            data:
                    'nama_tpq='+$('#nama_tpq'+id_tpq).val()+
                    '&wilayah_tpq='+$('#wilayah_tpq'+id_tpq).val()+
                    '&id_tpq='+id_tpq,                   
            dataType:'html',
            success: function(data){
                $('#tabel_tpq').html(data);
                toastr.optionsOverride = 'positionclass = "toast-bottom-right"';
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success($('#nama_tpq').val()+'   '+'Telah Di Edit!');                  
            }
        });

       return false; 
    }



</script>