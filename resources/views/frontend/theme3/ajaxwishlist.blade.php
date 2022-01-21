<div class="table-content table-responsive wishlist-table-content">
<table class="table mb-0">
<thead>
    <tr class="border">
        <th scope="col" class="py-3 border-bottom-0 font-weight-medium"></th>
        <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Prouct</th>
        <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Price</th>
        <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Stock Staus</th>
        <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Actions</th>
    </tr>
</thead>
<tbody>
    @if(count($wishlist)>0)
     @foreach($wishlist as $id => $details)
    <tr class="border">
        <td class="cart-product-remove" onclick="return remove_to_wishlist(<?php echo $details['id'];?>);">x</td>
        <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">
            <div class="d-flex align-items-center">
                <a class="d-block wishlist-img" href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $details['product']['id'] }}">
                <img src="{{ isset($details['product']['image'])?PRODUCT_URL.$details['product']['image']:''}}" alt="Image-Description">
                </a>
                <div class="ml-xl-4">
                    <div class="font-weight-normal">
                        <a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $details['product']['id'] }}">{{ isset($details['product']['name'])?$details['product']['name']:''}}</a>
                    </div>
                   
                </div>
            </div>
        </th>

        <td class="align-middle py-5">₹{{$details['product']['price']}}</td>
        <td class="align-middle py-5">In Stock</td>
        <td class="align-middle py-5">
            <a href="#" class="product__add-to-cart" onclick="return add_to_cart(this);" data-id="{{$details['product']['id'] }}">Add to Cart</a>
        </td>
    </tr>
    @endforeach
    @else
        <tr class="border"><td>Wishlist Product not found.</td></tr>
    @endif
</tbody>
</table>
</div>