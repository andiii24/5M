@extends('admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Portfilio Page</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Name</th>
                        <th>location</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portfolios as $item)
                        <tr>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->location }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>
                                <ul>
                                    @if (is_array($item->images) || is_object($item->images))
                                        <img
                                            style="width: 70px;height:70px;"
                                            class="cate-img"
                                            src="{{ asset('upload/folio/thumbs/' . $imagee) }}"
                                            alt=""
                                        >
                                    @endforeach
                                @else
                                    <img
                                        class="cate-img"
                                        src="{{ asset('upload/folio/thumbs/' . $imagee) }}"
                                        alt=""
                                    >
                    @endif
                    </ul>td>
                    <td>
                        <a
                            href="{{ url('edit-portfolio/' . $item->id) }}"
                            class="btn btn-primary btn-sm"
                        >Edit</a>
                        <a
                            href="{{ url('delete-portfolio/' . $item->id) }}"
                            class="btn btn-danger btn-sm"
                        >Delete</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
