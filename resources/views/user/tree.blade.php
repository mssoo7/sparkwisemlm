@extends('layouts.app')

@section('title','first tree')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'first tree', 'page_name'=>'first tree'])

<livewire:user.tree />
    
@endsection