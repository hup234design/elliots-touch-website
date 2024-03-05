<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100">
  <header class="bg-red-800 py-12">
    <div class="max-w-6xl px-8 mx-auto">
    <ul class="flex space-x-12">
      @foreach ( $pageLinks as $slug=>$title )
        <li><a href="{{ route('pages.page', $slug) }}" class="text-lg font-bold text-white">{{ $title }}</a></li>
      @endforeach
      <li>
          <a href="{{ route('posts.index') }}" class="text-lg font-bold text-white">
              {{ app(\Hup234design\Cms\Settings\PostsSettings::class)->title }}
          </a>
      </li>
    </ul>
    </div>
  </header>
    <main class="my-12">
        {{ $slot }}
    </main>
    <footer class="bg-gray-800 h-24"></footer>
</body>
</html>
