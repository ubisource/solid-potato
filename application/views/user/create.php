<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" action="<?= base_url('user/save') ?>" method="post">
                <div class="card-body">
                    <h4 class="card-title">Pengguna Baru</h4>
                    <?php if ($this->session->flashdata('status') != NULL): ?>
                        <div class="alert alert-<?= $this->session->flashdata('status') ?>" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p><?= $this->session->flashdata('message'); ?></p>
                        </div>
                    <?php endif; ?>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 text-right control-label col-form-label">Nama
                            Pengguna</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Nama Pengguna">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pass1" class="col-sm-3 text-right control-label col-form-label">Kata Sandi</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Kata Sandi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Ulang Kata
                            Sandi</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Ulang Kata Sandi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="access" class="col-sm-3 text-right control-label col-form-label">Akses</label>
                        <div class="col-sm-9">
                            <select name="role" id="role" class="form-control">
                                <option value="ADMIN">Administrator</option>
                                <option value="CS">Customer Service</option>
                                <option value="RU">Registered User</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>