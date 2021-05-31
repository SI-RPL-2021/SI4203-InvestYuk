@extends('layouts.blank')
@section('title', 'Review')
@component('components.topbar')
@endcomponent
@section('content')


<style>

.card1{
    position: absolute;
width: 75px;
height: 39px;
left: 429px;
top: 139px;
}

.card2{
    position: absolute;
width: 75px;
height: 39px;
left: 610px;
top: 139px;
}

.card3{
    position: absolute;
width: 75px;
height: 39px;
left: 739px;
top: 139px;
}

.card-group1{
    position: absolute;
width: 499px;
height: 499px;
left: 410px;
top: 239px;
}



</style>

<br>

<div class = "container">
<legend class="text-center">Review Kelas</legend>
    <div class="card-group">
        <div class="container">
            <div class="row-grup">
            
            <div class="card1">
                <div class="container">
                <button type="button" class="btn btn-secondary btn-lg" href="#">Tidak Puas</button>
                </div>
            </div>
        
            <div class="card2">
                <div class="container">
                <button type="button" class="btn btn-secondary btn-lg" href="#">Biasa</button>
                </div>
            </div>

            <div class="card3">
                <div class="container">
                <button type="button" class="btn btn-secondary btn-lg" href="#">Puas</button>
                </div>
            </div>
            </div>
        </div>

        <div class="card-group1">
            <label for="linkCourse" class="form-label"></label>
            <textarea class="form-control" id="linkCourse" rows="7"> </textarea><br><br>
            <input class="btn btn-primary" type="submit" value="Submit" href="#">
        </div>


</div>


@endsection
