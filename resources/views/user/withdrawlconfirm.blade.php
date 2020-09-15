@extends('layouts.app')

@section('title','Confirmed Withdrawl')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Confirmed Withdrawl', 'page_name'=>'Confirmed Withdrawl'])

<livewire:user.withdrawlconfirm />
    
@endsection