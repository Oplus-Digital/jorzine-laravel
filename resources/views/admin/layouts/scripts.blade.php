
<!-- JAVASCRIPT -->
<script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

<!-- apexcharts -->
<script src="{{asset('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
<!-- Plugins js-->
<script src="{{asset('admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/dashboard.init.js')}}"></script>
<script src="{{asset('admin/assets/js/app.js')}}"></script>

<!-- Required datatable js -->
<script src="{{asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>



<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script src="{{asset('admin/assets/libs/parsleyjs/parsley.min.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/form-validation.init.js')}}"></script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>

    $(document).on('click', ".delete", function (event) {
        let cur = $(this);
        let url = $(this).attr('data-url');
        let name = $(this).attr('data-name');

        swal({
            title: "Confirm Delete " + name + "",
            text: "Are you sure you want to delete this record ?",
            icon: "warning",
            buttons: ["Cancel", "Ok"],
            dangerMode: true,

        }).then(function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url: url,
                    type: "delete",
                    success: function (data) {
                        swal("Successfully Deleted", "Successfully Deleted", 'success', {buttons: "Ok"});
                        cur.parents('tr').fadeOut(700);
                        cur.parents('tr').remove(700);
                    },
                    error: function (error) {
                        swal("Can't remove", "Error", 'error', {buttons: "Ok"});
                        console.log('there is an error ', error)
                    }
                });
            } else {
                swal("Cancelled", "Cancel Delete", 'error', {buttons: "Ok"});
            }
        });
    });
</script>
