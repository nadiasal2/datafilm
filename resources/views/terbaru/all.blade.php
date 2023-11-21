@extends('layouts.main')

@section('content')
<div class="text-center table-responsive">
        
        <h2>Film Terbaru</h2>
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
                @foreach ($terbaru as $terbaruu)
                    <tr>
                        <td>{{ $terbaruu->judul }}</td>
                        <td>{{ $terbaruu->tahun }}</td>
                        <td>{{ $terbaruu->genre }}</td>
                        <td>{{ $terbaruu->sinopsis }}</td>
                        <td>
                            <a href="/terbaru/detail/{{ $terbaruu->id }}" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
@endsection
