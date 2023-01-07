 <footer class="main-footer">
     <div class=" d-none d-sm-block">created by <strong>
             AdiSastrawan </strong> </div>

 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- DataTables  & Plugins -->
 <script src="{{ asset('template') }}/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="{{ asset('template') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="{{ asset('template') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="{{ asset('template') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="{{ asset('template') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
 <script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
 <script src="{{ asset('template') }}/plugins/jszip/jszip.min.js"></script>
 <script src="{{ asset('template') }}/plugins/pdfmake/pdfmake.min.js"></script>
 <script src="{{ asset('template') }}/plugins/pdfmake/vfs_fonts.js"></script>
 <script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
 <script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
 <script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
 <!-- AdminLTE App -->
 <script src="{{ asset('template') }}/dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="{{ asset('template') }}/dist/js/demo.js"></script>
 <!-- Page specific script -->
 <script>
     $(function() {
         $("#example1")
             .DataTable({
                 responsive: true,
                 lengthChange: false,
                 autoWidth: false,
                 buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
             })
             .buttons()
             .container()
             .appendTo("#example1_wrapper .col-md-6:eq(0)");
         $("#example2").DataTable({
             paging: true,
             lengthChange: false,
             searching: false,
             ordering: true,
             info: true,
             autoWidth: false,
             responsive: true,
         });
     });

     function deleteConfirm() {
         Swal.fire({
             title: 'Are you sure?',
             text: "You won't be able to revert this!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!'
         }).then((result) => {
             if (result.isConfirmed) {
                 document.getElementById('delete').submit();
             }
         })
     }
 </script>
 </body>

 </html>
