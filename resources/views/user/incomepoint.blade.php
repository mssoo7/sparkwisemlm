@extends('layouts.app')

@section('title','Point Income')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Point Income', 'page_name'=>'Point Income'])

<livewire:user.incomepoint />
    
@endsection