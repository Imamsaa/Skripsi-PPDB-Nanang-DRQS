<?php
require_once __DIR__."/config/config.php";
require_once __DIR__."/config/curd.php";
$conn = getConn();

$cek = selectSimple('SELECT * FROM user WHERE id_user=1');
$data = $cek->fetch();
?>
  <div class="col-lg-12">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">EDIT DATA PENGGUNA</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form id="password" name="daftarppdb" action="proses/password.php" method="post">
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">EMAIL : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" value="<?= $data['email'] ?>" type="email" id="email" name="email" placeholder="EMAIL" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password_baru" class="col-sm-3 col-form-label">PASSWORD BARU : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" id="password_baru" name="password_baru" placeholder="PASSWORD BARU" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password_baru_ulang" class="col-sm-3 col-form-label">KETIK ULANG PASSWORD BARU : <span style="color:red;"><strong>*</strong></span></label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" id="password_baru_ulang" name="password_baru_ulang" placeholder="PASSWORD BARU" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        
                    </div>
                    <div class="form-group row col-lg-6">
                        <div class="col-sm-6">
                            
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" name="editpassword" class="btn btn-primary btn-block">SAVE</button>
                        </div>
                    </div>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>