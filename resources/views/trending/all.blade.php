@extends('layouts.main')

@section('content')

    <div class="text-center table-responsive">
        
    <h2>Film Trending</h2>
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
                    @foreach($trending as $tren)
                        <tr>
                        <td>{{ $tren['judul'] }}</td>
                        <td>{{ $tren['tahun'] }}</td>
                        <td>{{ $tren['genre'] }}</td>
                        <td>{{ $tren['sinopsis'] }}</td>
                            <td>
                            <a href="/trending/detail/{{ $tren->id }}" class="btn btn-primary">Detail</a>
                                
                            </td>
                        </tr>
                    @endforeach
                
            </tbody>
        </table>
    </div>
@endsection
