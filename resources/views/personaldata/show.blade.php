<!-- @extends('personaldata.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $personaldata->name }}</h5>
        <p class="card-text">Address : {{ $personaldata->address }}</p>
        <p class="card-text">Mobile : {{ $personaldata->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div> -->

@extends('personaldata.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center"> <!-- Center the row -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel 9 CRUD</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('personaldata.create') }}" class="btn btn-success btn-sm" title="Add New Personal Data">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($personaldata as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>
                                        <a href="{{ route('personaldata.show', $item->id) }}" title="View Personal Data">
                                            <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                        </a>
                                        <a href="{{ route('personaldata.edit', $item->id) }}" title="Edit Personal Data">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                        </a>
                                        <form method="POST" action="{{ route('personaldata.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Personal Data" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
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
</div>
@endsection
