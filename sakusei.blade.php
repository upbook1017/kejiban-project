@extends('layouts.kejiban')

<style>
    table#sakusei1 {padding: 50px; border:#FFFFFF;}
</style>

@section('main')
  <main>
    <h1>新規話題作成</h1>
    <nav>
        <ul>
          <li><a href="home">一覧に戻る</a></li>
        </ul>
    </nav>
<table id="sakusei1">
@csrf
  <tr>
    <th>ニックネーム：</th>
      <td>
      <input type="text" name="wadai" value="" class=""
            placeholder="10文字以内">
      </td>
  </tr>
  <tr>
    <th>話題名：</th>
      <td>
      <input type="text" name="wadai" value="" class=""
            placeholder="15文字以内">
      </td>
  </tr>
</table>
  </main>
@endsection