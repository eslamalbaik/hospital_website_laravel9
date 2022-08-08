@extends('layouts.master')
@section('content')
<div class="container mt-3" style="margin:0 auto ;">
  <h1 class="header-expand text-bg-dark text-center p-md-2" style="font-size:34px; color:blue">C&D Appointements </h1>
  <table class="table table-hover mt-3">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Depertment name</th>
        <th scope="col">Depertment Date</th>
        <th class="col">Token</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($appointments as $appointment )
      <tr>
        <th scope="row">{{ $appointment->id }}</th>
        <td>{{ $appointment->department_name }}</td>
        <td>{{ $appointment->department_date }}</td>
        @if ($appointment->token)
        <td>I cannot this book</td>
        @else
        <td>
          <form method="POST" action="{{ route('BookAppointments') }}">
            @csrf
            {{-- <input type="text" name="appointment_id" value="{{  $appointment->id }}">
            <input type="text" name="department_name" value="{{  $appointment->department_name }}">
            <input type="text" name="department_date" value="{{  $appointment->department_date }}"> --}}
            <input type="submit" value="book" class="btn btn-primary">
          </form>
        </td>
        @endif
      </tr>
      @endforeach
      {{-- <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>qtto</td>
        <td>@rdo</td>
      </tr> --}}
    </tbody>
  </table>
</div>
@stop