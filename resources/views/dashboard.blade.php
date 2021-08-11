<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-3">
                    <div class="col-span-1 m-5">
                        <div class="font-bold">
                            Status Table
                        </div>
                        <table class="table-fixed bg-blue-50">
                            <thead>
                                <tr>
                                    <th class="w-1/4 m-3">
                                        Status Id
                                    </th>
                                    <th class="w-1/2 m-3">
                                        Status Type
                                    </th>
                                    <th class="w-1/4 m-3">
                                        Utils
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($statuses as $status)
                                <tr>
                                    <td >
                                        {{ $status->id}}
                                    </td>
                                    <td >
                                        {{ $status->status }}
                                    </td>
                                    <td class="text-center">
                                        <button class="p-2 text-white bg-black hover:bg-red-600 hover:text-black hover:font-bold">
                                            X
                                        </button>
                                        <button class="p-2 text-black bg-yellow-600 hover:bg-black hover:text-yellow-600 hover:font-bold">
                                            E
                                        </button>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-span-1 m-5">
                        <div class="font-bold">
                            Visibility Table
                        </div>
                        <table class="table-fixed bg-red-50">
                            <thead>
                                <tr>
                                    <th class="w-1/4">
                                        Option Id
                                    </th>
                                    <th class="w-1/2">
                                        Option
                                    </th>
                                    <th class="w-1/4">
                                        Utils
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($visibilities as $v)
                                <tr>
                                    <td>
                                        {{ $v->id }}
                                    </td>
                                    <td>
                                        {{ $v->option }}
                                    </td>
                                    <td class="text-center">
                                        <button>
                                            X
                                        </button>
                                        <button>
                                            E
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-span-1 m-5">
                        <div class="font-bold">
                            Category Table
                        </div>
                        <table class="table-fixed bg-green-50">
                            <thead>
                                <tr>
                                    <th class="w-1/4">
                                        Category Id
                                    </th>
                                    <th class="w-1/2">
                                        Category
                                    </th>
                                    <th class="w-1/4">
                                        Utils
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $c)
                                <tr>
                                    <td>
                                        {{ $c->id }}
                                    </td>
                                    <td>
                                        {{ $c->name }}
                                    </td>
                                    <td class="text-center">
                                        
                                        <button>
                                            X
                                        </button>
                                        <button>
                                            E
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
