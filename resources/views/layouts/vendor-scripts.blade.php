<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ URL::asset('build/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins.js') }}"></script>
<!-- aos js -->
<script src="{{ URL::asset('build/libs/aos/aos.js')}}"></script>
<!-- animation init -->
<script src="{{ URL::asset('build/js/pages/animation-aos.init.js')}}"></script>
<!--Swiper slider js-->
<script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js')}}"></script>
<!-- swiper.init js -->
<script src="{{ URL::asset('build/js/pages/swiper.init.js')}}"></script>
<script>
    $(document).ready(function() {
        let currentYear = new Date().getFullYear();

        $('#copy-rights').text(currentYear+'© OMNI DIGITAL TECHNOLOGY - COPYRIGHT');
        $('#login-copyright').text(currentYear+'© OMNI DIGITAL TECHNOLOGY - COPYRIGHT');
        $('#register-copyright').text(currentYear+'© OMNI DIGITAL TECHNOLOGY - COPYRIGHT');

        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    });
</script>
@yield('script')
@yield('script-bottom')
