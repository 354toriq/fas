<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Admin Peserta
        <small>Table Admin Peserta Lomba</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Peserta omba</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      
          <div class="box">
            <div class="box-header button-group">
              <h3 class="box-title" style="padding:7px 0;">Table Peserta Lomba FAS Kota Batu</h3>
              <!-- <input type="button" class="btn btn-default" align="right" style="float:right;" value="Tambah" data-toggle="modal" data-target="#add_peserta"> 
              <a href="admin_peserta">
                <input type="button" class="btn btn-default" align="right" style="float:right;" value="Refresh" id="refresh" name="refresh"> 
              </a> -->
            </div>
            <div class="box-body" id="tabel_peserta_lomba">
              <table id="example1" class="table table-bordered table-striped">

                
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Peserta</th>
                  <th>TPQ</th>
                  <th>Jenkel</th>
                  <th><center>Status</center></th>
                </tr>
                </thead>
                <tbody>
                    <?php $no =1 ?><?php foreach($table_peserta_lomba as $peserta){ ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $peserta->nama_peserta;?></td>
                  <td><?php echo $peserta->nama_tpq;?></td>
                  <td>
                    <?php if($peserta->jenkel == "L"){?>
                    Laki Laki
                    <?php }else if($peserta->jenkel == "P"){?>
                    Perempuan
                    <?php } ?>
                  </td>
                  <td>
                    <?php if($peserta->status == "1"){?>
                    <center>
                    <input type="button" class="btn btn-danger"  value="Belum Daftar Ulang" onclick="status_peserta(<?php echo $peserta->id_peserta;?>,'2')" >                    
                    </center> 
                    <?php }else if($peserta->status == "2"){?>
                    <center>
                    <input type="button" class="btn btn-info"  value="Telah Daftar Ulang" onclick="status_peserta(<?php echo $peserta->id_peserta;?>,'1')">                    
                    </center>
                    <?php }else { ?>
                     <center>
                    <input type="button" class="btn btn-danger"  value="Belum Daftar Ulang" onclick="status_peserta(<?php echo $peserta->id_peserta;?>,'2')" >                    
                    </center> 
                    <?php } ?>
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
 
