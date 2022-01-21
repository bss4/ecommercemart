 <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Add To Cart</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($wishlist)>0)
                                         @foreach($wishlist as $id => $details)
                                        <tr>
                                            <td class="cart-product-remove" onclick="return remove_to_wishlist(<?php echo $details['id'];?>);">x</td>

                                            <td class="product-thumbnail">
                                                <a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $details['product']['id'] }}"><img class="img-responsive ml-15px" src="{{ isset($details['product']['image'])?PRODUCT_URL.$details['product']['image']:''}}" alt="" /></a>
                                            </td>
                                            <td class="product-name"><a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $details['product']['id'] }}">{{ isset($details['product']['name'])?$details['product']['name']:''}}</a></td>
                                            <td class="product-price-cart"><span class="amount">₹{{$details['product']['price']}}</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box qty_pr_js " type="text" name="qtybutton" value="1" />
                                                </div>
                                            </td>
                                            <td class="product-wishlist-cart">
                                                <a href="#" onclick="return add_to_cart(this);" data-id="{{$details['product']['id'] }}">Add to Cart</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p>Wishlist Product not found.</p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>