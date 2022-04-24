<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="card col-md-6">
                            <div class="card-header m-2">{{ __('Update Teachers') }}
                                <a href="{{ route('teachers.index') }}" class="btn btn-sm btn-danger m-2"
                                    style="float:right">All
                                    Teachers</a>
                            </div>
                            <div class="card-body">
                                @if (session()->has('success'))
                                    <strong class="text text-success">{{ session()->get('success') }}</strong>
                                @endif
                                <form action="{{ route('teachers.update', $teachers->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="mb-3">
                                        <label for="class_id" id="class_id" class="form-lable">Class Name <span
                                                class="text text-danger">*</span></label>
                                        <select class="form-control" name="class_id" id="class_id">
                                            @foreach ($classes as $row)
                                                <option value="{{ $row->id }}"
                                                    @if ($row->id == $teachers->class_id) selected @endif>
                                                    {{ $row->class_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="book_id" id="book_id" class="form-lable">Books Name <span
                                                class="text text-danger">*</span></label>
                                        <select class="form-control" name="book_id" id="book_id">
                                            @foreach ($books as $row)
                                                <option value="{{ $row->id }}"
                                                    @if ($row->id == $teachers->book_id) selected @endif>
                                                    {{ $row->book_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" id="name" class="form-lable">Teacher Name <span
                                                class="text text-danger">*</span></label>
                                        <input type="text" name="name" id="name" required class="form-control"
                                            value="{{ $teachers->name }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone" id="phone" class="form-lable">Teacher Phone<span
                                                class="text text-danger">*</span></label>
                                        <input type="number" name="phone" id="phone" required class="form-control"
                                            value="{{ $teachers->phone }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" id="email" class="form-lable">Teacher Email <span
                                                class="text text-secondary">(Optional)</span></label>
                                        <input type="text" name="email" id="email" required class="form-control"
                                            value="{{ $teachers->email }}">
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
