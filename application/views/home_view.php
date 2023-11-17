<?php include('includes/header.php');?>
<div>
    <div class="fullwidth-template">
        <div class="home_banner">
            <div class="container">
                <img src="https://place-hold.it/1200x240/dddddd/df4a4a&text=BANNER-DEMO-TEXT" alt="" width="100%">
            </div>
        </div>
        <div class="stelina-tabs  default rows-space-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="categories">
                            <div class="cats_title">KATEGORİLER</div>
                            <div class="cats">
                                <div class="cat_name"> <a href="">Emlak</a></div>
                                <div class="cat_name"> <a href="">Araç</a></div>
                                <div class="cat_name"> <a href="">Ev eşyası</a></div>
                                <div class="cat_name"> <a href="">Kitap</a></div>
                                <div class="cat_name"> <a href="">Oyuncak</a></div>
                                <div class="cat_name"> <a href="">Kıyafet</a></div>
                                <div class="cat_name"> <a href="">Diğer</a></div>
                            </div>
                        </div>
                        <div>
                        <img src="https://place-hold.it/300x500/dddddd/df4a4a&text=DEMO-TEXT" alt="" width="100%">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-container">
                            <div id="bestseller" class="tab-panel active">
                                <div class="stelina-product">
                                    <div class="adverts">
                                        <?php foreach($products as $product){ ?>
                                            <div class="advert">
                                                <div class="adv_info">
                                                    <div>
                                                        <img src="https://place-hold.it/75x60/666666/FFFFFF" alt="">
                                                    </div>
                                                    <div>
                                                        <div class="adv_title">İlan Başlığı</div>
                                                        <div class="adv_desc">İlan açıklaması, lorem ipsum dolor sit amet..</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a class="button_style" href="javascript:;">İncele ></a>
                                                </div>
                                            </div>
                                        <?php } ?>
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
<script>
    $(document).ready(function(){
      $('.home-banner').slick({
        autoplay: true,
        arrows: false,
        speed: 2000,
      });
    });
</script>
