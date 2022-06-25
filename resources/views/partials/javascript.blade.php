{{-- bootstrap js cdn files linkup --}}

{{-- ================< Bootstrap JS Starts >============== --}}


<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

<script src="{{ asset('js/popper.min.js') }}"></script>

<script src="{{ asset('js/app.js') }}"></script>
{{-- =================< Bootstrap JS Ends >=============== --}}
{{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}


{{-- ================< Custom JS Starts >============== --}}
<script src="{{ asset('js/script.js') }}"></script>
{{-- =================< Custom JS Ends >=============== --}}

{{-- If Importent to added some file's --}}
@yield('scripts')



