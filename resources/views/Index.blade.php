@extends('Layout_G')
@section('Title', "Home Page")

@section('Isi')

<center>
    <h1>Welcome to Keypedia</h1>
    <div>Best Keyboard and Keycaps Shop</div>
    <h3 class="mt-3">Categories</h3>
<div class="container mt-5">
        <div class="row">
    @foreach ($Cat as $Cat)
            <div class="col-sm-3">
                <a style="text-decoration:none;" href="/Category/{{ $Cat->Category_Name }}">
                    <div class="col border border-dark mb-3 text-white bg-dark">
                        <div class="p-4">{{ $Cat->Category_Name }}</div>
                        <img width="100%" height="150px" class="mb-3" src="{{ url('Storage/'.$Cat->Category_Image) }}">
                    </div>
                </a>
            </div>
    @endforeach
        </div>
    </div
</center>

@stop