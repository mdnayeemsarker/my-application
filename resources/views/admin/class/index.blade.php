<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="row">
                        <div class="card col-md-12">
                            <div class="card-header m-2">{{ __('All Class') }}
                                <a href="{{ route('create.class') }}" class="btn btn-sm btn-primary m-2"
                                    style="float:right">Add
                                    New Class</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive table-strioe">
                                    <thead>
                                        <tr>
                                            <td>SL</td>
                                            <td>Class Name</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($class as $key => $row)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $row->class_name }}</td>
                                                <td>
                                                    <a href="{{ route('class.edit', $row->id) }}"
                                                        class="btn btn-info btn-sm">Edit</a>
                                                    <a href="{{ route('class.delete', $row->id) }}"
                                                        class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
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
