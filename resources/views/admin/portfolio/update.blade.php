@extends('admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Portfolio
                <a
                    href="{{ url('portfolios') }}"
                    class="btn btn-primary float-end btn-sm"
                >back</a>
            </h4>
        </div>
        <div class="card-body">
            <form
                action="{{ url('update-portfolio/' . $portfolios->id) }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select
                            class="form-select"
                            name="category_id"
                            aria-label="Default select example"
                        >
                            <option value="{{ $portfolios->category_id }}">{{ $portfolios->category->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            value="{{ $portfolios->name }}"
                        >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Location</label>
                        <input
                            type="text"
                            class="form-control"
                            name="location"
                            value="{{ $portfolios->location }}"
                        >
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Background Image</label>
                        <li class="splide__slide">
                            <img
                                src="{{ asset('upload/Property/background/' . $portfolios->bg) }}"
                                alt=""
                            >
                        </li>
                        <input
                            type="file"
                            name="image"
                            class="form-control"
                        >

                    </div>
                    <div class="gallery-items   three-columns grid-small-pad lightgallery">
                        @if (is_array($portfolios->images) || is_object($portfolios->images))
                            @foreach ($portfolios->images as $key => $imagee)
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="box-item">
                                            <a
                                                data-src="{{ asset('upload/Property/' . $imagee) }}"
                                                class="popup-image"
                                                data-sub-html="alteration in some"
                                            >
                                                <span class="overlay"></span>
                                                <img
                                                    src="{{ asset('upload/Property/' . $imagee) }}"
                                                    alt=""
                                                >
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <li class="splide__slide">
                                <img
                                    class="pre_serve"
                                    style="width: 10%,hight:10%"
                                    src="{{ asset('upload/Property/' . $imagee) }}"
                                    alt=""
                                >
                            </li>
                        @endif
                        <div class="col-md-12 mb-3">
                            <input
                                type="file"
                                name="images[]"
                                class="form-control-file"
                                id="image"
                                multiple
                            >
                        </div>
                        <div class="col-md-12 mb-3">
                            <button
                                class="btn btn-primary"
                                type="submit"
                            >Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
