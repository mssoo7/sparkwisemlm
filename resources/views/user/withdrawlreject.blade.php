@extends('layouts.app')

@section('title','Rejected Withdrawl')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Rejected Withdrawl', 'page_name'=>'Rejected Withdrawl'])

<livewire:user.withdrawlreject />
    
@endsection