<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="card col-md-6 m-4">
            <div class="card-header m-2">{{ __('Add New Students') }}
                <a href="{{ url('/dashboard') }}" class="btn btn-sm btn-primary m-2" style="float:right">Dashbord</a>
                <a href="{{ route('students.index') }}" class="btn btn-sm btn-danger m-2" style="float:right">All
                    students</a>
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                    <strong class="text text-success">{{ session()->get('success') }}</strong>
                @endif
                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="class_id" id="class_id" class="form-lable">Class Name <span
                                class="text text-danger">*</span></label>
                        <select class="form-control" name="class_id" id="class_id">
                            @foreach ($classes as $row)
                                <option value="{{ $row->id }}">{{ $row->class_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="name" id="name" class="form-lable">Student Name <span
                                class="text text-danger">*</span></label>
                        <input type="text" name="name" id="name" required
                            class="form-control @error('name') is-invalid @enderror" placeholder="Student Name"
                            value="{{ old('name') }}">
                        @error('name')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="roll" id="roll" class="form-lable">Student Roll <span
                                class="text text-danger">*</span></label>
                        <input type="number" name="roll" id="roll" required
                            class="form-control @error('roll') is-invalid @enderror" placeholder="Student Roll"
                            value="{{ old('roll') }}">
                        @error('roll')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" id="phone" class="form-lable">Student Phone Numner <span
                                class="text text-danger">*</span></label>
                        <input type="number" name="phone" id="phone" required
                            class="form-control @error('phone') is-invalid @enderror" placeholder="Student Phone"
                            value="{{ old('phone') }}">
                        @error('phone')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" id="email" class="form-lable">Student Email <span
                                class="text text-secondary">(Optional)</span></label>
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Student Email"
                            value="{{ old('email') }}">
                        @error('email')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
