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
                        {{ $Detail->Description }}
                </div>
            </div>
        </div>
    </div>
</center>
@stop