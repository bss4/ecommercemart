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
<div class="tab-content">
<div class="tab-pane fade active show" id="liton_product_grid">
    <div class="ltn__product-tab-content-inner ltn__product-grid-view">

        <div class="row" id="productList"> 
<?php 
if(!empty($product_list))
{
?>

@foreach($product_list as $product_val)

<div class="col-xl-3 col-sm-6 col-6">
    <div class="ltn__product-item ltn__product-item-3 text-center">
        <div class="product-img">
            <a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}"><img src="{{ PRODUCT_URL.$product_val->image}}" alt="#"></a>
            <div class="product-badge">
                <ul>
                    <li class="sale-badge">New</li>
                </ul>
            </div>
            <div class="product-hover-action">
                <ul>
                    <li>
                        <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal" onclick="return quickview(<?php echo $product_val->id;?>)">
                            <i class="far fa-eye"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Add to Cart" onclick="return add_to_cart(this);" data-id="{{ $product_val->id}}">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="product-info">
            <div class="product-ratting">
                <ul>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                    <li><a href="#"><i class="far fa-star"></i></a></li>
                </ul>
            </div>
            <h2 class="product-title"><a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}">{{ $product_val->name}}</a></h2>
            <h2 class="product-title"><a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}">{{ $product_val->unit }}</a></h2>
            <div class="product-price">
                <span>₹{{ $product_val->discount_price}}</span>
                <del>₹{{ $product_val->price}}</del>
            </div>
        </div>
    </div>
</div>
@endforeach
<?php } ?>

        </div>
    </div>
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
   
$('.single-product').click(function () {
       
var product_id = $(this).data('product-id');

var qty = $('.qty_js_'+product_id).val();

$.ajax({
        url: "{{ route('frontend.ajaxsingleproduct')}}",
        type: 'POST',
        data: { _token: "{{ csrf_token() }}",
                id: product_id },

        success: function(response)
        {
            var json = $.parseJSON(response);

            //loop for color and size
            if(json.color)
            {
               var colorarr = json.color.split(","); 
           }else{
            var colorarr =''; 
           }
            
            
            var colorhtml = '';
            

            colorhtml += '<li class="ttip_nt tooltip_top_right nt-swatch swatch_pr_item is-selected" data-escape="'+colorarr[0]+'"><span class="tt_txt">'+colorarr[0]+'</span><span class="swatch__value_pr pr bg_color_'+colorarr[0]+'"></span></li>';

            var i;
            for (i = 1; i < colorarr.length; i++) {
               
               colorhtml += '<li class="ttip_nt tooltip_top_right nt-swatch swatch_pr_item" data-escape="'+colorarr[i]+'"><span class="tt_txt">'+colorarr[i]+'</span><span class="swatch__value_pr pr bg_color_'+colorarr[i]+'"></span></li>';
            }

            $('.product-color').html(colorhtml);
            $('.current-color').html(colorarr[0]);

            if(json.color)
            {
               var sizearr = json.size.split(","); 
            }else{
                var sizearr =''; 
            }
            
            var sizehtml = '';
            sizehtml += '<li class="nt-swatch swatch_pr_item pr bg_css_xs is-selected" data-escape="'+sizearr[0]+'"><span class="swatch__value_pr">'+sizearr[0]+'</span></li>';
            var j;
            for (j = 1; j < sizearr.length; j++) {
                sizehtml +='<li class="nt-swatch swatch_pr_item pr bg_css_xs" data-escape="'+sizearr[j]+'"><span class="swatch__value_pr">'+sizearr[j]+'</span></li>';
            }
            $('.product-size').html(sizehtml);
            $('.current-size').html(sizearr[0]);
            //show quick view popup details start
            
            var redirect_url = "{{ url('/').'/'}}"+json.seller.app_id+"/single-product-detail/"+json.id;
            var image = "{{ PRODUCT_URL}}"+json.image;
            $('#price_qv').html('<del>'+'₹'+json.price+'</del>'+'<ins>'+'₹'+json.discount_price+'</ins>');
            $('.product_size').html(json.size);
            $('.product_title').html('<a href='+redirect_url+'>'+json.name+'</a>');
            $('.product-desc').html('<p class="mg__0">'+json.description+'</p>');
            $('.sku-value').html(json.sku);
            $('.quick-view-pro-details').html('<a href='+redirect_url+'>View full details</a>');
            $('#productimage').css('background-image','url('+image+')');
            $('.add_to_cart').attr('data-id', json.id);
            $('.add_to_wishlist').attr('data-id', json.id);
            $('#app_id').val(json.seller.app_id);
          
            //show quick view popup details end

            //show quick shop popup details start
            
            $('.quick-shop-product-name').html('<a href='+redirect_url+'>'+json.name+'</a>');
            $('.quick-shop-product-price').html('<del>'+'₹'+json.price+'</del>'+'<ins>'+'₹'+json.discount_price+'</ins>');
            $('.quick-shop-product-image').css('background-image','url('+image+')');
            $('.quick-shop-product-details').attr('href',redirect_url);

            //show quick shop popup details end
        },
         error: function(error){
         console.log("Error:");
         console.log(error);
        }
    });
});
</script>