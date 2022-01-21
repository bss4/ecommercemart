function getCartData()
{
    var shopid = $("#app_id").val();
    var base_url = $("#base_url").val();
    var csrf_token_post = $("#csrf_token_post").val();
    $.ajax({
            //url: "{{ route('frontend.list_cart')}}",
            url: base_url+"/list-cart",
            type: 'POST',
            data: { _token:csrf_token_post,shopid:shopid},
            dataType: "html",       
            success: function(response)
            {
                
                $("#cart_add_item").html(response);
            },
             error: function(error){
             console.log("error", error);
            
            }
        });
}

getCartData();

function getcartpagedata()
{
    var shopid = $("#app_id").val();
    var base_url = $("#base_url").val();
    var csrf_token_post = $("#csrf_token_post").val();
    $.ajax({
            //url: "{{ route('frontend.list_cart')}}",
            url: base_url+"/list-cart-page",
            type: 'POST',
            data: { _token:csrf_token_post,shopid:shopid},
            dataType: "html",       
            success: function(response)
            {
                
                $("#cartlistdata").html(response);
            },
             error: function(error){
             console.log("error", error);
            
            }
        });
}

getcartpagedata();

function getwishlistpagedata()
{
    var shopid = $("#app_id").val();
    var base_url = $("#base_url").val();
    var csrf_token_post = $("#csrf_token_post").val();
    $.ajax({
            //url: "{{ route('frontend.list_cart')}}",
            url: base_url+"/list-wishlist-page",
            type: 'POST',
            data: { _token:csrf_token_post,shopid:shopid},
            dataType: "html",       
            success: function(response)
            {
                
                $("#wishlistdata").html(response);
            },
             error: function(error){
             console.log("error", error);
            
            }
        });
}

getwishlistpagedata();

function totalCartPrice(cart)
{

    var total = 0;
    if(cart.length>0)
    {
        for (var i=0; i < cart.length; i++) 
        {
           total = total+parseInt(cart[i].quantity)*parseInt(cart[i].price); 
            
        }
    }
    return total;
}


//add To cart start
function add_to_cart(e)
{
    
    var app_id = $("#app_id").val();
    var product_id = $(e).attr('data-id');
  
    var qty_cart_js = $('.qty_cart_js').val();
    var attribute0 = $('.attribute0.is-selected').data('escape');
    var attribute1 = $('.attribute1.is-selected').data('escape');
    var attribute2 = $('.attribute2.is-selected').data('escape');
    var attribute3 = $('.attribute3.is-selected').data('escape');
    var csrf_token_post = $("#csrf_token_post").val();
    var base_url = $("#base_url").val();
    $.ajax({
            
            url: base_url+"/add-to-cart",
            type: 'POST',
            data: { _token: csrf_token_post,
                    id: product_id,quantity:qty_cart_js,app_id:app_id,attribute1:attribute0,attribute2:attribute1,attribute3:attribute2,attribute4:attribute3},
            
            dataType: "json",       
            success: function(response)
            {

                swal("Successfully!", "Product added into cart successfully", "success");
                //let html = '';
                let cart = response.data;

                $(".cart_tot_price").html("₹"+totalCartPrice(cart));
                $(".cart_count").html(cart.length);
                getCartData();
                //location.reload();
            },
             error: function(error){
             console.log("Error:");
             console.log(error);
            }
        });
}

//add To cart end

//add To wishlist start
function add_to_wishlist(e)
{
    var app_id = $('#app_id').val();
    var product_id = $(e).attr('data-id');
    var csrf_token_post = $("#csrf_token_post").val();
    var base_url = $("#base_url").val();

    $.ajax({
            //url: "{{ route('frontend.addtowishlist')}}",
            url: base_url+"/add-to-wishlist",
            type: 'POST',
            data: { _token: csrf_token_post,
                    id: product_id,app_id:app_id },
            
            dataType: "json",       
            success: function(response)
            {
                
                //let html = '';
                let wishlist = response.data;
                if(wishlist!=0)
                {
                    swal("Successfully!", "Product added into wishlist successfully.", "success");
                    $(".wishlist_count").html(wishlist);
                    getwishlistpagedata();
                }else{
                    swal("Error!", "You can not add to wishlist.please login.", "error");
                }
                
               
            },
             error: function(error){
             console.log("Error:");
             console.log(error);
            }
        });
}

