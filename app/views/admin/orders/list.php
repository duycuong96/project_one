<?php
require_once './app/views/admin/master/master.php';
require_once './app/views/admin/master/header.php';
require_once './app/views/admin/master/sidebar.php';
?>
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Đơn hàng</h4>
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
            <a href="<?= ADMIN_URL . '/order' ?>">Đơn hàng</a>
          </li>
        </ul>
      </div>
      <div class="row">

        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex align-items-center">

                <a href="<?= ADMIN_URL ?>" class="btn btn-primary btn-round ml-auto">
                  Dashboard
                </a>
              </div>
            </div>
            <div class="card-body">


              <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Tên khách hàng</th>
                      <th>Tổng tiền</th>
                      <th>Ngày mua</th>
                      <th>Trạng thái</th>
                      <th style="width: 10%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($orders as $order) : ?>
                      <tr>
                        <td><?= $order->id ?></td>
                        <td><?= $order->customer_name ?></td>
                        <td><?= $order->total_price ?></td>
                        <td><?= $order->created_date ?></td>
                        <td><?= $order->status ?></td>
                        <td>
                          <div class="form-button-action">
                            <a href="<?php echo ADMIN_URL . '/order/edit?id=' ?><?php echo $order->id ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Sửa">
                              <i class="fa fa-edit"></i>
                            </a>
                            <!-- <a href="" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Xóa">
                              <i class="fa fa-times"></i>
                            </a> -->
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

<?php
require_once './app/views/admin/master/footer.php';
?>