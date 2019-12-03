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
                        <div class="invoice col-md-12 p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <i class="fas fa-globe"></i> AdminLTE, Inc.
                                        <small class="float-right">Date: 2/10/2014</small>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <!-- /.col -->
                                <div class="col-md-6 invoice-col">
                                    Thông tin đơn hàng
                                    <address>
                                        <strong><?php echo $order->customer_name ?></strong><br>
                                        <?php echo $order->customer_address ?><br>
                                        <?php echo $order->customer_phone_number ?><br>
                                        <?php echo $order->customer_email ?>
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6 invoice-col">
                                    <b>Invoice #<?php echo $order->id ?></b><br>
                                    <br>
                                    <b>Order ID:</b> <?php echo $order->id ?><br>
                                    <b>Hình thức thanh toán:</b>
                                    <?php if ($order->status == 1) : ?>
                                        Thanh toán tiền mặt
                                    <?php elseif ($order->status == 2) : ?>
                                        Thanh toán online
                                    <?php elseif ($order->status == 3) : ?>
                                        Thanh toán bằng thẻ quốc tế Visa, Master, JCB
                                    <?php endif  ?>
                                    <br>
                                    <b>Ngày:</b> <?php echo $order->created_date ?><br>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Mã đơn hàng</th>
                                                <th>Sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Đơn giá</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($orderDetail as $value) : ?>
                                                <tr>
                                                    <td><?= $value->order_id ?></td>
                                                    <!-- <td><?= $value->getNameProduct(); ?></td> -->
                                                    <td><?= $value->quantity ?></td>
                                                    <td><?= $value->unit_price ?></td>
                                                </tr>
                                            <?php endforeach ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <hr>
                            <div class="row">

                                <!-- accepted payments column -->
                                <div class="col-md-6">
                                    <h3>Cập nhật đơn hàng:</h3>
                                    <form method="post" action="<?php echo ADMIN_URL . '/order/save-edit' ?>" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <input type="hidden" name="id" value="<?= $order->id ?>">
                                            <div class="form-group">
                                                <label>Tên</label>
                                                <input type="text" class="form-control" name="customer_name" placeholder="Tên" value="<?php echo $order->customer_name ?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Số điện thoại</label>
                                                <input type="text" class="form-control" name="customer_phone_number" placeholder="Danh mục" value="<?php echo $order->customer_phone_number ?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="customer_email" placeholder="Danh mục" value="<?php echo $order->customer_email ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Địa chỉ</label>
                                                <input type="text" class="form-control" name="customer_address" placeholder="Danh mục" value="<?php echo $order->customer_address ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="">Xử lý đơn hàng</label>
                                                <select name="status" required class="form-control">
                                                    <option <?php if ($order->status == "0") : ?> selected <?php endif ?> value="0">
                                                        Tiếp nhận đơn hàng
                                                    </option>
                                                    <option <?php if ($order->status == "1") : ?> selected <?php endif ?> value="1">
                                                        Đang xử lý
                                                    </option>
                                                    <option <?php if ($order->status == "2") : ?> selected <?php endif ?> value="2">
                                                        Chờ thanh toán
                                                    </option>
                                                    <option <?php if ($order->status == "3") : ?> selected <?php endif ?> value="3">
                                                        Đã hoàn thành
                                                    </option>
                                                    <option <?php if ($order->status == "4") : ?> selected <?php endif ?> value="4">
                                                        Hủy bỏ
                                                    </option>
                                                    <option <?php if ($order->status == "5") : ?> selected <?php endif ?> value="5">
                                                        Hoàn tiền
                                                    </option>
                                                </select> </div>




                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <p class="text-danger">Đơn hàng: <?php echo $order->created_date ?></p>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th style="width:50%">Tổng:</th>
                                                    <td><?php echo number_format($order->total_price) ?> đ</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping:</th>
                                                    <td>Free</td>
                                                </tr>
                                                <tr>
                                                    <th>Tổng tiền:</th>
                                                    <td><?php echo number_format($order->total_price) ?> đ</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->

                        </div>

                        <!-- /.col -->
                        <!-- ./col -->
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