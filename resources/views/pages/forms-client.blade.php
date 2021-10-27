@extends('/master/client_master')
@section('content')
    <style>
        .custombut{
            background-color: #ced3db;
            border-color: transparent;
            border-radius: 30px;
            font-size: 15px;

        }
    </style>
    <div class="container text-light"style="padding-left: 100px;height:auto">
        <div class="row" >
            <h1>Os meus formulários</h1>
        </div>
        <hr style="background-color: white; height: 3px">
        <div class="row">
            <table class="table text-light">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Casamento Vera e Ricardo</td>
                    <td>08-09-2021</td>
                    <td>
                        <button class="custombut" style="padding-left: 15px;padding-right: 15px">Abrir</button>
                        <button class="custombut">Prencher</button>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
