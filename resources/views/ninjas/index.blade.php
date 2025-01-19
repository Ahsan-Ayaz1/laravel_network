<x-layout>
    <h2>Currently Available Ninjas</h2>
    <ul>
        @foreach ($ninjas as $ninja)
        <li>
            <a href="ninjas/{{ $ninja[" id"] }}"> {{ $ninja["name"] }} </a>
        </li>
        @endforeach
    </ul>
</x-layout>