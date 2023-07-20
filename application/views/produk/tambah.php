<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Tambah Data</h3>
            <div class="card mb-4">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Produk
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="idProduk" class="form-label">ID Produk</label>
                                <input type="text" class="form-control" id="idProduk" name="idProduk">
                                <div class="form-text text-danger"><?= form_error('idProduk'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="namaProduk" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="namaProduk" name="namaProduk">
                                <div class="form-text text-danger"><?= form_error('namaProduk'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="hargaProduk" class="form-label">Harga Produk</label>
                                <input type="text" class="form-control" id="hargaProduk" name="hargaProduk">
                                <div class="form-text text-danger"><?= form_error('hargaProduk'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="kategoriProduk" class="form-label">Kategori Produk</label>
                                <input type="text" class="form-control" id="kategoriProduk" name="kategoriProduk">
                                <div class="form-text text-danger"><?= form_error('kategoriProduk'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="statusProduk" class="form-label">Status Produk</label>
                                <select class="form-select" id="statusProduk" name="statusProduk">
                                    <option value="bisa dijual">bisa dijual</option>
                                    <option value="tidak bisa dijual">tidak bisa dijual</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="tambahProduk">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>