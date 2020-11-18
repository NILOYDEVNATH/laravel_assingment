@extends('welcome')
@section('content')

<div class="container">
    <h2>Tweet List Table</h2>
    <a href="/tweets/create/" style="float: right; margin: 5px;">
    <button type="button" class="btn btn-success btn-sm">Create Tweets</button>
    </a>
    <table class="table table-bordered">
        <thead>

        <tr >
            <th style="text-align: center;">Si</th>
            <th style="text-align: center;">Body</th>
            <th style="text-align: center;">Action</th>
        </tr>

        </thead>
        <tbody>
        @foreach($tweets_list as $key=>$value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->body}}</td>
            <td>
                <a class="btn btn-success btn-sm" href="/tweets_edit/{{$value->id}}">Edit</a>
                <form action="{{route('delete',$value->id) }}" method="POST">
                    @csrf
                    @method('DELETE')  
                <a class="btn btn-danger btn-sm" href="/tweets_delete/{{$value->id}}">Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