//remove wishlist data
function remove_to_wishlist(id)
{

    var app_id = $('#app_id').val();
    var csrf_token_post = $("#csrf_token_post").val();
    var base_url = $("#base_url").val();

    $.ajax({
        //url: "{{ route('frontend.removewishlist')}}",
        url: base_url+"/remove-from-wishlist",
        type: 'POST',
        data: { _token: csrf_token_post,
                id: id,app_id:app_id },

        success: function(response)
        {
            
            swal("Successfully!", "Product added into wishlist successfully.", "success");
            getwishlistpagedata();
            
        }
    });
}

//start edit cart
function edit_product_cart(product_id)
{
    
var qty = $('.qty_js_'+product_id).val();
var csrf_token_post = $("#csrf_token_post").val();
var base_url = $("#base_url").val();
$.ajax({
        //url: "{{ route('frontend.ajaxsingleproduct')}}",
        url: base_url+"/ajax-single-product-deatils",
        type: 'POST',
        data: { _token: csrf_token_post,
                id: product_id },

        success: function(response)
        {
            
            var json =response;
            
            if(json.productdata.type != 'simple')
            {

                $('.variation_attr').show();
                if(json.CatalogueAttributes.length>0)
                {
                    var variationhtml = '';
                    var i;
                    for(i=0; i < json.CatalogueAttributes.length; i++)
                    {
                       
                        var colorarr = json.CatalogueAttributes[i].attr_value.split(","); 

                        variationhtml += '<div class="swatch is-label kalles_swatch_js">';
                        variationhtml += '<h4 class="swatch__title">'+json.CatalogueAttributes[i].attr_name+':<span class="nt_name_current user_choose_js"></span></h4>';
                        variationhtml += '<ul class="swatches-select swatch__list_pr">';

                        variationhtml += '<li class="nt-swatch swatch_pr_item pr is-selected attribute'+i+'" data-escape="'+colorarr[0].trim()+'" onclick="return variationfilter(this);">';
                        variationhtml += '<span class="swatch__value_pr">'+colorarr[0]+'</span></li>';

                        var j;
                        for (j = 1; j < colorarr.length; j++) {

                        variationhtml += '<li class="nt-swatch swatch_pr_item pr attribute'+i+'" data-escape="'+colorarr[j].trim()+'" onclick="return variationfilter(this);">';
                        variationhtml += '<span class="swatch__value_pr">'+colorarr[j]+'</span></li>';

                        }
                        
                        variationhtml += '</ul>';
                        variationhtml += '</div>'; 
                       
                    }
                }

                $('.variation_attr').html(variationhtml);

            }else{

                $('.variation_attr').hide();

            }


            var redirect_url = base_url+"/"+json.productdata.seller.app_id+"/single-product-detail/"+json.productdata.id;
            var image = "{{ PRODUCT_URL}}"+json.productdata.image;
            $('#price_qv').html('<del>'+'₹'+json.productdata.price+'</del>'+'<ins>'+'₹'+json.productdata.discount_price+'</ins>');
            //$('.product_size').html(json.size);
            $('.product_title').html('<a href='+redirect_url+'>'+json.productdata.name+'</a>'+'<input type="hidden" id="productid" value='+json.productdata.id+'>');
            
            $('.product-desc').html('<p class="mg__0">'+json.productdata.description+'</p>');
            $('.sku-value').html(json.productdata.sku);
            //$('.quick-view-pro-details').html('<a href='+redirect_url+'>View full details</a>');
            $('.viewfulldetails').attr('href',redirect_url);
            $('#productimage').css('background-image','url('+image+')');
            $('.add_to_cart').attr('data-id', json.productdata.id);
            $('.add_to_wishlist').attr('data-id', json.productdata.id);
            $('#app_id').val(json.productdata.seller.app_id);
          
            //show quick view popup details end

            //show quick shop popup details start
            
            if(json.productdata.type != 'simple')
            {

                $('.variation_attr_quick_cart').show();
                $('.variation_attr_quick_cart').html(variationhtml);

            }else{

                $('.variation_attr_quick_cart').hide();

            }

            $('.quick-shop-product-name').html('<a href='+redirect_url+'>'+json.productdata.name+'</a>');
            $('.quick-shop-product-price').html('<del>'+'₹'+json.productdata.price+'</del>'+'<ins>'+'₹'+json.productdata.discount_price+'</ins>');
            $('.quick-shop-product-image').css('background-image','url('+image+')');
            $('.quick-shop-product-details').attr('href',redirect_url);

            //show quick shop popup details end
        },
         error: function(error){
         console.log("Error:");
         console.log(error);
        }
    });
}
//end edit cart

