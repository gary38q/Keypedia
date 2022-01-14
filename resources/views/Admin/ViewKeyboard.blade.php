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
                    
                        <div class="col-sm border border-dark text-white bg-dark">
                            <img width="100%" height="150px" class="mt-3" src="{{ url('Storage/'.$Keyboards->Image_Link) }}">
                            <a style="text-decoration:none; " href="/Category/Keyboard/{{ $Keyboards->Keyboard_ID }}">
                                <div class="w-75" >{{ $Keyboards->Keyboard_Name }}</div></a>
                            <div class="mb-3" >Rp. {{ $Keyboards->Keyboard_Price }}</div>
                            <a href="/Category/Delete/{{ $Keyboards->Keyboard_ID }}" class="btn btn-danger " role="button" aria-pressed="true">Delete Keyboard</a>
                            <a href="/Category/Keyboard/Update/{{ $Keyboards->Keyboard_ID }}" class="btn btn-primary ml-3" role="button" aria-pressed="true">Update Keyboard  </a>
                            <br><br>
                        </div>
                    
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