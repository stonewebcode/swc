<!--resources/views/homePage.blade.php -->
<!-- call the main.blade.php file in the layouts directory within the view dir from which this page is being called-->
@extends('layouts.main')

        <!-- this defines the content section which gets displayed with the yield in the calling  main.blade.php file -->
@section('content')

        <!-- Banner -->
<section id="banner">

    <img src="images/twitterVal168x168.png" alt="Val Stone" height="168" width="168">

    <h2>Val Stone</h2>

    <p>Web Systems Developer</p>

    @include('layouts.message')

</section>

<!-- One -->
<section id="one" class="wrapper style1">
    <div class="inner">
        <article class="feature left">
            <span class="image"><img src="images/quangoff.png" alt="Quangoff natural cornish spring water"/></span>

            <div class="content">
                <h2>Website Development for Cornish Pure Natural Spring Water company.</h2>

                <p>laravel 5.1 PHP Development for independent local South West business.</p>
                <ul class="actions">
                    <li>
                        <a href="http://quangoff.co.uk" class="button alt" target="_blank">More</a>
                    </li>
                </ul>
            </div>
        </article>
        <article class="feature right">
            <span class="image"><img src="images/shaunstoneConsultancy.png" alt="shaun stone consultancy"/></span>

            <div class="content">
                <h2>Website development for independent Cotton Consultant</h2>

                <p>Wordpress PHP Development for new Cotton Consultancy business</p>
                <ul class="actions">
                    <li>
                        <a href="http://www.shaunstoneConsultancy.co.uk" class="button alt" target="_blank">More</a>
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
        <p>I help web companies create bespoke forms and back end admin systems for their client's websites so that they
            can collect and manage their information effectively.</p>
        <div class="image-grid">
            <a href="http://www.kpmgenr.com/chemicals/profile.aspx" target="_blank" class="image"><img id="kpmg"
                                                                                                       src="images/kpmg.png"
                                                                                                       alt="systems development"/>

                <div class="contenthover" style="padding:20px">In partnership with Flair4IT,
                    developed a data collection web registration application for the marketing department of a large
                    global accountancy company.
                </div>
            </a>
            <a href="https://bluebadge.dorsetforyou.com/" target="_blank" class="image"><img id="blueBadge"
                                                                                             src="images/blueBadgeDorsetCouncil.png"
                                                                                             alt="Blue Badge Dorset Council form"/>

                <div class="contenthover" style="padding:20px">I developed and continue to support web based application
                    for applying for Blue Disabled Parking
                    Badges for a UK County Council, in partnership with Flair4IT.
                </div>
            </a>
            <a href="http://www.stswithunsbathford.co.uk/" target="_blank" class="image"><img id="bathfordChurch"
                                                                                              src="images/bathfordStSwithuns.png"
                                                                                              alt="Bathford St Swithuns Church"/>

                <div class="contenthover" style="padding:20px">Configured a database driven survey and collated results
                    for a local church, wanting a bespoke questionnaire.
                </div>
            </a>
            <a href="http://www.bathfordshopnews.co.uk/index.php" target="_blank" class="image"><img id="bathfordShop"
                                                                                                     src="images/bathfordShopNews.png"
                                                                                                     alt="Bathford Shop News System"/>

                <div class="contenthover" style="padding:20px">Designed and developed an accessible and easy to use web
                    system for retail shop to distribute and bill for newspapers.
                </div>
            </a>
            <a class="image"><img id="LSW" src="images/lsw_screenshot.JPG"
                                  alt="Learning South West Grant application form"/>

                <div class="contenthover" style="padding:20px">
                    I designed and developed web application for applying for and distributing grant money for an
                    educational institute.
                </div>
            </a>
            <a class="image"><img id="KWP"
                                  src="images/kwp_screenshot.JPG"
                                  alt="Mining for Growth registration form"/>

                <div class="contenthover" style="padding:20px">Developed conference registration websites for a busy
                    private sector data collection company. This was developed in partnership with Flair4IT.
                </div>
            </a>
        </div>
        <!-- <ul class="actions">
            <li><a href="#" class="button big alt">Tempus Aliquam</a></li>
        </ul>-->
    </div>
</section>


@endsection  <!-- end of section called 'content'-->