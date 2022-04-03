<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: DejaVu Sans;
            color: #18191A;
            font-size: 12px;
        }

        .content{
            margin: 0, auto;
            /* border:1px solid #000; */
        }

        .position-right{
            width: 100%;
            text-align: right;
        }

        .mt {
            margin-top:20px;
        }

        .heading {
            width: 100%;
            text-align: center;
        }

        .header-top{
            padding: 10px;
            color: #cccccc;
            width: 100%;
            background-color: #616161;
            margin-bottom: 50px;
        }

        h1 {
            font-weight: normal;
        }

        table {
            border-collapse: collapse;
            border: 0px;
        }

        th {
            background-color: #cccccc;
            text-align: left;
            padding: 10px;
            font-weight: normal;
            font-size: 12px;
        }

        td {
            text-align: left;
            padding: 10px;
            font-size: 12px;
        }

        .last-row{
            border-bottom:2px solid #616161;
        }

        .mt-big{
            margin-top:200px;
        }

    </style>
</head>
<body>
        <div class="header-top">
            Лого на компанијата
        </div>

        <div>
            Име на компанијата<br>
            Седиште на компанијата<br>
            Телефон: 555-555-555<br>
        </div>

        <div class="position-right mt">
            Купувач:<br>
            {{ $sale->customer->name }} <br>
            {{ $sale->customer->adress }} <br>
            {{ $sale->customer->phone }}
        </div>

        <div class="heading">
            <h1>ФАКТУРА</h1>
            <p>продажба бр. <u>{{ $sale->id }}</p>
        </div>

        <div class="content">
            <table>
                <thead>
                    <th>Р.бр.</th>
                    <th>Опис на производот</th>
                    <th>Количина</th>
                    <th>Единечна цена (денари)</th>
                    <th>Вкупно (денари)</th>
                </thead>
                <tbody>
                    <tr class="last-row">
                        <td>1.</td>
                        <td>Модел: {{ $sale->product->model }},<br> 
                            тип: {{ $sale->product->type }}, <br>
                            димензија: {{ $sale->product->size }},<br>
                            година на производство: {{ $sale->product->year_of_production }}
                        </td>
                        <td>{{ $sale->quantity }}</td>
                        <td>{{ $sale->product->sale_price }}</td>
                        <td>{{ $sale->total_price }}</td>
                    </tr>
                    <tr class="last-row">
                        <td colspan="4" style="text-align:right; background-color:#cccccc;">ВКУПНО:</td>
                        <td><b>{{ $sale->total_price }}</b></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-big">
            Дата на продажба<br>
            {{ $sale->created_at->format('d-m-Y') }} година<br>
        </div>

        <div class="position-right mt">
            Купувач:<br><br>
            _______________________
            
        </div>

</body>
</html>