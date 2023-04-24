<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_content">
            <br />
            <form method="post" action="<?php echo base_url('Dashboard/ubah_password') ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Password Lama</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input required type="password" class="form-control" id="old_password" name="old_password" aria-describedby="emailHelp" placeholder="Masukan password lama">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Password Baru</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input required type="password" class="form-control" id="new_password" name="new_password" aria-describedby="emailHelp" placeholder="Masukan password baru">
                        <?= form_error('new_password', ' <div class="text-danger">', ' </div>') ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Konfirmasi Password Baru</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input required type="password" class="form-control" id="confirm" name="confirm" aria-describedby="emailHelp" placeholder="Konfirmasi password baru">
                        <?= form_error('confirm', ' <div class="text-danger">', ' </div>') ?>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-success">SIMPAN</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
        const image = document.querySelector('.imgInput');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }
</script>