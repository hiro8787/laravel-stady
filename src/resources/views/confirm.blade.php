@extends('layouts.app')
  @section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
  @endsection
</head>
@section('text')
  <form class="form" name="contact" method="POST" action="/thanks">
    @csrf
    <table class ="form-item">
      <tr class="form-item-category">
        <th class="form-item-label">お名前</th>
        <td class="form-item-name">
        <input type="text" name="first_name" class="name" value="{{ $contact['first_name'] }}" readonly />
        <input type="text" name="last_name" class="name" value="{{ $contact['last_name'] }}" readonly />
      </td>
      <tr class="form-item-category">
        <th class="form-item-label">性別</th>
        <td class="form-item-gender">
          <input type="radio" name="gender" value="{{ $contact['gender'] }}" readonly />
        </td>
      </tr>
      <tr class="form-item-category">
        <th class="form-item-label">メールアドレス</th>
        <td class="form-item-email">
          <input type="email" name="email" class="form-item-input" value="{{ $contact['email'] }}" readonly />
        </td>
      </tr>
      <tr class="form-item-category">
        <th class="form-item-label">電話番号</th>
        <td class="form-item-tel">
          <input type="tel" name="tel" class="form-item-input-tel" value="{{ $contact['tel'] }}" readonly />
          <input type="tel" name="tel" class="form-item-input-tel" value="{{ $contact['tel'] }}" readonly />
          <input type="tel" name="tel" class="form-item-input-tel" value="{{ $contact['tel'] }}" readonly />
        </td>
      </tr>
      <tr class="form-item-category">
        <th class="form-item-label">住所</th>
        <td class="form-item-address">
          <input type="text" name="address" class="form-item-input" value="{{ $contact['address'] }}" readonly />
        </td>
      </tr>
      <tr class="form-item-category">
        <th class="form-item-label">建物名</th>
        <td class="form-item-building">
          <input type="text" name="building" class="form-item-input" value="{{ $contact['building'] }}" readonly />
        </td>
      </tr>
      <tr class="form-item-category">
        <th class="form-item-label">お問い合わせの種類</th>
        <td class="form-item-content">
          <input type="text" name="content" class="form-item-input" value="{{ $contact['content'] }}" readonly />
        </td>
      </tr>
      <tr class="form-item-category">
        <th class="form-item-label">お問い合わせ内容</th>
        <td class="form-item-detail">
          <input type="text" name="detail" class="form-item-textarea" value="{{ $contact['detail'] }}" readonly />
        </td>
      </tr>
    </table>
    <div class="form-button">
      <input type="submit" class="form-button-submit" value="送信" />
      <input type="submit" name="back" class="form-button-correction" value="修正" />
    </div>
  </form>
@endsection