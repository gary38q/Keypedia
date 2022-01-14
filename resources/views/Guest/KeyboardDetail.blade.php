@extends('Layout_G')

@section('Title', "Keyboard Detail")

@section('Isi')
<center>
    <div class="container">
        <div class="border border-dark">
            <div class="text-left h3 ml-2 mt-2">
                Detail Keyboard
               
            </div> <hr>
            <div class="row mb-3">
                <div class="col">
                    <img width="75%" height="300px" src="{{ url('Storage/'.$Detail->Image_Link) }}" alt="">
                </div>
                <div class="col text-left">
                        <h3>{{ $Detail->Keyboard_Name }}</h3>
                        <br>
                        <h5>Rp.{{ $Detail->Keyboard_Price }}</h5>
                        <br>
                        Description:<br>
                        {{ $Detail->Description }}<br><br>
                        <form action="/GotoLogin" class="w-75">
                            @csrf
                            <div>
                                Quantity
                                <span><input type="number" name="Quantity" class="form-control input-sm"  id="Quantity" min="1"></span>
                                @error('Quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn-sm mt-3" style="width: 50%; background-color: #38b6ff;">Add to Cart</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</center>
@stop