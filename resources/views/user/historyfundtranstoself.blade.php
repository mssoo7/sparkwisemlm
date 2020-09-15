@extends('layouts.app')

@section('title','Transaction History')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Transaction History', 'page_name'=>'Transaction History'])

<livewire:user.historyfundtranstoself />
    
@endsection