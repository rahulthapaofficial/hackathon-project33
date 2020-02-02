<script src="http://demos.ui-lib.com/gull/dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
<script src="http://demos.ui-lib.com/gull/dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
<script src="http://demos.ui-lib.com/gull/dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="http://demos.ui-lib.com/gull/dist-assets/js/scripts/script.min.js"></script>
<script src="http://demos.ui-lib.com/gull/dist-assets/js/scripts/sidebar.large.script.min.js"></script>
<script src="http://demos.ui-lib.com/gull/dist-assets/js/plugins/echarts.min.js"></script>
<script src="http://demos.ui-lib.com/gull/dist-assets/js/scripts/echart.options.min.js"></script>
<script src="http://demos.ui-lib.com/gull/dist-assets/js/scripts/dashboard.v1.script.min.js"></script>
<script src="{{ asset('public/dashboard/libraries/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script src="http://demos.ui-lib.com/gull/dist-assets/js/scripts/form.validation.script.min.js"></script>

<script>
    const loader = $('.loader');
    const base_url = '{{ url('/') }}';

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showCloseButton: false,
        showConfirmButton: false,
        timer: 3000
    });

    $(document).ready(function(){
        $.ajaxSetup( {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        } );

        @if(Session('successMsg'))
            Toast.fire({
                'type' : 'success',
                'title' : '{{ Session("successMsg") }}'
            })
        @endif
    });

    function beforeAction(dataText)
    {
        loader.attr('data-text', dataText);
        loader.addClass('is-active');
        return;
    }
    function afterAction() {
        loader.attr('data-text', '');
        loader.removeClass('is-active');
        return;
    }
</script>