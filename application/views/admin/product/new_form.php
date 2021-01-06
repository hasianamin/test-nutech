<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("admin/_partials/head.php") ?>
    </head>

    <body id="page-top">

        <?php $this->load->view("admin/_partials/navbar.php") ?>
        <div id="wrapper">

            <?php $this->load->view("admin/_partials/sidebar.php") ?>

            <div id="content-wrapper">

                <div class="container-fluid">

                    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                    <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php endif; ?>

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                        </div>
                        <div class="card-body">

                            <form action="<?php echo site_url('admin/products/add') ?>" method="post" enctype="multipart/form-data" >
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

                                <input class="btn btn-success" type="submit" name="btn" value="Add" />
                            </form>

                        </div>

                        <div class="card-footer small text-muted">
                            * required fields
                        </div>


                    </div>
                    <!-- /.container-fluid -->

                    <!-- Sticky Footer -->
                    <?php $this->load->view("admin/_partials/footer.php") ?>

                </div>
                <!-- /.content-wrapper -->

            </div>
            <!-- /#wrapper -->


            <?php $this->load->view("admin/_partials/scrolltop.php") ?>

            <?php $this->load->view("admin/_partials/js.php") ?>

    </body>
</html>