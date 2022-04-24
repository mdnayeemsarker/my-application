<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="card col-md-6 m-4">
            <div class="card-header m-2">{{ __('All Students') }}
                <a href="{{ url('/dashboard') }}" class="btn btn-sm btn-danger m-2" style="float:right">Dashbord</a>
                <a href="{{ route('students.index') }}" class="btn btn-sm btn-primary m-2" style="float:right">All
                    New Student</a>
            </div>
            <div class="card-body">
                <table class="table table-responsive table-strioe">
                    <thead>
                        <tr>
                            <td>Roll</td>
                            <td>Name</td>
                            <td>Phone</td>
                            <td>Class</td>
                            <td>Email</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $students->roll }}</td>
                            <td>{{ $students->name }}</td>
                            <td>{{ $students->phone }}</td>
                            <td>
                                @foreach ($classes as $row)
                                    @if ($row->id == $students->class_id)
                                        {{ $row->class_name }}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $students->email }}</td>
                            <td>
                                {{-- <a href="{{ route('students.show', $students->id) }}" class="btn btn-info btn-sm">View</a> --}}
                                <a href="{{ route('students.edit', $students->id) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('students.destroy', $students->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
