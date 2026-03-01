@extends('layouts.app')

@section('content')

<div class="confirm__content">
  <h2>お問い合わせ内容確認</h2>

  <form action="/contacts" method="post">
    @csrf

    <p>お名前：{{ $contact['name'] }}</p>
    <input type="hidden" name="name" value="{{ $contact['name'] }}">

    <p>メール：{{ $contact['email'] }}</p>
    <input type="hidden" name="email" value="{{ $contact['email'] }}">

    <p>電話番号：{{ $contact['tel'] }}</p>
    <input type="hidden" name="tel" value="{{ $contact['tel'] }}">

    <p>お問い合わせ内容：{{ $contact['content'] }}</p>
    <input type="hidden" name="content" value="{{ $contact['content'] }}">

    <button type="submit">送信</button>
  </form>

</div>

@endsection