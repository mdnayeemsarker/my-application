<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="card col-md-6 m-4">
            <div class="card-header m-2">{{ __('Update Students') }}
                <a href="{{ url('/dashboard') }}" class="btn btn-sm btn-primary m-2" style="float:right">Dashbord</a>
                <a href="{{ route('students.index') }}" class="btn btn-sm btn-danger m-2" style="float:right">All
                    students</a>
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                    <strong class="text text-success">{{ session()->get('success') }}</strong>
                @endif
                <form action="{{ route('students.update', $students->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="mb-3">
                        <label for="class_id" id="class_id" class="form-lable">Class Name <span
                                class="text text-danger">*</span></label>
                        <select class="form-control" name="class_id" id="class_id">
                            @foreach ($classes as $row)
                                <option value="{{ $row->id }}" @if ($row->id == $students->class_id) selected @endif>
                                    {{ $row->class_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="name" id="name" class="form-lable">Student Name <span
                                class="text text-danger">*</span></label>
                        <input type="text" name="name" id="name" required class="form-control"
                            value="{{ $students->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="roll" id="roll" class="form-lable">Student Roll <span
                                class="text text-danger">*</span></label>
                        <input type="number" name="roll" id="roll" required class="form-control"
                            value="{{ $students->roll }}">
                    </div>

                    <div class="mb-3">
                        <label for="phone" id="phone" class="form-lable">Student Phone Numner <span
                                class="text text-danger">*</span></label>
                        <input type="number" name="phone" id="phone" required class="form-control"
                            value="{{ $students->phone }}">
                    </div>

                    <div class="mb-3">
                        <label for="email" id="email" class="form-lable">Student Email <span
                                class="text text-secondary">(Optional)</span></label>
                        <input type="text" name="email" id="email" required class="form-control"
                            value="{{ $students->email }}">
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
