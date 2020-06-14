@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="row desc p-3 mb-1">
                <div class="col">                    
                    <h4>{{ $habit->description }}</h4>
                    <h6>{{ $habit->reason}}</h6>
                </div>
                <div class="col text-right">                    
                    {{ $habit->firstRating->created_at->diffForHumans() }}
                </div>
            </div>
            <div id="calendar"></div>
            <div class="summary">
                <h4>Summary: </h4>
                <div class="row text-center">
                    <div class="col smile "><i class='far fa-smile fa-lg'></i></div>
                    <div class="col meh "><i class='far fa-meh fa-lg'></i></div>
                    <div class="col frown "><i class='far fa-frown fa-lg'></i></div>
                </div>
                <div class="row text-center">
                    <div class="col s ">{{$smiles}}</div>
                    <div class="col m">{{$mehs}}</div>
                    <div class="col f">{{$frowns}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="#" class="float bg-primary" data-toggle="modal" data-target="#createModal">
    <i class="far fa-calendar-check fa-lg my-float" style="color:white"></i>
</a>
{{-- Create New Habit Modal --}}
<div class="modal fade" tabindex="-1" role="dialog" id="createModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rate My Day</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('ratings.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="btn-group btn-group-toggle special" data-toggle="buttons">
                        <label class="btn btn-light">
                          <input type="radio" name="rating" id="rating1" autocomplete="off" value="smile"> <i class="far fa-smile fa-lg"></i>
                        </label>
                        <label class="btn btn-light">
                          <input type="radio" name="rating" id="rating2" autocomplete="off" value="meh"> <i class="far fa-meh fa-lg"></i>
                        </label>
                        <label class="btn btn-light">
                          <input type="radio" name="rating" id="rating3" autocomplete="off" value="frown"> <i class="far fa-frown fa-lg"></i>
                        </label>
                        <input type="number" value="{{$habit->id}}" hidden name="habit_id">
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary">Rate</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- End Create New Habit Modal --}}
@endsection
