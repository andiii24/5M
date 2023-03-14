@extends('admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
        </div>
        <div class="card-body">
            <form
                action="{{ url('update-category/' . $category->id) }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            value="{{ $category->name }}"
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
