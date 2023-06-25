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
                    <?= $row->barcode ?>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><b>QR-Code Generator</b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <?php

                    use Endroid\QrCode\Builder\Builder;
                    use Endroid\QrCode\Encoding\Encoding;
                    use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
                    use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
                    use Endroid\QrCode\Label\Font\NotoSans;
                    use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
                    use Endroid\QrCode\Writer\PngWriter;

                    $result = Builder::create()
                        ->writer(new PngWriter())
                        ->writerOptions([])
                        ->data('Custom QR code contents')
                        ->encoding(new Encoding('UTF-8'))
                        ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
                        ->size(300)
                        ->margin(10)
                        ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
                        // ->logoPath(__DIR__.'/assets/symfony.png')
                        // ->labelText($row->barcode)
                        // ->labelFont(new NotoSans(20))
                        // ->labelAlignment(new LabelAlignmentCenter())
                        ->validateResult(false)
                        ->build();

                    // Save it to a file
                    $folder_qrcode = "";
                    $result->saveToFile('uploads/qr-code/item-' . $row->barcode . '.png');

                    // $qrCode = new Endroid\QrCode\QrCode($row->barcode);
                    // $qrCode->writeFile('uploads/qr-code/item-'.$row->barcode.'.png');
                    ?>
                    <img src="<?= base_url('uploads/qr-code/item-' . $row->barcode . '.png') ?>" style="width:200px">
                    <br>
                    <?= $row->barcode ?>
                    <br><br>
                    <a href="<?= site_url('item/qrcode_print/' . $row->item_id) ?>" target="_blank" class="btn btn-default btn-sm">
                        <i class="fa fa-print"></i> Print
                    </a>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</section>