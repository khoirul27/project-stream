<div id='myalert'>
    <?= $this->session->flashdata('alert', true) ?>
</div>
<div class="col-md-12 my-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Input data filem</h5>
            <button type="button" class="btn mb-2 btn-outline-success" data-toggle="modal"
                data-target="#verticalModal">Input</button>
            <div class="modal fade" id="verticalModal" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="verticalModalTitle">Input data filem</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/form_anime/simpan') ?>" method="post"
                            enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Judul</label>
                                    <input type="text" id="simpleinput" class="form-control" name="judul">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Link Vidio</label>
                                    <input type="text" id="simpleinput" class="form-control" name="link">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="customFile">Foto</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" type="file"
                                            id="formFile" accept="image/png, image/jpeg" name="foto">
                                        <label class="custom-file-label" for="customFile"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn mb-2 btn-primary">Save changes</button>
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
                        <th>link</th>
                        <th>Foto</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($anime as $a) { ?>
                        <tr>
                            <td>
                                <?= $no ?>
                            </td>
                            <td>
                                <?= $a['judul'] ?>
                            </td>
                            <td>
                                <?= $a['link'] ?>
                            </td>
                            <td><a href="<?= base_url('asset/admin/img/anime/' . $a['foto']) ?>" target="_blank"><span
                                        class="fe fe-10 fe-search"></span> lihat</a></td>
                            <td><button type="button" class="btn mb-2 btn-info" data-toggle="modal"
                                    data-target="#detail<?= $a['id_anime'] ?>">Cek</button>
                                <div class="modal fade" id="detail<?= $a['id_anime'] ?>" tabindex="-1" role="dialog"
                                    aria-labelledby="verticalModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="verticalModalTitle">Detail data filem</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form
                                                action="<?= base_url('admin/form_anime/simpan_detail/' . $a['id_anime']) ?>"
                                                method="post">

                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="simpleinput">Jenis Filem</label>
                                                        <div class="form-group mb-3">
                                                        <input type="text" id="simpleinput" class="form-control"
                                                                name="jenis_filem" value="<?= $a['jenis_filem'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-6">
                                                            <label for="simpleinput">Penulis</label>
                                                            <input type="text" id="simpleinput" class="form-control"
                                                                name="penulis" value="<?= $a['penulis'] ?>">
                                                        </div>
                                                        <div class="form-group col-6">
                                                            <label for="simpleinput">Produksi</label>
                                                            <input type="text" id="simpleinput" class="form-control"
                                                                name="produksi" value="<?= $a['produksi'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-4">
                                                            <label for="simpleinput">Durasi</label>
                                                            <input type="text" id="simpleinput" class="form-control"
                                                                name="durasi" value="<?= $a['durasi'] ?>">
                                                        </div>
                                                        <div class="form-group col-4">
                                                            <label for="simpleinput">Kualitas</label>
                                                            <input type="text" id="simpleinput" class="form-control"
                                                                name="kualitas" value="<?= $a['kualitas'] ?>">
                                                        </div>
                                                        <div class="form-group col-4">
                                                            <label for="example-date">Tanggal Rilis</label>
                                                            <input class="form-control" id="example-date" type="date"
                                                                name="tanggal_rilis" value="<?= $a['tanggal_rilis'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="example-textarea">Sinopsis</label>
                                                        <textarea class="form-control" id="example-textarea" rows="4"
                                                            name="sinopsis"><?= $a['sinopsis'] ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn mb-2 btn-primary"
                                                        onclick="return confirm('apakah anda yakin ingin mengedit data ini')">edit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr2">
                                        <a class="dropdown-item text-dark" type="button" data-toggle="modal"
                                            data-target="#edit<?= $a['id_anime'] ?>" data-whatever="@mdo">Edit</a>
                                        <a class="dropdown-item"
                                            href="<?= base_url('admin/form_anime/hapus/' . $a['foto']) ?>">Hapus</a>
                                    </div>
                                    <div class="modal fade" id="edit<?= $a['id_anime'] ?>" tabindex="-1"
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
                                                        <input type="hidden" name="foto" value="<?= $a['foto'] ?>">
                                                        <div class="modal-body">
                                                            <div class="form-group mb-3">
                                                                <label for="simpleinput">Judul</label>
                                                                <input type="text" id="simpleinput" class="form-control"
                                                                    name="judul" value="<?= $a['judul'] ?>">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="simpleinput">Link Vidio</label>
                                                                <input type="text" id="simpleinput" class="form-control"
                                                                    name="link" value="<?= $a['link'] ?>">
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