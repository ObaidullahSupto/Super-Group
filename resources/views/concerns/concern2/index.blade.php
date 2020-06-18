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
                                       <a href="{{ URL::asset('concerns/concern2/index') }}" class="navigation__anchor navigation__anchor--active">
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
                                          class="dash dash--after rte-color--orange">Super Tel Ltd</span></h2>
                                   
                                          <p>SuperTel’s Top Management members have prior work experience in call center
                                       projects in India, Philippines, Australia, UK and USA. Our Experience is based on
                                       sound knowledge and technical-know-how to establish a successful call center in
                                       Bangladesh.</br>
                                       </br>

                                       <b>Mr. Salim Ahmed, Managing Director</br>
                                          </br>
                                          Mr. Shajir Ahmed, Deputy Managing Director</br>
                                          </br>

                                          Ms. Emrana Khan, CEO</br>
                                          </br>

                                          Why SuperTel ?</b></br>
                                       </br>

                                       In today’s economy, quality marketing, customer care and acquisition isn’t just
                                       important, it’s essential and often the difference between success and failure.
                                       No one knows this like SuperTel and with extensive experience and access to a
                                       number of Boardroom Level contacts, SuperTel has designed and implemented a
                                       number of successful solutions. At SuperTel we work with the right people, having
                                       access to the right technology and the right answers from extensive experience.
                                    </p>

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