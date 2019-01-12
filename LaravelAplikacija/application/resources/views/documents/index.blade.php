@extends('layouts.app')

@section('content')
<form method="POST" action="/documents">
    @csrf
    <div class="form-group">
        <textarea name="content" class="form-control">{{ request()->input('content') }}</textarea>
    </div>
    
    <input type="submit" class="btn btn-primary" value="Analyze">
</form>

Characters: {{ isset($characters) ? $characters : 0 }}<br />
Vowels: {{ isset($vowels) ? $vowels : 0 }}<br />
Spaces: {{ isset($spaces) ? $spaces : 0 }}

@endsection
