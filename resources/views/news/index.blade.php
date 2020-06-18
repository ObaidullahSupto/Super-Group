@extends('layouts.app')
@section('content')

<main>
   <section class="module-banner module-banner--sm">
      <figure class="module-banner__figure lazyload lazyload--background"
         data-src="{{ URL::asset('images/media/1252/banner_news-22665.jpg') }}"?width=1920"
         data-src-xs="{{ URL::asset('images/media/1252/banner_news-2bd67.jpg') }}"?width=600"
         data-src-ms="{{ URL::asset('images/media/1252/banner_news-2775f.jpg') }}"?width=800"
         data-src-sm="{{ URL::asset('images/media/1252/banner_news-2cbab.jpg') }}"?width=1024"
         data-src-md="{{ URL::asset('images/media/1252/banner_news-2cbab.jpg') }}"?width=1024">
      </figure>
      <div class="module-banner__content
         position-horizontal--left position-vertical--center
         theme--light
         ">
         <div class="container ">
            <div class="row">
               <div class="col-md-9 col-xs-12 text-position">
                  <div class="text-area">
                     <h1 class="headline headline--hero big-dash big-dash--after">
                        News
                     </h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="module-news-highlights">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="module-news-highlights__box">
                  <div class="module-news-highlights__item module-news-highlights__item--lg module-news-highlights__carousel owl-carousel">
                     <a href="{{ URL::asset('#news/news-single/index') }}" class="module-news-highlights__item module-news-highlights__item--lg">
                     <span class="module-news-highlights__item-bg lazyload lazyload--background"
                        data-src="{{ URL::asset('images/media/1368/better-energy-annual-report-2018.jpg') }}"
                        data-src-xs="{{ URL::asset('images/media/1368/better-energy-annual-report-2018.jpg') }}"
                        data-src-ms="{{ URL::asset('images/media/1368/better-energy-annual-report-2018.jpg') }}"
                        data-src-sm="{{ URL::asset('images/media/1368/better-energy-annual-report-2018.jpg') }}"
                        data-src-md="{{ URL::asset('images/media/1368/better-energy-annual-report-2018.jpg') }}">
                     </span>
                     <span class="module-news-highlights__item-text">
                     <span class="module-news-highlights__item-title">BETTER ENERGY DELIVERS ANOTHER YEAR OF CLEAN ENERGY PROGRESS</span>
                     <span class="module-news-highlights__item-date">10 April 2019</span>
                     </span>
                     </a>
                     <a href="{{ URL::asset('#news/news-single/index') }}" class="module-news-highlights__item module-news-highlights__item--lg">
                     <span class="module-news-highlights__item-bg lazyload lazyload--background"
                        data-src="{{ URL::asset('images/media/1270/photo_by_nrep_logicenters.jpg') }}"
                        data-src-xs="{{ URL::asset('images/media/1270/photo_by_nrep_logicenters.jpg') }}"
                        data-src-ms="{{ URL::asset('images/media/1270/photo_by_nrep_logicenters.jpg') }}"
                        data-src-sm="{{ URL::asset('images/media/1270/photo_by_nrep_logicenters.jpg') }}"
                        data-src-md="{{ URL::asset('images/media/1270/photo_by_nrep_logicenters.jpg') }}">
                     </span>
                     <span class="module-news-highlights__item-text">
                     <span class="module-news-highlights__item-title">LOGICENTERS PLANS ROOFTOP SOLAR TO POWER FACILITIES IN DENMARK</span>
                     <span class="module-news-highlights__item-date">08 February 2019</span>
                     </span>
                     </a>
                     <a href="{{ URL::asset('#news/news-single/index') }}" class="module-news-highlights__item module-news-highlights__item--lg">
                     <span class="module-news-highlights__item-bg lazyload lazyload--background"
                        data-src="{{ URL::asset('images/media/1171/om-banner1.jpg') }}"
                        data-src-xs="
                        data-src-ms="
                        data-src-sm="
                        data-src-md=">
                     </span>
                     <span class="module-news-highlights__item-text">
                     <span class="module-news-highlights__item-title">RESTAURANT CHAIN COFOCO PARTNERING WITH BETTER ENERGY</span>
                     <span class="module-news-highlights__item-date">16 July 2018</span>
                     </span>
                     </a>
                     <a href="{{ URL::asset('#news/news-single/index') }}" class="module-news-highlights__item module-news-highlights__item--lg">
                     <span class="module-news-highlights__item-bg lazyload lazyload--background"
                        data-src="{{ URL::asset('images/media/1173/green-power_1_ny.jpg') }}"
                        data-src-xs="{{ URL::asset('images/media/1173/green-power_1_ny.jpg') }}"
                        data-src-ms="{{ URL::asset('images/media/1173/green-power_1_ny.jpg') }}"
                        data-src-sm="{{ URL::asset('images/media/1173/green-power_1_ny.jpg') }}"
                        data-src-md="{{ URL::asset('images/media/1173/green-power_1_ny.jpg') }}">
                     </span>
                     <span class="module-news-highlights__item-text">
                     <span class="module-news-highlights__item-title">BETTER ENERGY SECURES FINANCE FOR 19 MW IN UKRAINE</span>
                     <span class="module-news-highlights__item-date">13 June 2018</span>
                     </span>
                     </a>
                  </div>
                  <a href="{{ URL::asset('#news/news-single/index') }}" class="module-news-highlights__item module-news-highlights__item--md">
                  <span class="module-news-highlights__item-bg lazyload lazyload--background"
                     data-src="{{ URL::asset('images/media/1270/photo_by_nrep_logicenters.jpg') }}">
                  </span>
                  <span class="module-news-highlights__item-text">
                  <span class="module-news-highlights__item-title">LOGICENTERS PLANS ROOFTOP SOLAR TO POWER FACILITIES IN DENMARK</span>
                  <span class="module-news-highlights__item-date">08 February 2019</span>
                  </span>
                  </a>
                  <a href="{{ URL::asset('#news/news-single/index') }}" class="module-news-highlights__item module-news-highlights__item--sm">
                  <span class="module-news-highlights__item-bg lazyload lazyload--background"
                     data-src="{{ URL::asset('images/media/1269/ganska_ukraine.png') }}">
                  </span>
                  <span class="module-news-highlights__item-text">
                  <span class="module-news-highlights__item-title">DANISH SDG INVESTMENT FUND KICKS OFF WITH BETTER ENERGY SOLAR PROJECT</span>
                  <span class="module-news-highlights__item-date">25 January 2019</span>
                  </span>
                  </a>
                  <a href="{{ URL::asset('#news/news-single/index') }}" class="module-news-highlights__item module-news-highlights__item--sm">
                  <span class="module-news-highlights__item-bg lazyload lazyload--background"
                     data-src="{{ URL::asset('images/media/1268/banner_mv2.jpg') }}">
                  </span>
                  <span class="module-news-highlights__item-text">
                  <span class="module-news-highlights__item-title">OFF-GRID SWEDISH HOUSING BLOCK POWERED 100% BY SUN AND HYDROGEN</span>
                  <span class="module-news-highlights__item-date">21 December 2018</span>
                  </span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="module-news">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="text-area dash dash--after dash--blue flex flex--space-between">
                  <h2 class="headline headline headline--medium no-margin--top no-margin--bottom">Latest news</h2>
                  <form class="search-news-form search-form form form--rounded-corners">
                     <input type="search" class="search-form__input" placeholder="Search our archive" />
                     <button type="submit" class="search-form__button">
                        <svg class="icon">
                           <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{ URL::asset('images/icons.svg#icon-search') }}"></use>
                        </svg>
                     </button>
                  </form>
               </div>
               <ul class="module-news__ul">
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('news/AA-32-mw-solar-boosts-danmarks-green-transition/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1223/better-energy-vollerup-denmark.png') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">04 October 2018</span>
                                    <h3 class="headline">32 MW SOLAR BOOSTS DANMARK&#39;S GREEN TRANSITION</h3>
                                    <p>Denmark will soon be getting another boost of green energy from two Better Energy solar PV projects. Both parks have received financing from the Danish Green Investment Fund and will be grid connected before end 2018.</p>
                                    <a href="{{ URL::asset('news/AA-32-mw-solar-boosts-danmarks-green-transition/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/news-single/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1368/better-energy-annual-report-2018.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">10 April 2019</span>
                                    <h3 class="headline">BETTER ENERGY DELIVERS ANOTHER YEAR OF CLEAN ENERGY PROGRESS</h3>
                                    <p>With new green energy capacity in Northern Europe and a historic milestone in the transition to a sustainable energy system in Denmark, Better Energy delivered solid results in 2018.</p>
                                    <a href="{{ URL::asset('#news/better-energy-delivers-another-year-of-clean-energy-progress/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/news-single/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1271/better-energy_heartland.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">13 February 2019</span>
                                    <h3 class="headline">HEARTLAND AND BETTER ENERGY ANNOUNCE SUBSIDY-FREE SOLAR POWER PLANT</h3>
                                    <p>A Better Energy solar power plant with a capacity over 125 MW has been ordered by HEARTLAND (BESTSELLER’s parent company). The power plant is expected to produce the equivalent of BESTSELLER’s global energy consumption for owned and operated buildings under a power purchase agreement (PPA).</p>
                                    <a href="{{ URL::asset('#news/heartland-and-better-energy-announce-subsidy-free-solar-power-plant/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/news-single/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1270/photo_by_nrep_logicenters.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">08 February 2019</span>
                                    <h3 class="headline">LOGICENTERS PLANS ROOFTOP SOLAR TO POWER FACILITIES IN DENMARK</h3>
                                    <p>Better Energy will install solar photovoltaic (PV) rooftop systems on five logistics facilities across Denmark for Logicenters. The project is Logicenters’ largest environmental investment to date and their first investment in solar energy.</p>
                                    <a href="{{ URL::asset('#news/logicenters-plans-rooftop-solar-to-power-facilities-in-denmark/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/news-single/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1269/ganska_ukraine.png') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">25 January 2019</span>
                                    <h3 class="headline">DANISH SDG INVESTMENT FUND KICKS OFF WITH BETTER ENERGY SOLAR PROJECT</h3>
                                    <p>The Danish SDG Investment Fund has made its first investment in a 19.1 megawatt Ukrainian solar park developed by Better Energy.</p>
                                    <a href="{{ URL::asset('#news/danish-sdg-investment-fund-kicks-off-with-better-energy-solar-project/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/news-single/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1268/banner_mv2.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">21 December 2018</span>
                                    <h3 class="headline">OFF-GRID SWEDISH HOUSING BLOCK POWERED 100% BY SUN AND HYDROGEN</h3>
                                    <p>The world\'s first energy self-sufficient housing complex is located in Vårgårda, Sweden where a block of 30 flats now runs entirely on solar energy and stored hydrogen.</p>
                                    <a href="{{ URL::asset('#news/off-grid-swedish-housing-block-powered-100-by-sun-and-hydrogen/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/restaurant-chain-cofoco-partnering-with-better-energy/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1171/om-banner1.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">16 July 2018</span>
                                    <h3 class="headline">RESTAURANT CHAIN COFOCO PARTNERING WITH BETTER ENERGY</h3>
                                    <p>In a new type of partnership with Better Energy, Cofoco has become co-owner of a Better Energy solar park that produces enough power to more than cover the energy needs of all its restaurants, now and far into the future.</p>
                                    <a href="{{ URL::asset('#news/restaurant-chain-cofoco-partnering-with-better-energy/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/better-energy-secures-finance-for-19-mw-in-ukraine/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1173/green-power_1_ny.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">13 June 2018</span>
                                    <h3 class="headline">BETTER ENERGY SECURES FINANCE FOR 19 MW IN UKRAINE</h3>
                                    <p>NEFCO and Danish company Better Energy have signed a loan agreement for the construction of Phase 1 of a 19 MW solar park in Western Ukraine. The total investment amounts to EUR 6.6 million.</p>
                                    <a href="{{ URL::asset('#news/better-energy-secures-finance-for-19-mw-in-ukraine/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/a-power-boost-for-solar-energy-and-green-trade/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1128/community.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">05 June 2018</span>
                                    <h3 class="headline">A POWER BOOST FOR SOLAR ENERGY AND GREEN TRADE</h3>
                                    <p>Better Energy continues to make its mark, delivering more than 85% of Denmark’s large-scale solar systems in 2017, achieving strong financial results and exporting green technology in four new countries abroad.</p>
                                    <a href="{{ URL::asset('#news/a-power-boost-for-solar-energy-and-green-trade/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/better-energy-and-atsolar-will-make-solar-energy-more-affordable/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1180/ats3-1400x552.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">28 June 2017</span>
                                    <h3 class="headline">BETTER ENERGY AND ATSOLAR WILL MAKE SOLAR ENERGY MORE AFFORDABLE</h3>
                                    <p>Better Energy teams up with long-standing partners from ATsolar in strategic global partnership. Together, they are tailoring finance and technology solutions to drive down the cost of going green and solar.</p>
                                    <a href="{{ URL::asset('#news/better-energy-and-atsolar-will-make-solar-energy-more-affordable/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/better-energy-pioneers-new-ecopark-concept/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1172/ny_ipp.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">04 April 2018</span>
                                    <h3 class="headline">BETTER ENERGY PIONEERS NEW ECOPARK CONCEPT</h3>
                                    <p>Since 2015, Better Energy has been developing its Better Energy EcoPark concept. In 2016, livestock started grazing on solar parks in Denmark and Germany which doubled the land use. Now they are taking it to a whole new level.</p>
                                    <a href="{{ URL::asset('#news/better-energy-pioneers-new-ecopark-concept/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/new-partners-nrgi-and-better-energy-count-on-solar/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1157/utility.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">11 December 2017</span>
                                    <h3 class="headline">NEW PARTNERS NRGI AND BETTER ENERGY COUNT ON SOLAR</h3>
                                    <p>Danish utility NRGi has invested a double-digit million-euro amount in a new partnership with Better Energy. They share ambitious plans to advance clean energy, including Denmark’s third largest solar park.</p>
                                    <a href="{{ URL::asset('#news/new-partners-nrgi-and-better-energy-count-on-solar/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/better-energy-establishes-business-in-the-netherlands/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1175/img_0195-jsi-1400x711.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">09 October 2017</span>
                                    <h3 class="headline">BETTER ENERGY ESTABLISHES BUSINESS IN THE NETHERLANDS</h3>
                                    <p>Amsterdam will be home base for Better Energy Nederland B.V., providing the Dutch market with a full-service suite of solar PV services, including design, planning, development, financing construction, asset management and ongoing operation and maintenance.</p>
                                    <a href="{{ URL::asset('#news/better-energy-establishes-business-in-the-netherlands/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/horslunde-ii-solar-park-sets-new-standards/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1176/horslunde-phase-ii-better-energy-1400x635.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">27 September 2017</span>
                                    <h3 class="headline">HORSLUNDE II SOLAR PARK SETS NEW STANDARDS</h3>
                                    <p>Phase II of Horslunde solar park on the Danish island of Lolland has just been completed on schedule and evaluated as “outstanding” in the technical review.</p>
                                    <a href="{{ URL::asset('#news/horslunde-ii-solar-park-sets-new-standards/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/better-energy-secures-33-million-euro-loan-from-the-danish-green-investment-fund-to-build-denmark-s-third-largest-solar-park/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1080/home-oweners.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">04 September 2017</span>
                                    <h3 class="headline">BETTER ENERGY SECURES 33 MILLION EURO LOAN FROM THE DANISH GREEN INVESTMENT FUND TO BUILD DENMARK’S THIRD LARGEST SOLAR PARK</h3>
                                    <p>With funding from Danish Green Investment Fund, Better Energy is constructing a 63-hectare solar park in Nees, West Jutland.</p>
                                    <a href="{{ URL::asset('#news/better-energy-secures-33-million-euro-loan-from-the-danish-green-investment-fund-to-build-denmark-s-third-largest-solar-park/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/new-office-in-resilience-house/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1162/mark-augustenborg-oedum-better-energy-and-tata-speak-with-prime-minister-of-denmark-lars-loekke-rasmussen.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">28 August 2017</span>
                                    <h3 class="headline">NEW OFFICE IN RESILIENCE HOUSE</h3>
                                    <p>Better Energy expands with new office in Resilience House in Vejle, Denmark.</p>
                                    <a href="{{ URL::asset('#news/new-office-in-resilience-house/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/better-energy-signs-agreements-with-tata-power-solar-and-huawei-technologies/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1163/5677.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">28 August 2017</span>
                                    <h3 class="headline">BETTER ENERGY SIGNS AGREEMENTS WITH TATA POWER SOLAR AND HUAWEI TECHNOLOGIES</h3>
                                    <p>Tata Power Solar, India’s largest integrated solar company, and Huawei Technologies, a world leader in inverter technology, have established new contracts and partnerships aiming to support Better Energy’s vision and ambitious growth plans to increase installed capacity up to 1 GWh by 2020.</p>
                                    <a href="{{ URL::asset('#news/better-energy-signs-agreements-with-tata-power-solar-and-huawei-technologies/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/atsolar-wins-tenders-to-build-innovative-installations-at-two-of-denmark-s-largest-universities/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1177/dtu-1400x599.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">18 August 2017</span>
                                    <h3 class="headline">ATSOLAR WINS TENDERS TO BUILD INNOVATIVE INSTALLATIONS AT TWO OF DENMARK’S LARGEST UNIVERSITIES</h3>
                                    <p>Some of the brightest minds in Denmark at the Technological University of Denmark (DTU) and the University of Southern Denmark (SDU) soon will be supplied with green power from new rooftop installations.</p>
                                    <a href="{{ URL::asset('#news/atsolar-wins-tenders-to-build-innovative-installations-at-two-of-denmark-s-largest-universities/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/danish-minister-for-foreign-affairs-anders-samuelsen-visits-better-energy/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1178/michael-vater-and-anders-samuelsen-portrait-2.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">14 August 2017</span>
                                    <h3 class="headline">DANISH MINISTER FOR FOREIGN AFFAIRS ANDERS SAMUELSEN VISITS BETTER ENERGY</h3>
                                    <p>Anders Samuelsen met today with Michael Vater from Better Energy to discuss upcoming activities abroad.</p>
                                    <a href="{{ URL::asset('#news/danish-minister-for-foreign-affairs-anders-samuelsen-visits-better-energy/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/new-office-in-axel-towers/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1140/axt-2-1400x731.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">13 July 2017</span>
                                    <h3 class="headline">NEW OFFICE IN AXEL TOWERS</h3>
                                    <p>New office in Axel Towers</p>
                                    <a href="{{ URL::asset('#news/new-office-in-axel-towers/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/prysmian-signs-framework-agreement-with-better-energy/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1179/prysmian-denmark-e1499688701747-1400x595.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">06 July 2017</span>
                                    <h3 class="headline">PRYSMIAN SIGNS FRAMEWORK AGREEMENT WITH BETTER ENERGY</h3>
                                    <p>New cable supplier agreement will optimise procurement, reduce costs and ensure capacity for significant growth.</p>
                                    <a href="{{ URL::asset('#news/prysmian-signs-framework-agreement-with-better-energy/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="module-news__li">
                     <div class="module-news__item">
                        <div class="row">
                           <div class="col-ms-4 col-sm-3">
                              <a class="module-news__item-image" href="{{ URL::asset('#news/better-energy-participates-in-pv-roundtable-at-intersolar/index') }}">
                              <span class="content lazyload lazyload--background" data-src="{{ URL::asset('images/media/1161/unnamed.jpg') }}"></span>
                              </a>
                           </div>
                           <div class="col-ms-8 col-sm-9">
                              <div class="module-news__item-text">
                                 <div class="text-area">
                                    <span class="module-news__item-text-date">04 June 2017</span>
                                    <h3 class="headline">BETTER ENERGY PARTICIPATES IN PV ROUNDTABLE AT INTERSOLAR</h3>
                                    <p>Intersolar Europe is the world’s leading exhibition for the solar industry and it is held annually in Munich.</p>
                                    <a href="{{ URL::asset('#news/better-energy-participates-in-pv-roundtable-at-intersolar/index') }}" class="btn btn--blue"><span class="btn__text">Read more</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   </main>
@stop