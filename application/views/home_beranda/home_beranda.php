   <?php if($this->session->userdata('role') == 1) { ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
   
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
                  <?php
            $query = $this->db->query('SELECT COUNT(id_peserta_lomba) as jumlah FROM `tb_peserta_lomba` ');

            foreach ($query->result() as $count) {?>
              
            <h3><?php echo $count->jumlah ?></h3>

            
            <?php } ?>

              <p>Jumlah Peserta Lomba</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">

               <?php
            $query = $this->db->query('SELECT COUNT(id_lomba) as jumlah FROM `tb_lomba` ');

            foreach ($query->result() as $count) {?>
              
            <h3><?php echo $count->jumlah ?></h3>

            
            <?php } ?>

             

              <p>Jumlah Lomba</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
                  <?php
            $query = $this->db->query('SELECT COUNT(id_peserta) as jumlah FROM `tb_peserta` ');

            foreach ($query->result() as $count) {?>
              
            <h3><?php echo $count->jumlah ?></h3>

            
            <?php } ?>

              <p>Jumlah Peserta</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
                  <?php
            $query = $this->db->query('SELECT COUNT(id_tpq) as jumlah FROM `tb_tpq` ');

            foreach ($query->result() as $count) {?>
              
            <h3><?php echo $count->jumlah ?></h3>

            
            <?php } ?>

              <p>Jumlah TPQ</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
      </div>
    </section>

  </div>
     <?php }else{?>
      <div class="content-wrapper">
    <section class="content-header">
     <!--  <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
    </section>
   
   <center>
    <br><br><br><br><br><br><br><br><br>
    <h1>
                  
        <p>ASSALAMUALAIKUM KELOMPOK <?php echo strtoupper($this->session->userdata('username'));?></p>
     
    </h1>
   </center>
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- <div class="small-box bg-aqua">
              <div class="inner">
                    <?php
              $query = $this->db->query('SELECT COUNT(id_peserta_lomba) as jumlah FROM `tb_peserta_lomba` ');

              foreach ($query->result() as $count) {?>
                
              <h3><?php echo $count->jumlah ?></h3>

              
              <?php } ?>

                <p>Jumlah Peserta Lomba</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div> -->
        </div>
        <div class="col-lg-3 col-xs-6">
         <!--  <div class="small-box bg-green">
            <div class="inner">

               <?php
            $query = $this->db->query('SELECT COUNT(id_lomba) as jumlah FROM `tb_lomba` ');

            foreach ($query->result() as $count) {?>
              
            <h3><?php echo $count->jumlah ?></h3>

            
            <?php } ?>

             

              <p>Jumlah Lomba</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div> -->
        </div>
        <div class="col-lg-3 col-xs-6">
         <!--  <div class="small-box bg-yellow">
            <div class="inner">
                  <?php
            $query = $this->db->query('SELECT COUNT(id_peserta) as jumlah FROM `tb_peserta` ');

            foreach ($query->result() as $count) {?>
              
            <h3><?php echo $count->jumlah ?></h3>

            
            <?php } ?>

              <p>Jumlah Peserta</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div> -->
        </div>
        <div class="col-lg-3 col-xs-6">
<!--           <div class="small-box bg-red">
            <div class="inner">
                  <?php
            $query = $this->db->query('SELECT COUNT(id_tpq) as jumlah FROM `tb_tpq` ');

            foreach ($query->result() as $count) {?>
              
            <h3><?php echo $count->jumlah ?></h3>

            
            <?php } ?>

              <p>Jumlah TPQ</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div> -->
        </div>
      </div>
      <div class="row">
      </div>
    </section>

  </div>
  <?php } ?>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
    <b>BALISTIC</b>
    </div>
    <strong>Festival Anak Sholeh</strong>
  </footer>

  
