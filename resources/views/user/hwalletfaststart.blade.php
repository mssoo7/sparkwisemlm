@extends('layouts.app')

@section('title','H-wallet History')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'H-Wallet Fast Start History', 'page_name'=>'H-Wallet History'])

<livewire:user.hwalletfaststart />
    
@endsection