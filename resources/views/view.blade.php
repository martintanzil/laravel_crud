@extends('layout.layout')

@section(
'content')
<table border ="1">

        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>ACTION</th>
        </tr>
        @foreach ($menus as $menu)
        <tr>
            <td> {{$menu->id}} </td>
            <td> {{$menu->nama}} </td>
            <td> {{$menu->harga}} </td>
            <td> {{$menu->deskripsi}} </td>
            <td><a href = "{{route('MenuDelete', [$id = $menu->id])}}">DELETE</button></td>
            <td><a href = "{{route('MenuEdit', [$id = $menu->id])}}">EDIT</button></td>
        </tr>
    @endforeach


</table>
    <a href="{{route('MenuInsert')}}">INSERT MENU HERE</a>

@endsection
