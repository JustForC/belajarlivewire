<script src="{{asset('/vendor/global/global.min.js')}}"></script>
<script src="{{asset('/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('/vendor/lightgallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('/js/custom.min.js')}}"></script>
<script src="{{asset('/js/deznav-init.js')}}"></script>

<script>
    window.addEventListener('closeModalCreate', event => {
        $("#basicModal").modal('hide');                
    })

    window.addEventListener('openUpdateModal', event => {
        $("#updateModal").modal('show');
    })

    window.addEventListener('closeUpdateModal', event => {
        $("#updateModal").modal('hide');
    })

    window.addEventListener('openDeleteModal', event => {
        $("#deleteModal").modal('show');
    })

    window.addEventListener('closeDeleteModal', event => {
        $("#deleteModal").modal('hide');
    })
</script>