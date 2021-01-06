<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>

<!-- add modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="<?php echo site_url('admin/products/add') ?>" method="post" enctype="multipart/form-data" >
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Name*</label>
                <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
                type="text" name="name" placeholder="Product name" required/>
                <div class="invalid-feedback">
                    <?php echo form_error('name') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="price">Price Buy*</label>
                <input class="form-control <?php echo form_error('price_buy') ? 'is-invalid':'' ?>"
                type="number" name="price_buy" min="0" placeholder="Product price" required/>
                <div class="invalid-feedback">
                    <?php echo form_error('price_buy') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="price">Price Sell*</label>
                <input class="form-control <?php echo form_error('price_sell') ? 'is-invalid':'' ?>"
                type="number" name="price_sell" min="0" placeholder="Product price" required/>
                <div class="invalid-feedback">
                    <?php echo form_error('price_sell') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="name">Photo</label>
                <input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
                type="file" name="image" />
                <div class="invalid-feedback">
                    <?php echo form_error('image') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="price">Stock*</label>
                <input class="form-control <?php echo form_error('stock') ? 'is-invalid':'' ?>"
                type="number" name="stock" min="0" placeholder="Product price" required/>
                <div class="invalid-feedback">
                    <?php echo form_error('stock') ?>
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <input class="btn btn-success" type="submit" name="btn" value="Add" />
          <!-- <a id="btn-delete" class="btn btn-danger" href="#">Delete</a> -->
        </div>
      </form>
    </div>
  </div>
</div>