@extends('Layout_G')

@section('Title', "Manage Category")

@section('Isi')

<center>
    <h3 class="mt-3">Categories</h3>
<div class="container mt-5">
        <div class="row">
    @foreach ($Cat as $Cat)
            <div class="col-sm-4">
                <div class="col border border-dark mb-3 text-white bg-dark">
                    <img width="100%" height="150px" class="mt-3" src="{{ url('Storage/'.$Cat->Category_Image) }}">
                    <div class="p-4">{{ $Cat->Category_Name }}</div>
                    <a href="/ManageCat/Delete/{{ $Cat->Category_ID }}" class="btn btn-danger mb-3" role="button" aria-pressed="true">Delete Category</a>
                    <a href="/ManageCat/Update/{{ $Cat->Category_ID }}" class="btn btn-primary ml-3 mb-3" role="button" aria-pressed="true">Update Category  </a>
                </div>
            </div>
    @endforeach
        </div>
    </div
</center>

@stop