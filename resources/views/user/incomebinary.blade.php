@extends('layouts.app')

@section('title','Binary Income')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Pass Up Income', 'page_name'=>'Pass Up Income'])

<livewire:user.incomebinary />
    
@endsection