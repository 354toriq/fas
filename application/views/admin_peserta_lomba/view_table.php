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

