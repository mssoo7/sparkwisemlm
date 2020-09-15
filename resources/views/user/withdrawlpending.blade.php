@extends('layouts.app')

@section('title','Pending Withdrawl')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Pending Withdrawl', 'page_name'=>'Pending Withdrawl'])

<livewire:user.withdrawlpending />
    
@endsection