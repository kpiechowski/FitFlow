@extends('layouts.formLayout')

@section('formBox')

    <x-activityForm :date="$date" :types="$types" />

@endsection



