<!doctype html>
<html lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{ 'en'}}@endif"
    data-textdirection="{{ session()->get('locale') == 'ur' ? 'rtl' : 'ltr' }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>{{ trans('messages.siteTitle') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/sticky-footer-navbar.css')}}" rel="stylesheet">
    <link href="{{ asset($style) }}" rel="stylesheet">
  </head>

  <body>
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">{{ trans('messages.siteTitle') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/about">{{ trans('messages.about') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">{{ trans('messages.contact') }}</a>
            </li>
          </ul>
            <ul class="nav navbar-nav float-right">
                <li class="dropdown dropdown-language nav-item">
                <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon flag-icon-us"></i>
                    <span class="selected-language"><?php if(session()->get('locale')=='ur') {echo 'اردو';}else {echo 'English';}?></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                    <a class="dropdown-item" href="{{url('lang/en')}}" data-language="en">
                    <i class="flag-icon flag-icon-us"></i>English
                    </a>
                    <a class="dropdown-item" href="{{url('lang/ur')}}" data-language="ur">
                    <i class="flag-icon flag-icon-sa"></i>Urdu
                    </a>

                </div>
                </li>
            </ul>
          
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">{{ trans('messages.loremHeading') }}</h1>
      <p class="text-justify">
      {{ trans('messages.loremParagraph') }}
      </p>
    </main>

    <footer class="footer">
      <div class="container" style="text-align: center !important;">
        <span class="text-muted">{{ trans('messages.footerContent') }}</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{ asset('/js/popper.min.js')}}"></script>
    <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
  </body>
</html>