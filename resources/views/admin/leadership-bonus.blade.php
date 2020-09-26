@extends('layouts.adminmain')
@section('title','Leader Ship Bonus')

@section('content')
<div>
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Leader Ship Bonus</h4>
    </div>
    <hr>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Front Line</th>
                        <th>Passup</th>
                        <th>Commission</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($bonus as $val)
                    <tr>
                        <td>{{$val->id}}</td>
                        <td>{{$val->title}}</td>
                        <td>{{$val->fronline}}</td>
                        <td>{{$val->passup}}</td>
                        <td>{{$val->commission}}</td>
                        <td>{{$val->status}}</td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>


@endsection
