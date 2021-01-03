<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/sb-admin-2.css">
    <style>
        .bottom-right-toast{
            bottom: 20px;
            right: 10px;
        }
        
        .toast-body{
            border-left: 4px solid #7116DB;
            color: black;
        }
        .cek{
            margin-top: 10px;
            position: absolute;
            font-size: 30px;
            color: #7116DB;
        }
        .message-j strong{
            font-size: 18px;
            margin-top: -5px!important;
            margin-bottom: -6px;
            margin-left:  44px!important;
        }
        .message-i{
            margin-left: 43px;
            margin-bottom: -6px;
        }
        .toast{
            transition: all 1s ;
        }
        .bg-profil{
            margin-top: -24px;
        }
    </style>
</head>

<body id="page-top ">
    <!-- <?php if($this->session->flashdata('pesan')): ?>
        <div class="position-realetive ">
                <div class="position-absolute bottom-right-toast">
                    <div class="toast d-flex align-items-center text-black bg-light border-0 mb-5 mr-4" role="alert" aria-live="assertive" aria-atomic="true">
                              <div class="toast-body message-j">
                                <i class="fas fa-check cek"></i><strong id="message-j">Jurnalku Book</strong>

                            <p class="message-i">Selamat Datang  <?= $user['nama']?></p>
                          </div>
                          <button type="button" class="btn-close btn-close-black ms-auto me-2 mb-4 mr-2" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                </div>
            </div>
        </div>
    <?php endif ?> -->
        

    <!-- Page Wrapper -->
    <div id="wrapper">