<style type="text/css">
#productList > div{ display:none;
}
#loadMorepro {
    cursor:pointer;
}
#loadMorepro:hover {
    color:black;
}

</style>
<div id="productList">
<div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" >
<ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left mb-6">
    <?php 
if(!empty($product_list))
{
?>

@foreach($product_list as $product_val)
    <li class="product col">
        <div class="product__inner overflow-hidden p-3 p-md-4d875">
            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                    <a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}" class="d-block"><img src="{{ PRODUCT_URL.$product_val->image}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}">{{ $product_val->name}}</a></div>
                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}">{{ $product_val->description}}</a></h2>
                   
                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₹</span>{{ $product_val->discount_price}}</span>
                    </div>
                </div>
                <input type="hidden" class="qty_cart_js" value="1" name="quantity">
                <div class="product__hover d-flex align-items-center">
                    <a href="#" class="text-uppercase text-dark h-dark font-weight-medium mr-auto add_to_cart" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add To Cart" data-id="{{ $product_val->id}}" onclick="return add_to_cart(this);">
                    <span class="product__add-to-cart">Add To Cart</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                    </a>
                    
                    <a href="#" class="h-p-bg btn btn-outline-primary border-0" onclick="return add_to_wishlist(this);" data-id="{{ $product_val->id}}">
                    <i class="flaticon-heart"></i>
                    </a>
                </div>
            </div>
        </div>
    </li>
    @endforeach
<?php } ?>
</ul>
</div>
</div>
<div class="products-footer tc mt__40" >
            <a class="se_cat_lm pr nt_cat_lm button button_default br_rd_true btn_icon_false" id="loadMorepro" href="#">Load More</a>
</div>
<script type="text/javascript">

    var size_li = $("#productList > div").length;
    if(size_li == 0)
    {
        $("#productList").html("<p>Data not found.</p>");
    }
    x=6;
    
    $('#productList > div:lt('+x+')').show();
    if(size_li<=x)
    {
        $('#loadMorepro').hide();
    }

    $('#loadMorepro').click(function () {
        
        x= (x+6 <= size_li) ? x+6 : size_li;
        $('#productList > div:lt('+x+')').show();
        $('#showLesspro').show();
        if(x == size_li){
            $('#loadMorepro').hide();
        }
    });
</script>