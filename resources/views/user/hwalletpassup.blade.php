@extends('layouts.app')

@section('title','H-wallet History')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'H-Wallet Pass Up History', 'page_name'=>'H-Wallet History'])

<livewire:user.hwalletpassup />
    
@endsection