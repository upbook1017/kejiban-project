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
        <li><a href="index.blade.php">HOME</a></li>
        <li><a href="info.blade.php">INFORMATION</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h1>掲示板一覧</h1>
    <p>{{$msg}}</p>
  </main>
  <footer>
      <p>upbook1017_kejiban</p>
  </footer>
</body>
</html>