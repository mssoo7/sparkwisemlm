@extends('layouts.app')

@section('title','CMC Club')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'CMC Club', 'page_name'=>'CMC Club'])

<livewire:user.cmc />
    
@endsection