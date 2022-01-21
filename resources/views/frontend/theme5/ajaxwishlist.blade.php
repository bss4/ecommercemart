@if(count($wishlist)>0)

@foreach($wishlist as $id => $details)


<div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">

    <div class="product-inner pr">

        <div class="product-image pr oh lazyload">

           <!--  <span class="tc nt_labels pa pe_none cw"><span class="nt_label new">New</span></span> -->

            <a class="d-block" href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $details['product']['id'] }}">

                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ isset($details['product']['image'])?PRODUCT_URL.$details['product']['image']:'' }}"></div>

            </a>

            <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">

                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{isset($details['product']['image'])?PRODUCT_URL.$details['product']['image']:''}}"></div>

            </div>

            <div class="nt_add_w ts__03 pa ">

                <a href="#" class="cb chp ttip_nt tooltip_right wis_remove" onclick="return remove_to_wishlist(<?php echo $details['id'];?>)"><span class="tt_txt">Remove Wishlist</span><i class="facl facl-heart-o"></i></a>

            </div>

            <div class="hover_button op__0 tc pa flex column ts__03">

                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left single-product" href="#" data-product-id="{{$details['product']['id']}}" onclick="return quickview(<?php echo $details['product']['id'];?>)"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>

                <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left single-product" data-product-id="{{$details['product']['id']}}" onclick="return quickview(<?php echo $details['product']['id'];?>)"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>

            </div>

        </div>

        <div class="product-info mt__15">

            <h3 class="product-title pr fs__14 mg__0 fwm">

                <a class="cd chp" href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $details['product']['id'] }}">{{ isset($details['product']['name'])?$details['product']['name']:'' }}</a>

            </h3>

            <span class="price dib mb__5">₹{{$details['product']['price']}}</span>

        </div>

    </div>

</div>
@endforeach
@else
    <p>Wishlist Product not found.</p>
@endif