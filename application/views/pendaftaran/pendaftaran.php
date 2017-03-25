<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Admin peserta
        <small>Table Admin peserta</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Peserta</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      
          <div class="box">
            <div class="box-header button-group">
              <h3 class="box-title" style="padding:7px 0;">Table Peserta FAS Malang Barat</h3>
              <input type="button" class="btn btn-default" align="right" style="float:right;" value="Tambah" data-toggle="modal" data-target="#add_peserta" > 
           <!--    <a href="admin_peserta">
                <input type="button" class="btn btn-default" align="right" style="float:right;" value="Refresh" id="refresh" name="refresh"> 
              </a> -->
            </div>
            <div class="box-body" id="tabel_peserta">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama peserta</th>
                  <th>TPQ</th>
                  <th>Jenkel</th>
                  <th>Tgl Daftar</th>
                  
                  <th><center>Status</center></th>
                  <th><center>Lomba</center></th>
                  <th><center>Action</center></th>
                </tr>
                </thead>
                <tbody>
                    <?php $no =1 ?>
                                      <?php foreach($table_peserta as $peserta){ ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $peserta->nama_peserta;?></td>
                  <td><?php echo $peserta->nama_tpq;?></td>
                  <td><?php  if($peserta->jenkel == "L") {echo "Laki-Laki";}else{echo "Perempuan";}?></td>
                  <td><?php echo $peserta->tgl_daftar;?></td>
                 
                  <td>
                    <?php if($peserta->status == "1"){?>
                    <center>
                        <?php if($peserta->date == date('Y-m-d')){?>
                             <input type="button" class="btn btn-danger"  <?php if($peserta->date == date('Y-m-d')){echo "Enabled";}else{echo "Disabled";}?> value="BLM Daftar Ulang" onclick="status_peserta(<?php echo $peserta->id_peserta;?>,'2')" >                    
                        <?php }else{?>
                            Belum Daftar Ulang
                        <?php } ?>
                    </center> 
                    <?php }else if($peserta->status == "2"){?>
                    <center>
                    <input type="button" class="btn btn-info"    <?php if($peserta->date == date('Y-m-d')){echo "Enabled";}else{echo "Disabled";}?> value="TLH Daftar Ulang" onclick="status_peserta(<?php echo $peserta->id_peserta;?>,'1')">                    
                    </center>
                    <?php }else { ?>
                     <center>
                    Belum Daftar Ulang                    
                    </center> 
                    <?php } ?>
                  </td>
                   <td><center><input type="button" data-toggle="modal" data-target="#detail_lomba<?php echo $peserta->id_peserta;?>" class="btn btn-info" Value="Lomba"></center></td>
                  <td>
                    <center>
                    <input type="button" class="btn btn-warning"  value="Edit" data-toggle="modal" data-target="#edit_peserta<?php echo $peserta->id_peserta;?>" > 
                    <input type="button" class="btn btn-danger"  value="Hapus" data-toggle="modal" data-target="#hapus_peserta<?php echo $peserta->id_peserta;?>">                    
                    </center> 
                  </td>
                </tr>
                  <?php $no++;?>
                <?php }?>
                
                </tbody>
                
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 
