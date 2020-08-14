@extends('layouts.master')

@section('title')
<title>Stack Overflow</title>
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        <h1 class="mt-3">Detail Pertanyaan</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$question->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{!!$question->content!!}</h6>
                <p class="card-text">Ditanyakan pada: {{$question->created_at}}</p>
                <p class="card-text">Diperbarui pada: {{$question->updated_at}}</p>
                <p class="card-text">Ditanyakan oleh: {{$question->user['name']}}</p>

                <div class="buttons">
                    <a href="/pertanyaan" class="btn btn-secondary">Back</a>
                    <a href="{{$question->question_id}}/edit" class="btn btn-primary">Ubah</a>
                    <form action="/pertanyaan/{{$question->question_id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
                <br>
                <div class="d-flex justify-content-around">
                    <a href="#"><i class="fas fa-arrow-up"></i></a>
                    <a href="#"><i class="fas fa-arrow-down"></i></a>
                    <a href="#"><i class="far fa-comment-dots"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
