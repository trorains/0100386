@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pay Fees</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Search for student's payements!
                </div>
                <div class="card-body">
                    <form method="POST" action="/studentfeees ">
                        @csrf

                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Enter Student Email') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button>
                            </div>
                        </div>
                        @if (Session::has('form_status' ))
                        session('form_status' ) 
                        @endif

                    </form>
                    @if (isset($students))
                     <table>
                <tr>
                    <td>Payement ID </td>
                    <td>Student Email </td>
                    <td>Year </td>
                    <td>Semester </td>
                    <td>Payement Amount </td>
                    <td>Date Paid </td>
                     <td>Date Updated </td>
                </tr>
                
                @foreach  ($students as $student)
                <tr>
                    <td>{{$student->id}} </td>
                    <td>{{$student->studentemail}} </td>
                    <td>{{$student->year}} </td>
                    <td>{{$student->semester}} </td>
                    <td>{{$student->amountpaid}} </td>
                    <td>{{$student->created_at}} </td>
                    <td>{{$student->updated_at}} </td>
                    
                </tr>
                @endforeach
            </table>
            @endif
                    <!-- @php
                    if(isset($students)){
                    dd($students);
                    }
                    @endphp -->
            </div>
        </div>
    </div>
</div>
@endsection