function quickview(product_id)
{

var csrf_token_post = $("#csrf_token_post").val();
var image_path_url = $("#image_path_url").val();
var base_url = $("#base_url").val();

$.ajax({
        //url: "{{ route('frontend.ajaxsingleproduct')}}",
        url: base_url+"/ajax-single-product-deatils",
        type: 'POST',
        data: { _token: csrf_token_post,
                id: product_id },

        success: function(response)
        {

            
            var json =response;
            
            if(json.productdata.type != 'simple')
            {

                $('.variation_attr').show();
                if(json.CatalogueAttributes.length>0)
                {
                    var variationhtml = '';
                    var i;
                    for(i=0; i < json.CatalogueAttributes.length; i++)
                    {
                       

                            var colorarr = json.CatalogueAttributes[i].attr_value.split(","); 

                            variationhtml += '<div class="swatch is-label kalles_swatch_js">';
                            variationhtml += '<h4 class="swatch__title">'+json.CatalogueAttributes[i].attr_name+':<span class="nt_name_current user_choose_js"></span></h4>';
                            variationhtml += '<ul class="swatches-select swatch__list_pr">';

                            variationhtml += '<li class="nt-swatch swatch_pr_item pr is-selected attribute'+i+'" data-escape="'+colorarr[0].trim()+'" onclick="return variationfilter(this);">';
                            variationhtml += '<span class="swatch__value_pr">'+colorarr[0]+'</span></li>';

                            var j;
                            for (j = 1; j < colorarr.length; j++) {

                            variationhtml += '<li class="nt-swatch swatch_pr_item pr attribute'+i+'" data-escape="'+colorarr[j].trim()+'" onclick="return variationfilter(this);">';
                            variationhtml += '<span class="swatch__value_pr">'+colorarr[j]+'</span></li>';

                            }
                            
                            variationhtml += '</ul>';
                            variationhtml += '</div>'; 
                     
                        
                    }
                }

                $('.variation_attr').html(variationhtml);

            }else{

                $('.variation_attr').hide();

            }


            var redirect_url = base_url+'/'+json.productdata.seller.app_id+"/single-product-detail/"+json.productdata.id;
            var image = image_path_url+json.productdata.image;
            $('#price_qv').html('<del>'+'₹'+json.productdata.price+'</del>'+'<ins>'+'₹'+json.productdata.discount_price+'</ins>');
            //$('.product_size').html(json.size);
            $('.product_title').html('<a href='+redirect_url+'>'+json.productdata.name+'</a>'+'<input type="hidden" id="productid" value='+json.productdata.id+'>');
            
            $('.product-desc').html('<p class="mg__0">'+json.productdata.description+'</p>');
            $('.sku-value').html(json.productdata.sku);
            //$('.quick-view-pro-details').html('<a href='+redirect_url+'>View full details</a>');
            $('.viewfulldetails').attr('href',redirect_url);
            $('#productimage').css('background-image','url('+image+')');
            
            $('.add_to_cart').attr('data-id', json.productdata.id);
            $('.add_to_wishlist').attr('data-id', json.productdata.id);
            $('#app_id').val(json.productdata.seller.app_id);
          
            //show quick view popup details end

            //show quick shop popup details start
            
            if(json.productdata.type != 'simple')
            {

                $('.variation_attr_quick_cart').show();
                $('.variation_attr_quick_cart').html(variationhtml);

            }else{

                $('.variation_attr_quick_cart').hide();

            }

            $('.quick-shop-product-name').html('<a href='+redirect_url+'>'+json.productdata.name+'</a>');
            $('.quick-shop-product-price').html('<del>'+'₹'+json.productdata.price+'</del>'+'<ins>'+'₹'+json.productdata.discount_price+'</ins>');
            $('.quick-shop-product-image').css('background-image','url('+image+')');
            $('.quick-shop-product-details').attr('href',redirect_url);

            //show quick shop popup details end

            //theme 2
            $('.productimage_theme2').attr('src',image);
        },
         error: function(error){
         console.log("Error:");
         console.log(error);
        }
    });
}

