@extends('Layout_G')
@section('Title', "View Keyboard")

@section('Isi')

<center>
    <h1>
        <?php 
            $Key = $_SESSION['Key'];
            echo $Key;
         ?>
    </h1>
    
    <div class="container mt-5">
        <input class="form-control w-50 mb-5" id="myInput" type="text" placeholder="Search" aria-label="Search">
            <div class="row" style="margin-left: 100px">
                @foreach($Keyboard as $Keyboards)
                    <ul class="list-group " id="Keyboard">
                        <li class="list-group-item ml-3 mb-3" id="IsiKey">
                    <a style="text-decoration:none;" href="/Category/Keyboard/{{ $Keyboards->Keyboard_ID }}">
                        <div class="col border border-dark mb-3 text-white bg-dark">
                            <img width="100%" height="150px" class="mt-3" src="{{ url('Storage/'.$Keyboards->Image_Link) }}">
                            <div class="p-4" >{{ $Keyboards->Keyboard_Name }}</div>
                            <div class="mb-3" >Rp. {{ $Keyboards->Keyboard_Price }}</div>
                        </div>
                    </a>
                </li>
            </ul>
        @endforeach
  
        </div>
    </div>
    <div class="mt-3">
        {{$Keyboard->withQueryString()->links()}}
        <br><br>
    </div>
</center>
@stop