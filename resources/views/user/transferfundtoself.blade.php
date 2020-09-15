@extends('layouts.app')

@section('title','Balance Transfer In Wallet')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Balance Transfer In Wallet', 'page_name'=>'Balance Transfer In Wallet'])

<livewire:user.transferfundtoself />
    
@endsection