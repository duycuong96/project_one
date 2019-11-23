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
                        <h4 class="page-title">Địa điểm</h4>
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
                                <a href="<?= ADMIN_URL . '/category' ?>">Địa điểm</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">

                                        <a href="<?= ADMIN_URL . '/category' ?>" class="btn btn-primary btn-round ml-auto">
                                            Danh sách
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-md-center">
                                        <div class="col-md-8">
                                            <form action="">
                                                <div class="form-group">
                                                    <label>Tên</label>
                                                    <input type="text" class="form-control" placeholder="" value="">
                                                    <!-- <small id="emailHelp2" class="form-text text-muted">Validate</small> -->
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" placeholder="" value="">
                                                    <!-- <small id="emailHelp2" class="form-text text-muted">Validate</small> -->
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="text" class="form-control" placeholder="" value="">
                                                    <!-- <small id="emailHelp2" class="form-text text-muted">Validate</small> -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Avatar</label>
                                                    <input type="file" class="form-control-file" id="">
                                                </div>
                                                <div class="form-group">
												<label for="exampleFormControlSelect1">Phân quyền</label>
												<select class="form-control" id="exampleFormControlSelect1">
													<option>Admin</option>
													<option>Member</option>
												</select>
											</div>
                                                <div class="form-check">
                                                    <label>Trạng thái:</label><br>
                                                    <label class="form-radio-label">
                                                        <input class="form-radio-input" type="radio" name="optionsRadios" value="" checked="">
                                                        <span class="form-radio-sign">Không</span>
                                                    </label>
                                                    <label class="form-radio-label ml-3">
                                                        <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                                        <span class="form-radio-sign">Có</span>
                                                    </label>
                                                </div>

                                                <div class="card-action">
                                                    <button class="btn btn-success">Cập nhật</button>
                                                    <button class="btn btn-danger">Trở lại</button>
                                                </div>
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

        <!-- End Custom template -->
        <?php
        require_once './app/views/backend/master/footer.php';
        ?>