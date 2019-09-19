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
            <?php
            include "koneksi.php";
            $cek_valid=mysqli_num_rows(mysqli_query($conn, "SELECT cekuser FROM calon WHERE id_user='$_SESSION[id_user]' AND cekuser like '%v'"));
           if ($cek_valid > 0) { ?>
              <!-- INi jika status valid -->
                  <div class="col-12 mb-4">
                <div class="hero align-items-center bg-success text-white">
                  <div class="hero-inner text-center">
                    <h2>Selamat Anda Sudah Berhasil Mendaftar :)</h2>
                    <p class="lead">Kamu sudah berhasil melewati salah 1 langkah untuk bergabung dengan kami, pantau terus ya infromasi nya, cetak bukti pendaftaran lalu bawa ke stand kami ya.</p>
                    <div class="mt-4">
                      <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-sign-in-alt"></i> Cetak Bukti Pendaftaran</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php
              
             }else {
              // ini jika belum valid?>

                  <form action="input_data_act.php" method="POST">
                                <div class="row">
              <div class="col-12 ">
                <div class="card">
                  <div class="card-body">
                  <div style="background-color: red; color: white" class="card-header">
                      <h4>Mohon Masukkan data dengan baik dan benar karna, anda hanya diberi 1x input</h4>
                  </div>
                  <br>

                    <div class="form-row">           
                      <div class="form-group col-md-6">
                        <label>No BP</label>
                        <input type="text" name="nobp" class="form-control" placeholder="contoh : 17101152630070" onKeyPress="return kodeScript(event,'1234567890',this)" minlength="14" maxlength="14" autofocus="" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" minlength="6" class="form-control" placeholder="contoh : Muhammad Abdullah" onKeyPress="return kodeScript(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="contoh : Padang" onKeyPress="return kodeScript(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" minlength="2" required>
                      </div>
                      <div class="form-group col-md-2">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="contoh : 1371022700001012" onKeyPress="return kodeScript(event,'0123456789',this)" minlength="10" maxlength="18" min="<?php echo date('Y')-25;?>-01-01" max="<?php echo date('Y')-12;?>-12-31" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label>Jenis Kelamin</label>
                        <div class="selectgroup w-100">
                          <label class="selectgroup-item">
                            <input type="radio" name="jk" value="Laki-laki" class="form-control selectgroup-input" required>
                            <span style="padding-top: 2px" class="form-control selectgroup-button">Laki-laki</span>
                          </label>
                          <label class="selectgroup-item">
                            <input type="radio" name="jk" value="Perempuan" class="selectgroup-input" required>
                            <span style="padding-top: 2px" class="form-control selectgroup-button">Perempuan</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label>Alamat Rumah</label>
                        <textarea name="alamat_rumah"  minlength="5" class="form-control" placeholder="contoh : Jl. Kampung Baru No.31" required></textarea>
                      </div>
                      <div class="form-group col-md-4">
                        <label>Asal Sekolah</label>
                        <textarea name="asal_sekolah"  minlength="5" class="form-control" placeholder="contoh : SMP Kartika 1-7 Padang" required></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label>Alasan Bergabung dengan ukmcybernetix</label>
                        <textarea name="alasan"  minlength="4" class="form-control" placeholder="Isi Sendiri"  onKeyPress="return kodeScript(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" required></textarea>
                      </div>
                    </div>
                    <div class="card-header" style="background-color: green;color: white">
                      <h6>Pilih divisi yang diinginkan</h6>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="form-label">Pilih Jurusan</label>
                      <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                          <input type="radio" name="divisi" value="networking" class="selectgroup-input" required>
                          <span class="selectgroup-button">Networking</span>
                        </label>  
                    <label class="selectgroup-item">
                          <input type="radio" name="divisi" value="multimedia" class="selectgroup-input" required>
                          <span class="selectgroup-button">Multimedia</span>
                        </label>  
                        <label class="selectgroup-item">
                          <input type="radio" name="divisi" value="progamming" class="selectgroup-input" required>
                          <span class="selectgroup-button">Progamming</span>
                        </label>  
                        <label class="selectgroup-item">
                          <input type="radio" name="divisi" value="ui/ux" class="selectgroup-input" required>
                          <span class="selectgroup-button">UI/UX</span>
                        </label>  
                        <label class="selectgroup-item">
                          <input type="radio" name="divisi" value="hardware" class="selectgroup-input" required>
                          <span class="selectgroup-button">Hardware</span>
                        </label>  
                        <label class="selectgroup-item">
                          <input type="radio" name="divisi" value="operatingsistem" class="selectgroup-input" required>
                          <span class="selectgroup-button">Operating Sytem</span>
                        </label>  
                      </div>
                    </div>
                    <input type="submit"  name="submit" onclick="alert('Apakah anda sudah yakin?');" class="btn btn-icon icon-left btn-primary" value="Submit"> 
                    <input type="reset" class="btn btn-icon icon-left btn-danger" value="Reset"> 
                    </form>
                  </div>
                </div>
              </div>
            </div>
                  </form>
                  <?php
         }
          ?>
              </div>
            </div>
          </div>
        </section>
      </div>
   <?php 
  include "footer.php";
   ?>