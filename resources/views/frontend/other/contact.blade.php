@extends('layouts.master')

@section('title')
    Contact me
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}" type="text/css" />
@endsection

@section('content')
    @include('includes.info-box')
    <form method="post" id="contact-form" class="contact-form">
        <div class="input-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name"/>    
        </div>
        <div class="input-group">
            <label for="email">Your Email</label>
            <input type="text" name="email" id="email"/>    
        </div>
         <div class="input-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject"/>    
        </div>
        <div class="input-group">
            <label for="subject">Subject</label>
            <textarea name="message" id="message" rows="10"></textarea>
        </div>
        <input type="hidden" name="_token" value="{{ Session::token() }}" />
        <input type="submit" value="Submit"/>
    </form>
@endsection