<?php include('includes/header.php');?>
<div style="padding-top:20px">
    <div class="fullwidth-template">
        <div class="stelina-tabs  default">
            <div class="container">
                <div class="tab-container">
                    <div id="bestseller" class="tab-panel active">
                        <div class="stelina-product">
                            <ul class="row list-products auto-clear equal-container product-grid">
                                <?php foreach($products as $product){ ?>
                                    <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div class="product-inner equal-element">
                                            <div class="product-top">
                                                <div class="flash">
													<span class="onnew">
														<span class="text">
															Yeni
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="<?php echo $_ENV['BASE_URL'].'urun-detay/'.$product['id'];?>">
                                                    <img src="<?php echo $_ENV['BASE_URL'];?>admin/files/product/img/400/<?php echo $product['product_image'];?>" alt="img">
                                                </a>
                                                <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <a href="<?php echo $_ENV['BASE_URL'].'urun-detay/'.$product['id'];?>" class="button quick-wiew-button">İncele</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="<?php echo $_ENV['BASE_URL'].'urun-detay/'.$product['id'];?>"><?php echo $product['product_name_en'];?></a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                    <?php echo $product['product_price']+50;?> ₺
                                                    </del>
                                                    <ins>
                                                    <?php echo $product['product_price'];?> ₺
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="stelina-iconbox-wrapp default">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="stelina-iconbox  default">
                            <div class="iconbox-inner">
                                <div class="icon-item">
                                    <span class="icon flaticon-rocket-ship"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Ücretsiz Kargo
                                    </h4>
                                    <div class="text">
                                        500₺ ve üzeri siparişlerde<br>
                                        Ücretsiz kargo!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="stelina-iconbox  default">
                            <div class="iconbox-inner">
                                <div class="icon-item">
                                    <span class="icon flaticon-return"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        İade Garantisi
                                    </h4>
                                    <div class="text">
                                        14 gün koşulsuz <br/>iade garantisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="stelina-iconbox  default">
                            <div class="iconbox-inner">
                                <div class="icon-item">
                                    <span class="icon flaticon-padlock"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Online Destek
                                    </h4>
                                    <div class="text">
                                        Size destek olmak için <br>7/24 hazırız!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<?php include('includes/footer.php');?>
