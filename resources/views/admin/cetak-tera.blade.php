@extends('layouts.master')

@section('content')
@livewire('print-tera-preview', ['tera' => $tera])
@endsection