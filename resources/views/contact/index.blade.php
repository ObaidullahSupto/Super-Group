@extends('layouts.app')
@section('content')
    
         <div>
            <section class="module-banner module-banner--sm">
               <figure class="module-banner__figure lazyload lazyload--background"
                  data-src="{{ URL::asset('images/media/1171/b1.jpg?width=1920') }}"
                  data-src-xs="{{ URL::asset('images/media/1171/b3.jpg?width=600') }}"
                  data-src-ms="{{ URL::asset('images/media/1171/b4.jpg?width=800') }}"
                  data-src-sm="{{ URL::asset('images/media/1171/b2.jpg?width=1024') }}"
                  data-src-md="{{ URL::asset('images/media/1171/b2.jpg?width=1024') }}">
               </figure>
               <div class="module-banner__content
                  position-horizontal--left position-vertical--bottom
                  theme--light
                  ">
                  <div class="container ">
                     <div class="row">
                        <div class="col-md-9 col-xs-12 text-position">
                           <div class="text-area">
                              <h1 class="headline headline--hero big-dash big-dash--after" >
                                 Contact
                              </h1>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <div class="umb-grid">
               <div class="grid-section">
                  <div  class="">
                     <div class='container'>
                        <div class="row clearfix-">
                           <div class="col-md-3 column">
                              <div  class="">
                                 <nav class="navigation navigation-simple navigation--left">
                                    <ul class="navigation__ul">
                                       <li class="navigation__li ">
                                          <a href="{{ URL::asset('contact/index') }}" class="navigation__anchor navigation__anchor--active">
                                          <span class="navigation__anchor-circle"></span>
                                          <span class="navigation__anchor-text" style="color: #000;">Contact</span>
                                          </a>
                                       </li>
                                    </ul>
                                    <span class="navigation__active-dot"></span>
                                 </nav>
                              </div>
                           </div>
                           <div class="col-md-6 column">
                              <div  class="">
                                 <section class="module-text
                                    position-horizontal--left position-vertical--center
                                    fade-in-up">
                                    <div class="text-area ">
                                       <h2 class="headline headline--medium"><span class="rte-color--blue dash dash--after"><strong>Welcome to Super Group of Companies</strong></span></h2>
                                       <p><br />Super Group of Companies is one of the largest conglomerates in the country with interests in Petroleum Refining, Plastics, Share brokerage, Call centre & BPO, Trawler fishing and Real Estate. </p>

                                       <p><br />We believe will support the development of our country. The choice of our sectors reflects the group’s aim to move the country forward and allow it to be globally recognized.</p>
                                    </div>
                                 </section>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div  class="">
                     <div class='container'>
                        <div class="row clearfix-">
                           <div class="col-md-12 column">
                              <div  class="">
                                 <section class="module-map-contact">
                                    <div class="container container--100-pct">
                                       <div class="row">
                                          <div class="col-sm-12 module-map-contact__map-wrapper">
                                             <h2 class="headline headline--medium dash dash--after dash--blue" style="color: #fff;">Come find us</h2>
                                             <div><!-- id="map" -->
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1096.9914330798329!2d91.82197935018674!3d22.36024875654788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8855856b065%3A0x8dc2495e8c492e58!2sSuper%20Group%20Of%20Companies!5e0!3m2!1sen!2sbd!4v1581574242873!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br>
               </div>
            </div>           
         </div>
     @stop