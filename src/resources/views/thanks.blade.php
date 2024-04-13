@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks__content">
  <div class="background">Thank you
    <div class="main">お問い合わせありがとうございました</div>
  </div>

  <form class="form" name="contact" method="GET" action="/">
  @csrf
    <div class="form__button">
      <input type="submit" class="form-btn" value="HOME" />
    </div>
  </form>
</div>
@endsection