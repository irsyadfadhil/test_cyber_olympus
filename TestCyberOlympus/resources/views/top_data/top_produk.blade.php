@extends('master')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content p-4">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="text-md-left">
                                <div class="form-group breadcrumb-right">
                                    <a href="{{ url('home') }}"><button type="button" class="btn"style="background-color: #EFEFEF;"><i data-feather="arrow-left"></i>&ensp;Back</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <h2 class="m-0 p-0"> Top 10 Produk</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-12" style="overflow-x:auto;">
                                    <table id="example" class="table table-striped" style="width:100%; font-size: 15px;">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(empty($data_detail))
                                                <tr>
                                                    <td colspan="3">MASUKAN DULU DATABASE MYSQL</td>
                                                </tr>
                                            @else
                                                @foreach ( $data_detail as $k )
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{ $k->product->product_name }}</td>
                                                    <td>{{ $k->total }}</td>
                                                </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
