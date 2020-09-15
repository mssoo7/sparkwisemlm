@extends('layouts.app')

@section('title','Activation History')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Activation History', 'page_name'=>'Activation History'])

<livewire:user.historyactivation />
  
@endsection
