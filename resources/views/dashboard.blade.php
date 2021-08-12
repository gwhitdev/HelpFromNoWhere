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

                
            </div>
        </div>
    </div>
</x-app-layout>
