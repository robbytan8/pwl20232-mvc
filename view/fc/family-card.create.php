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
          <h1 class="m-0">Family Card Form</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="?menu=home">Home</a></li>
            <li class="breadcrumb-item"><a href="?menu=fam-card">Family Card Page</a></li>
            <li class="breadcrumb-item active">Family Card Form</li>
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

              <form class="form" method="post" action="?menu=fam-card-store">
                <div class="form-group row">
                  <label for="fc_id" class="col-sm-2 col-form-label">Family Card ID</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="fc_id" name="fcId" placeholder="e.g. 1234567890" required autofocus maxlength="16">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="fc_head" class="col-sm-2 col-form-label">Family Head Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="fc_head" name="fcHead" placeholder="e.g. John Doe" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="fc_addr" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="fc_addr" name="fcAddress" placeholder="e.g. Surya Sumantri St. 65" required></textarea>
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