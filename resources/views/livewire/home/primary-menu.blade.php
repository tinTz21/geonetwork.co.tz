<div style="background-color: transparent;">
    {{-- Maranatha --}}
    <style type="text/css">
        /* Dropdown Button */
.dropbtn {
  background-color: transparent;
  color: #FFFFFF;
  padding: 5px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #357476;
  color: #FFFFFF;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: #FFFFFF;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #000000;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #000;}

@media only screen and (min-width: 1224px){
    .center-menu{
        
    }
}
</style>
    <nav class="navbar navbar-expand-lg " style="background-image: url('/uploads/front/front2.jpg'); background-position-y: 200em; box-shadow: inset 10px 0 40px 1000px rgba(25, 100, 100, 0.7);">
            <div class="container-fluid" style="padding: 1em;">
                <a href="/" class="navbar-brand text-light" style="font-size: 1.6em; font-weight: 300px;">
                        <b>
                            Geo Network ltd
                        </b>
                  {{-- <img src="/images/logo.PNG" width="180em" height="50em"> --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse center-menu d-flex justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" style="color: #FFFFFF;" aria-current="page" href="{{route('home-about')}}">
                            <b>ABOUT</b>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link"  style="color: #FFFFFF;" href="{{route('home-contact')}}">
                            <b>CONTACT US</b>
                        </a>
                      </li>
                      <li class="nav-item">

                        {{-- <a class="nav-link" style="color: #FFFFFF;" href="{{route('home-product')}}"><b>PRODUCTS AND SOLUTIONS</b></a> --}}
                        <div class="dropdown">
                          <button class="dropbtn">
                              <b>
                                  VISIT OUR SERVICES
                              </b>
                          </button>
                          <div class="dropdown-content">
                            @foreach(\App\Models\ProductCategory::all() as $menu)
                                <a href="{{route('category',$menu->id)}}">
                                   <i class="bi bi-bookmarks"></i>
                                    {{ Illuminate\Support\Str::limit($menu->name, 22) }}
                                </a>
                            @endforeach
                          </div>
                        </div>

                      </li>
                      {{-- <li class="nav-item">
                        <a class="nav-link" style="color: #017C7A;" href="{{route('home-career')}}"><b>CAREERS</b></a>
                      </li> --}}
                      <li class="nav-item">
                        <a class="nav-link" style="color: #FFFFFF;" href="{{route('home-news')}}">
                            <b>GALLERY</b>
                        </a>
                      </li>
                    </ul>
                    {{-- <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> --}}
                    
                </div>
            </div>
        </nav>
</div>

