<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="card col-md-6 m-4">
            <div class="card-header m-2">{{ __('All Class') }}
                <a href="{{ route('create.class') }}" class="btn btn-sm btn-primary" style="float:right">Add New</a>
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
                                    <a href="#" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ route('class.delete', $row->id) }}"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
