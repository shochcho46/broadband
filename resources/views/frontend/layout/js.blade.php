
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

    <!-- Scripts -->
    <script src="{{asset('frontend/js/purecounter.min.js')}}"></script>

    <script src="{{asset('frontend/js/swiper.min.js')}}"></script>
    <script src="{{asset('frontend/js/aos.js')}}"></script><!-- AOS on Animation Scroll -->
    <script src="{{asset('frontend/js/script.js')}}"></script>  <!-- Custom scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
            @elseif(Session::has('error'))
                toastr.error("{{ Session::get('error') }}");
            @elseif(Session::has('info'))
                toastr.info("{{ Session::get('info') }}");
            @elseif(Session::has('warning'))
                toastr.warning("{{ Session::get('warning') }}");
            @endif
        </script>


