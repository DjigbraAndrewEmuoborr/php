@extends('layouts.master')

@section('title', 'Buy and Sell Bitcoin and over 150+ Crypto Assets Better')

@section('content')

<!-- Page-->

<div class="intro1 section-padding">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-6 col-lg-6 col-12">
                <div class="intro-content">
                    <h1 class="text-dark">Trade with <strong class="text-primary">Coinmakert</strong>. <br> Buy, Sell, Exchange and
                        Invest
                        Crypto Assets.
                    </h1>
                    <p>Fast and secure way to purchase or exchange 150+ cryptocurrencies</p>

                    <div class="intro-btn">
                        <a href="{{ route('register') }}" class="btn btn-primary shadow-sm">Get Started</a>
                        <a href="{{ route('analysis-window') }}" class="btn btn-outline-dark shadow-sm">Analyze Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-12">
                <div class="intro-form-exchange">
                    <form method="post" name="myform" class="currency_validate trade-form row g-3">
                        <div class="col-12">
                            <label class="form-label">Send</label>
                            <div class="input-group">
                                <select class="form-control" name="method">
                                    <option value="bank">USD</option>
                                    <option value="master">Euro</option>
                                </select>
                                <input type="text" name="currency_amount" class="form-control" placeholder="200.00 USD">
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Receive</label>
                            <div class="input-group">
                                <select class="form-control" name="method">
                                    <option value="bank">BTC</option>
                                    <option value="master">ETH</option>
                                </select>
                                <input type="text" name="currency_amount" class="form-control" placeholder="0.0214 BTC">
                            </div>
                        </div>

                        <p class="mb-0">1 USD ~ 0.000088 BTC <a href="#">Expected rate <br>No extra
                                fees</a></p>
                        <button type="button" class="btn btn-primary ">
                            Buy Now
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="getstart section-padding bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-title">
                    <h2>Get started in a few minutes</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="getstart-content">
                    <span><i class="bi bi-person"></i></span>
                    <h3>Create an account</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corporis.</p>
                    <a href="#">Explore <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="getstart-content">
                    <span><i class="bi bi-pencil-square"></i></span>
                    <h3>Link your bank account</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corporis.</p>
                    <a href="#">Explore <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="getstart-content">
                    <span><i class="bi bi-cash"></i></span>
                    <h3>Start buying & selling</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corporis.</p>
                    <a href="#">Explore <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

    

    <div class="portfolio section-padding">
    <div class="container">
        <div class="row py-lg-5 justify-content-center">
            <div class="col-xl-7">
                <div class="section-title text-center">
                    <h2 class="text-dark">Create your cryptocurrency portfolio today</h2>
                    <p>Coinmakert has a variety of features that make it the best place to start
                        trading</p>
                        <i class="bi-alarm"></i>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-4 col-lg-6">
                <div class="portfolio_list">
                    <div class="media">
                        <span class="port-icon"> <i class="bi bi-person-check"></i></span>
                        <div class="media-body">
                            <h4>Manage your portfolio</h4>
                            <p>Buy and sell popular digital currencies, keep track of them in the one
                                place.
                            </p>
                        </div>
                    </div>
                    <div class="media">
                        <span class="port-icon"> <i class="bi bi-bag-check"></i></span>
                        <div class="media-body">
                            <h4>Recurring buys</h4>
                            <p>Invest in cryptocurrency slowly over time by scheduling buys daily,
                                weekly,
                                or monthly.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="portfolio_img">
                    <img src="{{ asset("tendex/images/portfolio.jpg") }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="portfolio_list">
                    <div class="media">
                        <span class="port-icon"> <i class="bi bi-shield-check"></i></span>
                        <div class="media-body">
                            <h4>Vault protection</h4>
                            <p>For added security, store your funds in a vault with time delayed
                                withdrawals.
                            </p>
                        </div>
                    </div>
                    <div class="media">
                        <span class="port-icon"> <i class="bi bi-phone"></i></span>
                        <div class="media-body">
                            <h4>Mobile apps</h4>
                            <p>Stay on top of the markets with the Coinmakert app for <a href="#">Android</a>
                                or
                                <a href="#">iOS</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="trade-app section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center">
                    <h2>Trade. Anywhere</h2>
                    <p> All of our products are ready to go, easy to use and offer great value to any kind of
                        business
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card trade-app-content">
                    <div class="card-body">
                        <span><i class="bi bi-phone"></i></span>
                        <h4 class="card-title">Mobile</h4>
                        <p>All the power of Coinmakert's cryptocurrency exchange, in the palm of your hand. Download
                            the
                            Coinmakert mobile crypto trading app today</p>

                        <a href="#"> Know More </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card trade-app-content">
                    <div class="card-body">
                        <span><i class="bi bi-tv"></i></span>
                        <h4 class="card-title">Desktop</h4>
                        <p>Powerful crypto trading platform for those who mean business. The Coinmakert crypto
                            trading
                            experience, tailor-made for your Windows or MacOS device.</p>

                        <a href="#"> Know More </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card trade-app-content">
                    <div class="card-body">
                        <span><i class="bi bi-server"></i></span>
                        <h4 class="card-title">API</h4>
                        <p>The Coinmakert API is designed to provide an easy and efficient way to integrate your
                            trading
                            application into our platform.</p>

                        <a href="#"> Know More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="brand  bg-light section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="trusted-business pb-5 text-center">
                    <h3>Trusted by over  <strong>10.000 users</strong></h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <div class="trusted-logo">
                            <a href="#"><img class="img-fluid" src="{{ asset("tendex/images/brand/1.svg") }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="trusted-logo">
                            <a href="#"><img class="img-fluid" src="{{ asset("tendex/images/brand/2.svg") }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="trusted-logo">
                            <a href="#"><img class="img-fluid" src="{{ asset("tendex/images/brand/3.svg") }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="trusted-logo">
                            <a href="#"><img class="img-fluid" src="{{ asset("tendex/images/brand/4.svg") }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="trusted-logo">
                            <a href="#"><img class="img-fluid" src="{{ asset("tendex/images/brand/5.svg") }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="trusted-logo">
                            <a href="#"><img class="img-fluid" src="{{ asset("tendex/images/brand/5.svg") }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="testimonial section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title">
                    <h2>What our customer says</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="testimonial-content">
                    <div class="testimonial1 testimonial-carousel">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <div class="customer-img">
                                    <img class="img-fluid" src="{{ asset("tendex/images/testimonial/1.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="customer-review">
                                    <img class="img-fluid" src="{{ asset("tendex/images/brand/2.webp") }}" alt="">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi voluptas
                                        dignissimos similique quas molestiae doloribus recusandae voluptatem et
                                        repudiandae veritatis.</p>
                                    <div class="customer-info">
                                        <h6>Mr John Doe</h6>
                                        <p>CEO, Example Company</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <div class="customer-img">
                                    <img class="img-fluid" src="{{ asset("tendex/images/testimonial/2.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="customer-review">
                                    <img class="img-fluid" src="{{ asset("tendex/images/brand/3.webp") }}" alt="">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi voluptas
                                        dignissimos similique quas molestiae doloribus recusandae voluptatem et
                                        repudiandae veritatis.</p>
                                    <div class="customer-info">
                                        <h6>Mr Abraham</h6>
                                        <p>CEO, Example Company</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="promo section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-title text-center">
                    <h2>The most trusted cryptocurrency platform</h2>
                    <p> Here are a few reasons why you should choose Coinmakert
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="promo-content">
                    <div class="promo-content-img">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3>Secure storage </h3>
                    <p>We store the vast majority of the digital assets in secure offline storage.</p>
                    <a href="#">Explore <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="promo-content">
                    <div class="promo-content-img">
                        <i class="bi bi-x-diamond"></i>
                    </div>
                    <h3>Protected by insurance</h3>
                    <p>Cryptocurrency stored on our servers is covered by our insurance policy.</p>
                    <a href="#">Explore <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="promo-content">
                    <div class="promo-content-img">
                        <i class="bi bi-circle-half"></i>
                    </div>
                    <h3>Industry best practices</h3>
                    <p>Coinmakert supports a variety of the most popular digital currencies.</p>
                    <a href="#">Explore <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="appss section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-7 col-lg-6 col-md-6">
                <div class="appss-content">
                    <h2>The secure app to store crypto yourself</h2>
                    <ul>
                        <li><i class="la la-check"></i> All your digital assets in one place</li>
                        <li><i class="la la-check"></i> Use Decentralized Apps</li>
                        <li><i class="la la-check"></i> Pay friends, not addresses</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#" class="btn btn-primary">
                            <img src="{{ asset("tendex/images/android.svg") }}" alt="">
                        </a>
                        <a href="#" class="btn btn-primary">
                            <img src="{{ asset("tendex/images/apple.svg") }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="appss-img">
                    <img class="img-fluid" src="{{ asset("tendex/images/app.png") }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="blog bg-white section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center">
                    <h2>Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="blog-grid">
                    <div class="card">
                        <img class="img-fluid rounded " src="{{ asset("tendex/images/blog/1.jpeg") }}" alt="">
                        <div class="card-body">
                            <a href="blog-single.html">
                                <h4 class="card-title">Why does Litecoin need MimbleWimble?</h4>
                            </a>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="blog-grid">
                    <div class="card">
                        <img class="img-fluid rounded " src="{{ asset("tendex/images/blog/2.jpeg") }}" alt="">
                        <div class="card-body">
                            <a href="blog-single.html">
                                <h4 class="card-title">How to securely store  wallet seeds?</h4>
                            </a>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="blog-grid">
                    <div class="card">
                        <img class="img-fluid rounded " src="{{ asset("tendex/images/blog/3.jpeg") }}" alt="">
                        <div class="card-body">
                            <a href="blog-single.html">
                                <h4 class="card-title">Exclusive Interview With Of Litecoin</h4>
                            </a>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="get-touch section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title">
                    <h2>Get in touch. Stay in touch.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="get-touch-content">
                    <span><i class="bi bi-headset"></i></span>
                    <h4>24 / 7 Support</h4>
                    <p>Got a problem? Just get in touch. Our support team is available 24/7.
                    </p>

                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="get-touch-content">
                    <span><i class="bi bi-receipt"></i></span>
                    <h4>Coinmakert Blog</h4>
                    <p>News and updates from the world’s leading cryptocurrency exchange.
                    </p>

                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="get-touch-content">
                    <span><i class="bi bi-briefcase"></i></span>
                    <h4>Careers</h4>
                    <p>Help build the future of technology. Start your new career at Coinmakert.
                    </p>

                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="get-touch-content">
                    <span><i class="bi bi-people"></i></span>
                    <h4>Community</h4>
                    <p>Coinmakert is global. Join the discussion in our worldwide communities.
                    </p>

                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="get-touch-content">
                    <span><i class="bi bi-envelope"></i></span>
                    <h4>Community</h4>
                    <p>Coinmakert is global. Join the discussion in our worldwide communities.
                    </p>

                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="get-touch-content">
                    <span><i class="bi bi-chat-left-text"></i></span>
                    <h4>Community</h4>
                    <p>Coinmakert is global. Join the discussion in our worldwide communities.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
