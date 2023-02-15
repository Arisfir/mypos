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
            <h3 class="card-title"><b>Data Customers</b></h3>
        </div>
        <div class="card-header">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= site_url('customer/add') ?>" class="btn btn-primary btn-sm me-md-2">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->name ?></td>
                                <td><?= $data->gender ?></td>
                                <td><?= $data->phone ?></td>
                                <td><?= $data->address ?></td>
                                <td>
                                    <a href="<?= site_url('customer/edit/' . $data->customer_id) ?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pen"></i> Update
                                    </a>
                                    <input type="hidden" name="user_id" value="<?= $data->customer_id ?>">
                                    <a href="<?= site_url('customer/del/' . $data->customer_id) ?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
    </div>
</section>