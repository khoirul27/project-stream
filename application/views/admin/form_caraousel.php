<div id='myalert'>
    <?= $this->session->flashdata('alert', true) ?>
</div>
<div class="col-md-12 my-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Input caraousel</h5>
            <button type="button" class="btn mb-2 btn-outline-success" data-toggle="modal"
                data-target="#verticalModal">Input</button>
            <div class="modal fade" id="verticalModal" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="verticalModalTitle">Input caraousel</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/form_caraousel/simpan') ?>" method="post"
                            enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label for="custom-multiselect">Judul</label>
                                    <select class="custom-select" multiple id="custom-multiselect" name="judul">
                                        <?php foreach ($caraousel as $b) { ?>
                                            <option value="<?= $b['judul'] ?>"><?= $b['judul'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="customFile">Foto</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" type="file"
                                            id="formFile" accept="image/png, image/jpeg" name="foto_caraousel">
                                        <label class="custom-file-label" for="customFile"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn mb-2 btn-primary">simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </p>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($caraousel2 as $c) { ?>
                        <tr>
                            <td>
                                <?= $no ?>
                            </td>
                            <td>
                                <?= $c['judul'] ?>
                            </td>
                            <td><img src="<?= base_url('asset/admin/img/caraousel/'.$c['foto_caraousel']) ?>"></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr2">
                                        <a class="dropdown-item text-dark" type="button" data-toggle="modal"
                                            data-target="#edit<?= $b['id_anime'] ?>" data-whatever="@mdo">Edit</a>
                                        <a class="dropdown-item"
                                            href="<?= base_url('admin/form_caraousel/hapus/' . $c['foto_caraousel']) ?>">Hapus</a>
                                    </div>
                                    <div class="modal fade" id="edit<?= $b['id_anime'] ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Filem</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?= base_url('admin/form_anime/update') ?>" method="post"
                                                        enctype="multipart/form-data">
                                                        <input type="hidden" name="foto" value="<?= $b['foto'] ?>">
                                                        <div class="modal-body">
                                                            <div class="form-group mb-3">
                                                                <label for="simpleinput">Judul</label>
                                                                <input type="text" id="simpleinput" class="form-control"
                                                                    name="judul" value="<?= $b['judul'] ?>">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="simpleinput">Link Vidio</label>
                                                                <input type="text" id="simpleinput" class="form-control"
                                                                    name="link" value="<?= $b['link'] ?>">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="customFile">Foto</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input"
                                                                        id="customFile" type="file" id="formFile"
                                                                        accept="image/png, image/jpeg" name="foto">
                                                                    <label class="custom-file-label"
                                                                        for="customFile"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- Bordered table -->