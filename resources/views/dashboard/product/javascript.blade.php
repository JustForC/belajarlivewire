<script src="{{asset('/vendor/global/global.min.js')}}"></script>
<script src="{{asset('/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('/vendor/lightgallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('/js/custom.min.js')}}"></script>
<script src="{{asset('/js/deznav-init.js')}}"></script>

<script>
    window.addEventListener('closeModalCreate', event => {
        $("#basicModal").modal('hide');                
    })
</script>