<div class="container">
    <h1 class="mt-4">Tentang Saya</h1>

    <img src="<?= BASEURL; ?>/../public/img/profile.jpg" alt="Nabiella Meiliana Putri" width="200" class="rounded-circle shadow">
    <p>Halo, nama saya <?= $data['nama']; ?>, umur saya <?= $data['umur']; ?> tahun, saya adalah seorang <?= $data['pekerjaan']; ?>. </p>
</div> 

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>About Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    Template Google Fonts 
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    Template CSS Files 
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/preloader.min.css" rel="stylesheet">
    <link href="../public/css/circle.css" rel="stylesheet">
    <link href="../public/css/font-awesome.min.css" rel="stylesheet">
    <link href="../public/css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">

    CSS Skin File 
    <link href="../public/css/skins/yellow.css" rel="stylesheet">

    Live Style Switcher - demo only 
    <link rel="alternate stylesheet" type="text/css" title="blue" href="../public/css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="../public/css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="../public/css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="../public/css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="../public/css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="../public/css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="../public/css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="../public/css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="../public/css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="../public/css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/styleswitcher.css" />

    Modernizr JS File 
    <script src="js/modernizr.custom.js"></script>
</head>

<body class="about">
Live Style Switcher Starts - demo only 
<div id="switcher" class="">
    <div class="content-switcher">
        <h4>STYLE SWITCHER</h4>
        <ul>
            <li>
                <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src="../public/img/styleswitcher/purple.png" alt="purple"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="../public/img/styleswitcher/red.png" alt="red"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src="../public/img/styleswitcher/blueviolet.png" alt="blueviolet"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="../public/img/styleswitcher/blue.png" alt="blue"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="../public/img/styleswitcher/goldenrod.png" alt="goldenrod"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="../public/img/styleswitcher/magenta.png" alt="magenta"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="../public/img/styleswitcher/yellowgreen.png" alt="yellowgreen"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="../public/img/styleswitcher/orange.png" alt="orange"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="../public/img/styleswitcher/green.png" alt="green"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="../public/img/styleswitcher/yellow.png" alt="yellow"/></a>
            </li>
        </ul>

        <div id="hideSwitcher">&times;</div>
    </div>

</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
Live Style Switcher Ends - demo only 
Header Starts 
<header class="header" id="navbar-collapse-toggle">
    Fixed Navigation Starts 
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box">
            <i class="fa fa-home"></i>
            <a href="index.html">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box active">
            <i class="fa fa-user"></i>
            <a href="about.html">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-briefcase"></i>
            <a href="portfolio.html">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-envelope-open"></i>
            <a href="contact.html">
                <h2>Contact</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-comments"></i>
            <a href="blog.html">
                <h2>Blog</h2>
            </a>
        </li>
    </ul> 
    Fixed Navigation Ends 
    Mobile Menu Starts 
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li><a href="index.html"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li class="active"><a href="about.html"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="portfolio.html"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="contact.html"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li><a href="blog.html"><i class="fa fa-comments"></i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
    Mobile Menu Ends 
</header>
Header Ends 
Page Title Starts 
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>ABOUT <span>ME</span></h1>
    <span class="title-bg">Resume</span>
</section>
Page Title Ends 
Main Content Starts 
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            Personal Info Starts 
            <div class="col-12 col-lg-5 col-xl-6">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                    </div>
                    <div class="col-12 d-block d-sm-none">
                        <img src="../public/img/profile.jpg" class="img-fluid main-img-mobile" alt="my picture" />
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">Nama :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block"><?= $data['nama']; ?></span> </li>
                            <li> <span class="title">Umur :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block"><?= $data['umur']; ?></span> </li>
                            <li> <span class="title">Negara :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Indonesia</span> </li>
                            <li> <span class="title">Freelance :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Available</span> </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">Email :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">nabiellameilianaputri1956@gmail.com</span> </li>
                            <li> <span class="title">Sosial Media :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block"><a href="http://instagram.com/nbyllamp">Instagram</a></span> </li>
                            <li> <span class="title">Bahasa :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Indonesia, Jawa, English</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
            Personal Info Ends 
            Boxes Starts 
            <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">4</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">tahun <span class="d-block">belajar teknologi</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">2</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">tahun <span class="d-block">belajar bisnis</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats">
                            <h3 class="poppins-font position-relative">2</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">baru<span class="d-block">tercapai</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats">
                            <h3 class="poppins-font position-relative">99</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">mengejar <span class="d-block">mimpi</span></p>
                        </div>
                    </div>
                </div>
            </div> 
            Boxes Ends 
        </div>
        <hr class="separator">
        Skills Starts 
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">Statistics Life</h3>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p25">
                    <span>25%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Olahraga</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p89">
                    <span>89%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Typewrite</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p70">
                    <span>70%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Overthinking</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p66">
                    <span>66%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Insomnia</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p80">
                    <span>80%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Gaming</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p90">
                    <span>90%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Girl Friend</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p90">
                    <span>90%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Insecure</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p45">
                    <span>45%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Public Speaking</h6>
            </div>
        </div>
        Skills Ends 
        <hr class="separator mt-1">
        Experience & Education Starts 
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Quotes <span>of the</span> Day</h3>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2018</span>
                            <h5 class="poppins-font text-uppercase">Hachiman <span class="place open-sans-font">(Oregairu)</span></h5>
                            <p class="open-sans-font">“Lebih baik dibenci karena menjadi dirimu sendiri, daripada dicintai karena menjadi orang lain.” </p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2019</span>
                            <h5 class="poppins-font text-uppercase">Ciel Phantomhive <span class="place open-sans-font">Kuroshitsuji</span></h5>
                            <p class="open-sans-font">“Sesuatu yang sudah hilang, tidak akan pernah kembali.”</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2016</span>
                            <h5 class="poppins-font text-uppercase">Sir Blv <span class="place open-sans-font">Kyzothy</span></h5>
                            <p class="open-sans-font">“Mereka tidak sedang memusuhi mu, mereka hanya takut kau terlalu tinggi dan bisa melampui nya.”</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2018</span>
                            <h5 class="poppins-font text-uppercase">Maffoy <span class="place open-sans-font">Sim</span></h5>
                            <p class="open-sans-font">“No trouble, no romance, just go to school and leave that school.”</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2020</span>
                            <h5 class="poppins-font text-uppercase">DG <span class="place open-sans-font">Diyar</span></h5>
                            <p class="open-sans-font">“Tidak ada manusia yang dapat kau percaya, kecuali diri sendiri.”</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2022</span>
                            <h5 class="poppins-font text-uppercase">Steethy <span class="place open-sans-font">X</span></h5>
                            <p class="open-sans-font">“Banyak peran yang saya mainkan dalam satu badan.”</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        Experience & Education Ends 
    </div>
</section>
Main Content Ends 

Template JS Files 

<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/styleswitcher.js"></script>
<script src="js/preloader.min.js"></script>
<script src="js/fm.revealator.jquery.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpGridGallery.js"></script>
<script src="js/jquery.hoverdir.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>

</body>


</html> -->



