@extends('layouts.app')

@section('title','Activation History')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'E-Wallets', 'page_name'=>'E-Wallets'])

<livewire:user.ewallet />
  
@endsection
