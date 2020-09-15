@extends('layouts.app')

@section('title','Active Direct User')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Active Direct User', 'page_name'=>'Active Direct User'])

<livewire:user.directactiveuser />
    
@endsection