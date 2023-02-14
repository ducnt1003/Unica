@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    {{-- @can('product_create') --}}
    <a style="margin: 10px" href="{{ route('admin.courses.create') }}" class="btn btn-primary btn-lg">Create New Course</a>
    {{-- @endcan --}}
    <!-- Main content -->
    <section class="content">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show text-center">
                {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Teacher</th>
                                    <th>Price</th>
                                    <th>Duration</th>
                                    <th>--</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <td>{{ $course->id }}</td>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ $course->category->name }}</td>
                                        <td>{{ $course->user->name }}</td>
                                        <td>{{ $course->price }}</td>
                                        <td>{{ $course->duration }}</td>
                                        <td>
                                            {{-- @can('product_index') --}}
                                            <a class="btn btn-info" href="/{{ $course->id }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            {{-- @endcan --}}
                                            {{-- @can('product_edit') --}}
                                            <a class="btn btn-primary" href="/admin/courses/edit/{{ $course->id }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            {{-- @endcan --}}
                                            {{-- @can('product_delete') --}}
                                            <button type="button" class="delete btn btn-danger" data="{{ $course->id }}">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            {{-- @endcan --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                {{-- <div class="d-flex justify-content-center">
                    {{ $courses->links('vendor.pagination.bootstrap-4') }}
                </div> --}}
            </div>
        </div>
    </section>
    <!-- /.content -->
@stop
@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('admin.courses.delete') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="page_id" id="page_id" value="0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete page!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you want to delete this page?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('.delete').click(function() {
            $('#page_id').val($(this).attr('data'))
            var myModal = new bootstrap.Modal($('#deleteModal'), {
                keyboard: false
            });
            myModal.show();
        });
    </script>
    <script>
        $('.alert').alert('close')
    </script>
@stop
