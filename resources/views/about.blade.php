@extends('layouts.main')

@section('container')

    <table border="0" cellpadding="20" align="center">
        <tr>
            <td>
                <h4>Moch Saepulloh Aldrian</h4>
                <p>mhmdsaldrian96@gmail.com</p>
                <img src="{{ 'img//moch.JPG' }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
            </td>
            <td>
                <h4>Prayogarayanto Dheka Putro</h4>
                <p>yogadheka@gmail.com</p>
                <img src="{{ 'img/yoga.JPEG' }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
            </td>
        </tr>
        <tr>
            <td>
                <h4>Muhammad Syafa Suryakusuma</h4>
                <p>syafakusmana@gmail.com</p>
                <img src="{{ 'img/surya.JPEG' }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
            </td>
            <td>
                <h4>Fikri Kurnia Pradana</h4>
                <p>fikrilove69@gmail.com</p>
                <img src="{{ 'img/fikri.jpeg' }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
            </td>
        </tr>
    </table>


    
@endsection
