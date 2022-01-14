@extends('Layout_G')

@section('Title', "Add Keyboard")

@section('Isi')
<center>
    <div class="container">
        <div class="border border-dark">
            <div class="text-left h3 ml-2 mt-2">
                Add Keyboard
               
            </div> <hr>
            <div class="w-75">
                <div class=" text-left ">
                        <form action="/AddKeyboard-Proceed" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="Category">Category</label>
                                </div>
                                <select class="custom-select" name="Category" id="Category">
                                    <option value="0">Choose...</option>
                                  @foreach ($Cat as $Cat)
                                      <option value="{{ $Cat->Category_ID }}">{{ $Cat->Category_Name }}</option>
                                  @endforeach
                                </select>
                                @error('Category')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div>
                                Keyboard Name
                                <span><input type="text" name="Keyboard_Name" class="form-control input-sm" id="Keyboard_Name"></span>
                                @error('Keyboard_Name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <br>
                            <div>
                                Keyboard Price (Rp)
                                <span><input type="number" name="KeyboardPrice" class="form-control input-sm"  id="KeyboardPrice"></span>
                                    @error('KeyboardPrice')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <br>
                            <div>
                                Description
                                <span><textarea style="resize: none;height:100px" name="Description" class="form-control input-sm" id="Description"></textarea></span>
                                    @error('Description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <br>
                            <div>
                                Keyboard Image
                                <span><input type="file" name="Image" class="form-control input-sm p-1" id="Image" accept="image/*"></span>
                                    @error('Image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <br>
                            <button type="submit" class="btn-lg" style="width: 100%; background-color: #38b6ff;">Add Keyboard</button>
                        </form>
                        <br>
                </div>
            </div>
        </div>
    </div>
    <br><br>
</center>
@stop