<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h1>Hello, world!</h1>

                    <div class="col-3"></div>
                    <div class="col-6">

                        <div class="row card">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('contact.store') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" id="name" class="form-lable">Full Name</label>
                                            <input type="text" name="name" id="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Enter Your Name Here" value="{{ old('name') }}">
                                            @error('name')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" id="email" class="form-lable">Email Address</label>
                                            <input type="email" name="email" id="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Enter Your Email Address Here"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" id="password" class="form-lable">Password</label>
                                            <input type="password" name="password" id="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Enter Your Password" value="{{ old('password') }}">
                                            @error('password')
                                                <strong class=" text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-info text-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
