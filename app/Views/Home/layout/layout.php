<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/custom.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/fonts/remixicon.css" type="text/css" media="all" />
    <title>Animeplay</title>
  </head>
  <body class="bg-zinc-950 pt-[70px] pb-[85px]">
    
    <?= $this->rendersection("main")?>
    <?= $this->include("Home/components/navbar")?>
    
    <script src="/js/index.js" type="text/javascript" charset="utf-8"></script>
    <script src="/js/ajax.js" type="text/javascript" charset="utf-8"></script>
  </body>
</html>