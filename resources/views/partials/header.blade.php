<header>
    <ul>
        @foreach ($menu as $item)
            <li>
                <a href="{{ $item['url'] }}">{{ $item['text'] }}</a>
            </li>
        @endforeach
    </ul>
</header>