@extends('backend.layouts.dashboard.master')
@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/vendors/animate.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>View Authors</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Manage Authors</li>
<li class="breadcrumb-item">View Authors</li>
@endsection

@section('content')
@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
          @endif

          <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Payments Information</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        {{-- <th scope="col">Package</th> --}}
                                        <th scope="col">Number of Packages</th>
                                        <th scope="col">Number of User</th>
                                        <th scope="col">Charge per user</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($authors as $key => $author)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>{{$author->number_of_packages}}</td>
                                        <td>$ {{$author->subtotal}}</td>
                                        <td>$ {{$author->total}}</td>
                                    </tr>
                                    @empty
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('script')
<script src="{{asset('backend/js/dashboard/default.js')}}"></script>
@endsection
