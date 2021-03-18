<!-- Meta -->
<?php $this->load->view('backend/template/meta') ?>

<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('backend/template/navbar') ?>

  <!-- Main Sidebar Container -->
  <?php $this->load->view('backend/template/sidebar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $page_title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $page_title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="product_name">Nama Produk</label>
                    <input name="product_name" type="text" class="form-control" id="product_name">
                  </div>
                  <div class="form-group">
                    <label for="product_code">Kode Produk</label>
                    <input name="product_code" type="text" class="form-control" id="product_code" onChange='checkProductCode()'>
                    <span id="product_code-availability-status"></span>
                    <img src="<?php echo base_url('assets/images/loading.gif')?>" id="loaderProductCode" style="display:none">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php $this->load->view('backend/template/footer') ?>

</div>
<!-- ./wrapper -->

<!-- JS -->
<?php $this->load->view('backend/template/js') ?>


<script>
  function checkProductCode() {    
    jQuery.ajax({
      url: "<?php echo base_url('admin/product/check_product_code') ?>",
      data: 'product_code=' + $("#product_code").val(),
      type: "POST",

      success: function(data) {
        $("#product_code-availability-status").html(data);
        $("#check_product_code").hide();
      },
      error: function() {}
    });
  }
</script>

</body>

</html>