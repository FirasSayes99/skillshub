<!DOCTYPE html>
<html lang="en">
@include('web.layouts.head')

<body>

    <!-- Header -->

    @include('web.layouts.header')

    <!-- /Header -->

    @yield('content')


    <!-- Contact CTA -->
    

    <!-- Footer -->

    @include('web.layouts.footer')

    <!-- /Footer -->

    <!-- preloader -->
    <div id='preloader'>
        <div class='preloader'></div>
    </div>
    <!-- /preloader -->


    <!-- jQuery Plugins -->
    @include('web.layouts.scripts')

</body>

</html>
