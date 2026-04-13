@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="summary">
        <div class="card">目標体重</div>
        <div class="card">目標まで</div>
        <div class="card">最新体重</div>
    </div>
    <div class="action-area">
        <form class="search">
            <input type="date">
            <input type="date">
            <button>検索</button>
        </form>

        <button type="button" onclick="openModal()" class="add-btn">データ追加</button>
    </div>
    <div>
        <table>
            <tr>
                <th>日付</th>
                <th>体重</th>
                <th>カロリー</th>
                <th>運動時間</th>
                <th></th>
            </tr>
            <tr>
                <td>2023/11/26</td>
                <td>46.5kg</td>
                <td>1200cal</td>
                <td>00:15</td>
                <td>✏️</td>
            </tr>
        </table>
    </div>
</div>


<div id="modal" class="modal">
    <div class="modal-content">
        <h2>Weight Logを追加</h2>
        <form action="{{ route('weight_logs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="label-row">
                    <label>日付</label><span class="required">必須</span>
                </div>
                <input type="date" name="date">
            </div>
            <div class="form-group">
                <div class="label-row">
                    <label>体重</label>
                    <span class="required">必須</span>
                </div>
                <div class="input-row">
                    <input type="text" name="weight">
                    <span>kg</span>
                </div>
            </div>

            <label>摂取カロリー</label>
            <input type="text" name="calories">cal
            <label>運動時間</label>
            <input type="text" name="exercise_time">
            <label>運動内容</label>
            <textarea name="exercise_content"></textarea>

            <div class="modal-buttons">
                <button type="button" onclick="closeModal()">戻る</button>
                <button type="submit">登録</button>
            </div>
        </form>

    </div>
    
</div>

<script>
    function openModal() {
        document.getElementById('modal').style.display = 'flex';
    }
    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }
</script>



@endsection


