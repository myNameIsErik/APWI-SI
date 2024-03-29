<div class="page-head-blog">
    <div class="single-blog-page">
      <!-- search option start -->
      <form action="/elearnings">
        @if(request('articlecategory'))
          <input type="hidden" name="articlecategory" value="{{ request('articlecategory') }}">
        @endif
        
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
        <h4>recent moduls</h4>
        <div class="recent-post">
          <!-- start single post -->
          @foreach($recentmoduls as $recent)
            <div class="recent-single-post">
                <img src="/assets/img/file-logo.png" heigth="30" width="30">
                {{ $recent->title }}
                <a href="{{ asset( 'storage/' . $recent->file) }}" class="badge bg-success" download="">Download</a>
            </div>
          @endforeach
          <!-- End single post -->
        </div>
      </div>
      <!-- recent end -->
    </div>
    <div class="single-blog-page">
      <div class="left-blog">
        <h4>Categories</h4>
        <ul>
          @foreach($recentarticlecategories as $recentcategories)
            <li>
              <a href="/elearnings?articlecategory={{ $recentcategories->slug }}" style="word-wrap: break-word">{{ $recentcategories->name }}</a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <!-- End left sidebar -->