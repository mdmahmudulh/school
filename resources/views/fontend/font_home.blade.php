<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('fontend/images/favicon.png') }}">

    <title>Rarikandi darussunnat dhakhil madrasha</title>
    <style>
        .header,.footer-bottom{
            background-color: #CFC66E;
            padding: 10px 20px;
        }
        .header-left ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .header-left ul li {
            display: inline-block;
        }
        .logo-area{
            background-color: #0F3F55;
        }
        .logo img{
            width: 100%;
        }
        section.notice-live {
            padding: 10px 0px;
        }
        .article-area h3 {
            font-weight: bold;
            font-size: 27px;
            margin: 15px 0px;
        }
        .article-area p {
            text-align: justify;
            font-size: 15px;
            line-height: 2;
        }
        .heading h3 {
            font-size: 21px;
            text-align: center;
            padding: 5px;
            font-weight: 600;
        }
        .notice-area ul {
            /* padding: 0; */
            padding-left: 15px;
        }
        .notice-area ul li {
            border-bottom: 1px dashed red;
            padding-bottom: 5px;
        }
        .footer-area{
            background-color: #0F3F55;
            padding: 50px 0px;
        }
        ul.address {
            margin: 0;
            padding: 0;
        }

        ul.address li {
            list-style: none;
        }

        ul.address li a {
            color: white;
            border-bottom: 1px solid;
            line-height: 2;
        }

    </style>
</head>
<body>

<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-left">
                    <ul>
                        <li>Madrasha Code: 1104</li>
                        <li>EIIN: 103936</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="header-right text-right">
                    <a href="/login" class="btn btn-sm btn-info">Login</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="logo-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo">
                    <img src="{{asset('fontend/images/rddm_banner.png')}}" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="notice-live">
    <div class="container">
        <div class="row">
            <div class="col-lg-1">
                <span><b>নোটিশ:</b></span>
            </div>
            <div class="col-lg-11">
                <marquee behavior="" direction="">রাড়ি কান্দি দারুস সুন্নাত দাখিল মাদ্রাসার সকল নোটিশ দেখতে ওয়েবসাইটে চোখ রাখুন </marquee>
            </div>
        </div>
    </div>
</section>

<section class="main-area">
    <div class="container" style="background-color: #DBECFD; padding: 10px 20px;">
        <div class="row">
            <div class="col-lg-9">
                <div class="slider-area">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('fontend/images/image1.png')}}" alt="First slide" height="350px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('fontend/images/image2.png')}}" alt="Second slide" height="350px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('fontend/images/image3.png')}}" alt="Third slide" height="350px">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>


                <div class="article-area">
                    <h3>রাড়ি কান্দি দারুস সুন্নাত দাখিল মাদ্রাসা</h3>
                    <p>
                        Rari Kandi Darussunnat Dakhil Madrasha is an educational establishment that is located at Uttar Madrasha Mandarali Matlab North Chandpur. Its Educational Institute Identification Number or EIIN, is 103936. On 01 January, 1997, it was first put into operation. The alternative name for Rari Kandi Darussunnat Dakhil Madrasha is রারি কান্দি দারুসুন্নাত দাখিল মাদ্রাসা. It is a Combined sort of co- educational program. The institution provides education in the following fields: Business Studies, Science, Humanities.
                        Its MPO number is 706252103. It operates on Day shift(s). Its management is Managing. Its recognition is Recognized by the government and the recognition level is Dakhil. The school/college has MPO level with MPO number 706252103 and the MPO type is Yes. Rari Kandi Darussunnat Dakhil Madrasha is under Madrasah Education Board.
                        While many other high schools teach numerous disciplines, you can find the major disciplines that they teach in this high school as Business Studies, Science, Humanities. The management type of this institute is Managing. The region in which it is located is Grameen with geographic location as Plain Land. The institute is in the constituency no 261.
                    </p>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="main-right-side-bar">
                    <img src="{{asset('fontend/images/demo1.jpg')}}" alt="profile" width="100%">
                    <br>
                    <br>
                    <h4>মোঃ ইসমাইল হোসেন</h4>
                    <h6 class="mt-2">  সুপারেনটেনডেন্ট </h6>

                    <p></p>
                    <div class="notice-area">
                        <div class="heading bg-success text-white px-1">
                            <h3>সমস্ত বিজ্ঞপ্তি দেখুন</h3>
                        </div>
                        <ul type="circle">
                            <li><a href="">Notice 1</a></li>
                            <li><a href="">Notice 2</a></li>
                            <li><a href="">Notice 3</a></li>
                            <li><a href="">Notice 4</a></li>
                            <li><a href="">Notice 5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-main">
                    <img src="{{asset('fontend/images/foot_logo0.png')}}" alt="logo">
                    <ul class="address">
                        <li><a href="">103936</a></li>
                        <li><a href="">+880 1815554698</a></li>
                        <li><a href="">rarikandi1990@gmail.com</a></li>
                        <li><a href="">http://rkdm.com.bd/</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <h3 class="text-white">Important Link</h3>
                <ul class="address">
                    <li><a href=""> Home Page </a></li>
                    <li><a href="">Login Page </a></li>
                    <li><a href=""> Notice Page</a></li>
                    <li><a href=""> Studen Login</a></li>
                    <li><a href=""> Facebook following </a></li>
                    <li><a href=""> Website Url</a></li>
                </ul>
            </div>

            <div class="col-lg-4">
                <iframe width="350" height="300" src="https://www.youtube.com/watch?v=fqxd2PitmL0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</section>
<section class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-left">
                    <p>Copyright @ 2023, Rarikandi Darussunnat Dakhil Madrasha</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="header-right text-right">
                    <p>All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
