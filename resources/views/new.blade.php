@extends('layout.layout')

@section('content')

<form method = "POST" action=" {{ route('MenuSave') }} ">
    @csrf
    <div>
        <label>Nama :</label>
        <input type="text" name="nama"><br>
    </div>

    <div>
        <label>Harga : </label>
        <input type="text" name="harga"><br>
    </div>

    <div>
        <label>Deskripsi : </label>
        <input type="text" name="deskripsi"><br>
    </div>

    <input type="submit" value="submit" name = "submit">

</form>
@endsection
