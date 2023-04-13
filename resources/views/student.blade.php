
@if(Auth::guard('student')->user()->role != 'student'){
    return redirect()->route('student.login');
}
@endif
<p>hello</p>