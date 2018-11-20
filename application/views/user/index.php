<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Pengguna</h5>
                <?php if ($this->session->flashdata('status') != NULL): ?>
                    <div class="alert alert-<?= $this->session->flashdata('status') ?>" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p><?= $this->session->flashdata('message'); ?></p>
                    </div>
                <?php endif; ?>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>User</th>
                            <th>Hak Akses</th>
                            <th>Status</th>
                            <th>Dibuat Pada</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['username'] ?></td>
                                <td><?= $user['role'] ?></td>
                                <td><?= $user['status'] ?></td>
                                <td><?= $user['created_at'] ?></td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>User</th>
                            <th>Hak Akses</th>
                            <th>Status</th>
                            <th>Dibuat Pada</th>
                            <th>Aksi</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <a href="<?= base_url('user/create') ?>" class="btn btn-default">Create</a>
            </div>
        </div>
    </div>
</div>