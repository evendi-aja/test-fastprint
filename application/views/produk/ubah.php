<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Ubah Data</h3>
            <div class="card mb-4">
                <div class="card">
                    <div class="card-header">
                        Ubah Data Produk
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="no" value="<?= $pdk['no']; ?>">
                            <div class="mb-3">
                                <label for="idProduk" class="form-label">ID Produk</label>
                                <input type="text" class="form-control" id="idProduk" name="idProduk" value="<?= $pdk['id_produk']; ?>">
                                <div class="form-text text-danger"><?= form_error('idProduk'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="namaProduk" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="namaProduk" name="namaProduk" value="<?= $pdk['nama_produk']; ?>">
                                <div class="form-text text-danger"><?= form_error('namaProduk'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="hargaProduk" class="form-label">Harga Produk</label>
                                <input type="text" class="form-control" id="hargaProduk" name="hargaProduk" value="<?= $pdk['harga']; ?>">
                                <div class="form-text text-danger"><?= form_error('hargaProduk'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="kategoriProduk" class="form-label">Harga Produk</label>
                                <input type="text" class="form-control" id="kategoriProduk" name="kategoriProduk" value="<?= $pdk['kategori']; ?>">
                                <div class="form-text text-danger"><?= form_error('kategoriProduk'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="statusProduk" class="form-label">Status Produk</label>
                                <select class="form-select" id="statusProduk" name="statusProduk">
                                    <?php foreach ($status as $s) : ?>
                                        <?php if ($s == $pdk['status']) : ?>
                                            <option value="<?= $s; ?>" selected><?= $s; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $s; ?>"><?= $s; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="ubahProduk">Ubah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>