//removecart from checkout page
function removeCart(product_id)
{
    var app_id = $("#app_id").val();
    var csrf_token_post = $("#csrf_token_post").val();
    var base_url = $("#base_url").val();

    $.ajax({
        url: base_url+"/remove-from-cart",
        type: 'POST',
        data: { _token: csrf_token_post,
                product_id: product_id,app_id:app_id },

        success: function(response)
        {
            swal("Product Removed!", "Product remove from cart successfully.", "success");
            //location.reload();
            getCartData();
            getcartpagedata();
        }
    });
}

function remove_to_cart(product_id)
{
    var app_id = $("#app_id").val();
    var csrf_token_post = $("#csrf_token_post").val();
    var base_url = $("#base_url").val();

    $.ajax({
        url: base_url+"/remove-from-cart",
        type: 'POST',
        data: { _token: csrf_token_post,
                product_id: product_id,app_id:app_id },

        success: function(response)
        {
            swal("Product Removed!", "Product remove from cart successfully.", "success");  
            if(response && response!='')
            {
                let cart = response.data;
               
                getCartData();
                getcartpagedata();
                $(".cart_tot_price").html("₹"+totalCartPrice(cart));
                $(".cart_count").html(cart.length);


            }else{
                
                getcartpagedata();
                $("#cart_add_item").html('No Cart data found in cartlist.!');
                $(".cart_tot_price").html(0);
                $(".cart_count").html(0);
            }
        }
    });
}

$(document).on('submit','#update_cart_form',function(e) {
    
    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var base_url = $("#base_url").val();
    $.ajax({
           type: "POST",
           url: base_url+"/update-cart",
           data: form.serialize(), // serializes the form's elements.
           success: function(response)
           {

               if(response.status==200)
               {
                 swal("Cart Updated!", "Cart updateded successfully.", "success");
                
               }else
               {
                swal("Cart does not Updated!", response.data, "error");
               }
               getcartpagedata();
              // location.reload();
            
           }
         });

});


$(document).on("click", ".icon_cart", function(){
    
var shopid = $("#app_id").val();
var csrf_token_post = $("#csrf_token_post").val();
var base_url = $("#base_url").val();

    $.ajax({
        url: base_url+"/list-cart",
        type: 'POST',
        data: { _token:csrf_token_post,shopid:shopid},
        success: function(response)
        {
            if(response)
            {
                let listCart = response.data;
                getCartData();
                
            }else{
                $("#cart_add_item").html('Cart is empty!');
                $(".cart_tot_price").html(0);
                $(".cart_count").html(0);
            }
        },
         error: function(error){
         console.log("error", error);
        }
    });
    
});
//product fileter

function filterSearch() {

    var minimum_price = $('#hidden_minimum_price').val();
    var maximum_price = $('#hidden_maximum_price').val();
    var size = getFilterData('size');
    var color = getFilterData('color');
    var price = getFilterData('price');
    var currentpageurl = $("#currentpageurl").val();
    var catalogueid = $("#catalogueid").val();
    var app_id = $("#app_id").val();
    var csrf_token_post = $("#csrf_token_post").val();
    var base_url = $("#base_url").val();
   
    $.ajax({
            url: base_url+"/catalogueproductlist",
            type: 'POST',
            data: { _token:csrf_token_post,minimum_price:minimum_price,maximum_price:maximum_price,color:color,size:size,catalogueid:catalogueid,app_id:app_id},
            //dataType: "json",       
            success: function(response)
            {
                
                //history.pushState(null, null,currentpageurl);
                $(".filter-product").html(response);
            },
             error: function(error){
             console.log("error", error);
            
            }
        });
}

