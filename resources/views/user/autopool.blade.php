@extends('layouts.app')

@section('title','Autopool')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Autopool', 'page_name'=>'Autopool'])

<livewire:user.autopool />
    
@endsection