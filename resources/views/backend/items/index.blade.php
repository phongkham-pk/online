@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Items List</h1>
    		<a href="{{route('items.create')}}" class="btn btn-info float-right">Add New</a>
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Codeno</th>
    					<th>Name</th>
    					<th>Price</th>
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($items as $item)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$item->codeno}}</td>
    					<td>{{$item->name}}</td>
    					<td>{{$item->price}} MMK</td>
                        {{-- <td><img src="{{asset('$item->photo')}}" width="150px"></td> --}}
    					<td>
    						<a href="{{route('items.show',$item->id)}}" class="btn btn-primary">Detail</a>

    						<a href="{{route('items.edit',$item->id)}}" class="btn btn-warning">Edit</a>

                            <form action="{{route('items.destroy',$item->id)}}" method="post" onsubmit="return confirm('Are you sure want to delete!')" class="d-inline-block">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
    					</td>
    				</tr>
    				@endforeach
    			</tbody>
    		</table>
    	</div>
    </div>

 	</div>
@endsection