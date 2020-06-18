
      <div class="container">
         <div class="row">
            <div class="col-xs-4">
            <a href="{{ URL::asset('/') }}" class="logo-change"></a> <!-- this is for logo changing -->

            </div>
            <div class="col-xs-8 text-align--right">
               <!-- <form action="#" method="post" class="form form--rounded-corners theme--light main-nav__search">
                  <input placeholder="Search here..." type="search" class="main-nav__search-input">
                  <button name="submit" type="submit" class="main-nav__search-btn">
                     <svg class="icon icon--search">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{ URL::asset('images/icons.svg#icon-search') }}">
                        </use>
                     </svg>
                  </button>
               </form> -->
               <!-- <label class="main-nav__search-icon" for="nav-main--search-trigger">
                  <svg class="icon icon--search">
                     <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{ URL::asset('images/icons.svg#icon-search') }}">
                     </use>
                  </svg>
               </label> -->
               <label class="nav-burger" for="nav-main--trigger">
                  <span class="nav-burger__line"></span>
                  <span class="nav-burger__line"></span>
                  <span class="nav-burger__line"></span>
               </label>
            </div>
         </div>
      </div>
      <nav class="main-nav backgroundGradientRoyalBlue animated-bg">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-6 position--initial">
                  <div class="main-nav__contact">
                     <!-- Press Contact START -->
                     <div class="main-nav__contact-press">
                        <h4 class="headline dash dash--after loaded">Reach Us</h4>
                        <ul class="main-nav__contact-list">
                           <li class="main-nav__contact-list-item">
                              <svg class="icon">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="{{ URL::asset('images/icons.svg#icon_person') }}"></use>
                              </svg>
                              <span class="opacity-075">
                                 Elite House, CDA Avenue, G.P.O Box #395, Nasirabad, Chittagong, Bangladesh
                              </span>
                           </li>
                           <li class="main-nav__contact-list-item">
                              <svg class="icon">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="{{ URL::asset('images/icons.svg#ikoner_telefon') }}"></use>
                              </svg>
                              <span itemprop="telephone">
                                 <a href="tel:+880312556350</a>">+88-031-2556350-52</a>
                              </span>
                           </li>
                           <li class="main-nav__contact-list-item">
                              <svg class="icon">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="{{ URL::asset('images/icons.svg#ikoner_mail') }}"></use>
                              </svg>
                              <a href="mailto:info@supergroupbd.com">info@supergroupbd.com</a>
                           </li>
                        </ul>
                        <br />
                     </div>
                     <!-- Press Contact END -->
                     <h4 class="headline dash dash--after loaded">Head Office</h4>
                     <ul class="main-nav__contact-list">
                        <li class="main-nav__contact-list-item">
                           <svg class="icon">
                              <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xlink:href="{{ URL::asset('images/icons.svg#ikoner_telefon') }}"></use>
                           </svg>
                           <span itemprop="telephone">
                              <a href="tel:+880-31-2550447">+88-031-2550447</a>
                           </span>
                        </li>
                        <li class="main-nav__contact-list-item">
                           <svg class="icon">
                              <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xlink:href="{{ URL::asset('images/icons.svg#ikoner_mail') }}"></use>
                           </svg>
                           <a href="tel:+880-31-2550447">Fax: +88-031-2550447</a>
                           <a href="mailto:info@betterenergy.dk">info@supergroupbd.com</a>
                        </li>
                     </ul>
                     <div class="social">
                        <a href="https://www.facebook.com/supergroupbd/">
                           <img src="{{ URL::asset('images/media/logo/fb.png') }}">
                        </a>
                        <a href="https://www.instagram.com/be_betterenergy/">
                           <img src="{{ URL::asset('images/media/logo/inst.png') }}">
                        </a>
                        <a href="https://dk.linkedin.com/company/be-better-energy">
                           <img src="{{ URL::asset('images/media/logo/linkedin.png') }}">
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 text-align--right position--initial-">
                  <nav class="navigation navigation-simple navigation--theme-light navigation--right navigation--large">
                     <ul class="navigation__ul">
                       <!--  <li class="navigation__li navigation__li">
                           <a href="{{ URL::asset('news/index') }}" class="navigation__anchor navigation__anchor">
                              <span class="navigation__anchor-circle"></span>
                              <span class="navigation__anchor-text">News</span>
                           </a>
                        </li> -->
                        <li class="navigation__li navigation__li--parent">
                           <a href="#" class="navigation__anchor navigation__anchor">
                              <span class="navigation__anchor-circle"></span>
                              <span class="navigation__anchor-text">Group Concerns</span>
                           </a>
                           <ul class="navigation__sub-ul">
                              <li class="navigation__sub-li">
                                 <a href="{{ URL::asset('concerns/concern1/index') }}" class="navigation__sub-anchor">SUPER REFINERY
                                    (PVT.) Limited</a>
                              </li>
                              <li class="navigation__sub-li">
                                 <a href="{{ URL::asset('concerns/concern2/index') }}" class="navigation__sub-anchor">Super Tel Limited</a>
                              </li>
                               <li class="navigation__sub-li">
                                 <a href="{{ URL::asset('concerns/concern6/index') }}" class="navigation__sub-anchor">Super Shares &
                                    Securities Limited</a>
                              </li>                              
                              <li class="navigation__sub-li">
                                 <a href="{{ URL::asset('concerns/concern3/index') }}" class="navigation__sub-anchor">Super Sea Fish
                                    (Pvt.) Limited</a>
                              </li>
                              <li class="navigation__sub-li">
                                 <a href="{{ URL::asset('concerns/concern4/index') }}" class="navigation__sub-anchor">Elite Super
                                    Plastic Ind. (Pvt) Limited</a>
                              </li>
                              <li class="navigation__sub-li">
                                 <a href="{{ URL::asset('concerns/concern5/index') }}" class="navigation__sub-anchor">Elite Properties
                                    Management Limited</a>
                              </li>
                              <li class="navigation__sub-li">
                                 <a href="#" class="navigation__sub-anchor">Super Silica Bangladesh Limited</a>
                              </li>                             
                           </ul>
                        </li>
                        <li class="navigation__li navigation__li--parent">
                           <a href="#" class="navigation__anchor navigation__anchor">
                              <span class="navigation__anchor-circle"></span>
                              <span class="navigation__anchor-text">About us</span>
                           </a>
                           <ul class="navigation__sub-ul">
                               <li class="navigation__sub-li">
                                 <a href="{{ URL::asset('about-us/profile/index') }}" class="navigation__sub-anchor">Details</a>
                              </li>
                              <li class="navigation__sub-li">
                                 <a href="{{ URL::asset('about-us/manifesto/index') }}" class="navigation__sub-anchor">Our History</a>
                              </li>
                             <!--  <li class="navigation__sub-li">
                                 <a href="{{ URL::asset('about-us/careers/index') }}" class="navigation__sub-anchor">Careers</a>
                              </li>  -->                           
                             
                               <!--  <li class="navigation__sub-li">
                                 <a href="{{ URL::asset('about-us/annual-reports/index') }}" class="navigation__sub-anchor">Annual Reports</a>
                              </li> -->
                              <!-- <li class="navigation__sub-li">
                                 <a href="{{ URL::asset('about-us/people/index') }}" class="navigation__sub-anchor">People</a>
                              </li> -->
                           </ul>
                        </li>
                        <!-- <li class="navigation__li navigation__li--parent">
                           <a href="{{ URL::asset('gallery/index') }}" class="navigation__anchor navigation__anchor">
                              <span class="navigation__anchor-circle"></span>
                              <span class="navigation__anchor-text">Gallery</span>
                           </a>
                         
                        </li> -->
                        <li class="navigation__li navigation__li">
                           <a href="{{ URL::asset('contact/index') }}" class="navigation__anchor navigation__anchor">
                              <span class="navigation__anchor-circle"></span>
                              <span class="navigation__anchor-text">Contact</span>
                           </a>
                        </li>
                     </ul>
                     <span class="navigation__active-dot"></span>
                  </nav>
               </div>
            </div>
         </div>
         <div class="main-nav__copyright">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12 text-align--left">
                     &#169; Battery Low Interacitve Ltd.
                     &nbsp;
                  </div>
               </div>
            </div>
         </div>
      </nav>
