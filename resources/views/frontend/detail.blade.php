@extends('frontendtemplate')

@section('content')
  <!-- Subcategory Title -->
  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white">Code Number:{{$items->codeno}} </h1>
      </div>
  </div>
  
  <!-- Content -->
  <div class="container">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent">
          <li class="breadcrumb-item">
            <a href="#" class="text-decoration-none secondarycolor"> Home </a>
          </li>
          <li class="breadcrumb-item">
            <a href="#" class="text-decoration-none secondarycolor"> Category </a>
          </li>
          <li class="breadcrumb-item">
            <a href="#" class="text-decoration-none secondarycolor"> Category Name </a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
          Subcategory Name
          </li>
        </ol>
    </nav>

    <div class="row mt-5">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <img src="{{ asset($items->photo)}}" class="img-fluid">
      </div>  


      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
        
        <h4> Item Name:{{$items->name}} </h4>

        <div class="star-rating">
          <ul class="list-inline">
            <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
            <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
            <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
            <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
            <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
          </ul>
        </div>
        <h4>Description:{{$items->description}} </h4>
        <p>
          This is our description
        </p>

        <p> 
          <span class="text-uppercase "> Current Price :{{$items->price}} </span>
          <span class="maincolor ml-3 font-weight-bolder"></span>
        </p>

        <p> 
          <span class="text-uppercase">Brand :</span>
          <span class="ml-3"> <a href="" class="text-decoration-none text-muted"></a>{{$items->brand->name}}</span>
        </p>


        <a href="javascript:void(0)" class="addtocartBtn text-decoration-none btn_add_to_cart" data-id = '{{$items->id}}' data-name = '{{$items->name}}' data-photo = '{{$items->photo}}' data-price= '{{$items->price}}' data-discount = '{{$items->discount}}'>Add to Cart</a>
        
      </div>
    </div>

    

    
  </div>
@endsection