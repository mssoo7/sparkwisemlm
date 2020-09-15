@extends('layouts.app')

@section('title','My Downline')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'My Downline', 'page_name'=>'My Downline'])

<livewire:user.mydownline />
    
@endsection