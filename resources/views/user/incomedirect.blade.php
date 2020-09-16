@extends('layouts.app')

@section('title','Direct Income')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Fast Start Income', 'page_name'=>'Fast Start Income'])

<livewire:user.incomedirect />
    
@endsection