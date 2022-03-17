<!DOCTYPE html>
<html lang="en">

{{--Start Head--}}
@include('Shared.Dashboard._head')
{{--End Head--}}

<body class="g-sidenav-show  bg-gray-200">
{{--Start sidebar--}}
@include('Shared.Dashboard._sidebar')
{{--End sidebar--}}

{{--Your Content here--}}
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('Shared.Dashboard._navbar')
    <div class="container-fluid py-4">
        @yield('content')
        @include('Shared.Dashboard._footer')
    </div>
</main>
{{--End Content--}}

{{--Fixed Plugin--}}
@include('Shared.Dashboard._fixedplugin')
{{--End Fixed Plugin--}}

{{--Start Scripts--}}
@include('Shared.Dashboard._scripts')
{{--End Scripts--}}
</body>

</html>
