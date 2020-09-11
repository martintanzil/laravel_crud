@extends('layout.layout')

@section('content')

<form method = "POST" action=" {{ route('MenuUpdate', ['id'=>$menu->id]) }} ">
    @csrf
    <div>
        <label>Nama : </label>
        <input type="text" name="nama" value ="{{$menu->nama}}"><br>
    </div>

    <div>
        <label>Harga : </label>
        <input type="text" name="harga" value="{{$menu->harga}}"><br>
    </div>

    <div>
        <label>Deskripsi : </label>
        <input type="text" name="deskripsi" value ="{{$menu->deskripsi}}"><br>
    </div>

    <input type="submit" value="submit" name = "submit">

</form>
@endsection
