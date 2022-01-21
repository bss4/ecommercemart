<?php 
if(!empty($cart))
{
        $i=0;
?>

@foreach($cart as $cart_val)

<div class="mini_cart_item.{{ $i}}. js_cart_item flex al_center pr oh">
    <div class="ld_cart_bar"></div>
    <a href="{{ url('/').'/single-product-detail/'.$cart_val['id']; }}" class="mini_cart_img">
    <img class="w__100 lazyload" data-src="" width="120" height="153" alt="" src="{{ isset($cart_val['productsvariations']) ? PRODUCT_URL.$cart_val['productsvariations']['image'] : PRODUCT_URL.$cart_val['product']['image'] }}"></a>
    <div class="mini_cart_info">
        <a href="{{ url('/').'/single-product-detail/'.$cart_val['product']['id'] }}" class="mini_cart_title truncate">{{ $cart_val["product"]["name"] }}</a>
        <div class="mini_cart_meta">
            <p class="cart_meta_variant">{{ isset($cart_val["productsvariations"])?$cart_val["productsvariations"]["attr_value1"]:'' }}</p>
            <p class="cart_selling_plan"></p>
            <div class="cart_meta_price price">
                <div class="cart_price"><del>₹{{ isset($cart_val["productsvariations"])?$cart_val["productsvariations"]['price']:$cart_val["product"]['price'] }}</del><ins>₹{{ isset($cart_val["productsvariations"])?$cart_val["productsvariations"]["discount_price"]:$cart_val["product"]["discount_price"]}}</ins></div>
            </div>
        </div>
        <div class="mini_cart_actions">
            <div class="quantity pr mr__10 qty__true">
                <input type="number" class="input-text qty text tc qty_cart_js qty_js_{{ $cart_val['id'] }}" step="1" min="0" max="9999" value="{{ $cart_val['quantity'] }}">
                <div class="qty tc fs__14">
                    <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0"><i class="facl facl-plus"></i></button>
                    <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0 qty_1" ><i class="facl facl-minus"></i></button>
                </div>
            </div>
            <a href="#" class="cart_ac_edit js__qs ttip_nt tooltip_top_right" onclick = "return edit_product_cart(<?php echo $cart_val['product']['id']; ?>);">
                <span class="tt_txt">Edit this item</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                </svg>
            </a>
            <a href="#" class="cart_ac_remove js_cart_rem ttip_nt tooltip_top_right" onclick="return remove_to_cart(<?php echo $cart_val["product"]["id"]; ?>);">
                <span class="tt_txt">Remove this item</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg>
            </a>
        </div>
    </div>
</div>
</div>
<?php
$i++;
?>
@endforeach
<?php } ?>