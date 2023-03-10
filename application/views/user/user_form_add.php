<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User Page</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User</li>
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
            <h3 class="card-title"><b>Add User</b></h3>
        </div>
        <div class="card-header">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= site_url('user') ?>" class="btn btn-warning btn-sm me-md-2">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-4">

                    <form action="" method="post">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="fullname" value="<?= set_value('fullname') ?>" class="form-control <?= form_error('fullname') ? 'is-invalid' : null ?>" required>
                            <?= form_error('fullname', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label>Username *</label>
                            <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>" required>
                            <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control <?= form_error('password') ? 'is-invalid' : null ?>" required>
                            <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label>Password Confirmantion *</label>
                            <input type="password" name="passconf" value="<?= set_value('passconf') ?>" class="form-control" required>
                            <?= form_error('passconf', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label>Address *</label>
                            <textarea type="text" name="address" value="<?= set_value('address') ?>" class="form-control" required></textarea>
                            <?= form_error('address', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label>Level *</label>
                            <select name="level" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                                <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>Kasir</option>
                            </select>
                            <?= form_error('level', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm">
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