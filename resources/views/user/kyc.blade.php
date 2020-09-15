@extends('layouts.app')

@section('title','KYC Form')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'KYC Form', 'page_name'=>'KYC Form'])

<livewire:user.kyc />
    
@endsection