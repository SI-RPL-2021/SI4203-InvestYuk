@extends('layouts.blank')
@section('title', 'ENROLL')
@component('components.topbar')
@endcomponent
@section('content')


<br>
<br>
<div class = "container">

    <form>
    <legend>Nama Coursenya</legend>
    <p>by InvestYuk!</p>
    <br>
    
    <div class="input-group">
      <div class="input-group-text">Enroll</div>
      <input type="text" class="form-control" id="enroll">
    </div>

    <br>
    <br>

    <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>


@endsection
