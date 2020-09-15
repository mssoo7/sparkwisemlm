@extends('layouts.app')

@section('title','Dashboard')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Dashboard', 'page_name'=>'Dashboard'])

<!-- news slider -->
<div class="onoffswitch3 m-2">
    <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
    <label class="onoffswitch3-label" for="myonoffswitch3">
        <span class="onoffswitch3-inner">
            <span class="onoffswitch3-active">
                <marquee class="scroll-text">{{$news_ticker}}</marquee>
                <span class="onoffswitch3-switch">NEWS <span class="fa fa-times-circle"></span></span>
            </span>
            <span class="onoffswitch3-inactive"><span class="onoffswitch3-switch">SHOW BREAKING NEWS</span></span>
        </span>
    </label>
</div>

<livewire:user.index />
    
@endsection




