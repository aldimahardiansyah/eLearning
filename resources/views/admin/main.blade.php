<!DOCTYPE html>
<html lang="en">
@include('admin.partials._head')

<body>

    @include('admin.partials._header')

    @include('admin.partials._sidebar')

    <main id="main" class="main">

        @yield('content')

    </main><!-- End #main -->

    @include('admin.partials._footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('admin.partials._scripts')

</body>

</html>
