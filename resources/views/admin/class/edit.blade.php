<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="card col-md-6 m-4">
            <div class="card-header m-2">{{ __('Edit Class') }}
                <a href="{{ route('class.index') }}" class="btn btn-sm btn-danger" style="float:right">All Class</a>
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                    <strong class="text text-success">{{ session()->get('success') }}</strong>
                @endif
                <form action="{{ route('update.class') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="class_name" id="class_name" class="form-lable">Class Name</label>
                        <input type="text" name="class_name" id="class_name"
                            class="form-control @error('class_name') is-invalid @enderror" placeholder=""
                            value="{{ old('class_name') }}">
                        @error('class_name')
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
