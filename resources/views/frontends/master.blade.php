<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="AnchorBarta">
    <meta name="csrf-token" content="MwoVXCLoPQud9EVQla3CFDpHRKk5oE9gRfRO0BaH">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    
    <title> LatestScript | Laravel </title>
    <meta name="keyword" content="">
    <meta name="description" content="বাংলাদেশসহ বিশ্বের সর্বশেষ সংবাদ শিরোনাম, প্রতিবেদন, বিশ্লেষণ, খেলা, বিনোদন, চাকরি, রাজনীতি ও বাণিজ্যের বাংলা নিউজ পড়তে ভিজিট করুন।">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="This Is Facebook Share Title" />
    <meta property="og:description" content="Popular Online Newspaper of Bangladesh"/>
    <meta property="og:image" content="public/templateimage/63c40b6354b51.jpg" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="This Is Twitter Share Title" />
    <meta name="twitter:description" content="Popular Online Newspaper of Bangladesh" />
    <meta name="twitter:image" content="public/templateimage/63c40b68e7996.jpg" />
    <meta name="brand_name" content="This Is Twitter Share Title" />
    <meta name="twitter:creator" content="@themesbazar">
    <meta name="twitter:site" content="@themesbazar">

        
    <link rel="icon" href="public/templateimage/63bbda7630384.gif">
    
    <!-- Css Link Start    -->
    @include('frontends.inc.style')
</head>
<body>

    <script>
        setInterval(displayTime, 1000);

        function displayTime() {

            const timeNow = new Date();

            let hoursOfDay = timeNow.getHours();
            let minutes = timeNow.getMinutes();
            let seconds = timeNow.getSeconds();
            let weekDay = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
            let today = weekDay[timeNow.getDay()];
            let months = timeNow.toLocaleString("default", {
                month: "long"
            });
            let year = timeNow.getFullYear();
            let period = "AM";

            if (hoursOfDay > 12) {
                hoursOfDay -= 12;
                period = "PM";
            }

            if (hoursOfDay === 0) {
                hoursOfDay = 12;
                period = "AM";
            }

            hoursOfDay = hoursOfDay < 10 ? "0" + hoursOfDay : hoursOfDay;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            let time = hoursOfDay + ":" + minutes + ":" + seconds + " " + period;

            document.getElementById('Clock').innerHTML = time;

            var chars = {
                '1': '১',
                '2': '২',
                '3': '৩',
                '4': '৪',
                '5': '৫',
                '6': '৬',
                '7': '৭',
                '8': '৮',
                '9': '৯',
                '0': '০',
                'A': 'এ',
                'P': 'পি',
                'M': 'এম'
            };
            let str = document.getElementById("Clock").innerHTML;
            let res = str.replace(/[1234567890AMP]/g, m => chars[m]);
            document.getElementById("Clock").innerHTML = res;

        }
        displayTime();
    </script>

    @include('frontends.inc.header')
    <!-- ============== Header & Menu ============= --> 



    
    @yield('front_layouts')
    {{-- main Pages --}}
    
    <!--====================== Footer_section_Start ==========================-->            
    <footer class="footer-section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="footer-menu footer_color">
                        <ul>
                            <li><a href="news/category/politics.html" >রাজনীতি</a></li>
                            <li><a href="news/category/sport.html" >খেলাধুলা</a></li>
                            <li><a href="news/category/entertainment.html" >বিনোদন</a></li>
                            <li><a href="news/category/it.html" >তথ্যপ্রযুক্তি</a></li>
                            <li><a href="news/category/bangladesh.html" >সারাদেশ</a></li>
                            <li><a href="news/page/1.html" >আমাদের সম্পর্কে</a></li>
                            <li><a href="sitemap.xml" >সাইটম্যাপ</a></li>
                            <li><a href="feed" >আরএসএস</a></li>
                            <li><a href="all/video/gallery.html" >ভিডিও গ্যালারী</a></li>
                            <li><a href="all/photo/gallery.html" >ফটোগ্যালারী</a></li>
                            <li><a href="all/reporter/list.html" >আমাদের পরিবার</a></li>
                            <li><a href="all/latest/news/post.html" >সকল নিউজ</a></li>
                        </ul>
                    </div>
                    <!--End Footer Menu-->
                    <div class="editorial_content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 footer_color">
                                <div class="row">
                                    <div class="themesBazar-2 themesBazar-m1">
                                        <div class="editorial-wrpp ">
                                            <p align="right">সম্পাদক ও প্রকাশক : আব্দুল হাসিম চৌধুরী</p>
                                            <p align="right">নির্বাহী সম্পাদক : আবু রায়হান<br></p>
                                            <p align="right">বার্তা সম্পাদক : আবু হুরায়রা চৌধুরী</p>
                                            <p align="right"><br></p>
                                        </div>
                                    </div>
                                    <div class="themesBazar-2 themesBazar-m1">
                                        <div class="editorial-wrpp2">
                                            <p align="left">অফিস : মিরপুর, ঢাকা, বাংলাদেশ-১২১৬</p>
                                            <p align="left">ইমেইল : youremail@gmail.com</p>
                                            <p align="left">মোবাইল : 01710-000000<br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End editorial_content-->
                </div>
                <!-- End Col-12 -->
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </footer>
    <!--================================ bottom-footer-start ===============================-->
    <div class="bottom-footer-section" >
        <div class="container">
            <div class="design-developed">
                © All rights reserved © Lara Script News| Morexhub Developed BY  <a href="https://www.morexhub.com/" target="_blank" title="MoreXHUb">morexHUB</a>  
            </div>
            <a href="#" class="themesBazar_scroll"><i class="las la-level-up-alt"></i></a>
        </div>
    </div>
    <!--======================= Footer_section_end ==========================-->            
    
    
    <!--============Footer scroll  start==============-->
    <div class="footer_scroll">
        <div class="row">
            <div class="col-md-12">
                <div class="footer_left"><span> নোটিশ  </span></div>
                <div class="footer_right rightCSS ">
                    <div>                             
                        <a href="#"> <i class="las la-bullseye"></i> পরীক্ষামূলক সম্প্রচার চলছে ।</a>
                    </div>
                    <!-- End main div -->
                </div>
            </div>
        </div>
    </div>
    <!--============Footer scroll end==============-->

        

    <!--============footer Scroll End==============-->                         
    @include('frontends.inc.scripts')
</body>
</html>   
                