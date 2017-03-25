<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Admin Daftar Peserta
        <small>Table Admin Daftar Peserta Lomba</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Daftar Peserta Lomba</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      
          <div class="box">
            <div class="box-header button-group">
              <h3 class="box-title" style="padding:7px 0;">Table Daftar Peserta Lomba FAS Malang Barat</h3>
              </a>
            </div>
            <div class="box-body" id="tabel_peserta">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lomba</th>
                  <th><center>Detail Peserta</center></th>
                </tr>
                </thead>
                <tbody>
                    <?php $no =1 ?><?php foreach($table_lomba as $lomba){ ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $lomba->nama_lomba;?></td>   
                  <td>
                    <center>
                    <input type="button" class="btn btn-danger"  value="Detail" data-toggle="modal" data-target="#detail<?php echo $lomba->id_lomba;?>">                    
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
 
