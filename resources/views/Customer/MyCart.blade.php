@extends('Layout_G')

@section('Title', "My Cart")

@section('Isi')

<div class="container mt-5">
        <div class="row" style="margin-left: 100px">
            @php
                $d = 0;
            @endphp
        @foreach($kereta as $kereta)
            <div class="row mb-3 border border-dark">
                <div class="col mt-3 ml-3">
                    <img width="75%" height="200px" src="{{ url('Storage/'.$kereta->Image_Link) }}" alt="">
                </div>
                <div class="col text-left mt-3">
                        <h3>{{ $kereta->Keyboard_Name }}</h3>
                        <br>
                        
                        <h5>SubTotal: Rp. @php
                            $a = $kereta->Keyboard_Price; 
                            $b = $kereta->Quantity;
                            $c = $a*$b;
                            $d += $c;
                            echo $c;
                        @endphp</h5>
                        <br>
                        Description:<br>
                        {{ $kereta->Description }}<br><br>
                        <form action="/MyCart/Update/{{ $kereta->Cart_ID }}" method="POST" class="w-75">
                            @csrf
                            <div>
                                Quantity
                                <span><input type="number" name="Quantity" value="{{ $kereta->Quantity }}" class="form-control input-sm"  id="Quantity"></span>
                                @error('Quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 mb-3">Update</button>
                            
                        </form>
                </div>
            </div>
            @endforeach
            <div class="">
                <div class="h3">
                    Total: Rp. @php echo $d @endphp
                </div>
                <div>
                    <a href="/MyCart/Checkout" class="btn btn-dark mt-3 mb-3" role="button" aria-pressed="true">Checkout </a>
                </div>
            </div>
        </div>
    </div>

@stop