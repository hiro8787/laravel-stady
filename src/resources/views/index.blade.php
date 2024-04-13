@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<form class="form" name="contact" method="POST" action="/confirm">
@csrf
    <div class="form-item">
        <div class="form-item-label">お名前</div>
        <div class="form-item-tag">※</div>
        <input type="text" name="first_name" class="name" placeholder="例:山田" value="{{ old('first_name') }}"/>
        <input type="text" name="last_name" class="name" placeholder="例:太郎" value="{{ old('last_name') }}"/>
    </div>
    <div class="error_label">
        @error('first_name')
        {{ $message }}
        @enderror
        @error('last_name')
        {{ $message }}
        @enderror
    </div>
    <div class="form-item">
        <p class="form-item-label">性別</p>
        <div class="form-item-gender">
            <input type="radio" name="gender" value="male" checked="checked">男性
            <input type="radio" name="gender" value="male">女性
            <input type="radio" name="gender" value="male">その他
        </div>
    </div>
    <div class="form-item">
        <p class="form-item-label">メールアドレス</p>
        <div class="form-item-tag">※</div>
        <input type="email" name="email" class="form-item-input" placeholder="例:test@example.com"
        value="{{ old('email') }}"/>
    </div>
    <div class="error_label">
    @error('email')
    {{ $message }}
    @enderror
    </div>
    <div class="form-item">
        <p class="form-item-label">電話番号</p>
        <div class="form-item-tag">※</div>
        <input type="tel" name="tel" class="form-item-input-tel" placeholder="例:080" value="{{ old('tel') }}"/>
        <div class="tel-item">-</div>
        <input type="tel" name="tel" class="form-item-input-tel" placeholder="例:1234" value="{{ old('tel') }}"/>
        <div class="tel-item">-</div>
        <input type="tel" name="tel" class="form-item-input-tel" placeholder="例:5678" value="{{ old('tel') }}"/>
    </div>
    <div class="error_label">
    @error('tel')
    {{ $message }}
    @enderror
    </div>
    <div class="form-item">
        <p class="form-item-label">住所</p>
        <div class="form-item-tag">※</div>
        <input type="text" name="address" class="form-item-input" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
    </div>
    <div class="error_label">
    @error('address')
    {{ $message }}
    @enderror
    </div>
    <div class="form-item">
        <p class="form-item-label">建物名</p>
        <input type="text" name="building" class="form-item-input" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}"/>
    </div>
    <div class="form-item">
        <p class="form-item-label">お問い合わせの種類</p>
        <div class="form-item-tag">※</div>
        <select type='' name="content" class="inquiry-type">
            <option value="" selected>選択してください</option>
            <option value="商品のお届けについて">商品のお届けについて</option>
            <option value="商品の交換について">商品の交換について</option>
            <option value="商品トラブル">商品トラブル</option>
            <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
            <option value="その他">その他</option>
        </select>
    </div>
    <div class="error_label">
    @error('content')
    {{ $message }}
    @enderror
    </div>
    <div class="form-item">
        <p class="form-item-label">お問い合わせ内容</p>
        <div class="form-item-tag">※</div>
        <textarea name="detail" class="form-item-textarea" value="{{ old('detail') }}"></textarea>
    </div>
    <div class="error_label">
        @error('detail')
        {{ $message }}
        @enderror
    </div>
    <input type="submit" class="form-btn" value="確認画面" />
</form>
@endsection