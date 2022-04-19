<a href="{{ url('/') }}">Home</a>
<h2>This is an CSRF Tolen Page</h2>

<form action="{{ route('student.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Write Your Name Here.">
    <input type="email" name="email" placeholder="Write Your Email Here.">
    <button type="submit">Submit</button>
</form>
