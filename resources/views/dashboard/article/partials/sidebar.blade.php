<div class="page-head-blog">
    <div class="single-blog-page">
      <!-- search option start -->
      <form action="/articles">
        <div class="search-option">
          <input type="text" placeholder="Search..." name="search" value="{{ request('search') }}">
          <button class="button" type="submit">
            <i class="bi bi-search"></i>
          </button>
        </div>
      </form>
      <!-- search option end -->
    </div>
    <div class="single-blog-page">
      <!-- recent start -->
      <div class="left-blog">
        <h4>recent post</h4>
        <div class="recent-post">
          @foreach($recentarticles as $recent)
            <div class="recent-single-post">
              <div class="post-img">
                <a href="/articles/{{ $recent->slug }}">
                  <img src="/assets/img/blog/1.jpg" alt="">
                </a>
              </div>
              <div class="pst-content">
                <p><a href="/articles/{{ $recent->slug }}">{{ $recent->title }}</a></p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <!-- recent end -->
    </div>
    <div class="single-blog-page">
      <div class="left-blog">
        <h4>categories</h4>
        <ul>
          @foreach ($articlecategories as $articlecategory)
            <li>
              <a class="" href="/articles/categories/{{ $articlecategory->slug }}">{{ $articlecategory->name }}</a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    {{-- <div class="single-blog-page">
      <div class="left-blog">
        <h4>archive</h4>
        <ul>
          <li>
            <a href="#">07 July 2016</a>
          </li>
          <li>
            <a href="#">29 June 2016</a>
          </li>
          <li>
            <a href="#">13 May 2016</a>
          </li>
          <li>
            <a href="#">20 March 2016</a>
          </li>
          <li>
            <a href="#">09 Fabruary 2016</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="single-blog-page">
      <div class="left-tags blog-tags">
        <div class="popular-tag left-side-tags left-blog">
          <h4>popular tags</h4>
          <ul>
            <li>
              <a href="#">Portfolio</a>
            </li>
            <li>
              <a href="#">Project</a>
            </li>
            <li>
              <a href="#">Design</a>
            </li>
            <li>
              <a href="#">Website</a>
            </li>
            <li>
              <a href="#">Joomla</a>
            </li>
            <li>
              <a href="#">Html</a>
            </li>
            <li>
              <a href="#">wordpress</a>
            </li>
            <li>
              <a href="#">Masonry</a>
            </li>
          </ul>
        </div>
      </div>
    </div> --}}
  </div>
  <!-- End left sidebar -->