<?php
include_once "./app/views/client/template/header.php";
include_once "./app/views/client/template/nav.php";
?>
      <div class="col-lg-9">
        <div class="shop-topbar-wrapper">
          <div class="grid-list-options">
            <ul class="view-mode">
              <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ti-layout-grid2"></i></a></li>
              <li><a href="#product-list" data-view="product-list"><i class="ti-view-list"></i></a></li>
            </ul>
          </div>
          <div class="product-sorting">
            <div class="shop-product-sorting nav">
              <a class="active" data-toggle="tab" href="#new-product">NEW BIKES </a>
              <a data-toggle="tab" href="#use-product"> USED BIKES </a>
              <a data-toggle="tab" href="#accessory-product">ACCESSORIES</a>
            </div>
            <div class="sorting sorting-bg-1">
              <form>
                <select class="select">
                  <option value="">Default softing </option>
                  <option value="">Sort by news</option>
                  <option value="">Sort by price</option>
                </select>
              </form>
            </div>
          </div>
        </div>
        <div class="grid-list-product-wrapper tab-content">
          <div id="new-product" class="product-grid product-view tab-pane active">
            <div class="row">
              <?php
              foreach ($cars as $car) { ?>
              <div class="product-width col-md-6 col-xl-6 col-lg-6">
                <div class="product-wrapper mb-35">
                  <div class="product-img">
                    <a href="product-details.html">
                      <img src="assets/img/product/honda-air-blade.png" alt="">
                    </a>
                    <div class="product-item-dec">
                      <ul>
                        <li><?= $car->getCateName() ?></li>
                      </ul>
                    </div>
                    <div class="product-action">
                      <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                        <i class=" ti-shopping-cart"></i>
                      </a>
                      <a class="action-cart-2" title="Wishlist" href="#">
                        <i class=" ti-heart"></i>
                      </a>
                      <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                        <i class=" ti-zoom-in"></i>
                      </a>
                    </div>
                    <div class="product-content-wrapper">
                      <div class="product-title-spreed">
                        <h4><a href="product-details.html"><?= $car->name ?></a></h4>
                        <span><?= $car->getLocaName() ?></span>
                      </div>
                      <div class="product-price">
                        <span>$ <?= $car->price ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="product-list-details">
                    <h2><a href="product-details.html">Gloriori GSX 250 R</a></h2>
                    <div class="quick-view-rating">
                      <i class="fa fa-star reting-color"></i>
                      <i class="fa fa-star reting-color"></i>
                      <i class="fa fa-star reting-color"></i>
                      <i class="fa fa-star reting-color"></i>
                      <i class="fa fa-star reting-color"></i>
                    </div>
                    <div class="product-price">
                      <span>$2549</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore nisi aliqua. Ut enim ad minim veniam, quis exercitation to nostrud ullamco laboris nisi ut aliquip ex ea commodo conseut excepteur sint occaecat.</p>
                    <div class="shop-list-cart">
                      <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <!-- <div class="paginations text-center mt-20">
          <ul>
            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="active"><a href="#"><i class="fa fa-angle-right"></i></a></li>
          </ul>
        </div> -->
      </div>
    </div>
  </div>
</div>
<?php
include_once "./app/views/client/template/footer.php"
?>