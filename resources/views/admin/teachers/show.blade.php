<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="card col-md-12">
                            <div class="card-header">{{ __('All Teachers') }}
                                <a href="{{ route('teachers.index') }}" class="btn btn-sm btn-primary m-2"
                                    style="float:right">All
                                    New Student</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive table-strioe">
                                    <thead>
                                        <tr>
                                            <td>Name</td>
                                            <td>Phone</td>
                                            <td>Email</td>
                                            <td>Class</td>
                                            <td>Book</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $teachers->name }}</td>
                                            <td>{{ $teachers->phone }}</td>
                                            <td>{{ $teachers->email }}</td>
                                            <td>
                                                @foreach ($classes as $row)
                                                    @if ($row->id == $teachers->class_id)
                                                        {{ $row->class_name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($books as $row)
                                                    @if ($row->id == $teachers->book_id)
                                                        {{ $row->book_name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('teachers.edit', $teachers->id) }}"
                                                    class="btn btn-primary btn-sm m-1">Edit</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                @if (session()->has('success'))
                                    <strong class="text text-success">{{ session()->get('success') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
