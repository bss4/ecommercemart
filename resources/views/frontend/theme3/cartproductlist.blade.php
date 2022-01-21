<?php 
if(!empty($cart))
{
        $i=0;
?>

@foreach($cart as $cart_val)
<div class="px-4 py-5 px-md-6 border-bottom">
    <div class="media">
        <a href="{{ url('/').'/'.$shopid.'/single-product-detail/'.$cart_val['id']; }}" class="d-block"><img src="{{ isset($cart_val['productsvariations']) ? PRODUCT_URL.$cart_val['productsvariations']['image'] : PRODUCT_URL.$cart_val['product']['image'] }}" class="img-fluid" alt="image-description"></a>
        <div class="media-body ml-4d875">
            <div class="text-primary text-uppercase font-size-1 mb-1 text-truncate"><a href="{{ url('/').'/'.$shopid.'/single-product-detail/'.$cart_val['product']['id'] }}">{{ $cart_val["product"]["name"] }}</a></div>
            <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2">
                <a href="{{ url('/').'/'.$shopid.'/single-product-detail/'.$cart_val['product']['id'] }}" class="text-dark">{{ $cart_val["product"]["description"] }}</a>
            </h2>
            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                <span class="woocommerce-Price-amount amount">{{ $cart_val['quantity'] }} x <span class="woocommerce-Price-currencySymbol">₹</span>{{ isset($cart_val["productsvariations"])?$cart_val["productsvariations"]["discount_price"]:$cart_val["product"]["discount_price"]}}</span>
            </div>
        </div>
        <div class="mt-3 ml-3">
            <a href="#" class="text-dark cart_ac_remove js_cart_rem" onclick="return remove_to_cart(<?php echo $cart_val["product"]["id"]; ?>);"><i class="fas fa-times"></i></a>
        </div>
    </div>
</div>
<?php
$i++;
?>
@endforeach
<?php } ?>