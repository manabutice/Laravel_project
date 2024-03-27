{{-- resources/views/inventory/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>在庫一覧</h1>
    <a href="{{ route('inventory.create') }}">新規作成</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>商品名</th>
                <th>数量</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>
                        <a href="{{ route('inventory.edit', $item->id) }}">編集</a>
                        <form action="{{ route('inventory.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
