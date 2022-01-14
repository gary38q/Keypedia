@extends('Layout_G')

@section('Title', "History Detail")

@section('Isi')

<center>
    @if ( $Time->User_ID  ==  $_SESSION['id'])
    <div class="container mt-5 ">
        <div class="h3">
            
            Your Transaction at {{ $Time->created_at }}
            
        </div>@php
        $d = 0;
    @endphp
                <table width="100%" class="table text-center">
                    <tr>
                     
                        <th>Keyboard Image</th>
                        <th>Keyboard Name</th>
                        <th>Subtotal</th>
                        <th>Quantity</th>
                       
                    </tr>
                   
            @foreach ($History as $History) 
                    <tr>
                        <td width="30%"><img width="100%" height="150px" class="mb-3" src="{{ url('Storage/'.$History->Image_Link) }}"></td>
                        <td width="30%">{{ $History->Keyboard_Name }}</td>
                        <td width="20%">@php
                        $a = $History->Keyboard_Price; 
                        $b = $History->Quantity;
                        $c = $a*$b;
                        $d += $c;
                        echo $c;
                    @endphp</td>
                        <td width="20%">{{ $History->Quantity }}</td>
                    </tr>
            @endforeach
            
        </table>
        <hr>
        <div style="float: right" > <strong> Price: Rp.@php echo $d @endphp</strong></div>
        
        </div>
@else
        <div class="h1">Tolong Jangan Iseng!!!</div>
        @endif

</center>

@stop