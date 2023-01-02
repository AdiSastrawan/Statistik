 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>DataTables</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                             <button type="button" class="btn btn-success" data-toggle="modal"
                                 data-target="#exampleModal">
                                 Create
                             </button>

                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Score</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1; ?>
                                     @foreach ($score as $s)
                                         <tr>
                                             <td>{{ $no++ }}</td>
                                             <td>{{ $s->score }}</td>
                                             <td class="flex flex-wrap"><a href="">Edit</a>
                                                 <form id="delete"
                                                     action="{{ route('score.destroy', ['score' => $s->id]) }} "
                                                     method="post" enctype="multipart/form-data">
                                                     @csrf
                                                     @method('DELETE')
                                                     <a type="submit" onclick="deleteConfirm()">
                                                         Hapus </a>
                                                 </form>
                                             </td>
                                         </tr>
                                     @endforeach
                                 </tbody>
                                 <tfoot>
                                 </tfoot>
                             </table>
                         </div>
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
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Create new score</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="{{ route('score.store') }}" method="post" enctype="multipart/form">
                     @csrf
                     <input type="number" name="score" placeholder="Insert Score">
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Save changes</button>
             </div>
             </form>
         </div>
     </div>
 </div>
 {{-- MODAL END --}}
