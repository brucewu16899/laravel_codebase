<script src="{{asset('bootstrap_datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('bootstrap_datepicker/js/locales/bootstrap-datepicker.zh-CN.js')}}"></script>
<link rel="stylesheet" href="{{asset('bootstrap_datepicker/css/datepicker.css')}}">
<script type="text/javascript">
//    详见https://bootstrap-datepicker.readthedocs.io/en/stable/options.html
    $(document).ready(function(){
        $("#cms-date-picker").datepicker({
            language:'zh-CN',
            autoclose:true,
            format:'yyyy-mm-dd'
        })
    });
</script>
