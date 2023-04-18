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
            <h3 class="card-title"><b>Barcode Generator</b></h3>
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
                    <?php
                    $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
                    echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '">';
                    ?>
                    <br>
                    <?=$row->barcode ?>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</section>