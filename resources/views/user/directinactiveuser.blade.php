@extends('layouts.app')

@section('title','Inactive Direct User')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Inactive Direct User', 'page_name'=>'Inactive Direct User'])

<livewire:user.directinactiveuser />
    
@endsection