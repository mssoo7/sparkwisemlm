@extends('layouts.app')

@section('title','Profile')

@section('content')

@livewire('user.headings', ['heading_name'=>'Profile', 'page_name'=>'Profile'])

<livewire:user.profile />
    
@endsection