function getFilterData(className) {
    var filter = [];
    $('.'+className+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}

$(document).ready(function(){
    filterSearch(); 
    getcartpagedata();
    getwishlistpagedata();
    $('.productDetail').click(function(){

        filterSearch();
    }); 
    
});

$('#price_range').slider({
        range:true,
        min:0,
        max:10000,
        values:[0, 10000],
        step:10,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filterSearch();
        }
});

function variationfilter(event)
{
    
    var attr = $(event).data('escape');
    var classdata = $(event).attr('class');
    var classname = classdata.replace(/\s+/g,'.');
    $('.'+classname).removeClass('is-selected');
    $(event).addClass('is-selected');

    var attribute0 = $('.attribute0.is-selected').data('escape');
    var attribute1 = $('.attribute1.is-selected').data('escape');
    var attribute2 = $('.attribute2.is-selected').data('escape');
    var attribute3 = $('.attribute3.is-selected').data('escape');

    var productid = $("#productid").val();
    var csrf_token_post = $("#csrf_token_post").val();
    var image_path_url = $("#image_path_url").val();
    var base_url = $("#base_url").val();

    $.ajax({
            url: base_url+"/changeproduct",
            type: 'POST',
            data: { _token: csrf_token_post,productid:productid,attribute1:attribute0,attribute2:attribute1,attribute3:attribute2,attribute4:attribute3},
            //dataType: "json",       
            success: function(response)
            {
                
                var image = image_path_url+response.data.image;
                $(".price_range").html("<del>₹"+response.data.price+"</del><ins>₹"+response.data.discount_price+'</ins>');
                $('#product-img').css('background-image','url('+image+')');
                $('#product-img').attr("data-src",image);
                $('#product-img').attr("data-bgset",image);
               // $('.add_to_cart').attr("data-id",response.data.id);
                $('#productimage').css('background-image','url('+image+')');
                $('.quick-shop-product-image').css('background-image','url('+image+')');
                
            },
             error: function(error){
             console.log("error", error);
            
            }
    });
}

$(document).on('click','#apply_coupon_code',function(){

   var couponcode = $('#couponcode').val();
   var currentUser = $('#currentUser').val();
   var app_id = $('#app_id').val();
   var csrf_token_post = $("#csrf_token_post").val();
   var base_url = $("#base_url").val();
   if(currentUser)
   {
        $.ajax({
            url: base_url+"/apply-coupencode",
            type: 'POST',
            data: { _token: csrf_token_post,couponcode:couponcode,app_id:app_id},
            //dataType: "json",       
            success: function(response)
            {
                if(response.status=="200")
                {
                    swal("Successfully!",response.data, "success");
                  
                }else{

                    swal("Error!",response.data, "error");
                      
                }
                getcartpagedata();

            },
             error: function(error){

             console.log("error", error);
            
            }
        });

   }else
   {
     swal("Error!", "You can not apply coupon code.Please login!", "error");
   }

});

$(document).on('click','.remove_coupon',function(){

   var app_id = $('#app_id').val();
   var csrf_token_post = $("#csrf_token_post").val();
   var base_url = $("#base_url").val();
   
    $.ajax({
        url: base_url+"/remove-coupencode",
        type: 'POST',
        data: { _token: csrf_token_post,app_id:app_id},
        //dataType: "json",       
        success: function(response)
        {
            if(response.status=="200")
            {
                swal("Successfully!", response.data, "success");
              
            }else{

                swal("Error!","Something went wrong!", "error");
                  
            }
            getcartpagedata();

        },
         error: function(error){

         console.log("error", error);
        
        }
    });

});
