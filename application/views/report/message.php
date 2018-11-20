<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Pesan</h3>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-left">
                            <address>
                                <h3> &nbsp;<b class="text-danger">Material Pro Admin</b></h3>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive m-t-40" style="clear: both;">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Judul</th>
                                    <th>Pesan</th>
                                    <th>Reply</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($messages as $message) : ?>
                                    <tr>
                                        <td>#<?= $no ?></td>
                                        <td>#<?= $no ?></td>
                                        <td>#<?= $no ?></td>
                                        <td>#<?= $no ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-right m-t-30 text-right">
                            <p>Sub - Total amount: $13,848</p>
                            <p>vat (10%) : $138 </p>
                            <hr>
                            <h3><b>Total :</b> $13,986</h3>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right">
                            <button class="btn btn-danger" type="submit"> Export to PDF</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>