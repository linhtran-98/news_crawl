  <!-- Main Sidebar Container -->
  {{-- @dd($pending.' '.$approve.' '.$reject); --}}
  <aside class="main-sidebar sidebar-dark-primary elevation-4"  style="background: -webkit-linear-gradient(rgb(205, 240, 234), rgb(249, 249, 249), rgb(246, 198, 234), rgb(250, 244, 183));">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('/uploads/logo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light text-dark">Admin</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      {{-- <form action="#" method="GET"> --}}
        <div class="form-inline mt-3 mb-3">
          @if (isset($posts) && $posts->isEmpty())
            <div class="input-group">
              <marquee class="form-control border border-info text-success font-weight-bold">Có tin tức mới</marquee>
              <div class="input-group-append">
                <a href="{{route('scrape')}}" onclick="modal();" class="btn border border-info text-dark">
                  Crawl
                </a>
              </div>
            </div>
          @endif  
        </div>
      {{-- </form> --}}
      <div id="livesearch" class="d-flex flex-column" style="gap:3px;">
      </div>
      <!-- Sidebar Menu -->

      
      <!-- /.sidebar-menu -->
      
    </div>
    <!-- /.sidebar -->
  </aside>