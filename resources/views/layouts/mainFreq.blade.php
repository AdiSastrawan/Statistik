 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>DataTables By Frequency</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                         <li class="breadcrumb-item active">DataTables</li>
                     </ol>
                 </div>
             </div>
         </div>
         <!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <!-- /.card -->
                     <div class="card">
                         <div class="card-header">


                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Score</th>
                                         <th>Frequency</th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1; ?>
                                     @foreach ($freq as $key => $s)
                                         <tr>
                                             <td>{{ $no++ }}</td>
                                             <td>{{ $key }}</td>
                                             <td>{{ $s }}</td>


                                         </tr>
                                     @endforeach
                                 </tbody>
                                 <tfoot>

                                 </tfoot>
                             </table>

                             <!-- /.card-body -->

                         </div>
                         <!-- /.card -->

                     </div>
                     <!-- /.col -->
                 </div>
                 <!-- /.row -->
             </div>
             <!-- /.container-fluid -->
     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 {{-- MODAL START --}}

 {{-- MODAL END --}}
