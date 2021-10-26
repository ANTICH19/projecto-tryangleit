@extends('/master/client_master')
@section('content')
    <style>
        .line{
            background-color: white;
            height: 10px;

        }
        .text-area{
            border-radius: 10px;
            width: 100%;
            height: 150px;
            background-color: #ced3db;
        }
        .text-area:focus{
           outline: none;
        }
        .custom-btn{
            background-color: #ced3db;
            border-color: transparent;
            border-radius: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 20px;

        }
        .checkbox-custom{
            background-color: #ced3db;
        }
        .checkbox-custom:checked{
            background-color: #0F1729;
        }
    </style>

    <div class="container text-white" style="background-color: #353d4f;margin-left: 150px;border-radius: 20px">
        <div class="row" style="padding-top: 40px">
            <div class="col">
              <input class="checkbox-custom" type="checkbox">
                <h5>Muito Insatisfeito</h5>
            </div>
            <div class="col">
                <input type="checkbox">
                <h5>Insatisfeito</h5>
            </div>
            <div class="col">
                <input type="checkbox">
                <h5>Neutro</h5>
            </div>
            <div class="col">
                <input type="checkbox">
                <h5>Satisfeito</h5>
            </div>
            <div class="col">
                <input type="checkbox">
                <h5>Muito Satisfeito</h5>
            </div>
        </div>
        <hr class="line">
        <div class="row">
            <div>
                <h5>Comentarios ou Sugestões</h5>
            </div>
            <div>
                <textarea class="text-area"></textarea>
            </div>
        </div>
        <hr class="line">
        <div class="row" style="padding-bottom: 20px; padding-top: 20px; margin-left: 30%; margin-right: 30%">
            <button class="custom-btn" type="submit">Submeter Avaliação</button>
        </div>

    </div>

@endsection
