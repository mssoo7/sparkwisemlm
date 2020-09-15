@extends('layouts.app')

@section('title','Balance Transfer')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Balance Transfer To Other', 'page_name'=>'Balance Transfer To Other'])

<livewire:user.transferwalletother />
    
@endsection
