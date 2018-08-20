<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Pub API</title>
    <link rel="icon" href="/favicon.png">
    <link rel="stylesheet" href="https://unpkg.com/json-browse@0.2.0/json-browse/jquery.json-browse.css" type="text/css" media="all" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/vendor.js"></script>
    <script type="text/javascript" src="https://unpkg.com/json-browse@0.2.0/json-browse/jquery.json-browse.js"></script> 
  </head>
  <body>
    <div id="json" class="json-body"> {{ $json }} </div>
    <script>
      $(function() { $('#json').jsonBrowse({!! $json !!}); });
    </script>
