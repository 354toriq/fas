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