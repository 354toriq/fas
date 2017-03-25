<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama TPQ</th>
                  <th>Wilayah TPQ</th>
                  <th><center>Action</center></th>
                </tr>
                </thead>
                <tbody>
                    <?php $no =1 ?><?php foreach($table_tpq as $tpq){ ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $tpq->nama_tpq;?></td> 
                  <td><?php echo $tpq->wilayah_tpq;?></td>
                  <td>
                    <center>
                    <input type="button" class="btn btn-warning"  value="Edit" data-toggle="modal" data-target="#edit_tpq<?php echo $tpq->id_tpq;?>" > 
                    <input type="button" class="btn btn-danger"  value="Hapus" data-toggle="modal" data-target="#hapus_tpq<?php echo $tpq->id_tpq;?>">                    
                    </center> 
                  </td>
                </tr>
                  <?php $no++;?>
                <?php }?>
                
                </tbody>
                
              </table>