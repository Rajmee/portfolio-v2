    <footer class="footer-area">
      <div class="container-fluid">
        <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
          <div class="footer-content">

                @if (!empty ($footer_settings->name))
                    <p class="footer-copyright-text">
                        Copyright © <?php echo date("Y"); ?>. <a href="{{$footer_settings->url}}" target="#">{{$footer_settings->name}}</a>
                        All right reserved. Developed by
                        <a href="https://getup.com.bd/" target="_blank">GetUp Ltd.</a>
                    </p>
                @endif

                @if (empty ($footer_settings->name))
                    <p class="footer-copyright-text">
                        Copyright © <?php echo date("Y"); ?>. <a href="#" target="#">Your name</a>
                        All right reserved. Developed by
                        <a href="https://getup.com.bd/" target="_blank">GetUp Ltd.</a>
                    </p>
                @endif

            {{-- <ul class="footer-content-list">
              <li><a href="{{route('user.blog-post.all')}}">Blogs/case</a></li> --}}
              {{-- <li><a href="#">Privacy policy</a></li>
              <li><a href="#">Terms of service</a></li> --}}
            {{-- </ul> --}}
          </div>
        </div>
      </div>
    </footer>
