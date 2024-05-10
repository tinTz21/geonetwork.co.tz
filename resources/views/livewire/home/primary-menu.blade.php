<div class="bg-light">
    {{-- Maranatha --}}
    <style type="text/css">
        /* Dropdown Button */
.dropbtn {
  background-color: #E9D097;
  color: #017C7A;
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
  background-color: #E9D097;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #FFF;}

@media only screen and (min-width: 1224px){
    .center-menu{
        padding-left: 15em;
    }
}
</style>
    <nav class="navbar navbar-expand-lg " style="background-color: #E9D097;">
            <div class="container-fluid" style="padding: 1em;">
                <a class="navbar-brand" href="/">
                  <img src="/images/logo.PNG" width="180em" height="50em">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse center-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto  mb-2 mb-lg-0 ">
                      <li class="nav-item">
                        <a class="nav-link" style="color: #017C7A;" aria-current="page" href="{{route('home-about')}}">
                            <b>About Us</b>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link"  style="color: #017C7A;" href="{{route('home-contact')}}">
                            <b>Contact Us</b>
                        </a>
                      </li>
                      <li class="nav-item">

                        {{-- <a class="nav-link" style="color: #E9D097;" href="{{route('home-product')}}"><b>PRODUCTS AND SOLUTIONS</b></a> --}}
                        <div class="dropdown">
                          <button class="dropbtn">
                              <b>
                                  Visit Our Services
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
                        <a class="nav-link" style="color: #017C7A;" href="{{route('home-news')}}">
                            <b>Gallery</b>
                        </a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    
                </div>
            </div>
        </nav>
</div>

