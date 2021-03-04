<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container-fluid">
                        <div class="row">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light collapse">
                                @include('layouts.dashboard_sidebar')
                            </nav>

                            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                                @yield('dashboard_main')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
