<x-app-layout>

    @if(count($tasks) > 0)
        @foreach($tasks as $t)
            {{ $t->id }}
        @endforeach 
    @else
        <div>No tasks currently available</div>
    @endif


</x-app-layout>