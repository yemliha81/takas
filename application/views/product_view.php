<?php include('includes/header.php');?>
<?php include('lang/product_'.$lang.'.php');?>
<style>
    .product_details{
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:20px
    }
    .product_div{
        margin-bottom:30px
    }
    .product_name{
        font-size:24px;
        font-weight:bold;
    }
    .info_box{
        padding: 15px 0;
    }
    .price_text{
        font-weight:bold
    }
</style>
<div class="product_div">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?php echo $_ENV['BASE_URL'];?>">Anasayfa</a> > <a href="<?php echo PRODUCT_LIST;?>">Ürünler</a> > <?php echo $product['product_name_en'];?>
        </div>
        <div class="product_details">
            <div class="product_img">
                <img src="<?php echo $_ENV['BASE_URL'];?>admin/files/product/img/400/<?php echo $product['product_image'];?>" alt="img">
            </div>
            <div class="product_info">
                <div class="product_name info_box"><?php echo $product['product_name_en'];?></div>
                <div class="info_box"><span class="price_text">Fiyat:</span> <?php echo $product['product_price'];?>₺</div>
                <div class="info_box"><span class="price_text">Ürün Kodu:</span> #00<?php echo $product['id'];?></div>
                <div class="info_box"><span class="price_text">Stokta:</span> Var</div>
                <div class="info_box"><?php echo $product['product_description_en'];?></div>
            </div>
        </div>
        
    </div>
      
</div>
<?php include('includes/footer.php');?>