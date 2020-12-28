@extends('layouts.master')

@section('content')
    <p>저는 자식 뷰의 'content' 섹션입니다.ddd</p>
    @include('partials.footer')
@endsection

@section('script')
    @parent
    <script>
        alert('저는 자식뷰의 스크립트 섹션입니다.');
    </script>
@endsection