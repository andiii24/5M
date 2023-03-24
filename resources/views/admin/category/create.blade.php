@extends('admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
            <form
                action="{{ url('insert-category') }}"
                method="POST"
            >
                @csrf

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name"
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
