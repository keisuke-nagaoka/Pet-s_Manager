@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2>{{ $pet->name }} の飼育記録の登録（活動記録）</h2>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="{{ route('managements.store', $pet->id) }}" class="w-1/2" enctype="multipart/form-data">
            @csrf

            <aside =class="avatar">
                <div class="w-40 rounded-full">
                    <img src="/storage/record_image/{{ $management->image }}">
                </div>
                <input type="file" name="image" value="{{ $management->image }}">
            </aside>
            
            <div class="form-control my-4">
                <span class="label-text">何を記録する？</span>
                    <select name="record">
                        <option value="">▼活動を選択する</option>
                        <option>今日の様子（日記）</option>
                        <option>ゴハン</option>
                        <option>おやつ</option>
                        <option>トイレ</option>
                        <option>掃除</option>
                        <option>通院</option>
                        <option>餌の量</option>
                        <option>体重測定</option>
                        <option>その他</option>
                    </select>
            </div>

            <div class="form-control my-4">
                <label for="datetime-local" class="label">
                    <span class="label-text">記録日時</span>
                </label>
                <input type="datetime-local" name="register" class="input input-bordered w-full">
            </div>

            <div class="form-control my-4">
                <label for="text" class="label">
                    <span class="label-text">内容</span>
                </label>
                <input type="text" name="content" class="input input-bordered w-full">
            </div>
            
            <div class="form-control my-4">
                <label for="text" class="label">
                    <span class="label-text">内容（g単位：半角数字）</span>
                </label>
                <input type="number" name="weight" class="input input-bordered w-full">
            </div>

            <button type="submit" class="btn btn-primary btn-outline">記録する</button>
        </form>
    </div>
    
@endsection