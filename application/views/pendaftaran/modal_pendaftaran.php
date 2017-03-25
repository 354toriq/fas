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
        <h4 class="modal-title">Tambah Data peserta</h4>
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
        </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="edit_peserta('<?php echo $edit_peserta->id_peserta;?>')">Edit</button>
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
                  <th>Lomba Yang Di  Ikuti</th>
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