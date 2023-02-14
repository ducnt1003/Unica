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
    <a style="margin: 10px" href="{{ route('admin.courses.index') }}" class="btn btn-primary btn-lg">Back</a>
    <!-- Main content -->
    <section class="content">
        @if (Session::has('success'))
            <div class="alert alert-success text-center">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="card">
            <form role="form" method="post" action="{{ route('admin.courses.store') }}">
                <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ old('title') }}"
                            class="form-control @error('title') is-invalid @enderror" placeholder="Enter title">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select class="form-control" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value={{ $category->id }}>{{ $category->name }}</option>
                                    @endforeach
                                    <option value="0">Khác</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Giá bán</label>
                                <input type="number" name="price" value="{{ old('price') }}" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea type="text" name="content" value="{{ old('content') }}"
                            class="form-control @error('content') is-invalid @enderror">
                        </textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>URL</label>
                        <input type="text" name="url" value="{{ old('url') }}"
                            class="form-control @error('url') is-invalid @enderror" placeholder="Enter url">
                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group ml-3 mr-3">

                    <div class="card card-body bg-light">
                        <label>Part 1</label>
                        <div class="form-group">
                            <label>Part name</label>
                            <input type="text" name="part" class="form-control">
                        </div>
                        <div class="card card-body">
                            <div class="form-group">
                                <label>Video name</label>
                                <input type="text" name="part"class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Video path</label>
                                <input class="form-control" type="file" id="video" name="video">
                            </div>
                        </div>
                        <div id="videopart"></div>
                        <button id="addVideo" class="addVideo btn btn-primary" type="button">
                            Add Video
                        </button>
                    </div>
                    <div id="part"></div>
                    <button id="addPart" class="btn btn-primary" type="button">
                        More Info
                    </button>
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                @csrf
            </form>
        </div>
    </section>
    <!-- /.content -->
@stop
@section('js')
    <script>
        var i = 2;
        $("#addPart").click(function() {
            var detailContent = '<div class="card card-body bg-light">' +
                '<label>Part ' + i + '</label>' +
                '<div class="form-group">' +
                '<label>Part name</label>' +
                '<input type="text" name="part" class="form-control">' +
                '</div>' +
                '<div class="card card-body ">' +
                '<div class="form-group">' +
                '<label>Video name</label>' +
                '<input type="text" name="part"class="form-control">' +
                '</div>' +
                '<div class="form-group">' +
                '<label>Video path</label>' +
                '<input class="form-control" type="file" id="video" name="video">' +
                '</div>' +
                '</div>' +
                '<button id="addVideo" class="addVideo btn btn-primary" type="button">' +
                'Add Video' +
                '</button>' +
                '</div>';
            i++;
            $('#part').append(detailContent);
        });
        $(".addVideo").click(function() {
            console.log(1)
            var videoContent = '<div class="card card-body">' +
                '<div class="form-group">' +
                '<label>Video name</label>' +
                '<input type="text" name="part"class="form-control">' +
                '</div>' +
                '<div class="form-group">' +
                '<label>Video path</label>' +
                '<input class="form-control" type="file" id="video" name="video">' +
                '</div>' +
                '</div>'
            $('#videopart').append(videoContent);
        })
    </script>
@stop
