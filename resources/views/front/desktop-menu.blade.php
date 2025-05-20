<ul class="">
                              <li class="main-nav  project-a-after">
                                 <a href="#"><span class="fa fa-home"></span> &nbsp; Home</a>
                              </li>
                              <li class="main-nav  project-a-after">
                                <a href="{{route('who-we-are')}}"><span class="fa fa-info"></span> &nbsp; Who We Are</a>
                             </li>
                              <li class="main-nav has-dropdown mega-menu">
                                 <a href="#">What We Do</a>
                                 <?php
                                    $Service1 = \App\Models\Service::orderBy('id','DESC')->limit('3')->get();
                                    $Service2 = \App\Models\Service::orderBy('id','ASC')->limit('2')->get();
                                 ?>
                                 <div class="rts-mega-menu service-mega-menu-style">
                                    <div class="wrapper">
                                       <div class="container">
                                          <div class="row g-5">
                                             <div class="col-lg-4">
                                                <ul class="mega-menu-item parent-nav">
                                                   @foreach ($Service1 as $service)
                                                      <li>
                                                         <a href="{{url('/')}}/service/{{$service->slung}}">
                                                            <div class="single-service-menu">
                                                               <div class="icon">
                                                                  <img src="{{asset('theme/assets/images/service/04.svg')}}" alt="service">
                                                               </div>
                                                               <div class="info">
                                                                  <h5 class="title">{{$service->title}}</h5>
                                                                  <p class="details">
                                                                     {{$service->mega}}
                                                                  </p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                      </li>
                                                   @endforeach
                                                   
                                                </ul>
                                             </div>
                                             <div class="col-lg-4">
                                                <ul class="mega-menu-item parent-nav">
                                                   @foreach ($Service2 as $service)
                                                      <li>
                                                         <a href="{{url('/')}}/service/{{$service->slung}}">
                                                            <div class="single-service-menu">
                                                               <div class="icon">
                                                                  <img src="{{asset('theme/assets/images/service/04.svg')}}" alt="service">
                                                               </div>
                                                               <div class="info">
                                                                  <h5 class="title">{{$service->title}}</h5>
                                                                  <p class="details">
                                                                     {{$service->mega}}
                                                                  </p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                      </li>
                                                   @endforeach
                                                  
                                                </ul>
                                             </div>
                                             <div class="col-lg-4">
                                                <div class="menu-thumb pl--20">
                                                   <img style="max-height:300px; width:100%; object-fit:cover" src="{{asset('theme/assets/images/service/service.jpeg')}}" alt="">  
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>

                              <li class="main-nav has-dropdown project-a-after">
                                 <a href="#"><span class="fa fa-shopping-cart"></span> &nbsp; Construction Material</a>
                                 <ul class="submenu parent-nav">
                                    <li><a href="#">Steel</a></li>
                                    <li><a href="#">Cement</a></li>
                                    <li><a href="#">Concrete</a></li>
                                    <li><a href="#">Ready Mix Concrete</a></li>
                                    <li class="sub-dropdown down">
                                       <a href="#">Binding Wire</a>
                                       <ul class="submenu third-lvl base">
                                          <li><a href="#">Constructional Binding Wire (Straightened Cut Wire)</a></li>
                                          <li><a href="#">Black Annealed Binding Wire</a></li>
                                          <li><a href="#">Galvanized Iron Binding Wire</a></li>
                                          <li><a href="#">Small Coil Rebar Wire</a></li>
                                          <li><a href="#">Tie Loop Tie Wire</a></li>
                                          <li><a href="#">Binding Wire for Packing</a></li>
                                          <li><a href="#">U Type Binding Wire</a></li>
                                          <li><a href="#">Galvanized Wire</a></li>
                                          <li><a href="#">Stainless Steel Wire</a></li>
                                          <li><a href="#">Brass Wire</a></li>
                                          <li><a href="#">Aluminum Wire</a></li>
                                          <li><a href="#">PVC Coated Binding Wire</a></li>
                                       </ul>
                                    </li>
                                    <li><a href="#">Wood</a></li>
                                    <li><a href="#">Stone</a></li>
                                    <li><a href="#">Bricks</a></li>
                                    <li><a href="#">Blocks</a></li>
                                    <li><a href="#">Aggregates</a></li>
                                 </ul>
                              </li>
                              <li class="main-nav">
                                 <a href="#"><span class="fa fa-briefcase"></span> &nbsp; Project</a>
                              </li>
                              <li class="main-nav">
                                 <a href="#"><span class="fa fa-newspaper"></span> &nbsp;  News & Updates</a>
                              </li>

                              <li class="main-nav"><a href="{{url('/')}}/contact-us"><span class="fa fa-address-book"></span> &nbsp;  Contact Us</a></li>
                           </ul>
