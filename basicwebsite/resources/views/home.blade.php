@extends('layouts.app')

@section('content')
  <h1>Home</h1>
  <hr>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel dui vitae mi aliquam condimentum. Aliquam luctus volutpat lacinia. Sed mattis bibendum augue, at feugiat purus placerat eget. Proin ac bibendum leo, et varius urna. Vestibulum egestas vulputate nunc, id euismod nisl blandit sit amet. Integer elit sem, euismod at lacinia a, gravida ac purus. Morbi feugiat ipsum eu leo dapibus blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dapibus posuere libero, eu auctor nulla venenatis porta. Nulla auctor orci id ante interdum, at faucibus erat consequat. Morbi sed nibh ac nibh ornare aliquet at ut odio.</p>
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection