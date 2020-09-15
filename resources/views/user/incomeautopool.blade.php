@extends('layouts.app')

@section('title','Autopool Income')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Autopool Income', 'page_name'=>'Autopool Income'])

<livewire:user.incomeautopool />
    
@endsection