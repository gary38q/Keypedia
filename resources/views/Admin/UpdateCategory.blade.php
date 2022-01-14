@extends('Layout_G')

@section('Title', "Update Category")

@section('Isi')

<div class="container">
    <div class="border border-dark">
        <div class="text-left h3 ml-2 mt-2">
            Update Keyboard
           
        </div> <hr>
        <div class="row mb-3 ml-3">
            <div class="col">
                <img width="75%" height="300px" src="{{ url('Storage/'.$Cat->Category_Image) }}" alt="">
            </div>
            <div class="col text-left mr-3">
                <form action="/ManageCat/Updating/{{ $Cat->Category_ID }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        Category Name
                        <span><input type="text" value="{{ $Cat->Category_Name }}" name="Category_Name" class="form-control input-sm" id="Category_Name"></span>
                        @error('Category_Name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div>
                        Keyboard Image
                        <span><input type="file" name="Category_Image" class="form-control input-sm p-1" id="Category_Image" accept="image/*"></span>
                            @error('Category_Image')
                        <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn-lg" style="width: 100%; background-color: #38b6ff;">Update Keyboard</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br><br>

@stop