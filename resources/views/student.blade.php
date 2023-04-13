@if (Auth::guard('student')->check() && Auth::guard('student')->user()->role != 'student')
    return redirect()->route('student.login');
@endif

<p>this is the courses page</p>
