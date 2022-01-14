@extends('Layout_G')

@section('Title', "History")

@section('Isi')
<center>
        <div class=" mt-5 w-50">
            <div class="h3">
                Your Transaction History
            </div>
                @foreach ($History as $History)
                <a href="/History/Detail/{{ $History->History_ID }}" style="text-decoration: none">
                    <div class=" border border-dark mb-3 rounded text-dark" >
                        Transaction at {{ $History->created_at }}
                    </div>
                </a>
                @endforeach
            </div>
</center>
@stop