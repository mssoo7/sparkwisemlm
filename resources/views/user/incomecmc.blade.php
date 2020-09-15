@extends('layouts.app')

@section('title','CMC Income')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'CMC Income', 'page_name'=>'CMC Income'])

<livewire:user.incomecmc />
    
@endsection