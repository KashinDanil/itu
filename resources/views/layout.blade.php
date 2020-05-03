<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
  </head>
  <body>
    <div class="columns is-marginless">
        <div class="column is-one-fifth is-paddingless app__logo">
            <a href="/" class="title">Projector</a>
        </div>
        <div class="column is-paddingless app__nav">
            <div class="container">
                @include('components.top-menu')
            </div>
        </div>
    </div>
    <div class="columns is-marginless is-fullheight-layout">
        <div class="column is-one-fifth app__sidebar">
            @isset($project)
                @include('components.project-menu', ['project' => $project])
            @else
                @include('components.left-menu')
            @endisset
        </div>
        <div class="column app__content">
            @section('content')
            @show
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
  </body>
</html>
