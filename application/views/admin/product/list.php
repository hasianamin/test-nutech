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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<!-- <a href="<?php echo site_url('admin/products/add') ?>"><i class="fas fa-plus"></i> Add New</a> -->
						<a href="#" onclick="addConfirm('<?php echo site_url('admin/products/add') ?>')"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
                        <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php endif; ?>
                        <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                        <?php endif; ?>

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Gambar</th>
                                            <th>Stok</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($products as $product):?>
                                        <tr>
                                            <td>
                                                <?php echo $product->name ?>
                                            </td>
                                            <td>
                                                <?php echo $product->price_buy ?>
                                            </td>
                                            <td>
                                                <?php echo $product->price_sell ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="150px"/>
                                            </td>
                                            <td>
                                                <?php echo $product->stock ?>
                                            </td>
                                            <td width="250">
                                                <a href="<?php echo site_url('admin/products/edit/'.$product->product_id) ?>"
                                                class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                <a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')"
                                                href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $this->load->view("admin/_partials/footer.php")?>
            </div>
        </div>
        <?php $this->load->view("admin/_partials/scrolltop.php") ?>
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <?php $this->load->view("admin/_partials/js.php") ?>
        <script>
            function deleteConfirm(url){
                $('#btn-delete').attr('href', url);
                $('#deleteModal').modal();
            }
            function addConfirm(url){
                // $('#btn-delete').attr('href', url);
                $('#addModal').modal();
            }
        </script>
    </body>
</html>