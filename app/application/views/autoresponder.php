<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGDEV :: <?= $title ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="<?= _assets() ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= _assets() ?>/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="<?= _assets() ?>/plugins/pace/pace.css" rel="stylesheet">
    <link href="<?= _assets() ?>/plugins/datatables/datatables.min.css" rel="stylesheet">
    <link href="<?= _assets() ?>/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="<?= _assets() ?>/css/main.min.css" rel="stylesheet">
    <link href="<?= _assets() ?>/css/custom.css" rel="stylesheet">
    <style>
    .select2-dropdown {
        z-index: 9999;
    }
    </style>
</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">

        <div class="app-sidebar">
            <div class="logo">
                <a href="#" class="logo-icon"
                    style="background: url(<?= _assets('images/eg.png') ?>) no-repeat; background-position: center center;background-size: 35px;"><span
                        class="logo-text">EGDEV</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="<?= _assets() ?>/images/avatars/avatar.gif">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text"><?= $user->username ?><br><span
                                class="user-state-info">EGDEV</span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Home
                    </li>
                    <li>
                        <a href="<?= base_url('home') ?>" class="active"><i
                                class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li class="sidebar-title">
                        Main Fitur
                    </li>
                    <li class="active-page">
                        <a href="<?= base_url('autoresponder') ?>" class="active"><i
                                class="material-icons-two-tone">message</i>Auto Responder</a>
                    </li>
                    <li>
                        <a href="<?= base_url('contacts') ?>" class="active"><i
                                class="material-icons-two-tone">contacts</i>Contacts/Number</a>
                    </li>
                    <li>
                        <a href="<?= base_url('blast') ?>" class="active"><i
                                class="material-icons-two-tone">question_answer</i>WA Blast</a>
                    </li>
                    <li>
                        <a href="<?= base_url('schedule') ?>" class="active"><i
                                class="material-icons-two-tone">schedule</i>Pesan Terjadwal</a>
                    </li>
                    <li>
                        <a href="<?= base_url('send') ?>" class="active"><i class="material-icons-two-tone">send</i>Test
                            Sender</a>
                    </li>
                    <!-- <li>
                        <a href="<?= base_url('broadcast') ?>" class="active"><i class="material-icons-two-tone">quickreply</i>Broadcast</a>
                    </li> -->
                    <li class="sidebar-title">
                        Other
                    </li>
                    <li>
                        <a href="<?= base_url('api') ?>" class="active"><i class="material-icons-two-tone">api</i>Rest
                            Api</a>
                    </li>
                    <?php if ($user->level == 1) { ?>
                    <li>
                        <a href="<?= base_url('users') ?>" class="active"><i
                                class="material-icons-two-tone">account_circle</i>Users Manager</a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="<?= base_url('settings') ?>" class="active"><i
                                class="material-icons-two-tone">settings</i>Settings</a>
                    </li>
                    <li>
                        <a href="<?= base_url('logout') ?>" class="active"><i
                                class="material-icons-two-tone">logout</i>Logout</a>
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
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i
                                            class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
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
                                    <h2>Auto Responder</h2>
                                </div>
                            </div>
                        </div>
                        <?= _alert() ?>

                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Devices</h5>
                                        <div class="text-end mb-3">
                                            <button class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#add"><i class="material-icons">add</i>Tambah</button>
                                        </div>
                                        <table id="datatable1" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Sender</th>
                                                    <th>Keyword</th>
                                                    <th>Response</th>
                                                    <th>Media</th>
                                                    <th>#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($respon->result() as $d) : ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?= $d->nomor ?></td>
                                                    <td><small><?= $d->keyword ?></small></td>
                                                    <td><small><?= $d->response ?></small></td>
                                                    <td><?= ($d->media == '') ? '<button class="btn btn-secondary btn-sm" disabled>None</button>' : '<button class="btn btn-primary btn-sm" onclick="lihat_gambar(`' . $d->media . '`)">Lihat</button>' ?>
                                                    </td>
                                                    <td><a href="<?= base_url('autoresponder/del/') . $d->id ?>"
                                                            type="button" class="btn btn-danger btn-sm"><i
                                                                class="material-icons">delete_outline</i>Delete</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
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
    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Device</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post">
                    <div class="modal-body">
                        <label class="form-label">Nomor</label>
                        <select name="device" class="form-select" required>
                            <?php foreach ($device->result() as $d) : ?>
                            <option value="<?= $d->nomor ?>"><?= $d->nomor ?></option>
                            <?php endforeach ?>
                        </select>
                        <label class="form-label">Keyword</label>
                        <input type="text" class="form-control" name="keyword" placeholder="ex: /help"
                            autocomplete="off" required>
                        <label class="form-label">Response</label>
                        <textarea class="form-control" name="response" autocomplete="off" required></textarea>
                        <?= _uploadMedia() ?>
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
    <script src="<?= _assets() ?>/plugins/datatables/datatables.min.js"></script>
    <script src="<?= _assets() ?>/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?= _assets() ?>/js/main.min.js"></script>
    <script src="<?= _assets() ?>/js/custom.js"></script>
    <script>
    $('#datatable1').DataTable({
        responsive: true,
        // "lengthChange": false
    });
    </script>
    <?php require_once("include_file.php") ?>
</body>

</html>