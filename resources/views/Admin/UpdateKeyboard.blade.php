@extends('Layout_G')

@section('Title', "Update Keyboard")

@section('Isi')
<center>
    <div class="container">
        <div class="border border-dark">
            <div class="text-left h3 ml-2 mt-2">
                Update Keyboard
               
            </div> <hr>
            <div class="row mb-3">
                <div class="col">
                    <img width="75%" height="300px" src="{{ url('Storage/'.$Detail->Image_Link) }}" alt="">
                </div>
                <div class="col text-left mr-3">
                    <form action="/Category/Keyboard/Update/Proceed/{{ $Detail->Keyboard_ID }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="Category_ID">Category</label>
                            </div>
                            <select class="custom-select" name="Category_ID" id="Category_ID">
                                <option value="0">Choose...</option>
                              @foreach ($Cat as $Cat)
                                  <option value="{{ $Cat->Category_ID }}">{{ $Cat->Category_Name }}</option>
                              @endforeach
                            </select>
                            @error('Category_ID')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div>
                            Keyboard Name
                            <span><input type="text" value="{{ $Detail->Keyboard_Name }}" name="Keyboard_Name" class="form-control input-sm" id="Keyboard_Name"></span>
                            @error('Keyboard_Name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <br>
                        <div>
                            Keyboard Price (Rp)
                            <span><input type="number" value="{{ $Detail->Keyboard_Price }}" name="Keyboard_Price" class="form-control input-sm"  id="Keyboard_Price"></span>
                                @error('Keyboard_Price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <br>
                        <div>
                            Description
                            <span><textarea style="resize: none;height:100px"  name="Description" class="form-control input-sm" id="Description">{{ $Detail->Description }}</textarea></span>
                                @error('Description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <br>
                        <div>
                            Keyboard Image
                            <span><input type="file" name="Image_Link" class="form-control input-sm p-1" id="Image_Link" accept="image/*"></span>
                                @error('Image_Link')
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
</center>
@stop