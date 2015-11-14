<!-- call the main.blade.php file in the layouts directory within the view dir from which this page is being called-->
@extends('layouts.main')

<!-- this defines the content section which gets displayed with the yield in the calling  main.blade.php file -->
@section('content')

        <!-- Banner -->
<section id="banner">

    <img src="images/twitterVal168x168.png" alt="Val Stone" height="168" width="168">
    <h2>Val Stone</h2>
    <p>Systems developer</p>
    <ul class="actions">
        <li><a href="#two" class="button big special">Learn More</a></li>
    </ul>
</section>

<!-- One -->
<section id="one" class="wrapper style1">
    <div class="inner">
        <article class="feature left">
            <span class="image"><img src="images/shaunstoneConsultancy.png" alt="shaun stone consultancy" /></span>
            <div class="content">
                <h2>Website development for independent Cotton Consultant</h2>
                <p>Wordpress PHP Development for new Cotton Consultancy business</p>
                <ul class="actions">
                    <li>
                        <a href="http://www.shaunstoneConsultancy.co.uk" class="button alt">More</a>
                    </li>
                </ul>
            </div>
        </article>
        <article class="feature right">
            <span class="image"><img src="images/quangoff.png" alt="Quangoff natural cornish spring water" /></span>
            <div class="content">
                <h2>Website Development for Cornish Pure Natural Spring Water company.</h2>
                <p>laravel 5.1 PHP Development for independent local South West business.</p>
                <ul class="actions">
                    <li>
                        <a href="http://quangoff.co.uk" class="button alt">More</a>
                    </li>
                </ul>
            </div>
        </article>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper special">
    <div class="inner">
        <header class="major narrow">
            <h2>Building Systems using latest technologies</h2>
            <p>ASP.net&nbsp;&nbsp;C#&nbsp;&nbsp;PHP&nbsp;&nbsp;Laravel&nbsp;&nbsp;Javascript&nbsp;&nbsp;JQuery&nbsp;&nbsp;HTML5&nbsp;&nbsp;CSS3</p>
        </header>
        <div class="image-grid">
            <a href="http://www.kpmgenr.com/chemicals/profile.aspx" class="image"><img id="kpmg" src="images/kpmg.png" alt="KPMG systems development" /><div class="contenthover" style="padding:20px">KPMG website information here that Val would like to add<br> Technologies used.</div></a>
            <a href="https://bluebadge.dorsetforyou.com/" class="image"><img id="blueBadge" src="images/blueBadgeDorsetCouncil.png" alt="Blue Badge Dorset Council form" /><div class="contenthover" style="padding:20px">blueBadge website information here that Val would like to add<br> Technologies used.</div></a>
            <a href="http://www.stswithunsbathford.co.uk/" class="image"><img id="bathfordChurch" src="images/bathfordStSwithuns.png" alt="Bathford St Swithuns Church" /><div class="contenthover" style="padding:20px">Bathford St Swithuns website information here that Val would like to add<br> Technologies used.</div></a>
            <a href="http://www.bathfordshopnews.co.uk/index.php" class="image"><img id="bathfordShop"src="images/bathfordShopNews.png" alt="Bathford Shop News System" /><div class="contenthover" style="padding:20px">Bathford Shop News System information here that Val would like to add<br> Technologies used.</div></a>
            <a href="http://www.learning-southwest.org.uk/" class="image"><img id="LSW" src="images/lsw_screenshot.JPG" alt="Learning South West Grant application form" /><div class="contenthover" style="padding:20px">Learning South West information here that Val would like to add<br> Technologies used.</div></a>
            <a href="http://miningforgrowthireland.com/default.aspx" class="image"><img id="KWP" src="images/kwp_screenshot.JPG" alt="Kantar WorldPanel Mining for Growth registration form" /><div class="contenthover" style="padding:20px">Kantar WorldPanel information here that Val would like to add<br> Technologies used.</div></a>
        </div>
        <!-- <ul class="actions">
            <li><a href="#" class="button big alt">Tempus Aliquam</a></li>
        </ul>-->
    </div>
</section>

<!-- Three -->
<section id="three" class="wrapper style2 special">
    <div class="inner">
        <header class="major narrow">
            <h2>Get in touch</h2>
            <p>For Systems Development enquiries contact me below</p>
        </header>
        <form action="#" method="POST">
            <div class="container 75%">
                <div class="row uniform 50%">
                    <div class="6u 12u$(xsmall)">
                        <input name="name" placeholder="Name" type="text" />
                    </div>
                    <div class="6u$ 12u$(xsmall)">
                        <input name="email" placeholder="Email" type="email" />
                    </div>
                    <div class="12u$">
                        <textarea name="message" placeholder="Message" rows="4"></textarea>
                    </div>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" class="special" value="Submit" /></li>
                <li><input type="reset" class="alt" value="Reset" /></li>
            </ul>
        </form>
    </div>
</section>

@endsection  <!-- end of section called 'content'-->