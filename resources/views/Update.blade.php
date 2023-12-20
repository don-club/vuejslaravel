@extends('layout')

@section('title')
    Update
@endsection

@section('content')
    <update :country-id="{{ $id }}"></update>
@endsection
