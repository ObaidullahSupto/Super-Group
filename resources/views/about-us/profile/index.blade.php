@extends('layouts.app')
@section('content')
    
      <div>
         <section class="module-banner module-banner--sm">
            <figure class="module-banner__figure lazyload lazyload--background"
               data-src="{{ URL::asset('images/media/1171/4.jpg?width=1920') }}"
               data-src-xs="{{ URL::asset('images/media/1171/4.jpg?width=600') }}"
               data-src-ms="{{ URL::asset('images/media/1171/4.jpg?width=800') }}"
               data-src-sm="{{ URL::asset('images/media/1171/4.jpg?width=1024') }}"
               data-src-md="{{ URL::asset('images/media/1171/4.jpg?width=1024') }}">
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
    
    <ul class="navigation__ul" id="selected_menu">
      <li class="navigation__li ">
            <a href="{{ URL::asset('about-us/profile/index') }}"
                class="navigation__anchor navigation__anchor--active">
                <span class="navigation__anchor-circle"></span>
                <span class="navigation__anchor-text" style="color:#000;">Details</span>
            </a>
        </li>
        <li class="navigation__li ">
            <a href="{{ URL::asset('about-us/manifesto/index') }}"
                class="navigation__anchor navigation__anchor--active">
                <span class="navigation__anchor-circle"></span>
                <span class="navigation__anchor-text" style="color:#000;">Our History</span>
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
                                          class="dash dash--after rte-color--orange">A bit Details About Us</span></h2>

                                    <p>In 1997, Super Group’s vision was created with the establishment of the first
                                       ever private sector refinery in Bangladesh. The goal was to develop the group
                                       into a premier business conglomerate. Now, Super Group of Companies consists of 6
                                       companies, with interests in petroleum, call centre, trawler fishing, plastics,
                                       share brokerage and housing development.
                                       Our motto is to enter into sectors which we believe will support the development
                                       of our country. The choice of our sectors reflects the group’s aim to move the
                                       country forward and allow it to be globally recognized.</p>
                                    </br></br>
                                    <h2 class="headline headline--medium"><span
                                          class="dash dash--after rte-color--orange">We hope that our ideas can be
                                          accessed</span></h2>
                                    <p>To do this, we have established our business operates in four, self-supporting
                                       manner:</p>
                                    </br></br>
                                    <h2 class="headline headline--medium"><span
                                          class="dash dash--after rte-color--orange">Our Goal</span></h2>
                                    <p>The goal was to develop the group of premier business conglomerate. Our Company
                                       consists of 6 companies, with interests in petroleum, call centre, fishing,
                                       plastics, share brokerage & housing.</p>
                                    <h2 class="headline headline--medium"><span
                                          class="dash dash--after rte-color--orange">Our Believe</span></h2>
                                    <p>we believe will support the development of our country. The choice of our sectors
                                       reflects the group’s aim to move the country forward and allow it to be globally
                                       recognized.</p>
                                    <h2 class="headline headline--medium"><span
                                          class="dash dash--after rte-color--orange">Our Achievement</span></h2>
                                    <p>we are currently running a 100 sector international and domestic call centre
                                       based in Dhaka. Some of our clients include Airtel, Unilever, Standard Chartered
                                       Bank and Elite Paint etc.</p>
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