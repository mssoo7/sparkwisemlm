@extends('layouts.app')

@section('title','All Transaction')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'All Transaction', 'page_name'=>'All Transaction'])

<livewire:user.historytransactionpage />
    
@endsection