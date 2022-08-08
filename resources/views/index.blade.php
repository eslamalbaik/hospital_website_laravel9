@extends('layouts.master')
@section('content')
<div class="container" style="margin:0 auto ;">
  <div class="row row-cols-1 row-cols-md-3 g-4  mt-5">
    @foreach ($departments as $depertment )
    <div class="col">
      <div class="card h-100">
        {{-- asset('site1asset/assets/images/cabin.png') --}}
        <img src="{{ $depertment->image }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $depertment->name }}</h5>
          <p class="card-text">{{ $depertment->description }}</p>
        </div>
        <div class="card-footer justify-center text-center">
          <form method="POST" action="{{ url('showAppointments') }}">
            @csrf
            <input type="hidden" name="department_id" value="{{ $depertment->id }}">
            <input type="submit" value="Show Appointments" class="btn btn-success">
          </form>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@stop