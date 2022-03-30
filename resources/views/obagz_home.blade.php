    @extends('layouts.with-header')

    @section('title', "Obagz-Store")

    @section('content')
        {{-- marquee --}}
        <section class="o_marquee">
            <div class="m_container">
                <div class="marquee-sibling"> Latest </div>
                <div class="marquee">
                <ul class="marquee-content-items">
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi exercitationem illo odit rem ipsa porro 
                        necessitatibus omnis earum blanditiis sit, quod quas similique veniam debitis alias maiores aliquid autem repudiandae.</li>
                </ul>
                </div>
            </div>
        </section>

        {{-- menu, slide, ad --}}
        <section>
            <div class="row sec_m_s_ad">
                <div class="menu_bar">
                    <menu>
                        <ul>
                            <li><a href=""><i class="bi bi-egg"></i>Food</a></li>
                            <li><a href=""><i class="bi bi-file-medical"></i>Hygiene</a></li>
                            <li><a href=""><i class="bi bi-house"></i>Home</a></li>
                            <li><a href=""><i class="bi bi-trash2"></i>Nutrition</a></li>
                            <li><a href=""><i class="bi bi-sunset"></i>Kitchen</a></li>
                            <li><a href=""><i class="bi bi-phone"></i>Phones</a></li>
                            <li><a href=""><i class="bi bi-headset"></i>Accessories</a></li>
                        </ul>
                    </menu>
                </div>
                <div class="slider_container" style="padding-inline: 0px;">
                    <div class="slider">
                        <div class="slides">
                            <div class="slide">
                                <img src="{{asset('obagz-images/1.jpg')}}" alt="Obagz">
                            </div>
                            <div class="slide">
                                <img src="{{asset('obagz-images/2.jpg')}}" alt="Obagz">
                            </div>
                            <div class="slide">
                                <img src="{{asset('obagz-images/3.jpg')}}" alt="Obagz">
                            </div>
                            <div class="slide">
                                <img src="{{asset('obagz-images/4.jpg')}}" alt="Obagz">
                            </div>
                            <div class="slide">
                                <img src="{{asset('obagz-images/5.jpg')}}" alt="Obagz">
                            </div>
                        </div>
                        <div class="indicator">
                            <div class="ind_details" onmouseover="currentslide(1)"><span>get your Producs</span></div>
                            <div class="ind_details" onmouseover="currentslide(2)"><span>get your Producs</span></div>
                            <div class="ind_details" onmouseover="currentslide(3)"><span>get your Producs</span></div>
                            <div class="ind_details" onmouseover="currentslide(4)"><span>get your Producs</span></div>
                            <div class="ind_details" onmouseover="currentslide(5)"><span>get your Producs</span></div>
                        </div>
                    </div>
                </div>
                <div class="side_ad_con">
                    <div class="row side_ad_each">
                        <div class="o_side_ad flex">
                        <a href=""><img src="{{asset('obagz-images/ad1.jpg')}}" alt="Obagz"></a> 
                        </div>
                    </div>
                    <div class="row side_ad_each">
                        <div class="o_side_ad flex">
                            <a href=""><img src="{{asset('obagz-images/ad2.jpg')}}" alt="Obagz"></a> 
                        </div>
                    </div>
                    <div class="row side_ad_each">
                        <div class="o_side_ad flex">
                            <a href=""><img src="{{asset('obagz-images/ad2.jpg')}}" alt="Obagz"></a> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- obagz options --}}
        <section class="obagz_options">
            <div class="o_options">
                <div class="o_options_items">
                    <a href="">
                        <div class="item_img">
                            <img src="{{asset('obagz-images/ObagzPay.png')}}" alt="ObagzPay">
                        </div>
                        <div class="item_text">
                            <span>ObagzMall</span>
                        </div>
                    </a>
                </div>
                <div class="o_options_items">
                    <a href="">
                        <div class="item_img">
                            <img src="{{asset('obagz-images/ObagzPay.png')}}" alt="ObagzPay">
                        </div>
                        <div class="item_text">
                            <span>ObagzPay</span>
                        </div>
                    </a>
                </div>
                <div class="o_options_items">
                    <a href="">
                        <div class="item_img">
                            <img src="{{asset('obagz-images/ObagzPay.png')}}" alt="ObagzPay">
                        </div>
                        <div class="item_text">
                            <span>Obagz Prime Tours</span>
                        </div>
                    </a>
                </div>
                <div class="o_options_items">
                    <a href="">
                        <div class="item_img">
                            <img src="{{asset('obagz-images/ObagzPay.png')}}" alt="ObagzPay">
                        </div>
                        <div class="item_text">
                            Hub Station
                        </div>
                    </a>
                </div>
                <div class="o_options_items">
                    <a href="">
                        <div class="item_img">
                            <img src="{{asset('obagz-images/ObagzPay.png')}}" alt="ObagzPay">
                        </div>
                        <div class="item_text">
                            5k Stores
                        </div>
                    </a>
                </div>
                <div class="o_options_items">
                    <a href="">
                        <div class="item_img">
                            <img src="{{asset('obagz-images/ObagzPay.png')}}" alt="ObagzPay">
                        </div>
                        <div class="item_text">
                            <span>Help Desk</span>
                        </div>
                    </a>
                </div>
                <div class="o_options_items">
                    <a href="">
                        <div class="item_img">
                            <img src="{{asset('obagz-images/ObagzPay.png')}}" alt="ObagzPay">
                        </div>
                        <div class="item_text">
                            <span>Cars/Properties</span>
                        </div>
                    </a>
                </div>
                <div class="o_options_items">
                    <a href="">
                        <div class="item_img">
                            <img src="{{asset('obagz-images/ObagzPay.png')}}" alt="ObagzPay">
                        </div>
                        <div class="item_text">
                            <span>Ship for me</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        
        {{-- first ad --}}
        <section>
            <div class="ad_container"">
                <div class="ad_each">
                <a href="">
                    <img src="{{asset('obagz-images/fad1.jpg')}}" alt="ad">
                </a>
                </div>
                <div class="ad_each">
                    <a href="">
                        <img src="{{asset('obagz-images/fad2.jpg')}}" alt="ad">
                    </a>
                </div>
                <div class="ad_each">
                    <a href="">
                        <img src="{{asset('obagz-images/fad1.jpg')}}" alt="ad">
                    </a>
                </div>
            </div>
        </section>

        {{-- viewers choice 1 --}}
        <section>
            <div class="product_class">
                <div class="pc_title">
                    <p>Your Gadgets Store</p>
                </div>
                <div class="pc_products">
                    <div class="u-s-p-b-60">
    
                        <!--====== Section Content ======-->
                        <div class="section__content">
                            <div class="container">
                                <div>
                                    <div class="owl-carousel product-slider owl-loaded owl-drag" data-item="4">
            
                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-277px, 0px, 0px); transition: all 1.5s ease 0s; width: 1665px;"><div class="owl-item" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro1.jpg')}}" alt=""></a>
                                                    
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Nikon DSLR 4K Camera</a></span>
                                                    <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                        <span class="product-o__review">(0)</span></div>
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro2.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Nikon DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro3.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Sony DSLR 4K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro4.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Sony DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro5.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Canon DSLR 4K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro6.jpg')}}" alt="ketem"></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Canon DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div></div></div><div class="owl-nav"><div class="p-prev"><i class="bi bi-arrow-left"></i></div><div class="p-next"><i class="bi bi-arrow-right"></i></div></div><div class="owl-dots disabled"></div></div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Section Content ======-->
                    </div>
                </div>
                <div class="pc_vm">
                    <a>View More >>></a>
                </div>
            </div>
        </section>

        {{-- second ad --}}
        <section>
            <div class="ad_container"">
                <div class="ad_each">
                <a href="">
                    <img src="{{asset('obagz-images/fad1.jpg')}}" alt="ad">
                </a>
                </div>
                <div class="ad_each">
                    <a href="">
                        <img src="{{asset('obagz-images/fad2.jpg')}}" alt="ad">
                    </a>
                </div>
                <div class="ad_each">
                    <a href="">
                        <img src="{{asset('obagz-images/fad1.jpg')}}" alt="ad">
                    </a>
                </div>
            </div>
        </section>

        {{-- viewers choice 2 --}}
        <section>
            <div class="product_class">
                <div class="pc_title">
                    <p>Your Gadgets Store</p>
                </div>
                <div class="pc_products">
                    <div class="u-s-p-b-60">
    
                        <!--====== Section Content ======-->
                        <div class="section__content">
                            <div class="container">
                                <div>
                                    <div class="owl-carousel product-slider owl-loaded owl-drag" data-item="4">
            
                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-277px, 0px, 0px); transition: all 1.5s ease 0s; width: 1665px;"><div class="owl-item" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro1.jpg')}}" alt=""></a>
                                                    
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Nikon DSLR 4K Camera</a></span>
                                                    <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                        <span class="product-o__review">(0)</span></div>
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro2.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Nikon DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro3.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Sony DSLR 4K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro4.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Sony DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro5.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Canon DSLR 4K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro6.jpg')}}" alt="ketem"></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Canon DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div></div></div><div class="owl-nav"><div class="p-prev"><i class="bi bi-arrow-left"></i></i></div><div class="p-next"><i class="bi bi-arrow-right"></i></div></div><div class="owl-dots disabled"></div></div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Section Content ======-->
                    </div>
                </div>
                <div class="pc_vm">
                    <a>View More >>></a>
                </div>
            </div>
        </section>

        {{-- viewers choice 3 --}}
        <section>
            <div class="product_class">
                <div class="pc_title">
                    <p>Your Gadgets Store</p>
                </div>
                <div class="pc_products">
                    <div class="u-s-p-b-60">
    
                        <!--====== Section Content ======-->
                        <div class="section__content">
                            <div class="container">
                                <div>
                                    <div class="owl-carousel product-slider owl-loaded owl-drag" data-item="4">
            
                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-277px, 0px, 0px); transition: all 1.5s ease 0s; width: 1665px;"><div class="owl-item" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro1.jpg')}}" alt=""></a>
                                                    
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Nikon DSLR 4K Camera</a></span>
                                                    <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                        <span class="product-o__review">(0)</span></div>
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro2.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Nikon DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro3.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Sony DSLR 4K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro4.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Sony DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro5.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Canon DSLR 4K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro6.jpg')}}" alt="ketem"></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Canon DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div></div></div><div class="owl-nav"><div class="p-prev"><i class="bi bi-arrow-left"></i></div><div class="p-next"><i class="bi bi-arrow-right"></i></div></div><div class="owl-dots disabled"></div></div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Section Content ======-->
                    </div>
                </div>
                <div class="pc_vm">
                    <a>View More >>></a>
                </div>
            </div>
        </section>

        {{-- viewers choice 4 --}}
        <section>
            <div class="product_class">
                <div class="pc_title">
                    <p>Your Gadgets Store</p>
                </div>
                <div class="pc_products">
                    <div class="u-s-p-b-60">
    
                        <!--====== Section Content ======-->
                        <div class="section__content">
                            <div class="container">
                                <div>
                                    <div class="owl-carousel product-slider owl-loaded owl-drag" data-item="4">
            
                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-277px, 0px, 0px); transition: all 1.5s ease 0s; width: 1665px;"><div class="owl-item" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro1.jpg')}}" alt=""></a>
                                                    
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Nikon DSLR 4K Camera</a></span>
                                                    <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                        <span class="product-o__review">(0)</span></div>
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro2.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Nikon DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro3.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Sony DSLR 4K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro4.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Sony DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro5.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Canon DSLR 4K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro6.jpg')}}" alt="ketem"></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Canon DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div></div></div><div class="owl-nav"><div class="p-prev"><i class="bi bi-arrow-left"></i></div><div class="p-next"><i class="bi bi-arrow-right"></i></div></div><div class="owl-dots disabled"></div></div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Section Content ======-->
                    </div>
                </div>
                <div class="pc_vm">
                    <a>View More >>></a>
                </div>
            </div>
        </section>

        {{-- viewers choice 5 --}}
        <section>
            <div class="product_class">
                <div class="pc_title">
                    <p>Your Gadgets Store</p>
                </div>
                <div class="pc_products">
                    <div class="u-s-p-b-60">
    
                        <!--====== Section Content ======-->
                        <div class="section__content">
                            <div class="container">
                                <div>
                                    <div class="owl-carousel product-slider owl-loaded owl-drag" data-item="4">
            
                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-277px, 0px, 0px); transition: all 1.5s ease 0s; width: 1665px;"><div class="owl-item" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro1.jpg')}}" alt=""></a>
                                                    
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Nikon DSLR 4K Camera</a></span>
                                                    <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                        <span class="product-o__review">(0)</span></div>
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro2.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Nikon DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro3.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Sony DSLR 4K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro4.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Sony DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro5.jpg')}}" alt=""></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Canon DSLR 4K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 277.5px;"><div class="u-s-m-b-30">
                                            <div class="product-o product-o--hover-on">
                                                <div class="product-o__wrap">
        
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        
                                                        <img class="aspect__img" src="{{asset('obagz-images/pro6.jpg')}}" alt="ketem"></a>
                                                </div>
        
                                                <span class="product-o__category">
        
                                                    <a href="shop-side-version-2.html">Electronics</a></span>
        
                                                <span class="product-o__name">
        
                                                    <a href="product-detail.html">Canon DSLR 2K Camera</a></span>
                                                <div class="product-o__rating gl-rating-style"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
        
                                                    <span class="product-o__review">(0)</span></div>
        
                                                <span class="product-o__price">$125.00
        
                                                </span>
                                            </div>
                                        </div></div></div></div><div class="owl-nav"><div class="p-prev"><i class="bi bi-arrow-left"></i></div><div class="p-next"><i class="bi bi-arrow-right"></i></div></div><div class="owl-dots disabled"></div></div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Section Content ======-->
                    </div>
                </div>
                <div class="pc_vm">
                    <a>View More >>></a>
                </div>
            </div>
        </section>
    @endsection

    