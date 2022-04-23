<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Hey {{ auth()->user()->name }} <br>
                    <a href="{{ route('class.index') }}" class="btn btn-info btn-sm">Class</a> <br>
                    <a href="{{ route('students.index') }}" class="btn btn-danger btn-sm">Stdudents</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
