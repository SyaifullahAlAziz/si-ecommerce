<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div style="margin-top:50px;" class="card">
            <div style="margin-top: -50px; position:absolute;" class="card-title">
                <h3>Data User</h3>
            </div>
            <!-- <h5 class="card-header">
                <a href="<?= base_url('admin/user/tambah') ?>" class="btn btn-primary">Tambah Data</a>
            </h5> -->
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Kode Pos</th>
                                <th>No.Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($user as $u) :
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $u->nama_lengkap ?></td>
                                    <td><?= $u->email ?></td>
                                    <td><?= $u->alamat ?></td>
                                    <td><?= $u->kodepos ?></td>
                                    <td><?= $u->telp ?></td>
                                    <td>
                                        <!-- <a href="<?= base_url('admin/user/ubah/') . $mb->id_member ?>" class="btn btn-success"><i class="bx bx-pencil"></i>Report</a> -->
                                        <!-- <a href="<?= base_url('admin/user/hapus/') . $mb->id_member ?>" class="btn btn-danger"><i class="bx bx-trash"></i>Block</a> -->
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