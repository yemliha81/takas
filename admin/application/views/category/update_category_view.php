<?php include(APPPATH.'views/includes/header1.php');?>
<style>
    .dropify-wrapper{
        height:222px;
        padding:0;
        border:1px solid #E3E3E3;
        border-radius:10px;
    }
    .lnr-upload{
        font-size: 50px;
    }
    
    .menu-form-2{
        display: flex;
    flex-direction: column;
    gap: 20px;
    justify-content: space-evenly;
    }
</style>
<div class="x-content">
    <?php include(APPPATH.'views/includes/left_nav1.php');?>

    <div class="page-content">
        
        <a href="<?php echo CATEGORY_LIST.$category['menu_id'];?>" class="select-lang"><span class="lnr lnr-chevron-left"></span> Back to Profile</a>
        
        <div class="main-content m-t-20">
            <div class="">
							
							<div class="top-ttl">
    							<div class="r_ttl">
    								<div class="ttl">Update Category</div>
    								<div>Please enter category information.</div>
    							</div>
    							
    						</div>
							<form action="<?php echo UPDATE_CATEGORY_POST;?>" method="post" enctype="multipart/form-data">
								<div class="m-b-20 menu-form">
								
									
									<div class="menu-form-2">
									    <div class="" >
    										
    										<input class="input_style lng en" type="text" name="category_name_en" placeholder="Category name* (EN)" required   value="<?php echo $category['category_name_en'];?>"/>
    										<input class="input_style lng sr" type="text" style="display:none;" name="category_name_sr" placeholder="Category name* (SR)"    value="<?php echo $category['category_name_sr'];?>"/>

    									</div>
    									<div class="">
    										<textarea class="input_style lng en" name="category_description_en" placeholder="Category description* (EN)"><?php echo $category['category_description_en'];?></textarea>
    										<textarea class="input_style lng sr" style="display:none;" name="category_description_sr" placeholder="Category description* (SR)"><?php echo $category['category_description_sr'];?></textarea>
    										
    									</div>
    									
    									
									</div>
								</div>
								
								<div class="m-b-20 form-bottom">
								    <span>Please select language</span>
								    <a href="javascript:;" class="select-lang" lang="sr">SR</a>
								    <a href="javascript:;" class="select-lang" lang="en">EN</a>
									<button type="submit" class="btn_custom"><span class="lnr lnr-upload"></span>Save</button>
								</div>
								<input type="hidden" name="menu_id" value="<?php echo $category['menu_id'];?>"/>
								<input type="hidden" name="id" value="<?php echo $category['id'];?>"/>
							</form>
						</div>
        </div>
    </div>
</div>

<?php include(APPPATH.'views/includes/footer.php');?>

<script type="text/javascript">
	$(document).ready(function(){
		// Basic
		$('.dropify').dropify();
		$('.file-icon').addClass('lnr lnr-upload');
		$('.file-icon').removeClass('file-icon');
	});
	$(".select-lang").click(function(){
        var lang = $(this).attr('lang')
        $('.lng').hide()
        $('.'+lang).show()
      });
</script>