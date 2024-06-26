@if(Auth::user())
<div class="col-md-2" style="margin-top: 1em;">
    <div class="container-fluid bg-secondary" style="padding-top: 1em;  padding-bottom: 2em; height: auto;">
        <a href="{{route('home')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            Dashboard
        </a><br>
        <a href="{{route('about')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            About Globec
        </a><br>
        <a href="{{route('contact_us')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            Contact Us
        </a><br>
        <a href="{{route('products')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            Services
        </a><br>
        {{-- <a href="{{route('career')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            Careers
        </a><br>
        --}}
        <a href="{{route('news')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            Gallery 
        </a><br>
        <a href="{{route('testimonies')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            Testimonials
        </a><br>
        {{-- <a href="{{route('customers')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            Customers
        </a><br>
        --}}
        @if(Auth::user()->type == 'Admin')
        <a href="{{route('staffs')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            Manage Staff(s)
        </a>
        @endif
    </div>
</div>
@endif