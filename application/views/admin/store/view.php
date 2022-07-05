<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div style="margin-top:50px;" class="card">
            <div style="margin-top: -50px; position:absolute;" class="card-title">
                <h3>Data Store</h3>
            </div>
            <!-- <h5 class="card-header">
                <a href="<?= base_url('admin/store/tambah') ?>" class="btn btn-primary">Tambah Data</a>
            </h5> -->
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelapak</th>
                                <th>Nama Toko</th>
                                <th>No.Rekening</th>
                                <th>A.N Rekening</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($store as $s) :
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $s->nama_pelapak ?></td>
                                    <td><?= $s->nama_toko ?></td>
                                    <td><?= $s->no_rekening ?></td>
                                    <td><?= $s->an_rekening ?></td>
                                    <td>
                                        <a href="" class="btn btn-success btn-block"><i class="bx bx-pencil"></i>Report</a>
                                        <a href="" class="btn btn-danger btn-block"><i class="bx bx-trash"></i>Block</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>