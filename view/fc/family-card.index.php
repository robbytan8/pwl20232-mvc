<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <?php
  $msg = filter_input(INPUT_GET, 'msg');
  if (isset($msg)) {
    ?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-check"></i> Success!</h5>
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
          <h1 class="m-0">Family Card Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="?menu=home">Home</a></li>
            <li class="breadcrumb-item active">Family Card Page</li>
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
            <div class="card-header">
              <a href="?menu=fam-card-create" role="button" class="btn btn-success">Add Family Card</a>
            </div>
            <div class="card-body">
              <table id="tbl-data" class="display table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Family Head Name</th>
                  <th>Address</th>
                </tr>
                </thead>
                <tbody>
                <?php
                /** @var \entity\FamilyCard $familyCard */
                foreach ($familyCards as $familyCard) {
                  echo '<tr>';
                  echo '<td>' . $familyCard->getId() . '</td>';
                  echo '<td>' . $familyCard->getFamilyHeadName() . '</td>';
                  echo '<td>' . $familyCard->getAddress() . '</td>';
                  echo '</tr>';
                }
                ?>
                </tbody>
              </table>

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