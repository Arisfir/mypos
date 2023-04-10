<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Items Page</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Items</li>
                </ol>
            </div>

        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- /.card -->
    <?php $this->view('messages') ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><b><?= ucfirst($page) ?> item</b></h3>
        </div>
        <div class="card-header">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= site_url('item') ?>" class="btn btn-warning btn-sm me-md-2">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-4">

                    <form action="<?= site_url('item/process') ?>" method="post">
                        <div class="form-group">
                            <label for="barcode">Barcode *</label>
                            <input type="hidden" name="id" value="<?= $row->item_id ?>">
                            <input type="text" name="barcode" id="barcode" value="<?= $row->barcode ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="product_name">Product Name *</label>
                            <input type="text" name="product_name" id="product_name" value="<?= $row->name ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label >Category *</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach($category->result() as $key => $data) { ?>
                                <option value="<?= $data->category_id ?>" <?=$data->category_id == $row->category_id ? "selected" : null?>><?= $data->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Unit *</label>
                            <?php echo form_dropdown('unit', $unit, $selectedunit,
                                ['class'=>'form-control', 'required'=> 'required']) ?>
                        <div class="form-group">
                            <label for="price">Price *</label>
                            <input type="text" name="price" id="price" value="<?= $row->price ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success btn-sm">
                                <i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn btn-secondary btn-sm">
                                Reset </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
</section>