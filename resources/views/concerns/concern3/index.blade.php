@extends('layouts.app')
@section('content')

      <div>
         <section class="module-banner module-banner--sm">
            <figure class="module-banner__figure lazyload lazyload--background"
               data-src="{{ URL::asset('images/media/1171/a1.jpg?width=1920') }}"
               data-src-xs="{{ URL::asset('images/media/1171/a4.jpg?width=600') }}"
               data-src-ms="{{ URL::asset('images/media/1171/a3.jpg?width=800') }}"
               data-src-sm="{{ URL::asset('images/media/1171/a2.jpg?width=1024') }}"
               data-src-md="{{ URL::asset('images/media/1171/a2.jpg?width=1024') }}">
            </figure>
            <div class="module-banner__content
                  position-horizontal--left position-vertical--bottom
                  theme--light
                  ">
    
            </div>
         </section>
         <div class="umb-grid">
            <div class="grid-section">
               <div class="">
                  <div class='container'>
                     <div class="row clearfix-">
                        <div class="col-md-3 column">
                           <div class="">
                              <nav class="navigation navigation-simple navigation--left">
                                 <ul class="navigation__ul">
                                    <li class="navigation__li ">
                                       <a href="{{ URL::asset('concerns/concern1/index') }}"
                                          class="navigation__anchor navigation__anchor--">
                                          <span class="navigation__anchor-circle"></span>
                                          <span class="navigation__anchor-text" style="color: #000;">Super Refinery (Pvt.) Limited</span>
                                       </a>
                                    </li>
                                    <li class="navigation__li ">
                                       <a href="{{ URL::asset('concerns/concern2/index') }}" class="navigation__anchor navigation__anchor--">
                                          <span class="navigation__anchor-circle"></span>
                                          <span class="navigation__anchor-text"style="color: #000;">Super Tel Ltd</span>
                                       </a>
                                    </li>
                                    <li class="navigation__li ">
                                       <a href="{{ URL::asset('concerns/concern3/index') }}" class="navigation__anchor navigation__anchor--active">
                                          <span class="navigation__anchor-circle"></span>
                                          <span class="navigation__anchor-text"style="color: #000;">Super Sea Fish (Pvt.) Limited</span>
                                       </a>
                                    </li>
                                    <li class="navigation__li ">
                                       <a href="{{ URL::asset('concerns/concern4/index') }}" class="navigation__anchor navigation__anchor--">
                                          <span class="navigation__anchor-circle"></span>
                                          <span class="navigation__anchor-text"style="color: #000;">Elite Super Plastic Ind. (Pvt)
                                             Limited</span>
                                       </a>
                                    </li>
                                    <li class="navigation__li ">
                                       <a href="{{ URL::asset('concerns/concern5/index') }}" class="navigation__anchor navigation__anchor--">
                                          <span class="navigation__anchor-circle"></span>
                                          <span class="navigation__anchor-text"style="color: #000;">Elite Properties Management Ltd</span>
                                       </a>
                                    </li>
                                    <li class="navigation__li ">
                                       <a href="{{ URL::asset('concerns/concern6/index') }}" class="navigation__anchor navigation__anchor--">
                                          <span class="navigation__anchor-circle"></span>
                                          <span class="navigation__anchor-text"style="color: #000;">Super Shares & Securities Ltd</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <span class="navigation__active-dot"></span>
                              </nav>
                           </div>
                        </div>
  
                        <div class="col-md-6 column">
                           <div class="">
                              <section class="module-text
                                    position-horizontal--left position-vertical--center
                                    fade-in-up">
                                 <div class="text-area ">
                                    <h2 class="headline headline--medium"><span
                                          class="dash dash--after rte-color--orange">Super Sea Fish (Pvt.)
                                          Limited</span></h2>
                                    <!-- <h4 class="headline"><strong><br />World class management</strong></h4>
                                       <p>Managing assets has become increasingly complex. We have a complete understanding of the commercial, technical, financial and administrative management of renewable energy assets.</p>
                                       <p>Production of electricity in 2017 from assets under management totalled 218 GWh. Since 2012, Better Energy has established solar parks with a capacity of 164 MW.</p>
                                       <h4 class="headline"><strong><br />Full range of services</strong></h4>
                                       <p>Better Energy offers a wide range of services that are supported by our service technology centre. We monitor and manage all performance and commercial activities throughout the project life cycle. The goal is to achieve a higher asset value and reduce risk by optimising processes and on-the-ground performance.</p>
                                       <h4 class="headline"><br />Extensive in-house expertise</h4>
                                       <p>Customers can leverage our in-house technical, financial, legal, and O&amp;M expertise and create individual solutions tailored to meet their specific needs. Customers benefit from having highly trained professional teams proactively manage and operate their assets. Better Energy covers operational risk and optimises returns.</p> -->
                                    <p>Bangladesh is known worldwide for the beautiful range of diverse fishes and
                                       shrimps in our Bay of Bengal. After all, our national dish is fish curry and
                                       rice. Mr. Salim Ahmed, the founder of Super Sea Fish (Pvt.) Limited (SSFL) felt
                                       that it was the duty of Super Group to support the demand of our country through
                                       increasing the supply of fishes and prawns in our markets.
                                       </br></br>
                                       <b>SSFL</b> commenced its business transaction with incorporation of RJSC,
                                       Chittagong dated on 8th April 2008. We are currently operating three fishing
                                       trawlers, one of which is dedicated for shrimp catching. Our trawlers engage
                                       their catching in the Exclusive Economic Zone (EEZ) of the long coastal area of
                                       the Bay of Bengal and marketing thereof in the local market. Our Branch Office is
                                       located in 29, Sadarghat Road, Chittagong.</p>

                                 </div>
                              </section>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>

      @stop
                   