<?php
if (!isset($page_title)) {
    $page_title = 'Gravyam | Speciality Chemicals | Surfactant suppliers';
}
if (!isset($meta_description)) {
    $meta_description = 'We deals in Surfactant chemicals for Agro Emulsifier, Textile, Constructions, Home Care, Pigment and Paints industries';
}
if (!isset($active_page)) {
    $active_page = '';
}
if (!isset($extra_head)) {
    $extra_head = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8'); ?>" />
<link rel="shortcut icon" href="image/favicon-2.png" type="image/x-icon">
<link rel="icon" href="image/favicon-2.png" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Manrope:300,400,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=DM%20Sans:300,400,500,600,700&amp;display=swap" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/jquery-ui.css" rel="stylesheet">
<link href="css/swiper.min.css" rel="stylesheet">
<link href="css/flaticon.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/custom-animate.css" rel="stylesheet">
<link href="css/jquery.fancybox.min.css" rel="stylesheet">
<link href="css/owl.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<?php echo $extra_head; ?>
</head>
<body>
<div class="page-wrapper">
    <div class="loader-wrap">
        <div class="preloader style-two"></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

    <header class="main-header style-two">
        <div class="header-upper style-two">
            <div class="auto-container">
                <div class="wrapper-box">
                    <div class="logo-column">
                        <div class="logo-box">
                            <div class="logo"><a href="index.php"><img src="image/logo.png" alt="" title=""></a></div>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="option-wrapper">
                            <div class="">
                                <nav class="main-menu navbar-expand-xl navbar-dark">
                                    <div class="collapse navbar-collapse">
                                        <ul class="navigation">
                                            <li class="<?php echo $active_page === 'home' ? 'current' : ''; ?>"><a href="index.php">HOMEeeee</a></li>
                                            <li class="dropdown <?php echo in_array($active_page, ['company','team'], true) ? 'current' : ''; ?>"><a href="#">ABOUT US</a>
                                                <ul>
                                                    <li><a href="company.php">COMPANY</a></li>
                                                    <li><a href="team.php">OUR TEAM</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown <?php echo in_array($active_page, ['agro','ew','ec','micro','oil','suspension','suspo','wdg','wp','seed','phosphate','sulfosuccinates','constructions','home-care','industrial-cleaning'], true) ? 'current' : ''; ?>"><a href="#">PRODUCTS</a>
                                                <ul>
                                                    <li class="dropdown"><a href="agro-emulsifier.php">AGRO EMULSIFIER</a>
                                                        <ul>
                                                            <li><a href="emulsifiable-concentrates.php">EMULSIFIABLE CONCENTRATES</a></li>
                                                            <li><a href="emulsifiable-in-water.php">EMULSIFIABLE IN WATER</a></li>
                                                            <li><a href="microemulsions.php">MICROEMULSIONS</a></li>
                                                            <li><a href="oil-dispersions.php">OIL DISPERSIONS</a></li>
                                                            <li><a href="suspension-concentrates.php">SUSPENSION CONCENTRATES</a></li>
                                                            <li><a href="suspo-emulsions.php">SUSPO EMULSIONS</a></li>
                                                            <li><a href="water-dispersible-granules.php">WATER DISPERSIBLE GRANULES</a></li>
                                                            <li><a href="wettable-powder.php">WETTABLE POWDER</a></li>
                                                            <li><a href="seed-coating-solutions.php">SEED COATING SOLUTIONS</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="phosphate-esters.php">PHOSPHATE ESTERS</a></li>
                                                    <li><a href="sulfosuccinates.php">SULFOSUCCINATES</a></li>
                                                    <li><a href="constructions.php">CONSTRUCTIONS</a></li>
                                                    <li><a href="home-care.php">HOME CARE</a></li>
                                                    <li><a href="industrial-cleaning.php">INDUSTRIAL CLEANING</a></li>
                                                </ul>
                                            </li>
                                            <li class="<?php echo $active_page === 'rd' ? 'current' : ''; ?>"><a href="rd.php">R &amp; D</a></li>
                                            <li class="<?php echo $active_page === 'quality' ? 'current' : ''; ?>"><a href="quality.php">QUALITY</a></li>
                                            <li class="<?php echo $active_page === 'contact' ? 'current' : ''; ?>"><a href="contact.php">CONTACT US</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-header style-two">
            <div class="auto-container">
                <div class="wrapper-box">
                    <div class="logo-column">
                        <div class="logo-box">
                            <div class="logo"><a href="index.php"><img src="image/logo.png" alt="" title=""></a></div>
                        </div>
                    </div>
                    <div class="menu-column">
                        <div class="nav-outer">
                            <div class="nav-inner">
                                <nav class="main-menu navbar-expand-xl navbar-dark">
                                    <div class="collapse navbar-collapse">
                                        <ul class="navigation"></ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-menu style-two">
            <div class="menu-box">
                <div class="logo"><a href="index.php"><img src="image/logo.png" alt=""></a></div>
                <nav class="main-menu navbar-expand-xl navbar-dark">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="flaticon-menu"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navigation"></ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
