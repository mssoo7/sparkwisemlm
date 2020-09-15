@extends('layouts.app')

@section('title','Direct Income')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Direct Income', 'page_name'=>'Direct Income'])

<livewire:user.incomedirect />
    
@endsection