<!DOCTYPE html>
<html lang="zxx" class="no-js">

{{--Start head--}}
@include('Shared.Website._head')
{{--End Head--}}

<body>
{{--Start Navbar--}}
@include('Shared.Website._navbar')
{{--End Navbar--}}

<!-- start banner Area -->
@include('Shared.Website._banner')
<!-- End banner Area -->
@yield('content')
<!-- Start features Area -->
@include('Shared.Website._features')
<!-- End features Area -->

<!-- Start popular-post Area -->
@include('Shared.Website._featurejobs')
<!-- End popular-post Area -->

<!-- Start feature-categories Area -->
@include('Shared.Website._featurecategories')
<!-- End feature-categories Area -->

<!-- Start post Area -->
@include('Shared.Website._postarea')
<!-- End post Area -->


<!-- Start join us Area -->
@include('Shared.Website._joinus')
<!-- End join us Area -->

<!-- start footer Area -->
@include('Shared.Website._footer')
<!-- End footer Area -->

{{--Start Scripts--}}
@include('Shared.Website._scripts')
{{--End Scripts--}}
</body>
</html>



