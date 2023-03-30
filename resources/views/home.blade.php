
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @for($i = 0; $i < 4; $i++)
                <div class="card-group">
                @for($j = 0; $j < 4; $j++)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{URL::asset('img/ejemplosSalas/sala1.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn botoncartas">View more</a>
                    </div>
                </div>
                    @endfor
                </div>
            @endfor
    </div>
</div>
@endsection
