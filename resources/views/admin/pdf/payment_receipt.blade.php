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
            margin:0 auto;
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
            margin-top: 150px;
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

        {{-- <div class="position-right mt">
            Купувач:<br>
            {{ $sale->customer->name }} <br>
            {{ $sale->customer->adress }} <br>
            {{ $sale->customer->phone }}
        </div> --}}

        <div class="heading">
            <h3>ПОТВРДА ЗА НАПЛАТА</h3>
            <p>за продажба бр. <u>{{ $payment->sale->id }}</p>
        </div>

        <div class="content">
            <p>
                На ден {{ $payment->created_at->format('d-m-Y') }} година е извршена уплата од {{ $payment->amount }} денари за продажба број <u>{{ $payment->sale->id }}</u> од {{ $payment->sale->created_at->format('d-m-Y') }} година.
            </p>
        </div>

        <div class="mt-big">
            Дата на уплата<br>
            {{ $payment->created_at->format('d-m-Y') }} година<br>
        </div>

        <div class="position-right mt">
            Потпис на овластено лице:<br><br>
            _________________________
            
        </div>

</body>
</html>