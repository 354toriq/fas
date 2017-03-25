 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Hak Akses</th>
                  <th><center>Action</center></th>
                </tr>
                </thead>
                <tbody>
                    <?php $no =1 ?>
                                      <?php foreach($table_akun as $akun){ ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $akun->username;?></td>
                  <td>***</td>
                  <td><?php if($akun->role==1){
                    echo "Admin";
                  }elseif ($akun->role == 2) {
                    echo "Peserta/Guru";
                  } ?></td>
                  <td>
                    <center>
                    <input type="button" class="btn btn-warning"  value="Edit" data-toggle="modal" data-target="#edit_akun<?php echo $akun->id_akun;?>" > 
                    <input type="button" class="btn btn-danger"  value="Hapus" data-toggle="modal" data-target="#hapus_akun<?php echo $akun->id_akun;?>">                    
                    </center> 
                  </td>
                </tr>
                  <?php $no++;?>
                <?php }?>
                
                </tbody>
                
              </table>