<x-app-layout>

    @if(count($images) > 0)
        @foreach($images as $i)
            {{ $i->id }}
        @endforeach 
    @else
        <div>No images currently available.</div>
    @endif


</x-app-layout>