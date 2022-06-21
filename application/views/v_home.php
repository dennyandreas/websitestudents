<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $title; ?> </h1>
          </div><!-- /.col -->
           <!-- ./col -->
           <!-- ./col -->
         </div>
         <div class="row">
             <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $nasional['0']['positif']; ?> <sup style="font-size: 20px"></sup></h3>

                <p>Total Positif</p>
              </div>
              <div class="icon">
             <i class="fas fa-user-plus"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $nasional['0']['sembuh']; ?></h3>

                <p>Total Sembuh</p>
              </div>
              <div class="icon">
               <i class="fas fa-smile"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $nasional['0']['meninggal']; ?></h3>

                <p>Total Meninggal</p>
              </div>
              <div class="icon">
                <i class="fas fa-sad-tear"></i>
              </div>
            </div>
          </div>
         </div>

      <center><h4>Denny Andreas. S.Kom (Sumber Data Berdasarkan : Kementerian Kesehatan Republik Indonesia & JHU)</h4></center><br>



         <div class="row">
        <div class="col-lg-12 col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Berdasarkan Provinsi Di Indonesia</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Provinsi</th>
                  <th>Positif</th>
                  <th>Sembuh</th>
                  <th>Meninggal</th>
                </tr>
                </thead>
                <tbody>
                  <?php  $no=1; foreach ($provinsi as $key => $value) : ?>
                    <tr>
                    <td class="text-center"><?php echo $no++; ?></td>
                    <td><?php echo $value['attributes']['Provinsi'] ?></td>
                    <td class="text-center"><?php echo $value['attributes']['Kasus_Posi'] ?></td>
                    <td class="text-center"><?php echo $value['attributes']['Kasus_Semb'] ?></td>
                    <td class="text-center"><?php echo $value['attributes']['Kasus_Meni'] ?></td>

                  </tr>
                  <?php endforeach ?>
                </tbody>
                </table>
                </div>
                </div>
            </div>
            </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

