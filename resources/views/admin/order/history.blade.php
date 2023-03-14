@extends('admin')
@section('title')
    Orders
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Order History
                            <a
                                href="{{ 'orders' }}"
                                class="btn btn-warning float-end"
                            >New Orders</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Completed Date</th>
                                    <th>Tracking Number</th>
                                    <th>Status</th>
                                    <th>Total Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ $item->updated_at->toFormattedDateString() }} ({{ $item->created_at->diffForHumans() }})</td>
                                        <td>{{ $item->tracking_no }}</td>
                                        <td>{{ $item->status == '0' ? 'pending' : 'completed' }}</td>
                                        <td>{{ $item->total_price }}</td>
                                        <td><a
                                                href="{{ url('admin/view-order/' . $item->id) }}"
                                                class="btn btn-primary"
                                            >View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
