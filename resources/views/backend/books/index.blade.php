@extends('backend.layouts.dashboard.master')
@section('title', 'Reports')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/vendors/animate.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>View Books</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Manage Books</li>
<li class="breadcrumb-item">View Books</li>
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
                            <h5>Books </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="display" id="advance-1">
                                <thead>
                                  <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>publish date</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($books as $book)
                                    <tr>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->publish_date }}</td>
                                    </tr>
                                    @empty
                                        <h4>No Record Found</h4>
                                    @endforelse

                                </tbody>
                                <tfoot>
                                </tfoot>
                              </table>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('script')
<script src="{{asset('backend/js/dashboard/default.js')}}"></script>
@endsection
