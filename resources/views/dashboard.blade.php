<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-1 p-5 md:grid-cols-3 ">
                    <div class="col-span-1 mx-3 ">
                        <livewire:dashboard.dashboard-table table="Category" :model="$categories" colour="blue" />
                    </div>
                    <div class="col-span-1 mx-3 mt-3 md:mt-0 ">
                        <livewire:dashboard.dashboard-table table="Visibility" :model="$visibilities" colour="red" />
                    </div>
                    <div class="col-span-1 mx-3 mt-3 md:mt-0 ">
                        <livewire:dashboard.dashboard-table table="Status" :model="$statuses" colour="yellow" />
                    </div>
                </div>

                <div class="grid grid-cols-1 p-5 md:grid-cols-6">
                    <div class="col-span-1 mx-3 mt-3 md:col-span-6 md:mt-0">
                        <div>
                            <span class="font-bold">User List</span>
                        </div>
                        <table class="bg-green-100">
                            <thead>
                                <tr>
                                    <th class="px-2 text-left">
                                        Id 
                                    </th>
                                    <th class="px-2 text-left">
                                        Email
                                    </th>
                                    <th class="px-2 text-left">
                                        Verified?
                                    </th>
                                    <th class="px-2 text-left">
                                        Team
                                    </th>
                                    <th class="px-2 text-left">
                                        Account created
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $u)
                                <tr>
                                    <td class="px-2">
                                        {{ $u->id }}
                                    </td>
                                    <td class="px-2">
                                        <a class="hover:underline" href="/user/{{ $u->id }}">{{ $u->email }}</a>
                                    </td>
                                    <td class="px-2">
                                        {{ $u->email_verified_at == null ? 'Not verified' : $u->email_verified_at }}
                                    </td>
                                    <td class="px-2">
                                        {{ $u->current_team_id }}
                                    </td>
                                    <td class="px-2">
                                        {{ date("d-m-Y",strtotime($u->created_at)) }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="grid grid-cols-1 p-5 md:grid-cols-6">
                    <div class="col-span-1 mx-3 mt-3 md:col-span-6 md:mt-0">
                        <div>
                            <span class="font-bold">Organisations</span>
                        </div>
                        @if(count($organisations) == 0 )
                            <div>No organisations available</div>
                        @else
                        <table class="bg-green-100">
                            <thead>
                                <tr>
                                    <th class="px-2 text-left">
                                        Id 
                                    </th>
                                    <th class="px-2 text-left">
                                        Email
                                    </th>
                                    <th class="px-2 text-left">
                                        Verified?
                                    </th>
                                    <th class="px-2 text-left">
                                        Team
                                    </th>
                                    <th class="px-2 text-left">
                                        Account created
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($organisations as $o)
                                <tr>
                                    <td class="px-2">
                                        {{ $o->id }}
                                    </td>
                                    <td class="px-2">
                                        <a class="hover:underline" href="/organisation/{{ $o->id }}">{{ $o->name }}</a>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>
