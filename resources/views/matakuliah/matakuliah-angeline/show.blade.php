@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">MatakuliahAngeline {{ $matakuliahangeline->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/matakuliah/matakuliah-angeline') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/matakuliah/matakuliah-angeline/' . $matakuliahangeline->id . '/edit') }}" title="Edit MatakuliahAngeline"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('matakuliah/matakuliahangeline' . '/' . $matakuliahangeline->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete MatakuliahAngeline" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $matakuliahangeline->id }}</td>
                                    </tr>
                                    <tr><th> KodeMatakuliah </th><td> {{ $matakuliahangeline->kodeMatakuliah }} </td></tr><tr><th> Matakuliah </th><td> {{ $matakuliahangeline->matakuliah }} </td></tr><tr><th> Sks </th><td> {{ $matakuliahangeline->sks }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
