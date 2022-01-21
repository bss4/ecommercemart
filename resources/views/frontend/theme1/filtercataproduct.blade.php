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
<div class="on_list_view_false products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default" id="productList">

<?php 
if(!empty($product_list))
{
?>
    @foreach($product_list as $product_val)

<div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1 col-lg-4">

    <div class="product-inner pr">

        <div class="product-image pr oh lazyload">

            <span class="tc nt_labels pa pe_none cw"><span class="nt_label new">New</span></span>

            <a class="d-block" href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}">

                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ PRODUCT_URL.$product_val->image}}"></div>

            </a>

            <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">

                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ PRODUCT_URL.$product_val->image}}"></div>

            </div>

            <div class="nt_add_w ts__03 pa ">

                <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>

            </div>

            <div class="hover_button op__0 tc pa flex column ts__03">

                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#" onclick="return quickview(<?php echo $product_val->id;?>)"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>

                <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left" onclick="return quickview(<?php echo $product_val->id;?>)"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>

            </div>


        </div>

        <div class="product-info mt__15">

            <h3 class="product-title pr fs__14 mg__0 fwm">

                <a class="cd chp" href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}">{{ $product_val->name}}</a>

            </h3>

            <span class="price dib mb__5">₹{{ $product_val->discount_price}}</span>
            <del class="price dib mb__5">₹{{ $product_val->price}}</del>

        </div>

    </div>

</div>
@endforeach
<?php } ?>
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