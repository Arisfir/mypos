<?php if ($this->session->has_userdata('success')) : ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i>Pemberitahuan!</h5>
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>