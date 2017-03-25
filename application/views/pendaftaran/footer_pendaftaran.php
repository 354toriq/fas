
<!--  Add Data peserta-->
<div id="add_peserta" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Peserta</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tr>
              <td>Nama peserta</td>
              <td><input class="form-control" type="text" id="nama_peserta"></td>
          </tr>
           <tr>
              <td>TPQ</td>
              <td>
                <select class="form-control" id='tpq_peserta'>
                  <option value="">Pilih TPQ</option>
                   <?php $no =1 ?><?php foreach($table_tpq as $tpq){ ?>
                  <option value="<?php echo $tpq->id_tpq;?>"><?php echo $tpq->nama_tpq;?></option>
                  <?php }?>
                </select>
              </td>
          </tr>
           <tr>
              <td>Jenis Kelamin</td>
              <td>
                <select class="form-control" id='jenkel'>
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </td>
          </tr>

           <tr>
              <td>Lomba</td>
              
              <td>
                Pilih Lomba Bisa Lebih Dari Satu
                <form>
                <?php $no =1 ?><?php foreach($table_lomba as $lomba){ ?>
                <tr>
                  <td>
                  </td>
                  <td>
                <input  class="lomba_data" type="checkbox"  id="<?php echo $lomba->id_lomba;?>" nama="lomba[]  " value="<?php echo $lomba->id_lomba;?>"><font size="2"><?php echo $lomba->nama_lomba;?></font>
                  </td>
                </tr>
               <?php }?>
             </form>
              </td>

          </tr>
        </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success"  id="btn_add_peserta" data-dismiss="modal" onclick="add_peserta()" >Tambah</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div>
    </div>

  </div>
