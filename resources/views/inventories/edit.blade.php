{{-- resources/views/inventory/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>在庫編集</h1>
    <form action="{{ route('inventory.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">商品名:</label>
        <input type="text" name="name" id="name" value="{{ $item->name }}" required>

        <label for="quantity">数量:</label>
        <input type="number" name="quantity" id="quantity" value="{{ $item->quantity }}" required>

        <button type="submit">更新</button>
    </form>
</div>
@endsection
