<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Customers Page</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Customers</li>
                </ol>
            </div>

        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- /.card -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><b><?= ucfirst($page) ?> Customer</b></h3>
        </div>
        <div class="card-header">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= site_url('customer') ?>" class="btn btn-warning btn-sm me-md-2">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-4">

                    <form action="<?= site_url('customer/process') ?>" method="post">
                        <div class="form-group">
                            <label>Customer Name *</label>
                            <input type="hidden" name="id" value="<?= $row->customer_id ?>">
                            <input type="text" name="customer_name" value="<?= $row->name ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="gen">Gender *</label>
                            <select name="gender" class="form-control" id="gen" required>
                                <option value="">- Pilih -</option>
                                <option value="L" <?= $row->gender == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                                <option value="P" <?= $row->gender == 'P' ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="number" name="phone" value="<?= $row->phone ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address *</label>
                            <input type="text" name="addr" value="<?= $row->address ?>" class="form-control" required>
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