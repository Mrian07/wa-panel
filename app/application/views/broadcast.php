<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGDEV :: <?= $title ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="<?= _assets() ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= _assets() ?>/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="<?= _assets() ?>/plugins/pace/pace.css" rel="stylesheet">
    <link href="<?= _assets() ?>/plugins/datatables/datatables.min.css" rel="stylesheet">
    <link href="<?= _assets() ?>/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="<?= _assets() ?>/css/main.min.css" rel="stylesheet">
    <link href="<?= _assets() ?>/css/custom.css" rel="stylesheet">
</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">

        <div class="app-sidebar">
            <div class="logo">
                <a href="#" class="logo-icon" style="background: url(<?= _assets('images/eg.png') ?>) no-repeat; background-position: center center;background-size: 35px;"><span class="logo-text">WALIX</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="<?= _assets() ?>/images/avatars/avatar.gif">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text"><?= $user->username ?><br><span class="user-state-info">EGDEV</span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Home
                    </li>
                    <li>
                        <a href="<?= base_url('home') ?>" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li class="sidebar-title">
                        Main Fitur
                    </li>
                    <li>
                        <a href="<?= base_url('autoresponder') ?>" class="active"><i class="material-icons-two-tone">message</i>Auto Responder</a>
                    </li>
                    <li>
                        <a href="<?= base_url('contacts') ?>" class="active"><i class="material-icons-two-tone">contacts</i>Contacts/Number</a>
                    </li>
                    <li>
                        <a href="<?= base_url('blast') ?>" class="active"><i class="material-icons-two-tone">question_answer</i>WA Blast</a>
                    </li>
                    <li>
                        <a href="<?= base_url('schedule') ?>" class="active"><i class="material-icons-two-tone">schedule</i>Pesan Terjadwal</a>
                    </li>
                    <li>
                        <a href="<?= base_url('send') ?>" class="active"><i class="material-icons-two-tone">send</i>Test Sender</a>
                    </li>
                    <li class="active-page">
                        <a href="<?= base_url('broadcast') ?>" class="active"><i class="material-icons-two-tone">quickreply</i>Broadcast</a>
                    </li>
                    <li class="sidebar-title">
                        Other
                    </li>
                    <li>
                        <a href="<?= base_url('api') ?>" class="active"><i class="material-icons-two-tone">api</i>Rest Api</a>
                    </li>
                    <li>
                        <a href="<?= base_url('settings') ?>" class="active"><i class="material-icons-two-tone">settings</i>Settings</a>
                    </li>
                    <li>
                        <a href="<?= base_url('logout') ?>" class="active"><i class="material-icons-two-tone">logout</i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="app-container">
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li><a class="dropdown-item" href="#">Broadcast</a></li>
                                        <li><a class="dropdown-item" href="#">WA Blast</a></li>
                                        <li><a class="dropdown-item" href="#">Auto Responder</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description p-0">
                                    <h2>Broadcast</h2>
                                </div>
                            </div>
                        </div>
                        <?= _alert() ?>
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post" class="loadingbtn">
                                    <label>Device</label>
                                    <select class="js-states form-control" name="device" tabindex="-1" style="display: none; width: 100%">
                                        <?php foreach ($device->result() as $d) : ?>
                                            <option value="<?= $d->nomor ?>"><?= $d->nomor ?></option>
                                        <?php endforeach ?>
                                    </select>

                                    <div class="mt-3">
                                        <label for="">Link media ( JPG,JPEG,PDF )</label>
                                        <div class="input-group">
                                            <input type="text" id="inputmedia" name="media" class="form-control" placeholder="Link media">
                                            <span onclick="mediamodal()" class="btn btn-primary"><span class="material-icons pt-1">file_upload</span></span>
                                        </div>
                                        <small>Kosongi jika ingin kirim pesan saja.</small>
                                    </div>

                                    <div class="mt-3">
                                        <label for="">Pesan</label>
                                        <textarea name="pesan" class="form-control" rows="7" placeholder="Contoh : Hai {name}" required></textarea>
                                        <small>note : {name} menulis nama sesuai penerima.</small>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" name="savebroadcast">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Simpan Broadcast.
                                        </label>
                                    </div>
                                    <div class="text-end btnkirim mt-3">
                                        <button type="submit" class="btn btn-primary"><i class="material-icons">send</i>Kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Broadcast</h6>
                                        <form action="<?= base_url("blast/del") ?>" method="post">
                                            <button type="submit" class="btn btn-danger m-1"><i class="material-icons">delete</i>Hapus</button>
                                            <table id="datatable1" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th><input class="form-check-input" onchange="checkAll(this)" name="chk[]" type="checkbox"></th>
                                                        <th>Pesan</th>
                                                        <th>Media</th>
                                                        <th>#</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($broadcast->result() as $b) : ?>
                                                        <tr>
                                                            <td><input class="form-check-input checkdel" name="id[]" value="<?= $b->id ?>" type="checkbox"></td>
                                                            <td><?= $b->pesan ?></td>
                                                            <td><?= ($b->media == '') ? '<button class="btn btn-secondary btn-sm" disabled>None</button>' : '<button type="button" class="btn btn-primary btn-sm" onclick="lihat_gambar(`' . $b->media . '`)">Lihat</button>' ?></td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary">Kirim Pesan</button>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="devices" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Device</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post">
                    <div class="modal-body">
                        <label class="form-label">Nomor</label>
                        <input type="number" name="nomor" class="form-control" required placeholder="62xxxx">
                        <label class="form-label">Webhook Url</label>
                        <input type="text" name="webhook" class="form-control" autocomplete="off">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="lihatm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Media</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center" id="preview_lihat">

                </div>
            </div>
        </div>
    </div>
    <!-- Javascripts -->
    <script src="<?= _assets() ?>/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?= _assets() ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= _assets() ?>/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="<?= _assets() ?>/plugins/pace/pace.min.js"></script>
    <script src="<?= _assets() ?>/plugins/datatables/datatables.min.js?v=1"></script>
    <script src="<?= _assets() ?>/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?= _assets() ?>/js/main.min.js"></script>
    <script src="<?= _assets() ?>/js/custom.js"></script>
    <script>
        $('select').select2();
        $('#datatable1').DataTable({
            responsive: true,
            "lengthChange": false
        });

        function checkAll(ele) {
            var checkboxes = document.getElementsByClassName('checkdel');
            if (ele.checked) {
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = true;
                    }
                }
            } else {
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = false;
                    }
                }
            }
        }
    </script>
    <?php require_once('include_file.php') ?>
</body>

</html>