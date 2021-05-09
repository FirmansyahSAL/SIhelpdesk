<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data karyawan</h3>
                        <a href="<?= base_url('karyawan/add_karyawan') ?>" class="btn btn-primary float-right">Tambah Data</a>
                    </div>

                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nik</th>
                                    <th>Nama Karyawan</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($karyawan as $row) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row->nik ?></td>
                                        <td><?= $row->username ?></td>
                                        <td><?= $row->email ?></td>
                                        <td>
                                            <?php if ($row->status_user == '1') {
                                                echo 'Active';
                                            } else {
                                                echo 'Non Active';
                                            } ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('karyawan/edit_karyawan/' . $row->id_users) ?>"><button type='button' class='btn btn-success'>Edit</button></a>
                                            <a href="<?= base_url('karyawan/delete_karyawan/' . $row->id_users) ?>"><button type='button' class='btn btn-danger' onclick="return confirm('Yakin Menghapus Data ini ?')">Hapus</button></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>