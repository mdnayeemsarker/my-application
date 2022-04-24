<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Hey {{ auth()->user()->name }} <br>
                    <a href="{{ route('class.index') }}" class="btn btn-info btn-sm m-2">Class</a>
                    <a href="{{ route('books.index') }}" class="btn btn-primary btn-sm m-2">Books</a>
                    <a href="{{ route('students.index') }}" class="btn btn-danger btn-sm m-2">Stdudents</a>
                    <a href="{{ route('teachers.index') }}" class="btn btn-primary btn-sm m-2">Teachers</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
