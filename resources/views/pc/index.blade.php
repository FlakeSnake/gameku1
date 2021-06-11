@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-around mt-1">
        <a href="{{ route('mobile.index') }}"><b>Mobile Games</b></a>
        <a href="{{ route('pc.index') }}"><b style="color:red">PC Games</b></a>
        <a href="{{ route('console.index') }}"><b>Console Games</b></a>
        <a href="{{ route('streaming.index') }}"><b>Streaming Apps</b></a>
        <a href="{{ route('voucher.index') }}"><b>Kode Vouchers</b></a>
    </div>
@endsection
