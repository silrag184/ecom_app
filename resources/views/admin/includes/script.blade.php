<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

<!-- JQUERY JS -->
<script src="{{ asset('/') }}admin/assets/plugins/jquery/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('/') }}admin/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SIDE-MENU JS -->
<script src="{{ asset('/') }}admin/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('/') }}admin/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/p-scroll/pscroll.js"></script>

<!-- STICKY JS -->
<script src="{{ asset('/') }}admin/assets/js/sticky.js"></script>


<!-- APEXCHART JS -->
<script src="{{ asset('/') }}admin/assets/js/apexcharts.js"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{ asset('/') }}admin/assets/plugins/select2/select2.full.min.js"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{ asset('/') }}admin/assets/plugins/circle-progress/circle-progress.min.js"></script>

<!-- INTERNAL DATA-TABLES JS-->
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/dataTables.responsive.min.js"></script>

<!-- INDEX JS -->
<script src="{{ asset('/') }}admin/assets/js/index1.js"></script>
<script src="{{ asset('/') }}admin/assets/js/index.js"></script>

<!-- Reply JS-->
<script src="{{ asset('/') }}admin/assets/js/reply.js"></script>


<!-- COLOR THEME JS -->
<script src="{{ asset('/') }}admin/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('/') }}admin/assets/js/custom.js"></script>

<!-- SWITCHER JS -->
<script src="{{ asset('/') }}admin/assets/switcher/js/switcher.js"></script>




<!-- DATA TABLE JS-->
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/jszip.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/buttons.html5.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/buttons.print.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
<script src="{{ asset('/') }}admin/assets/js/table-data.js"></script>

<script src="{{ asset('/') }}admin/assets/js/formelementadvnced.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/date-picker/jquery-ui.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/bootstrap-datepicker/js/datepicker.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/bootstrap-maxlength/dist/bootstrap-maxlength.min.js"></script>
<!--Internal Fileuploads js-->
<script src="{{ asset('/') }}admin/assets/plugins/fileuploads/js/fileupload.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/fileuploads/js/file-upload.js"></script>
<!--Internal Fancy uploader js-->
<script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/jquery.fileupload.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/fancy-uploader.js"></script>
<!-- FORM ELEMENTS JS -->
<script src="{{ asset('/') }}admin/assets/js/formelementadvnced.js"></script>
<!-- COLOR THEME JS -->
<script src="{{ asset('/') }}admin/assets/js/themeColors.js"></script>


<!-- INTERNAL Summernote Editor js -->
<script src="{{ asset('/') }}admin/assets/plugins/summernote-editor/summernote1.js"></script>
<script src="{{ asset('/') }}admin/assets/js/summernote.js"></script>


<!-- WYSIWYG Editor JS -->
<script src="{{ asset('/') }}admin/assets/plugins/wysiwyag/jquery.richtext.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/wysiwyag/wysiwyag.js"></script>

<!-- PROFILE JS -->
<script src="{{ asset('/') }}admin/assets/js/profile.js"></script>


<!-- SELECT2 JS -->
<script src="{{ asset('/') }}admin/assets/plugins/select2/select2.full.min.js"></script>



<!-- SubCategory by Category Script Start using AJAX -->
<script>
    function setSubCategory(id) {
        $.ajax({
            type: "GET",
            url: "{{ route('get-sub-category-by-category') }}",
            data: {id: id},
            dataType:"JSON",
            success:function (response) {
                // alert(response);
                var option = '';

                option +='<option value="" disabled selected>Select Sub Category</option>';

                $.each(response,function (key,value) {
                    option +='<option value="'+value.id+'">'+value.name+'</option>';
                });

                $('#subCategoryID').empty();
                $('#subCategoryID').append(option);
            }
        })
    }
</script>
<!-- SubCategory by Category Script End using AJAX -->


<!-- Discount Price Script Start -->
<script>
    $(document).ready(function () {

        var discountAmount = $('#discountAmount').val();
        $("#discountAmount").keyup(function (){
            var discountAmount = $('#discountAmount').val();
            var price = $('#price').val();
            var discountPrice = price-discountAmount;
            $('#discountPrice').val(discountPrice);
        });

        $("#price").keyup(function (){
            var price = $('#price').val();
            $('#discountPrice').val(price);
        });



        $(".percent").click(function () {
            // alert('ok')
            var discountAmount = $('#discountAmount').val();
            var price = $('#price').val();
            var discountPrice = price-price*discountAmount/100;
            $('#discountPrice').val(discountPrice);
        });
        $(".fixed").click(function () {
            var discountAmount = $('#discountAmount').val();
            var price = $('#price').val();
            var discountPrice = price-discountAmount;
            $('#discountPrice').val(discountPrice);
        });
    });
</script>
<!-- Discount Price Script End -->












