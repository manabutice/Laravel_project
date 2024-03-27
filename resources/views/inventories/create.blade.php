{{-- resources/views/inventory/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>新規在庫作成</h1>
    <form action="{{ route('inventory.store') }}" method="POST">
        @csrf
        <label for="name">商品名:</label>
        <input type="text" name="name" id="name" required>

        <label for="quantity">数量:</label>
        <input type="number" name="quantity" id="quantity" required>

        <button type="submit">保存</button>
    </form>
</div>
@endsection
