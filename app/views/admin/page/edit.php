<?php
require_once './app/views/admin/master/master.php';
require_once './app/views/admin/master/header.php';
require_once './app/views/admin/master/sidebar.php';
?>
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Trang</h4>
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
            <a href="<?= ADMIN_URL . '/page' ?>">Trang</a>
          </li>
        </ul>
      </div>
      <div class="row">

        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex align-items-center">

                <a href="<?= ADMIN_URL . '/page' ?>" class="btn btn-primary btn-round ml-auto">
                  Danh sách
                </a>
              </div>
            </div>
            <div class="card-body">
              <div class="row justify-content-md-center">
                <div class="col-md-8">
                  <form action="<?= ADMIN_URL . '/page/save-edit' ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $page->id ?>">
                    <div class="form-group">
                      <label>Tiêu đề</label>
                      <input name="title" type="text" class="form-control" placeholder="" value="<?= $page->title ?>">
                      <!-- <small id="emailHelp2" class="form-text text-muted">Validate</small> -->
                    </div>
                    <div class="form-group">
                      <label for="comment">Nội dung</label>
                      <textarea name="description" class="form-control" id="comment" rows="5"><?= $page->description ?></textarea>
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
require_once './app/views/admin/master/footer.php';
?>