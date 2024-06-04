@extends('frontends.master')
@section('front_layouts')
<!--=====================================-->
<!--=          Post Area Start          =-->
<!--=====================================-->
<section class="post-wrap-layout9 space-top-50 bg-color-light-1 transition-default">
    <div class="container">
        <div class="multi-posts-layout2">
            <div class="row g-4">
                <div class="col-lg-3 col-12 order-lg-2">
                    <div class="d-flex align-items-center h-100">
                        <ul class="nav nav-tabs">
                            @foreach ($getLeads as $row)
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#one">
                                    <span>{{ $row->headline }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9 col-12 order-lg-1">
                    <div class="tab-content h-100">
                        <div class="tab-pane fade h-100 active show" id="one">
                            <div class="post-box-layout13 box-border-dark-1 radius-default padding-20 bg-color-scandal box-shadow-large shadow-style-2 transition-default">
                                <div class="figure-holder radius-default">
                                    <a href="post-format-default.html" class="link-wrap img-height-100">
                                        <img width="660" height="596" src="{{ asset($getSpecials->thumbnail) }}" alt="Post">
                                    </a>
                                </div>
                                <div class="content-holder">
                                    <div>
                                        <div class="entry-category style-2 color-dark-1-fixed">
                                            <ul>
                                                <li>
                                                    <a href="archive-layout1.html">{{ $getSpecials->category->name }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="entry-title h3-extra-large color-dark-1-fixed underline-animation">
                                            <a href="post-format-default.html" class="link-wrap">{{ $getSpecials->headline }}</a>
                                        </h3>
                                        <p class="entry-description color-dark-1-fixed"></p>
                                        <ul class="entry-meta color-dark-1-fixed">
                                            <li class="post-author">
                                                <a href="author.html">
                                                    <img src="{{ asset('frontends/media/blog/profile1.webp') }}" alt="Author"> {{ $getSpecials->user->name }}
                                                </a>
                                            </li>
                                            <li>
                                                <i class="regular-clock-circle"></i>{{ $getVideoLead->created_at->format('d M Y h:m A') }}
                                            </li>
                                            <li>
                                                <i class="regular-eye"></i>9k
                                            </li>
                                        </ul>
                                        <a href="post-format-default.html" class="btn-text color-dark-1-fixed">View the post<span class="icon-holder">
                                            <i class="regular-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade h-100" id="two">
                            <div class="post-box-layout13 box-border-dark-1 radius-default padding-20 bg-color-mimosa box-shadow-large shadow-style-2 transition-default">
                                <div class="figure-holder radius-default">
                                    <a href="post-format-default.html" class="link-wrap img-height-100"><img width="660" height="596" src="assets/media/blog/post86.webp" alt="Post"></a>
                                </div>
                                <div class="content-holder">
                                    <div>
                                        <div class="entry-category style-2 color-dark-1-fixed">
                                            <ul>
                                                <li>
                                                    <a href="archive-layout1.html">TECH</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="entry-title h3-extra-large color-dark-1-fixed underline-animation"><a href="post-format-default.html" class="link-wrap">Air Pods Pro With Charging Case</a></h3>
                                        <p class="entry-description color-dark-1-fixed">On August 15th, an alarming email popped up in the inbox of Diana Pearl, a New York-based news editor many aspects of men's lifestyle.</p>
                                        <ul class="entry-meta color-dark-1-fixed">
                                            <li class="post-author">
                                                <a href="author.html">
                                                    <img src="assets/media/blog/profile2.webp" alt="Author">
                                                    Ashley Graham
                                                </a>
                                            </li>
                                            <li>
                                                <i class="regular-clock-circle"></i>2 min read
                                            </li>
                                            <li>
                                                <i class="regular-eye"></i>9k
                                            </li>
                                        </ul>
                                        <a href="post-format-default.html" class="btn-text color-dark-1-fixed">View the post<span class="icon-holder"><i class="regular-arrow-right"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade h-100" id="three">
                            <div class="post-box-layout13 box-border-dark-1 radius-default padding-20 bg-color-selago box-shadow-large shadow-style-2 transition-default">
                                <div class="figure-holder radius-default">
                                    <a href="post-format-default.html" class="link-wrap img-height-100"><img width="660" height="596" src="assets/media/blog/post87.webp" alt="Post"></a>
                                </div>
                                <div class="content-holder">
                                    <div>
                                        <div class="entry-category style-2 color-dark-1-fixed">
                                            <ul>
                                                <li>
                                                    <a href="archive-layout1.html">FASHION</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="entry-title h3-extra-large color-dark-1-fixed underline-animation"><a href="post-format-default.html" class="link-wrap">Beauty Of Deep Galaxies In Universe</a></h3>
                                        <p class="entry-description color-dark-1-fixed">On August 15th, an alarming email popped up in the inbox of Diana Pearl, a New York-based news editor many aspects of men's lifestyle.</p>
                                        <ul class="entry-meta color-dark-1-fixed">
                                            <li class="post-author">
                                                <a href="author.html">
                                                    <img src="assets/media/blog/profile3.webp" alt="Author">
                                                    Sergio Pliego
                                                </a>
                                            </li>
                                            <li>
                                                <i class="regular-clock-circle"></i>2 min read
                                            </li>
                                            <li>
                                                <i class="regular-eye"></i>9k
                                            </li>
                                        </ul>
                                        <a href="post-format-default.html" class="btn-text color-dark-1-fixed">View the post<span class="icon-holder"><i class="regular-arrow-right"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade h-100" id="four">
                            <div class="post-box-layout13 box-border-dark-1 radius-default padding-20 bg-color-old-lace box-shadow-large shadow-style-2 transition-default">
                                <div class="figure-holder radius-default">
                                    <a href="post-format-default.html" class="link-wrap img-height-100"><img width="660" height="596" src="assets/media/blog/post88.webp" alt="Post"></a>
                                </div>
                                <div class="content-holder">
                                    <div>
                                        <div class="entry-category style-2 color-dark-1-fixed">
                                            <ul>
                                                <li>
                                                    <a href="archive-layout1.html">HEALTH</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="entry-title h3-extra-large color-dark-1-fixed underline-animation"><a href="post-format-default.html" class="link-wrap">Underwater Exercise For All Of You</a></h3>
                                        <p class="entry-description color-dark-1-fixed">On August 15th, an alarming email popped up in the inbox of Diana Pearl, a New York-based news editor many aspects of men's lifestyle.</p>
                                        <ul class="entry-meta color-dark-1-fixed">
                                            <li class="post-author">
                                                <a href="author.html">
                                                    <img src="assets/media/blog/profile3.webp" alt="Author">
                                                    Kristin Watson
                                                </a>
                                            </li>
                                            <li>
                                                <i class="regular-clock-circle"></i>2 min read
                                            </li>
                                            <li>
                                                <i class="regular-eye"></i>9k
                                            </li>
                                        </ul>
                                        <a href="post-format-default.html" class="btn-text color-dark-1-fixed">View the post<span class="icon-holder"><i class="regular-arrow-right"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=          Post Area Start          =-->
<!--=====================================-->
<section class="post-wrap-layout10 space-top-25 bg-color-light-1 transition-default">
    <div class="container">
        <div class="position-relative">
            <div id="post-slider-5" class="post-slider-5 outer-top-5 gutter-30 initially-none">
                @if(count($getLeads)>0)
                @foreach ($getLeads as $getNews)
                <div class="single-slide">
                    <div class="post-box-layout11 box-border-dark-1 radius-default padding-20 bg-color-scandal box-shadow-large shadow-style-2 transition-default">
                        <div class="figure-holder radius-default">
                            <a href="post-format-default.html" class="link-wrap img-height-100">
                                <img width="500" height="320" src="{{ asset($getNews->thumbnail) }}" alt="Post">
                            </a>
                        </div>
                        <div class="content-holder">
                            <div class="entry-category style-2 color-dark-1-fixed">
                                <ul>
                                    <li>
                                        <a href="archive-layout1.html">{{ $getNews->category->name }}</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="entry-title h3-small color-dark-1-fixed underline-animation">
                                <a href="post-format-default.html" class="link-wrap">{{ $getNews->headline }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <p class="text-center text-danger">এখনো একোনো খবর প্রচার হয়নি! </p>
                @endif
            </div>
            <ul class="slider-navigation-layout1 color-light-1 position-layout2">
                <li id="post-prev-5" class="prev"><i class="regular-arrow-left"></i></li>
                <li id="post-next-5" class="next"><i class="regular-arrow-right"></i></li>
            </ul>
        </div>
    </div>
</section>

<section class="post-wrap-layout12 bg-color-woodsmoke space-top-50 space-bottom-60 transition-default">
    <div class="container">
        <div class="section-heading heading-style-4">
            <h2 class="title">Videos</h2>
        </div>
        <div class="row g-3">
            <div class="col-lg-6">
                <div class="post-box-layout14 box-border-light-1-fixed radius-default both-side-equal">
                    <div class="figure-holder radius-default">
                        <a href="https://www.youtube.com/watch?v={{ $getVideoLead->embed_code }}" aria-label="Youtube Video" class="play-btn size-large popup-youtube">
                            <i class="solid-play"></i>
                        <a href="post-format-default.html" class="link-wrap figure-overlay img-height-100">
                            <img width="700" height="700" src="{{ asset($getVideoLead->thumbnail) }}" alt="Post">
                        </a>
                    </div>
                    <div class="content-holder">
                        <div class="entry-category style-2 color-dark-1-fixed">
                            <ul>
                                <li>
                                    <a href="archive-layout1.html">{{ $getVideoLead->category->name }}</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="entry-title h3-large color-light-1-fixed underline-animation">
                            <a href="post-format-default.html" class="link-wrap">{{ $getVideoLead->headline}}</a>
                            </h3>
                        <ul class="entry-meta color-light-1-fixed">
                            <li class="post-author">
                                <a href="author.html">
                                    <img src="{{ asset('frontends/media/blog/profile3.webp') }}" alt="Author"> {{ $getVideoLead->user->name }}
                                </a>
                            </li>
                            <li>
                                <i class="regular-clock-circle"></i>{{ $getVideoLead->created_at->format('d M Y h:m A') }}
                                {{-- date('d-m-Y', strtotime($user->from_date)); --}}
                            </li>
                            <li>
                                <i class="regular-eye"></i>9k
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    @if(count($getVideos)>0)
                    @foreach ($getVideos as $itemVideo)
                    <div class="col-sm-6 col-12">
                        <div class="post-box-layout16 box-border-light-1-fixed radius-default both-side-equal">
                            <div class="figure-holder radius-default">
                                <a href="https://www.youtube.com/watch?v={{ $itemVideo->embed_code }}" aria-label="Youtube Video" class="play-btn size-small position-top-right popup-youtube not-animation">
                                    <i class="solid-play"></i>
                                </a>
                                <a href="post-format-default.html" class="link-wrap figure-overlay img-height-100">
                                    <img width="540" height="540" src="{{ asset($itemVideo->thumbnail) }}" alt="Post">
                                </a>
                            </div>
                            <div class="content-holder">
                                <h3 class="entry-title h3-extra-small color-light-1-fixed underline-animation">
                                    <a href="post-format-default.html" class="link-wrap">{{ $itemVideo->headline }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p class="text-center text-danger">এখানে কোনো ভিডিও ফিচার না!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=         Banner Area Start         =-->
<!--=====================================-->
<section class="banner-wrap-layout-2 space-top-60 space-bottom-60 bg-color-light-1 transition-default">
    <div class="container">
        <div class="banner-box-layout2 box-border-dark-1 radius-default">
            <div class="figure-holder radius-medium">
                <a href="#" class="link-wrap img-height-100"><img width="1232" height="230" src="{{ asset('frontends/media/banner/banner4.webp') }}" alt="Banner"></a>
            </div>
        </div>
    </div>
</section>
@endsection
