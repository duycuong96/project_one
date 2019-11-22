<?php
require_once './app/views/backend/master/master.php';
?>

<body>
    <div class="wrapper">
        <?php
        require_once './app/views/backend/master/header.php';
        ?>

        <!-- Sidebar -->
        <?php
        require_once './app/views/backend/master/sidebar.php';
        ?>

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Xe</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="#">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="<?= ADMIN_URL . '/car' ?>">Xe</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        
                                        <a href="<?= ADMIN_URL . '/car/add' ?>" class="btn btn-primary btn-round ml-auto" >
                                            <i class="fa fa-plus"></i>
                                            Thêm mới
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    

                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <!-- <th>Loại xe</th> -->
                                                    <!-- <th>Địa điểm</th> -->
                                                    <!-- <th>Hãng xe</th> -->
                                                    <th style="width: 10%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($cars as $car) :?>
                                                    <tr>
                                                    <td><?= $car->id ?></td>
                                                    <td><?= $car->name ?></td>
                                                    <!-- <td><?= $car->cate_id ?></td> -->
                                                    <!-- <td><?= $car->location_id ?></td> -->
                                                    <!-- <td><?= $car->maker_id ?></td> -->
                                                    <td>
                                                        <div class="form-button-action">
                                                            <a href="" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Sửa">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Xóa">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </div>
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

        <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <?php
    require_once './app/views/backend/master/footer.php';
    ?>