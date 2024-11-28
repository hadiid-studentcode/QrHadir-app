<!-- Bootstrap JS -->
<script src="{{ asset('versi2/assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('versi2/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('versi2/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('versi2/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('versi2/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
{{-- <script src="{{ asset('versi2/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script> --}}
{{-- <script src="{{ asset('versi2/assets/js/index3.js') }}"></script> --}}
{{-- <script>
    new PerfectScrollbar('.best-selling-products');
    new PerfectScrollbar('.recent-reviews');
    new PerfectScrollbar('.support-list');
</script> --}}
<!--app JS-->
<script src="{{ asset('versi2/assets/js/app.js') }}"></script>

@stack('scripts')
