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
                                          class="navigation__anchor navigation__anchor--active">
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
                                          class="dash dash--after rte-color--orange">Super Refinery (Pvt.)
                                          Limited</span></h2>
                                    <p><b>Super Refinery</b> began its operations in 1997 in Chittagong, Bangladesh
                                       being the first private sector refinery in the country. Through the processing of
                                       low density hydrocarbon liquids, the company is currently manufacturing <b>Motor
                                          Spirit, Diesel, Mineral Turpentine, and Special Boiling Point Solvents
                                          (SBPS).</b> We believe in developing the country and have entered into sale
                                       agreements with the <b>Bangladesh Petroleum Corporation (BPC)</b> for our Motor
                                       Spirit and Diesel. This ensures that the hard earned foreign currency of our
                                       country is not spent on the ever increasing demand for fuel.</p>

                                       <p>Furthermore, our hydrocarbon solvents such as Mineral Turpentine and SBPS are
                                       serving our private sectors in various industries ranging from paint
                                       manufacturers to garments. These chemicals are crucial raw materials for the
                                       respective industries and we strive to ensure that their day to day requirement
                                       is fulfilled with the best quality chemical. In 1997, we started our production
                                       with one unit maintaining a capacity of 90 MT per.</p>

                                       <p>Through the years, taking into consideration the increasing chemical demand,
                                       further two units were established holding a total capacity of 310MT per day.</p>

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