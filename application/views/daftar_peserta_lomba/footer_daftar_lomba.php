

<!-- Edit Data lomba -->

<?php $no =1 ?><?php foreach($table_peserta_lomba as $detail){ ?>
<div id="detail<?php echo $detail->id_lomba;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Data Peserta Lomba <?php echo $detail->nama_lomba;?> </h4>
      </div>
      <div class="modal-body">

         <table class="table table-bordered">
            <tr>
              <td>
                <p>Cari</p>
              </td>
            <td>
            <input tyep="text" class="form-control search" placeholder="Cari Sesua nama/jenkel" id="search" name="search">
            </td>
              <td>
                <select class="search form-control" id='search_pilihan'>
                  <option value="">Pilih Sesuai TPQ</option>
                  <?php foreach($table_tpq as $tpq){ ?>
                  <option value="<?php echo $tpq->nama_tpq;?>"><?php echo $tpq->nama_tpq;?></option>
                  <?php } ?>
                </select>
              </td>

          </tr>
        </table>  
        <table class="table table-bordered " id="tabel_lomba_cari">

           <thead>
                <tr>
                  <th>Id_Peserta</th>
                  <th>Nama Peserta</th>
                  <th>Nama TPQ</th>
                  <th>Jenkel</th>
                  <th><center>Tanggal Daftar</center></th>
                </tr>
                </thead>

          <?php $no =1 ?><?php foreach($table_peserta_lomba as $detail_peserta){ ?>
          <tbody>
          <tr>
            <?php if($detail->id_lomba == $detail_peserta->id_lomba){echo " <td>".$detail_peserta->id_peserta."</td>";}?>
            <?php if($detail->id_lomba == $detail_peserta->id_lomba){echo " <td>".$detail_peserta->nama_peserta."</td>";}?>
            <?php if($detail->id_lomba == $detail_peserta->id_lomba){echo " <td>".$detail_peserta->nama_tpq."</td>";}?>
            <?php if($detail->id_lomba == $detail_peserta->id_lomba){echo " <td>".$detail_peserta->jenkel."</td>";}?>
            <?php if($detail->id_lomba == $detail_peserta->id_lomba){echo " <td>".$detail_peserta->tgl_daftar."</td>";}?>
           
          </tr>
          <?php $no++;?>
          <?php } ?>
        </tbody>
        </table>
        
      </div>
      <div class="modal-footer">
        
         <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="remove()">Keluar</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>

<script>

           
    // Write on keyup event of keyword input element
    $(".search").keyup(function(){
        _this = this;
        // Show only matching TR, hide rest of them
        $.each($("#tabel_lomba_cari tbody tr"), function() {
            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
               $(this).hide();
            else
               $(this).show();                
        });
    }); 

    // Write on keyup event of keyword input element
    $(".search").change(function(){
        _this = this;
        // Show only matching TR, hide rest of them
        $.each($("#tabel_lomba_cari tbody tr"), function() {
            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
               $(this).hide();
            else
               $(this).show();                
        });
    }); 

    $(document).ready(function(){
    $('#tabel_lomba_cari').DataTable();
});

    function remove(){
    $('.search').val(null);
    }

</script>