<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="card col-md-6">
                            <div class="card-header m-2">{{ __('Add New Class') }}
                                <a href="{{ route('class.index') }}" class="btn btn-sm btn-danger m-2"
                                    style="float:right">All
                                    Class</a>
                            </div>
                            <div class="card-body">
                                @if (session()->has('success'))
                                    <strong class="text text-success">{{ session()->get('success') }}</strong>
                                @endif
                                <form action="{{ route('store.class') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="class_name" id="class_name" class="form-lable">Class
                                            Name</label>
                                        <input type="text" name="class_name" id="class_name"
                                            class="form-control @error('class_name') is-invalid @enderror"
                                            placeholder="Class Name" value="{{ old('class_name') }}">
                                        @error('class_name')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary text-info">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
