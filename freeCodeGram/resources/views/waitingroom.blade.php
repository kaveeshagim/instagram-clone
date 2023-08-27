@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

          <h1 style="color: #3490dc;">Waiting Room</h1>
    <hr>
            <div class="d-flex h2 mt-5">
                <div class="mr-4">Approval Status</div>
                @if($status == "Pending")
                <div style="color:red;">{{ $status }}</div>
                @else
                <div style="color:green;">{{ $status }}</div>
                @endif
            </div>

        </div>
    </div>
</div>
@endsection
