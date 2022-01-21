<?php 
if(!empty($cart))
{
        $i=0;
?>
<ul class="minicart-product-list">
@foreach($cart as $cart_val)
<li>
    <a href="{{ url('/').'/'.$shopid.'/single-product-detail/'.$cart_val['product']['id'] }}" class="image"><img src="{{ isset($cart_val['productsvariations']) ? PRODUCT_URL.$cart_val['productsvariations']['image'] : PRODUCT_URL.$cart_val['product']['image'] }}" alt="Cart product Image"></a>
    <div class="content">
        <a href="{{ url('/').'/'.$shopid.'/single-product-detail/'.$cart_val['product']['id'] }}" class="title">{{ $cart_val["product"]["name"] }}</a>
        <span class="quantity-price">{{ $cart_val['quantity'] }} x <span class="amount">₹{{ isset($cart_val["productsvariations"])?$cart_val["productsvariations"]["discount_price"]:$cart_val["product"]["discount_price"]}}</span></span>
        <a href="#" class="remove cart_ac_remove js_cart_rem" onclick="return remove_to_cart(<?php echo $cart_val["product"]["id"]; ?>);">×</a>
    </div>
</li>                    
<?php
$i++;
?>
@endforeach
</ul>
<?php } ?>