<?php 
if(!empty($cart))
{
        $i=0;
?>

@foreach($cart as $cart_val)

<div class="mini-cart-item clearfix">
    <div class="mini-cart-img">
        <a href="{{ url('/').'/'.$shopid.'/single-product-detail/'.$cart_val['id']; }}"><img src="{{ isset($cart_val['productsvariations']) ? PRODUCT_URL.$cart_val['productsvariations']['image'] : PRODUCT_URL.$cart_val['product']['image'] }}" alt="Image"></a>
        <span class="mini-cart-item-delete" onclick="return remove_to_cart(<?php echo $cart_val["product"]["id"]; ?>);"><i class="icon-cancel"></i></span>
    </div>
    <div class="mini-cart-info">
        <h6><a href="{{ url('/').'/'.$shopid.'/single-product-detail/'.$cart_val['id']; }}">{{ $cart_val["product"]["name"] }}</a></h6>
        <span class="mini-cart-quantity">{{ $cart_val['quantity'] }} x ₹{{ isset($cart_val["productsvariations"])?$cart_val["productsvariations"]["discount_price"]:$cart_val["product"]["discount_price"]}}</span>
    </div>
</div>
<?php
$i++;
?>
@endforeach
<?php } ?>