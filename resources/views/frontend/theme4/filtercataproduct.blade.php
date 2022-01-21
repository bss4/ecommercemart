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
<?php 
if(!empty($product_list))
{
?>
<div class="tab-pane fade show active" id="shop-grid">
    <div class="row mb-n-30px" id="productList">
@foreach($product_list as $product_val)
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
    <!-- Single Prodect -->
    <div class="product">
    <span class="badges">
    <span class="new">New</span>
    </span>
    <div class="thumb">
        <a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}" class="image">
        <img src="{{ PRODUCT_URL.$product_val->image}}" alt="Product" />
        <img class="hover-image" src="{{ PRODUCT_URL.$product_val->image}}" alt="Product" />
        </a>
    </div>
    <div class="content">
        
        <h5 class="title"><a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}">{{ $product_val->name}}
            </a>
        </h5>
        <span class="price">
        <span class="new">₹{{ $product_val->discount_price}}</span>
        </span>
    </div>
    <div class="actions">
        <button title="Add To Cart" class="action" data-id="{{ $product_val->id}}" onclick="return add_to_cart(this);"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
        <button class="action wishlist" title="Wishlist" onclick="return add_to_wishlist(this);" data-id="{{ $product_val->id}}"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                                            
    </div>
    </div>
</div>
@endforeach
</div>
</div>
<?php } ?>

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