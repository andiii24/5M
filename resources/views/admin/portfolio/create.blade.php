@extends('admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Portfolio</h4>
        </div>
        @error('input_field_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="card-body">
            <form
                action="{{ url('insert-portfolio') }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select
                            class="form-select"
                            aria-label="Default select example"
                            name="category_id"
                            required
                        >
                            <option value="">Select a Category</option>
                            @foreach ($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            required
                        >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">location</label>
                        <input
                            type="text"
                            class="form-control"
                            name="location"
                            required
                        >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Video URL</label>
                        <input
                            type="text"
                            class="form-control"
                            name="url"
                        >
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Background Photo</label>
                        <input
                            type="file"
                            name="bg"
                            class="form-control"
                            required
                        >

                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Photo's</label>
                        <input
                            type="file"
                            name="images[]"
                            class="form-control-file"
                            id="image"
                            multiple
                            required
                        >
                    </div>
                    <div class="col-md-12 mb-3">
                        <button
                            class="btn btn-primary"
                            type="submit"
                        >Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
