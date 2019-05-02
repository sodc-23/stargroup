@extends('layouts.home')

@section('content')
<section class="video-panel">
    <div class="video-wrapper">
        <video preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
            <source src="{{asset('video/home-intro.mp4')}}" type="video/mp4">
        </video>
    </div>
</section>

<section class="intro-panel">        
    <div class="container">
        <h1 class="text-center text-shadow">
            Web Development And World-Class Team
        </h1>
    </div>
    <div class="container">
        <div class="motto">
            <p>
                People With Passion Can Change The World
            </p>
            <img src="{{asset('img/quote_purple.svg')}}" />
            <div class="avatar">
                <img src="{{asset('img/steve_jobs.jpg')}}" />
            </div>
        </div>
    </div>
<svg class="wave-bottom" viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
            </g>
            <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
            </g>
            </g>
        </svg>
</section>
<section class="wo-can-panel section-panel ">
    
    <div class="column text-center">
            <img src="{{asset('img/service.png')}}" class="angel" alt="Angel Image" longdesc="">
        </div>

        <div class="column"> 
            <div class="losung">
                <div class="we-can"><img src="{{asset('img/we-can.png')}}" alt="We Can Pic" longdesc=""></div>
                <div class="active">web applications</div>
                <div>// mobile applications</div>
            </div>           
        </div>

        <div class="column">
            <div class="circle" >
                <div class="circle-inner"></div>
                <object data="{{asset('img/circle.svg')}}" type="" longdesc=""></object>
                <img src="{{asset('img/pc.png')}}" alt="" class="circle_img-devices circle_img-devices-pc" >
                <img src="{{asset('img/phone.png')}}" alt="" class="circle_img-devices" longdesc="">
            </div>
        </div>
</section>

<section class="tech-panel section-panel">
    <div class="container">
        <h2 class="text-center">Technologies We Specialize In</h2>
        <div class="form-group"></div>
        
        <div class="row">
            <div class="col-md-3 col-6">
                <img src="{{asset('img/tech/vue.png')}}">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{asset('img/tech/react.png')}}">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{asset('img/tech/angular.png')}}">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{asset('img/tech/jquery.png')}}">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 col-6">
                <img src="{{asset('img/tech/wordpress.png')}}">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{asset('img/tech/magento.png')}}">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{asset('img/tech/woocommerce.png')}}">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{asset('img/tech/shopify.png')}}">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 col-6">
                <img src="{{asset('img/tech/php7.png')}}">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{asset('img/tech/mysql.png')}}">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{asset('img/tech/laravel.png')}}">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{asset('img/tech/node.png')}}">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 col-6">
                <img src="{{asset('img/tech/andorid.png')}}">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{asset('img/tech/apple.png')}}">
            </div>
        </div>
            
    </div>
    
</section>


<section class="portfolio-panel section-panel">
    <h2 class="text-center">100+ COMPLETED PROJECTS IN 10+ COUNTIRES</h2>
    <div class="portfolio-wrapper">
        <div class="item">
            <img src="{{asset('img/portfolio/melostock.png')}}">
        </div>
        <div class="item">
            <img src="{{asset('img/portfolio/netflix.png')}}">
        </div>
        <div class="item">
            <img src="{{asset('img/portfolio/adroll.png')}}">
        </div>
        <div class="item">
            <img src="{{asset('img/portfolio/ecommerce.png')}}">
        </div>
         <div class="item">
            <img src="{{asset('img/portfolio/shopify.png')}}">
        </div>
         <div class="item">
            <img src="{{asset('img/portfolio/crello.png')}}">
        </div>
    </div>
</section>

<section class="blog-panel section-panel ">
    <div class="container">
  <div class="d-flex justify-content-between">
    <div class="p-2"> 
    </div>

  </div>
    <div class="card-columns">
        @each('posts/_show', $posts, 'post', 'posts/_empty')
    </div>

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
</section>

<section class="testimonial-panel section-panel">
    <div class="container">
        <h2 class="text-center">What Our Clients Are Saying</h2>
        
        <div class="testimonial-wrapper">
            <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                        <div class="swiper-slide-content">
                            <div class="avatar">
                            <div class="inner-avatar">
                                <img src="{{asset('img/testimonial/he.jpg')}}">
                            </div>
                        </div>
                        <div class="content">
                            <span class="name">Kyle Hill <br> CTO & Co-Founder at LeadTrain Inc.</span>
                            <p>Working with StarGroup over the last few months has been a great experience. I have an extensive experience in cooperating with development firms so I was particular on who to select when my company needed the development support. I was able to talk to the friendly staff as well as with several developers about what we were looking for.<br>
    The StarGroup team was quick to handle a potentially disastrous situation when one of our developers had fallen sick and was not able to work for many weeks. They had a new developer with equal skills assigned and working with a few days.<br>
    I have been very happy with the results the StarGroup team provided and I would highly recommend them.</p>                        
                        </div>
                    </div>                    
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-content">
                        <div class="avatar">
                            <div class="inner-avatar">
                                <img src="{{asset('img/testimonial/shl.jpg')}}">
                            </div>
                        </div>
                        <div class="content">
                            <span class="name">Gustavo Dore<br/>  CEO and Web Producer at Motify Ltd.</span>
                            <p>We have had the pleasure of working with StarGroup for more than one year (ongoing).  has allowed us to focus on scaling our business resting assured that both the frontend and backend development of our application is in good hands. The code quality has been at the very top, and we would absolutely recommend others to work with StarGroup.</p>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"><i class="fa fa-angle-left fa-4x"></i></div>
            <div class="swiper-button-next"><i class="fa fa-angle-right fa-4x"></i></div>

        
        </div>
        </div>
    </div>    
</section>
<section class="contact-us-panel section-panel">
        <svg class="wave-bottom" viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
            </g>
            <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
            </g>
            </g>
        </svg>
    <div class="container">
        <h2 class="text-center">
            GET IN TOUCH WITH STARGROUP
        </h2>
        
        <form class="" action="{{route('sendemail') }}" method="post" enctype="multipart/form-data" id="contact-form">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="el-input">
                                    
                    <input type="text" id="ct_name" name="ct_name">    
                    <label>
                        Name
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <div class="el-input">                    
                    <input type="phone" id="ct_phone" name="ct_phone">
                    <label>
                        Phone
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <div class="el-input">                    
                    <input type="email" id="ct_email" name="ct_email">
                    <label>
                        Email
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <div class="el-input">                    
                    <input type="text" id="ct_message" name="ct_message">
                    <label>
                        Message
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit" class="ct_btn btn btn-sm animated-button victoria-four">Send Message</button>
            </div>
        </form>
    </div>
</section>
@endsection
