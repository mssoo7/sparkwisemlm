@extends('layouts.app')

@section('title','Make New Withdrawl')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Make New Withdrawl', 'page_name'=>'Make New Withdrawl'])

<livewire:user.withdrawlmake />
    
@endsection