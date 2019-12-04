<?php
require_once './app/views/frontend/template/header.php';
?>
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/banner/banner-4.jpg)">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>ĐĂNG NHẬP</h2>
            <ul>
                <li>
                    <a href="#">home</a>
                </li>
                <li>Đăng nhập</li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area ptb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> Đăng nhập </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form action="<?= BASE_URL . "post-login" ?>" method="post">
                                        <input type="text" name="email" placeholder="Email">
                                        <input type="password" name="password" placeholder="Password">
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox">
                                                <label>Remember me</label>
                                                <a href="#">Quên mật khẩu?</a>
                                            </div>
                                            <button type="submit" class="btn-style cr-btn"><span>Đăng nhập</span></button>
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
<?php
require_once './app/views/frontend/template/footer.php';
?>