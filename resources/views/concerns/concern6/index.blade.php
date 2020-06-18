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
                                       <a href="{{ URL::asset('concerns/concern3/index') }}" class="navigation__anchor navigation__anchor--">
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
                                       <a href="{{ URL::asset('concerns/concern6/index') }}" class="navigation__anchor navigation__anchor--active">
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
                                          class="dash dash--after rte-color--orange">Super Shares & Securities
                                          Ltd</span></h2>
                                            <p><b>Super Shares & Securities Limited (SSSL)</b> started its journey in the
                                       capital market under Chittagong Stock Exchange Ltd. on 7th June, 2001.The
                                       Managing Director of SSSL, Mr. Salim Ahmed entered this sector believing in our
                                       country’s ability to use the capital markets as an effective tool for future
                                       development. It has already been positioned as a trusted brokerage house in the
                                       capital market of Bangladesh bearing the membership number 121067 of CSE.
                                       </br></br>
                                       <b>Nature of Business:</b>
                                       </br>
                                       We provide a platform for investors allowing them to trade in Shares and
                                       Securities and be active participants in the capital market. We know that there
                                       are various brokerage houses in the city; however, our strength of business lies
                                       in our ability to provide value added service. We think about our clients first,
                                       understanding their wants and needs and how we can help cater to their requests.
                                       </br></br>
                                       <b>Future Expansion:</b>
                                       </br>
                                       Our aim is to facilitate our investors to trade in the capital market. We hope to
                                       broaden our reach to our investors across the country, taking into consideration
                                       the diverse trading environment each city will bring us. We are continuously
                                       learning about the stock markets, analyzing price movement patterns and educating
                                       our clients about investing in the capital market. We aim to introduce phone and
                                       internet trading in the very near future. This will be highly beneficial for our
                                       clients who are actively involved in other businesses or jobs. SSSL’s motto is
                                       being a trusted capital house and through the guidance of Mr. Salim Ahmed, one of
                                       the most respected industrialists and a former C.I.P of Bangladesh, our investors
                                       can be assure of our continuous commitment towards meeting their needs.</p>

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