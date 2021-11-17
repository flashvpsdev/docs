<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {!! SEO::generate() !!}
  <link href="{{ mix('css/app.css', 'vendor/docs') }}" rel="stylesheet">
</head>

<body>
  @include("docs::navbar")

  <div class="drawer drawer-mobile max-w-screen-xl mx-auto">
    <input id="main-menu" type="checkbox" class="drawer-toggle">

    <div class="flex flex-col text-base-content drawer-content">
      @include('docs::nav')

      <div class="break-words p-4 lg:p-10 prose lg:prose-xl">
        {!! $content !!}
      </div>
    </div>

    <div class="drawer-side">
      <label for="main-menu" class="drawer-overlay"></label>
      @include('docs::aside')
    </div>
  </div>

  @include('docs::footer')
  @include('docs::backtotop')

  <script src="{{ mix('js/app.js', 'vendor/docs') }}"></script>
</body>

</html>
