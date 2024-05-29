<div wire:poll.visible style="margin-top: 0em;" >
<style type="text/css">
    .i-circle {
        display: inline-block;
        background-color: #017C7A;
        color: #fff;
        border-radius: 50%;
        font-size: 22px;
        line-height: 30px; /* set to same size as width, height */
        width: 30px;
        height: 30px;
        text-align: center;
    }
</style>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="container-fluid" >
        <!-- Slider div -->
        <div class="row image-fluid d-block" style="padding-top: 7em; background-image: url('/uploads/front/front2.jpg'); background-size: 100%; box-shadow: inset 10px 0 40px 1000px rgba(25, 100, 100, 0.7);">
            <div class="col-md-12 d-flex justify-content-center">
                <img src="/images/logo.PNG" width="220em" height="70em">
            </div>
            <div class="container-fluid d-flex justify-content-center" style="padding:4em">
                <h1 class="text-light">
                    WELCOME TO GEO NETWORK LIMITED TANZANIA.
                </h1>
            </div>

            <div class="container-fluid d-flex justify-content-center">
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="{{route('home-about')}}" class="btn btn-success btn-lg" style="border-radius: 3em; padding-right: 1em;">
                        ABOUT US
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{route('home-contact')}}" class="btn btn-danger btn-lg" style="border-radius: 3em;">
                        CONTACT US
                    </a>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center" style="padding-top: 8em; padding-bottom: 2em;">
                <p>
                    Down
                </p>
            </div>
        </div>
        <!-- End slider div -->

        <!-- The beggining of for the columns -->
        <div class="row d-flex justify-content-center">
            <div style="padding: 1em;" class="col-md-3 bg-secondary text-light ">
                <div class="col-md-12 d-flex justify-content-center">
                    <i class="bi-lightbulb text-light" style="font-size: 2rem;"></i>
                </div>
                <div class="col-md-12 d-flex justify-content-center" style="padding: 2em;">
                    <h3>
                        IDEATION
                    </h3>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <p>
                        Answer crucial business questions, plan the essential features of your product and reduce the risk of bringing a product to the market.
                    </p>
                </div>
            </div>
            <div style="padding: 1em;" class="col-md-3 bg-muted">
                <div class="col-md-12 d-flex justify-content-center">
                    <i class="bi-headset text-secondary" style="font-size: 2rem;"></i>
                </div>
                <div class="col-md-12 d-flex justify-content-center" style="padding: 2em;">
                    <h3>
                        YOUR SUPPORT
                    </h3>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <p>
                        We are with you all the way, from design to deployment, we make sure that every solution we deliver meets your expectations
                    </p>
                </div>
            </div>
            
            <div style="padding: 1em;" class="col-md-3 bg-warning">
                <div class="col-md-12 d-flex justify-content-center">
                    <i class="bi-scissors text-black" style="font-size: 2rem;"></i>
                </div>
                <div class="col-md-12 d-flex justify-content-center" style="padding: 2em;">
                    <h4>
                        TAILORED APPROACH
                    </h4>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <p>
                        Staying on schedule, scaling the team, ensuring product quality — Rahisi helps you keep track of crucial details without losing sight of the bigger picture
                    </p>
                </div>
            </div>

            <div style="padding: 1em;" class="col-md-3 bg-light text-primary">
                <div class="col-md-12 d-flex justify-content-center">
                    <i class="bi-link" style="font-size: 2rem;"></i>
                </div>
                <div class="col-md-12 d-flex justify-content-center" style="padding: 2em;">
                    <h3>
                        RELIABLE PARTNER
                    </h3>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <p>
                        Take advantage of our product know-how. With our vast experience in the market, we know how to turn your ideas into reality.
                    </p>
                </div>
            </div>
        </div>
        <!-- The end of for the columns -->

        <!-- Start About us -->
        <div class="container-fluid" style="padding: 4em;">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center" style="padding: 1em;">
                    <h1>
                        {{@$about->name}}
                    </h1>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <h5>
                        <label class="text-danger">SOLUTION</label> FOR YOUR BUSINESS
                    </h5>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 ">
                        <p>
                            {!! Illuminate\Support\Str::limit($about->description, 400) !!}
                        </p>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center" style="padding: 1em">
                    <a href="{{route('home-about')}}" class="btn btn-warning btn-lg" style="border-radius: 30em;">
                        SEE MORE...
                    </a>
                </div>
            </div>
            <div class="row" style="padding-top: 4em">
                <div class="col-md-4" style="padding-left:1em;">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="bi-lightbulb text-danger" style="font-size: 3rem;"></i>
                        </div>
                        <div class="col-md-10">
                            <h4>
                                <label class="text-warning">SOFTWARE</label> DEVELOPMENT
                            </h4>
                            <p>
                            Rahisi deploys world-class agile product teams on demand. Teams that can design, build, ship, and scale your vision in the most efficient way.

                            Our specialists create custom digital solutions, increasing the productivity of your business.

                            Work with top UI/UX professionals, product designers, full-stack developers, quality assurance specialists, and business analysts to supercharge your growth and ace your business goals.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="bi-lightbulb text-danger" style="font-size: 3rem;"></i>
                        </div>
                        <div class="col-md-10">
                            <h4>
                                <label class="text-warning">SOFTWARE</label> DEVELOPMENT
                            </h4>
                            <p>
                            Rahisi deploys world-class agile product teams on demand. Teams that can design, build, ship, and scale your vision in the most efficient way.

                            Our specialists create custom digital solutions, increasing the productivity of your business.

                            Work with top UI/UX professionals, product designers, full-stack developers, quality assurance specialists, and business analysts to supercharge your growth and ace your business goals.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" style="padding-right: 3em;">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="bi-lightbulb text-danger" style="font-size: 3rem;"></i>
                        </div>
                        <div class="col-md-10">
                            <h4>
                                <label class="text-warning">SOFTWARE</label> DEVELOPMENT
                            </h4>
                            <p>
                            Rahisi deploys world-class agile product teams on demand. Teams that can design, build, ship, and scale your vision in the most efficient way.

                            Our specialists create custom digital solutions, increasing the productivity of your business.

                            Work with top +UI/UX professionals, product designers, full-stack developers, quality assurance specialists, and business analysts to supercharge your growth and ace your business goals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start About us -->

        <!-- Start Our Services -->
        <div class="container-fluid" style="padding: 4em; background-image: url('/uploads/front/header.jpg'); background-size: 100%; box-shadow: inset 10px 0 40px 1000px rgba(25, 100, 100, 0.7);">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center" style="padding: 1em;">
                    <h1>
                        <label class="text-light">OUR</label> <label class="text-warning" style="text-decoration: underline;">SERVICES</label>
                    </h1>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 ">
                        <p class="text-light">
                            Geonetwork ltd have a very experienced resources and partners with adequate industry knowledge and extensive ICT specialisation which gives in-depth client insights enabling us to offer our customers business solutions that make our customers seamlessly cope with business dynamics
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1em">
            <!-- products -->
            <div class="container-fluid bg-light" style="padding:1em; margin-top: 1em;">
                <div class="row">
                            @foreach($categories as $category)
                                <div class="col-md-4">
                                    <div class="card mb-3 border bg-secondary text-light" style="max-width: 540px;">
                                      <div class="row g-0">
                                        <div class="col-md-12">
                                          <div class="card-body">
                                            <a href="{{route('category',$category->id)}}" class="card-title " style=" font-size: 18px; text-decoration: none;">
                                                <span class="i-circle">
                                                    {{substr($category->name, 0, 1)}}
                                                </span> 
                                                &nbsp;
                                                    {{ Illuminate\Support\Str::limit($category->name, 20) }}
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-md-12 d-flex justify-content-center">
                                {{ @$categories->links() }}
                            </div>
                        </div>
                    </div>
                <!-- End products -->

                <div class="col-md-12 d-flex justify-content-center" style="padding: 4em;">
                    <a href="#" class="btn btn-success" style="border: none;">
                        GO TO THE SERVICES
                        <i class="bi bi-arrow-right-circle"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Our Services -->

        <!-- Start How we work -->
        <div class="container-fluid" style="padding: 4em; background-color: #dbd7d7;">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center" style="padding: 1em;">
                    <h1>
                        HOW WE WORK
                    </h1>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <h5>
                        <label class="text-danger">WE</label> STREAMLINE YOUR PROCESSES
                    </h5>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 ">
                        <p>
                            We pride ourselves on delivering highly predictable, cost-effective estimates, we strive to determine the fastest, most efficient way to achieve your goals.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1em">
                <div class="col-md-3 ">
                    <div class="row">
                        <div class="col-md-12 " style="padding: 2em">
                            <i class="bi-truck text-danger" style="font-size: 4rem;"></i>
                        </div>
                        <div class="col-md-12">
                            <h4 class="">
                                <label class="text-danger">EARLY</label>  DELIVERY
                            </h4>
                            <p>
                            We like to hit the ground running and keep the focus on delivering top quality shippable product with every iteration or sprint. Our QA team will start processing the initial high-level requirements during sprint 0 and build your first working demo within four weeks into development.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12 " style="padding: 2em">
                            <i class="bi-transparency text-secondary " style="font-size: 4rem;"></i>
                        </div>
                        <div class="col-md-12">
                            <h4>
                                TRANSPARENCY
                            </h4>
                            <p>
                            You get full visibility into the development and QA process via onsite meetups, videoconferencing, and shared tools for real-time project tracking. Daily cost and performance index evaluation allows us to spot any bottlenecks right away and reliably identify the root causes.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12 " style="padding: 2em">
                            <i class="bi-palette text-secondary" style="font-size: 4rem;"></i>
                        </div>
                        <div class="col-md-12">
                            <h4>
                                DESIGN
                            </h4>
                            <div class="col-md-12">
                                <h6>
                                    <label>WE</label> STREAMLINE YOUR PROCESSES
                                </h6>
                            </div>
                            <p>
                             Craft delightful user experiences for your digital products. Solve real problems and improve your vital business metrics through beautiful interfaces.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12 " style="padding: 2em">
                            <i class="bi-gear-wide-connected text-secondary" style="font-size: 4rem;"></i>
                        </div>
                        <div class="col-md-12">
                            <h4>
                                <label class="text-danger">
                                    SUPPORT
                                </label>
                            </h4>
                            <div class="col-md-12">
                                <h6>
                                    <label>WE</label> STREAMLINE YOUR PROCESSES
                                </h6>
                            </div>
                            <p>
                             The project may be completed, but the product is never finished. We will secure its continuous quality and support incremental improvements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End how we work -->

        <!-- Start our portfolio -->
        <div class="container-fluid bg-transparent" style="padding: 0em;">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center" style="padding: 1em;">
                    <h1>
                       OUR <label class="text-warning">PORTFOLIO</label> 
                    </h1>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <h5>
                       WE <label class="text-danger">HAVE DELIVERED</label>
                    </h5>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 ">
                        <p>
                            Our portfolio is comprised of companies across multiple industries and border.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 4em">
                <div class="col-md-3 card text-white">
                <img class="card-img" src="{{ url('/uploads/clients/client1.png')}}"  class="" alt="Client">
                    
                </div>

                 <div class="col-md-3 card text-white">
                <img class="card-img" src="{{ url('/uploads/clients/client2.png')}}"  class="" alt="Client">
                    
                </div>

                 <div class="col-md-3 card text-white">
                <img class="card-img" src="{{ url('/uploads/clients/client3.png')}}"  class="" alt="Client">
                    
                </div>

                 <div class="col-md-3 card text-white">
                <img class="card-img" src="{{ url('/uploads/clients/client4.png')}}"  class="" alt="Client">
                    
                </div>

                 <div class="col-md-3 card text-white">
                <img class="card-img" src="{{ url('/uploads/clients/client5.png')}}"  class="" alt="Client">
                    
                </div>

                 <div class="col-md-3 card text-white">
                <img class="card-img" src="{{ url('/uploads/clients/client6.png')}}"  class="" alt="Client">
                    
                </div>

                 <div class="col-md-3 card text-white">
                <img class="card-img" src="{{ url('/uploads/clients/client7.png')}}"  class="" alt="Client">
                    
                </div>

                 <div class="col-md-3 card text-white">
                <img class="card-img" src="{{ url('/uploads/clients/client8.png')}}"  class="" alt="Client">
                    
                </div>

                <div class="col-md-12 d-flex justify-content-center" style="padding: 4em">
                    <a href="#" class="btn btn-warning btn-lg" style="border-radius: 30em;">
                        SEE MORE...
                    </a>
                </div>

            </div>
        </div>
        <!-- End our portfolio -->

        {{-- old about us --}}
        {{-- <div class="row">
            <div class="col-md-6">
                <h1 style="color: #017C7A;">
                    {{@$about->name}}
                </h1>
                <p style="overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">
                    
                    <p>{!! Illuminate\Support\Str::limit($about->description, 400) !!}</p>
                </p>

                <a href="{{route('home-about')}}" class="btn btn-outline-light rounded-pill" style="padding: 0.5em; border-color: #33BAFA; color: #33BAFA;">
                    Read more...
                </a>
            </div>


            <div class="col-md-6" style="padding: 2em">

                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                            @foreach($about_images as $image)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <div class="slider-image text-center">
                                        <img src="{{ url(isset($image->name) ? $image->name : 'images/nopic.jpg') }}" height="300em" class="d-block w-100" alt="Globec Scientific Ltd">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
            </div>
        </div> --}}
        {{-- end old about us --}}
    </div>


    <div class="container-fluid" style=" margin-top: 1em; background-image: url('/uploads/front/8245.jpg'); background-size: 100%; box-shadow: inset 10px 0 40px 1000px rgba(25, 100, 100, 0.7);">
        <div class="row ">
            <div class=" bg-transparent border text-light" style="width: 45em; padding: 1em; margin: 0.3em;">
                 <i class="bi-droplet-half text-light d-flex justify-content-center" style="font-size: 2rem;"></i>
                 <hr>
                <div>
                    <h3 class="d-flex justify-content-center">
                        {{ Illuminate\Support\Str::limit(\App\Models\News::first()->name, 40) }}
                        
                    </h3>

                    <a class="bi-arrow-right-circle text-light text-primary d-flex justify-content-center" style="font-size: 2rem; text-decoration: none;" href="{{route('home-show-news',\App\Models\News::first()->id)}}"></a>
                </div>
            </div>
            
            <div class=" bg-transparent border text-light" style="width: 45em; padding: 1em; margin: 0.3em;">
                 <i class="bi-cart4 text-light d-flex justify-content-center" style="font-size: 2rem;"></i>
                 <hr>
                <div>
                    <h3 class="d-flex justify-content-center">
                        {{ Illuminate\Support\Str::limit(\App\Models\Product::first()->name, 40) }}
                    </h3>

                    <a class="bi-arrow-right-circle text-light d-flex justify-content-center" style="font-size: 2rem; text-decoration: none;" href="{{route('product_quote', \App\Models\Product::first()->id)}}"></a>
                </div>
            </div>

            <div class=" bg-transparent border text-light" style="width: 45em; padding: 1em; margin: 0.3em;">
                 <i class="bi-google text-danger d-flex justify-content-center" style="font-size: 2rem;"></i>
                 <hr>
                <div>
                    <h3 class="d-flex justify-content-center">
                        Contact Us 
                    </h3>

                    <a class="bi-arrow-right-circle text-light text-primary d-flex justify-content-center" style="font-size: 2rem; text-decoration: none;" href="{{route('home-contact')}}"></a>
                </div>
            </div>

            <div class=" bg-transparent border border-bottom-none text-light " style="border-left: 0px; width: 45em; padding: 1em; margin: 0.3em;">
                 <i class="bi-binoculars text-light d-flex justify-content-center" style="font-size: 2rem;"></i>
                 <hr>
                <div>
                    <h3 class="d-flex justify-content-center">
                        Career Posts will be here
                    </h3>

                    <i class="bi-arrow-right-circle text-light d-flex justify-content-center" style="font-size: 2rem;"></i>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid bg-light" style="padding: 2em; margin-top: 1em;">
        <div class="container-fluid">
            <h3 style="color: #017C7A;">
                Gallery
            </h3>
        </div>
        <div class="row d-flex justify-content-center" style="padding-top: 0.2em;">
            @foreach($news as $blog)
                <div class="col-md-3" style="margin-top: 1em">
                   <div class="card d-flex justify-content-center" style="width: auto;">

                    <div class="col-md-12 d-flex justify-content-center">
                          <img src="{{ url(isset($blog->image) ? $blog->image : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;max-width: 19em; max-height: 20em; margin-top: 1.3em;"> 
                      <!-- <img src="images/cancer.jpg    " class="card-img-top" alt="..."> -->
                    </div>
                      <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">
                            {{ Illuminate\Support\Str::limit($blog->name, 28) }}
                        </h5>
                        {{-- <p class="card-text d-flex justify-content-center" >
                            {!! Illuminate\Support\Str::limit($blog->description, 183) !!}
                        </p>
                        <a href="{{route('home-show-news',$blog->id)}}" class="btn btn-outline-secondary rounded-pill" style="border-color: #33BAFA; color: #33BAFA;">Learn More...</a>
                        --}}
                      </div>
                    </div>
               </div>
            @endforeach
            <div class="col-md-12 d-flex justify-content-center">
                {{ @$news->links() }}
            </div>
        </div>
    </div>

    <!-- What client say -->
    {{-- <div class="container bg-transparent" style=" margin-top: 1em;">
        <div class="row">
            <div class="col-md-12 " >
                <h3 class="d-flex justify-content-center text-light">
                    What Client Says About Globec S Ltd
                </h3>
                <hr class="text-light">
                

            </div>
        </div>

        
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="margin-top: 1em">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="card-text d-flex justify-content-center" style="padding-top: 2em; padding-left: 2em; padding-right: 2em;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        
                    </p>
                    <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                  </div>
                  <img src="images/nopic.jpg" class="rounded-pill d-flex justify-content-center" style="width: 10em !important; margin-left: 7em;" alt="...">


                  <div class="card-body">
                    <h4 class="d-flex justify-content-center" style="color: #017C7A;">
                        Mr. Joel
                    </h4>
                    <p class="d-flex justify-content-center" style="color: #017C7A;">
                        <i class="bi-dot"></i>Biomedical Scientist
                    </p>
                  </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="margin-top: 1em">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="card-text d-flex justify-content-center" style="padding-top: 2em; padding-left: 2em; padding-right: 2em;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                       
                    </p>
                    <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                  </div>
                  <img src="images/nopic.jpg" class="rounded-pill d-flex justify-content-center" style="width: 10em !important; margin-left: 7em;" alt="...">

                  <div class="card-body">
                    <h4 class="d-flex justify-content-center" style="color: #017C7A;">
                        Bariki Elilaki
                    </h4>
                    <p class="d-flex justify-content-center" style="color: #017C7A;">
                        <i class="bi-dot"></i>Marketing Manager
                    </p>
                  </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card" style="margin-top: 1em">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="card-text d-flex justify-content-center" style="padding-top: 2em; padding-left: 2em; padding-right: 2em;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                       
                    </p>
                    <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                  </div>
                  <img src="images/nopic.jpg" class="rounded-pill d-flex justify-content-center" style="width: 10em !important; margin-left: 7em;" alt="...">

                  <div class="card-body">
                    <h4 class="d-flex justify-content-center" style="color: #017C7A;">
                         Augustino Emanuel
                    </h4>
                    <p class="d-flex justify-content-center" style="color: #017C7A;">
                        <i class="bi-dot"></i>
                        Software Engineer
                    </p>
                  </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--End What client say -->

</div>
