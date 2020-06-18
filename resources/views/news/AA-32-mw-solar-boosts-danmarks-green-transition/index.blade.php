@extends('layouts.app')
@section('content')

<input type="checkbox" id="nav-main--trigger" />
<input type="checkbox" id="nav-main--search-trigger" />

<div class="news-banner-wrapper">
    

<section class="module-banner module-banner--sm">

    <figure class="module-banner__figure lazyload lazyload--background"
            data-src="{{ URL::asset('images/media/1223/better-energy-vollerup-denmark2665.png?width=1920') }}"
            data-src-xs="{{ URL::asset('images/media/1223/better-energy-vollerup-denmarkbd67.png?width=600') }}"
            data-src-ms="{{ URL::asset('images/media/1223/better-energy-vollerup-denmark775f.png?width=800') }}"
            data-src-sm="{{ URL::asset('images/media/1223/better-energy-vollerup-denmarkcbab.png?width=1024') }}"
            data-src-md="{{ URL::asset('images/media/1223/better-energy-vollerup-denmarkcbab.png?width=1024') }}">


    </figure>


    <div class="module-banner__content
           position-horizontal--left position-vertical--bottom
        theme--light
        ">

        <div class="container ">
            <div class="row">
                <div class="col-md-9 col-xs-12 text-position">

                    <div class="text-area">

                            <span>
                                04 October 2018
                            </span>
                                                                            <h1 class="headline headline--hero big-dash big-dash--after">
                                32 MW SOLAR BOOSTS DANMARK'S GREEN TRANSITION
                            </h1>

                    </div>

                </div>
            </div>
        </div>
    </div>


</section>

</div>

<section class="module-text module-text--two-col fade-in-up">

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                    <p class="module-text--two-col__headline headline headline--small rte-color--orange dash dash--after dash--orange text-align--right no-padding--top">
                        Denmark will soon be getting another boost of green energy from two Better Energy solar PV projects. Both parks have received financing from the Danish Green Investment Fund and will be grid connected before end 2018.
                    </p>
            </div>
            <div class="col-sm-6">
                <section class="module-text
            position-horizontal--left position-vertical--bottom
         
         
         fade-in-up">

    <div class="text-area ">
        <p>The first new Better Energy 24.75 MW park in Vollerup, Denmark is located on an area of 33 hectares and will produce energy equivalent to the annual electricity consumption of 3,800 Danish family households. The second 7 MW project in Nees, Denmark will occupy an area of 10 hectares and will produce electricity corresponding to the consumption of approximately 1,100 Danish households.</p>
<p> </p>
<p><strong>Partnering for change</strong></p>
<p>In 2017, Better Energy secured over EUR 33 million in financing from the Danish Green Investment Fund for four projects in Nees which today comprise Denmark’s third largest park. Better Energy continues its cooperation with the Danish Green Investment Fund with project financing for these two new parks, a total of EUR 16 million.</p>
<p> </p>
<p><strong>Record breaker</strong></p>
<p>In December 2016, Better Energy was awarded the entire auctioned solar PV capacity in the Denmark-Germany cross-border auction for a European record-low premium of EUR 1.72/MWh over the wholesale price of electricity. The low premium has proven even more beneficial against the rising wholesale prices of the past couple of years. This new green energy capacity will now come to life in Vollerup and Nees, making them the lowest subsidised parks in Denmark to date. Both projects represent the next step in the journey to build without subsidies.</p>
<p> </p>
<p><strong>Support progress with a PPA</strong></p>
<p>In addition to developing, engineering and maintaining solar parks, Better Energy now sells green energy directly to commercial and industrial customers through power purchase agreements (PPA) or directly into the spot electricity market. With a PPA, businesses, governments and utilities can purchase solar power directly from Better Energy at a fixed price and for a fixed number of years.</p>
<p>As governmental subsidies disappear, the development of new green power capacity is increasingly being supported through PPAs. With a Better Energy PPA, businesses can boost development of new green energy projects, reach carbon-zero faster and know their future energy costs.</p>
<p> </p>
<p><strong>Blueprint for getting there faster</strong></p>
<p>“Achieving 100% renewable energy in Denmark is closer than people realise. What seemed inconceivable just a few years ago is now both possible and cost-effective. Better Energy has created a blueprint for becoming carbon free faster, and now we’re working hard to make that happen,” concludes CEO Rasmus Lildholdt Kjær.</p>
<p> </p>
<p> </p>
    </div>

</section>
            </div>
        </div>
    </div>

</section>





<section class="module-footer-banners">

    <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="text-area big-dash big-dash--after big-dash--orange">
                        <h2 class="headline headline headline--hero">Want to know more?</h2>
                    </div>
                </div>
            </div>

        <div class="row module-footer-banners__row">

            <div class="col-sm-6">

                <figure class="figure figure--ratio-16-9 
                    bg-color--light-gray 
                    
                    ">

                        <a href="{{ URL::asset('contact/index') }}" class="content figure__anchor flex flex--hor-center flex--ver-center flex--dir-column">
                                <span class="figure__anchor-bg abs-fill abs-fill-gradient-45--"></span>
                            <span class="headline headline--large">Contact Us</span>
                            <span class="text"></span>
                            <span class="btn btn--orange"><span class="btn__text">Click here</span></span>
                        </a>
                </figure>

            </div>

            <div class="col-sm-6">

                <figure class="figure figure--ratio-16-9 bg-color--light-gray theme--light">
                        <a href="../restaurant-chain-cofoco-partnering-with-better-energy/index.html" class="content figure__anchor flex flex--hor-center flex--ver-center flex--dir-column">
                                <span class="figure__anchor-bg lazyload lazyload--background"
                                      data-src="{{ URL::asset('images/media/1151/om-banner1.jpg') }}" 
                                      data-src-xs="{{ URL::asset('images/media/1151/om-banner1.jpg') }}" 
                                      data-src-ms="{{ URL::asset('images/media/1151/om-banner1.jpg') }}" 
                                      data-src-sm="{{ URL::asset('images/media/1151/om-banner1.jpg') }}" 
                                      data-src-md="{{ URL::asset('images/media/1151/om-banner1.jpg') }}">
                                </span>
                            <span class="headline headline--large">Next news</span>
                            <span class="text"></span>
                            <span class="btn btn--white"><span class="btn__text">Read next</span></span>
                        </a>
                </figure>
            </div>
        </div>
    </div>
</section>