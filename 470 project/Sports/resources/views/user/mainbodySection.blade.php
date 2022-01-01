




<section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="assets/images/image1.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Cricket</span>
                      <a href="#"><h4>Sakib's boldness: Arrogance justified or nor</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Jawaril</a></li>
                        <li><a href="#">December 28, 2021</a></li>
                        
                      </ul>
                      <p>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</p>

                      @if(Auth::user()->subscriptionStatus=='0')
                      @auth
                      <a style="background-color:black;" href="subscribe" class="btn btn-primary">Read More</a>
                      @endauth
                      @else
                      @auth

                      <a style="background-color:black;" href="\article1" class="btn btn-primary">Read More</a>

                      @endauth

                      @endif



                               

                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Article</a></li>
                              
                              
                              
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="assets/images/image2.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Football</span>
                      <a href="post-details.html"><h4>English Premier League: A Money Making Monopoly</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Munshad</a></li>
                        <li><a href="#">November 28, 2021</a></li>
                        <li><a href="#">36 Comments</a></li>
                      </ul>
                      <p>BBBBBBBBBBBBBBBBB</p>

                      @if(Auth::user()->subscriptionStatus=='0')
                      @auth
                      <a style="background-color:black;" href="subscribe" class="btn btn-primary">Read More</a>
                      @endauth
                      @else
                      @auth

                      <a style="background-color:black;" href="\article2" class="btn btn-primary">Read More</a>

                      @endauth

                      @endif
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Article</a></li>
                             
                            
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#">Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="assets/images/image3.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Others</span>
                      <a href="post-details.html"><h4>Max Verstappen: The latest WDC</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Abedin</a></li>
                        <li><a href="#">October 28, 2021</a></li>
                        <li><a href="#">48 Comments</a></li>
                      </ul>
                      <p>CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC</p>

                      @if(Auth::user()->subscriptionStatus=='0')
                      @auth
                      <a style="background-color:black;" href="subscribe" class="btn btn-primary">Read More</a>
                      @endauth
                      @else
                      @auth

                      <a style="background-color:black;" href="\article3" class="btn btn-primary">Read More</a>

                      @endauth

                      @endif

                     





                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">

                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Article</a>,</li>
                              
                              
                            </ul>
                          </div>
                          
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#">Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="post-details.html">
                          <h5>Sakib's boldness: Arrogance justified or nor</h5>
                          <span>December 28, 2021</span>
                        </a></li>
                        <li><a href="post-details.html">
                          <h5>English Premier League: A Money Making Monopoly</h5>
                          <span>November 28, 2021</span>
                        </a></li>
                        <li><a href="post-details.html">
                          <h5>Max Verstappen: The latest WDC</h5>
                          <span>October 28, 2021</span>
                        </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">- Cricket</a></li>
                        <li><a href="#">- Football</a></li>
                        <li><a href="#">- Others</a></li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
