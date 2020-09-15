@extends('layouts.app')

@section('title','Binary Income')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Binary Income', 'page_name'=>'Binary Income'])

<livewire:user.incomebinary />
    
@endsection