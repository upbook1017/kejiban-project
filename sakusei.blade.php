<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>掲示板サイト</title>
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
  <header id="page">
    <nav>
      <ul>
        <li><a href="home">HOME</a></li><!--href="アドレス名(web.php)"を入れること。-->
        <li><a href="info.blade.php">INFORMATION</a></li>
      </ul>
    </nav>
  </header>
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
  <footer>
      <p>upbook1017_kejiban</p>
  </footer>
</body>
</html>