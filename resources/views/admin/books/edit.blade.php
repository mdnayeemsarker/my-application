<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="card col-md-6">
                            <div class="card-header m-2">{{ __('Update Book') }}
                                <a href="{{ route('books.index') }}" class="btn btn-sm btn-danger"
                                    style="float:right">All Books</a>
                            </div>
                            <div class="card-body">
                                @if (session()->has('success'))
                                    <strong class="text text-success">{{ session()->get('success') }}</strong>
                                @endif
                                <form action="{{ route('books.update', $books->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="mb-3">
                                        <label for="class_id" id="class_id" class="form-lable">Class Name <span
                                                class="text text-danger">*</span></label>
                                        <select class="form-control" name="class_id" id="class_id">
                                            @foreach ($classes as $row)
                                                <option value="{{ $row->id }}"
                                                    @if ($row->id == $books->class_id) selected @endif>
                                                    {{ $row->class_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="book_name" id="book_name" class="form-lable">Book
                                            Name</label>
                                        <input type="text" name="book_name" id="book_name" required
                                            class="form-control @error('book_name') is-invalid @enderror"
                                            value="{{ $books->book_name }}">
                                        @error('book_name')
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
