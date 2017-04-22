@include('partials._head')

@include('partials._nav')
    <div class="container">
        @include('partials._messages')

        

        @yield('content')
    </div>
@include ('partials._footer')

@include ('partials._javas')
@yield('scripts')
