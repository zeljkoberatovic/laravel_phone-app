@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
          @include('home.partials.sidebar')  
        </div>
        <div class="col-8">
            <form action="" method="post">
                @csrf
                <input type=""
            </form>
            
        </div>
      </div>
    </div>
</div>
@endsection