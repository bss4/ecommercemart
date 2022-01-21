<div class="shoping-cart-inner">
    <div class="shoping-cart-table table-responsive">
        <table class="table">
            
            <tbody>
                @if(count($wishlist)>0)

                @foreach($wishlist as $id => $details)
               
                <tr>
                    <td class="cart-product-remove wis_remove" onclick="return remove_to_wishlist(<?php echo $details['id'];?>)">x</td>
                    <td class="cart-product-image">
                        <a href="{{ url('/').'/'.$shopid.'/single-product-detail/' . $details['product']['id'] }}"><img src="{{ isset($details['product']['image'])?PRODUCT_URL.$details['product']['image']:''}}" alt="#"></a>
                    </td>
                    <td class="cart-product-info">
                        <h4><a href="{{ url('/').'/'.$shopid.'/single-product-detail/' . $details['product']['id'] }}">{{ isset($details['product']['name']) ? $details['product']['name']:''}}</a></h4>
                    </td>
                    <td class="cart-product-info">
                        <h4><a href="{{ url('/').'/'.$shopid.'/single-product-detail/' . $details['product']['id'] }}">{{ isset($details['product']['unit']) ? $details['product']['unit']:''}}</a></h4>
                    </td>
                    <td class="cart-product-price">₹{{$details['product']['discount_price']}}</td>
                    <td class="cart-product-stock">In Stock</td>
                    <td class="cart-product-add-cart">
                        <a class="submit-button-1 add_to_cart" href="#" title="Add to Cart" onclick="return add_to_cart(this);" data-id="{{$details['product']['id'] }}">Add to Cart</a>
                    </td>
                </tr>
                 @endforeach
                @else
                    <p>Wishlist Product not found.</p>
                @endif
            </tbody>
        </table>
    </div>
</div>