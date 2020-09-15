@extends('layouts.app')

@section('title','User Activation')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'User Activation', 'page_name'=>'User Activation'])

<livewire:user.useractivation />
    
@endsection