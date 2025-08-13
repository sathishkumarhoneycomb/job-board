 <nav {{ $attributes  }}>
        <ul class="flex space-x-2 text-sm">
            <li>
                <a href="/">Home</a>
            </li>
            @foreach ($links as $key => $val )
            <li>&rarr;</li>
            <li>
            <a href="{{ $val }}"> {{ $key }} </a>
            </li>
            @endforeach

        </ul>
</nav>


