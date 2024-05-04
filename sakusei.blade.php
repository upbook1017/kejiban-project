@extends('layouts.kejiban')

@section('main')
  <main>
    <h1>新規話題作成</h1>

    <table border="1">
      <tr>
        <th class="hinichi">話題作成日</th>
      </tr>
      <tr>
            <td class="hinichitext">{{$msg}}</td>
      </tr>
    </table>
  </main>
@endsection