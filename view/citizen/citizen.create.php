<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <?php
  $msg = filter_input(INPUT_GET, 'msg');
  if (isset($msg)) {
    ?>
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-ban"></i> Error!</h5>
      <?php echo $msg; ?>
    </div>
    <?php
  }
  ?>

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Citizen Form</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="?menu=home">Home</a></li>
            <li class="breadcrumb-item"><a href="?menu=ctz">Citizen Page</a></li>
            <li class="breadcrumb-item active">Citizen Form</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

              <form class="form" method="post" action="?menu=ctz-store">
                <div class="form-group row">
                  <label for="ctz_id" class="col-sm-2 col-form-label">Citizen ID</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctz_id" name="ctzId" placeholder="e.g. 1234567890" required autofocus maxlength="16">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="ctz_name" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctz_name" name="ctzName" placeholder="e.g. John Doe" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="ctz_addr" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="ctz_addr" name="ctzAddress" placeholder="e.g. Surya Sumantri St. 65" required></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="ctz_birth" class="col-sm-2 col-form-label">Birth Date</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="ctz_birth" name="ctzBirth" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="ctz_marital" class="col-sm-2 col-form-label">Marital Status</label>
                  <div class="col-sm-2">
                    <select class="form-control" id="ctz_marital" name="ctzMarital" required>
                      <option value="Belum Menikah" selected>Belum Menikah</option>
                      <option value="Menikah">Menikah</option>
                      <option value="Duda">Duda</option>
                      <option value="Janda">Janda</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="ctz_job" class="col-sm-2 col-form-label">Job</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctz_job" name="ctzJob" placeholder="e.g. Freelance/ Employee/ Teacher" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="ctz_blood" class="col-sm-2 col-form-label">Blood Type</label>
                  <div class="col-sm-2">
                    <select class="form-control" id="ctz_blood" name="ctzBlood" required>
                      <option value="A" selected>A</option>
                      <option value="B">B</option>
                      <option value="AB">AB</option>
                      <option value="O">O</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="ctz_religion" class="col-sm-2 col-form-label">Religion</label>
                  <div class="col-sm-2">
                    <select class="form-control" id="ctz_religion" name="ctzReligion" required>
                      <option value="Budha" selected>Budha</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Islam">Islam</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Kong Hu Cu">Kong Hu Cu</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="ctz_fc_id" class="col-sm-2 col-form-label">Family Card ID</label>
                  <div class="col-sm-4">
                    <select class="form-control" id="ctz_fc_id" name="ctzFamCard" required>
                      <?php
                      /** @var \entity\FamilyCard $famCard */
                      foreach ($famCards as $famCard) {
                        echo '<option value="' . $famCard->getId() . '">' . $famCard->getId() . ' - ' . $famCard->getFamilyHeadName() . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit" name="btnSave">Save</button>
              </form>

            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->