</div>
<div id="modal_sub">
  <?php $no =1 ?><?php foreach($table_peserta as $delete_peserta){ ?>
<!-- Hapus Data peserta -->
<div class="modal fade" id="hapus_peserta<?php echo $delete_peserta->id_peserta;?>" role="dialog" >
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
                  <button class="btn btn-success button" data-dismiss="modal" onclick="delete_peserta('<?php echo $delete_peserta->id_peserta;?>')"><span>Ya, Hapus Data ini</span></button>
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

<?php $no =1 ?><?php foreach($table_peserta as $edit_peserta){ ?>
<div id="edit_peserta<?php echo $edit_peserta->id_peserta;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Data peserta</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tr>
              <td>Nama peserta</td>
              <td><input class="form-control" type="text" id="nama_peserta<?php echo $edit_peserta->id_peserta;?>" value="<?php echo $edit_peserta->nama_peserta;?>"></td>
          </tr>
           <tr>
              <td>TPQ</td> 
              <td>
                <select class="form-control" id='tpq_peserta<?php echo $edit_peserta->id_peserta;?>'>
                  <option value="">Pilih TPQ</option>
                   <?php $no =1 ?><?php foreach($table_tpq as $tpq){ ?>
                  <option value="<?php echo $tpq->id_tpq;?>" <?php if($tpq->id_tpq == $edit_peserta->id_tpq) {echo "selected";} else{ echo ""; }?>><?php echo $tpq->nama_tpq;?></option>
                  <?php }?>
                </select>
              </td>
          </tr>
           <tr>
              <td>Jenis Kelamin</td>
              <td>
                <select class="form-control" id='jenkel<?php echo $edit_peserta->id_peserta;?>'>
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="L" <?php if($edit_peserta->jenkel == "L") {echo "selected";} else{ echo ""; }?> >Laki-Laki</option>
                  <option value="P"<?php if($edit_peserta->jenkel == "P") { echo "selected";} else{ echo ""; }?>>Perempuan</option>
                </select>
              </td>
          </tr>
            <tr>
              <td>Pilih Lomba</td>
             <td>
                Pilih Lomba Bisa Lebih Dari Satu
                <form>
                <?php $no =1 ?><?php foreach($all_lomba as $lomba){ ?>
                <tr>
                  <td>
                  </td>
                  <td>
                    <?php 
                    foreach($lomba_dia as $each){
                      if($lomba->id_lomba == $each){
                        ?>
                        <input  class="lomba_data" type="checkbox"  checked id="<?php echo $lomba->id_lomba;?>" nama="lomba[]  " value="<?php echo $lomba->id_lomba;?>"><font size="2"><?php echo $lomba->nama_lomba.$lomba->id_lomba;?></font>
                        <?php
                      } else {
                        ?>
                     <input  class="lomba_data" type="checkbox"  id="<?php echo $lomba->id_lomba;?>" nama="lomba[]  " value="<?php echo $lomba->id_lomba;?>"><font size="2"><?php echo $lomba->nama_lomba.$lomba->id_lomba;?></font>   
                        <?php
                      }
                    }
                    ?>
                <!-- <input  class="lomba_data" type="checkbox"  id="<?php echo $lomba->id_lomba;?>" nama="lomba[]  " value="<?php echo $lomba->id_lomba;?>"><font size="2"><?php echo $lomba->nama_lomba;?></font> -->
                  </td>
                </tr>
               <?php }?>

             </form>
              </td>
            </tr>

        </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btn_status" data-dismiss="modal" onclick="edit_peserta('<?php echo $edit_peserta->id_peserta;?>')">Edit</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>


<?php $no =1 ?><?php foreach($table_peserta as $peserta){ ?>
<div id="detail_lomba<?php echo $peserta->id_peserta;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail Lomba</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
           <thead>
                <tr>
                  <th>No</th>
                  <th>Lomba Yang DI Ikuti</th>
                </tr>
                </thead>
                  <tbody>

                  <?php
                  $no = 1;
            $query = $this->db->query('SELECT a.* , b.*
                                       FROM tb_peserta_lomba a
                                       INNER JOIN tb_lomba b ON a.id_lomba = b.id_lomba;' );
            foreach ($query->result() as $kat) {?>
            <?php if($kat->id_peserta == $peserta->id_peserta){ ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $kat->nama_lomba;?></td>
                </tr>
                
                  <?php $no++;?>
                <?php } }?>
                
                </tbody>
                
        </table>
        
      </div>
      <div class="modal-footer">
        
         <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>
</div>
<script>



 function refresh_peserta_modal(){
        $.ajax({
            url:'peserta_modal_refresh',
            method: 'post',
            data:'id_peserta=1s',                 
            dataType:'html',
            success: function(data){
                $('#modal_sub').html(data);                
            }
        });

       return false; 
    }

    function refresh_tabel_peserta(){
        
        $.ajax({
            url:'peserta_refresh',
            method: 'post',
            data:'nama_peserta='+$('#nama_peserta').val(),                  
            dataType:'html',
            success: function(data){
                $('#tabel_peserta').html(data);
                refresh_peserta_modal();
                toastr.optionsOverride = 'positionclass = "toast-bottom-right"';
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success($('#nama_peserta').val()+'   '+'Telah Di Tambah!');
                $('#nama_peserta').val(null);
                $('#nama_tpq').val(null);
                $('#jenkel').val(null);
                $('#lomba').val(null);                  
            }
        });
        return false; 
     }

   

    function add_peserta(){

        var get_lomba = [];
        $(".lomba_data").each(function(){
          if(this.checked){
          var id = $(this).attr('id');
          get_lomba.push(id);
          }
          
        })

        var input = {"nama_peserta" : $('#nama_peserta').val(), 
        "tpq_peserta" : $('#tpq_peserta').val(), "jenkel" :$('#jenkel').val() , "lomba" : get_lomba };
        $.ajax({
            url:'add_peserta',
            method: 'post',
            data: JSON.stringify(input),
            dataType:'json',
            success : function(response){ 
               alert("Aaaa");
            }
                   
        });
  
        //refresh_tabel_peserta();
       window.location.reload();
       return false; 
    }

     function delete_peserta(id_peserta){
        $.ajax({
            url:'delete_pendaftaran',
            method: 'post',
            data:'id_peserta='+id_peserta,                   
            dataType:'html',
            success: function(data){
                $('#tabel_peserta').html(data);
                // refresh_tabel_peserta();
                toastr.optionsOverride = 'positionclass = "toast-bottom-right"';
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success('Data Telah Di Hapus!');                  
            }
        });

       return false; 
    }

    function edit_peserta(id_peserta){
        $.ajax({
            url:'edit_pendaftaran',
            method: 'post',
            data:
                    'nama_peserta='+$('#nama_peserta'+id_peserta).val()+
                    '&tpq_peserta='+$('#tpq_peserta'+id_peserta).val()+
                    '&jenkel='+$('#jenkel'+id_peserta).val()+
                    '&id_peserta='+id_peserta,                   
            dataType:'html',
            success: function(data){
                $('#tabel_peserta').html(data);
                // refresh_tabel_peserta();
                toastr.optionsOverride = 'positionclass = "toast-bottom-right"';
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success($('#nama_peserta').val()+'   '+'Telah Di Edit!');                  
            }
        });
          //refresh_tabel_peserta();
       return false; 
    }



</script>

<script type="text/javascript">

  function status_peserta(id_peserta,status){
        $.ajax({
            url:'edit_status_user',
            method: 'post',
            data:'status='+status+'&id_peserta='+id_peserta,                   
            dataType:'html',
            success: function(data){
                $('#tabel_peserta').html(data);
                // refresh_tabel_peserta();
                toastr.optionsOverride = 'positionclass = "toast-bottom-right"';
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success("Status  Telah Di Rubah!");                  
            }
        });
          //refresh_tabel_peserta();
       return false; 
    }
</script>


<script type="text/javascript">


        
</script>