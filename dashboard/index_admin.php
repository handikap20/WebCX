<?php 
include 'header_menu.php';


?>
   
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="card">
                <div class="card-body">
                   <?php 
                   error_reporting(0);
         if ($_GET['simpan'] =="sukses") {
            ?>
                    <div class="alert alert-primary alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Berhasil Di Simpan.
                      </div>
                    </div>
            <?php  
          }elseif ($_GET['simpan']=="gagal") { ?>
                    <div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Gagal Di Disimpan.
                      </div>
                    </div>
            <?php 
            // ambil id_user untuk cek diquery apakah data user yang login valid atau tidak
          }?> 
         <div class="header">
            <h5>Pendaftaran Calon</h5>
          </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th>No</th>
                            <th>No BP</th>
                            <th>Nama Lengkap</th>
                            <th>Divisi yang diambil</th>
                            <th>Tahap 1</th>
                            <th>Tahap 2</th>
                            <th>Tahap 3</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php 
                          $data=mysqli_query($conn, "select * from calon");
                          $no=1;
                          while($b=mysqli_fetch_array($data)){
                            ?>                                 
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $b[2] ?></td>
                            <td ><?php echo $b[3] ?></td>
                            <td><?php echo $b[10] ?></td>
                            <td><?php          
                               $cek_valid=mysqli_num_rows(mysqli_query($conn, "SELECT tahap1 FROM cek WHERE id_calon='$b[0]' AND tahap1 like '%lulus'"));
                           if ($cek_valid > 0) { ?>
                             <span class="badge badge-success">Lulus</span>
                             <?php }else {?> 
                              <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='lulus_act.php?id=<?php echo $b[0]; ?>' }" style="color: white" class="btn btn-icon icon-left btn-primary">Lulus</a></td> <?php } ?>
                             <td> <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='jurusan_hapus.php?id=<?php echo $b[0]; ?>' }" style="color: white" class="btn btn-icon icon-left btn-primary">Lulus</a></td>
                              <td> <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='jurusan_hapus.php?id=<?php echo $b[0]; ?>' }" style="color: white" class="btn btn-icon icon-left btn-primary">Lulus</a></td>

                         <?php } ?>
                         </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
        </section>
        </div>
   <?php 
  include "footer.php";
   ?>