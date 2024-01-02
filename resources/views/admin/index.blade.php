<x-layout>
    <div class="dashboard mt-24" style="height: 100vh">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-5 gap-4">
                @include('admin.components.sidebar')
                <div class="col-span-4">
                    @yield('dashboard-section')
                </div>
            </div>
        </div>
    </div>
</x-layout>