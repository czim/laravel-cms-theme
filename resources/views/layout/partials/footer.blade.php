
</div>


<!-- JavaScripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
        integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha256-KM512VNnjElC30ehFwehXjx1YCHPiQkOPmqnrWtpccM="
        crossorigin="anonymous"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.min.js"
        integrity="sha256-FvtGTJgCbPmWr0DdIsMWeukxoOxWhWTCjT345wTj5Y8="
        crossorigin="anonymous"></script>

<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>

<script src="{{ asset('_cms/js/app.js') }}"></script>
<script src="{{ asset('_cms/js/jquery-sortable.js') }}"></script>
<script src="{{ asset('_cms/js/jquery-select2.min.js') }}"></script>
<script src="{{ asset('_cms/js/featherlight.min.js') }}"></script>
<script src="{{ asset('_cms/js/moment-with-locales.min.js') }}"></script>
<script src="{{ asset('_cms/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('_cms/js/bootstrap-colorpicker.min.js') }}"></script>
{{-- included by view partial: <script src="{{ asset('_cms/js/locationpicker.jquery.min.js') }}"></script>--}}
<script src="{{ asset('_cms/js/jquery-multiselect.min.js') }}"></script>

@stack('javascript-end')

</body>
</html>
