<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Produk <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <a href="<?= base_url() ?>produk/tambah" class="btn btn-primary" role="button">Tambah Data</a>
            <br><br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>ID Produk</th>
                                <th>Nama Produk</th>
                                <th>Harga Produk</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>ID Produk</th>
                                <th>Nama Produk</th>
                                <th>Harga Produk</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($produk as $pdk) : ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $pdk['id_produk'] ?></td>
                                    <td><?= $pdk['nama_produk'] ?></td>
                                    <td><?= $pdk['harga'] ?></td>
                                    <td><?= $pdk['kategori'] ?></td>
                                    <td><?= $pdk['status'] ?></td>
                                    <td><a href="<?= base_url() ?>/produk/ubah/<?= $pdk['no']; ?>" class="btn btn-warning left">Edit</a> | <a href="<?= base_url() ?>/produk/hapus/<?= $pdk['no']; ?>" class="btn btn-danger left" onclick="return confirm('yakin?');">Hapus</a></td>
                                </tr>
                                <?php $no++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>



    <!-- Modal -->
    <!-- <?php

            if ($this->form_validation->run() == FALSE) : ?>
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="judulModal">Tambah Data Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= validation_errors(); ?>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="namaBarang" name="namaBarang">
                        </div>
                        <div class="mb-3">
                            <label for="hargaBarang" class="form-label">Harga Barang Barang</label>
                            <input type="text" class="form-control" id="hargaBarang" name="hargaBarang">
                        </div>
                        <div class="form-group mb-3">
                            <label for="statusBarang" class="form-label">Status Barang</label>
                            <select type="text" class="form-control form-select" id="statusBarang" name="statusBarang">
                                <option value="Ada">Ada</option>
                                <option value="Habis">Habis</option>
                            </select>
                        </div>
                        <!-- <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select> -->
    <!-- </div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" name="tambahProduk" class="btn btn-primary">Tambah Data</button>
    </form>
</div>
</div>
</div>
</div>

<?php endif; ?> -->