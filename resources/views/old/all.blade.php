@extends('layouts.main')

@section('content')

    <div class="text-center table-responsive">
        
    <h2>Film Old</h2>
        <table class="table table-bordered" style="table-layout: fixed;">
            <thead>
                <tr>
                    <th style="width: 10%; background-color: lightblue;" scope="col">Judul</th>
                    <th style="width: 10%; background-color: lightblue;" scope="col">Tahun</th>
                    <th style="width: 10%; background-color: lightblue;" scope="col">Genre</th>
                    <th style="width: 10%; background-color: lightblue;" scope="col">Sinopsis</th>
                    <th style="width: 10%; background-color: lightblue;" scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($old as $lama)
                        <tr>
                        <td>{{ $lama['judul'] }}</td>
                        <td>{{ $lama['tahun'] }}</td>
                        <td>{{ $lama['genre'] }}</td>
                        <td>{{ $lama['sinopsis'] }}</td>
                            <td>
                            <a href="/old/detail/{{ $lama->id }}" class="btn btn-primary">Detail</a>
                                
                            </td>
                        </tr>
                    @endforeach
                
            </tbody>
        </table>
    </div>
@endsection
