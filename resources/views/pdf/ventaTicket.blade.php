<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comprobobante de pago</title>
    <style>
        body {
            font-size: 12px;
            font-family: Arial, sans-serif;
        }

        html {
            margin: 20pt 20pt 20px 20px;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
        }

        .font-md {
            font-size: 12px;
        }

        .font-lg {
            font-size: 14px;
        }

        .font-xlg {
            font-size: 16px;
        }

        .font-bold {
            font-weight: bold;
        }

        .company_logo {
            max-height: 100px;
        }

        .company_logo_box {
            height: 100px;
        }

        .company_logo_ticket {
            max-width: 200px;
            max-height: 80px
        }

        .contain {
            object-fit: cover;
        }

        .text-right {
            text-align: right !important;
        }

        .text-center {
            text-align: center !important;
        }

        .text-left {
            text-align: left !important;
        }

        .align-top {
            vertical-align: top !important;
        }

        .full-width {
            width: 100%;
        }

        .m-10 {
            margin: 10px;
        }

        .mt-10 {
            margin-top: 10px;
        }

        .mb-10 {
            margin-bottom: 10px;
        }

        .m-20 {
            margin: 20px;
        }

        .mt-20 {
            margin-top: 20px;
        }

        .mb-20 {
            margin-bottom: 20px;
        }

        .p-20 {
            padding: 20px;
        }

        .pt-20 {
            padding-top: 20px;
        }

        .pb-20 {
            padding-bottom: 20px;
        }

        .p-10 {
            padding: 10px;
        }

        .pt-10 {
            padding-top: 10px;
        }

        .pb-10 {
            padding-bottom: 10px;
        }

        .border-box {
            border: thin solid #333;
        }

        .border-top {
            border-top: thin solid #333;
        }

        .border-bottom {
            border-bottom: thin solid #333;
        }

        .border-top-bottom {
            border-top: thin solid #333;
            border-bottom: thin solid #333;
        }

        .bg-grey {
            background-color: #F8F8F8;
        }

        .logo {}

        /* Headings */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 200;
            letter-spacing: -1px;
        }

        h1 {
            font-size: 32px;
            line-height: 1px;
            font-weight: 500;
        }

        h2 {
            font-size: 24px;
            font-weight: 500;
            line-height: 1px;
        }

        h3 {
            font-size: 18px;
            font-weight: 400;
            letter-spacing: normal;
            line-height: 1px;
        }

        h4 {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: normal;
            line-height: 1px;
        }

        h5 {
            font-size: 13px;
            font-weight: 300;
            letter-spacing: normal;
            line-height: 1px;
        }

        h6 {
            font-size: 10px;
            font-weight: 300;
            letter-spacing: normal;
            line-height: 1px;
        }

        table,
        tr,
        td,
        th {
            font-size: 12px !important;
        }

        p {
            font-size: 12px !important;
        }

        .desc {
            font-size: 10px !important;
        }

        .desc-9 {
            font-size: 9px !important;
        }


        .m-0 {
            margin: 0 !important;
        }

        .mt-0,
        .my-0 {
            margin-top: 0 !important;
        }

        .mr-0,
        .mx-0 {
            margin-right: 0 !important;
        }

        .mb-0,
        .my-0 {
            margin-bottom: 0 !important;
        }

        .ml-0,
        .mx-0 {
            margin-left: 0 !important;
        }

        .m-1 {
            margin: 0.25rem !important;
        }

        .mt-1,
        .my-1 {
            margin-top: 0.25rem !important;
        }

        .mr-1,
        .mx-1 {
            margin-right: 0.25rem !important;
        }

        .mb-1,
        .my-1 {
            margin-bottom: 0.25rem !important;
        }

        .ml-1,
        .mx-1 {
            margin-left: 0.25rem !important;
        }

        .m-2 {
            margin: 0.5rem !important;
        }

        .mt-2,
        .my-2 {
            margin-top: 0.5rem !important;
        }

        .mr-2,
        .mx-2 {
            margin-right: 0.5rem !important;
        }

        .mb-2,
        .my-2 {
            margin-bottom: 0.5rem !important;
        }

        .ml-2,
        .mx-2 {
            margin-left: 0.5rem !important;
        }

        .m-3 {
            margin: 1rem !important;
        }

        .mt-3,
        .my-3 {
            margin-top: 1rem !important;
        }

        .mr-3,
        .mx-3 {
            margin-right: 1rem !important;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .ml-3,
        .mx-3 {
            margin-left: 1rem !important;
        }

        .m-4 {
            margin: 1.5rem !important;
        }

        .mt-4,
        .my-4 {
            margin-top: 1.5rem !important;
        }

        .mr-4,
        .mx-4 {
            margin-right: 1.5rem !important;
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important;
        }

        .ml-4,
        .mx-4 {
            margin-left: 1.5rem !important;
        }

        .m-5 {
            margin: 3rem !important;
        }

        .mt-5,
        .my-5 {
            margin-top: 3rem !important;
        }

        .mr-5,
        .mx-5 {
            margin-right: 3rem !important;
        }

        .mb-5,
        .my-5 {
            margin-bottom: 3rem !important;
        }

        .ml-5,
        .mx-5 {
            margin-left: 3rem !important;
        }

        .p-0 {
            padding: 0 !important;
        }

        .pt-0,
        .py-0 {
            padding-top: 0 !important;
        }

        .pr-0,
        .px-0 {
            padding-right: 0 !important;
        }

        .pb-0,
        .py-0 {
            padding-bottom: 0 !important;
        }

        .pl-0,
        .px-0 {
            padding-left: 0 !important;
        }

        .p-1 {
            padding: 0.25rem !important;
        }

        .pt-1,
        .py-1 {
            padding-top: 0.25rem !important;
        }

        .pr-1,
        .px-1 {
            padding-right: 0.25rem !important;
        }

        .pb-1,
        .py-1 {
            padding-bottom: 0.25rem !important;
        }

        .pl-1,
        .px-1 {
            padding-left: 0.25rem !important;
        }

        .p-2 {
            padding: 0.5rem !important;
        }

        .pt-2,
        .py-2 {
            padding-top: 0.5rem !important;
        }

        .pr-2,
        .px-2 {
            padding-right: 0.5rem !important;
        }

        .pb-2,
        .py-2 {
            padding-bottom: 0.5rem !important;
        }

        .pl-2,
        .px-2 {
            padding-left: 0.5rem !important;
        }

        .p-3 {
            padding: 1rem !important;
        }

        .pt-3,
        .py-3 {
            padding-top: 1rem !important;
        }

        .pr-3,
        .px-3 {
            padding-right: 1rem !important;
        }

        .pb-3,
        .py-3 {
            padding-bottom: 1rem !important;
        }

        .pl-3,
        .px-3 {
            padding-left: 1rem !important;
        }

        .p-4 {
            padding: 1.5rem !important;
        }

        .pt-4,
        .py-4 {
            padding-top: 1.5rem !important;
        }

        .pr-4,
        .px-4 {
            padding-right: 1.5rem !important;
        }

        .pb-4,
        .py-4 {
            padding-bottom: 1.5rem !important;
        }

        .pl-4,
        .px-4 {
            padding-left: 1.5rem !important;
        }

        .p-5 {
            padding: 3rem !important;
        }

        .pt-5,
        .py-5 {
            padding-top: 3rem !important;
        }

        .pr-5,
        .px-5 {
            padding-right: 3rem !important;
        }

        .pb-5,
        .py-5 {
            padding-bottom: 3rem !important;
        }

        .pl-5,
        .px-5 {
            padding-left: 3rem !important;
        }

        .m-n1 {
            margin: -0.25rem !important;
        }

        .mt-n1,
        .my-n1 {
            margin-top: -0.25rem !important;
        }

        .mr-n1,
        .mx-n1 {
            margin-right: -0.25rem !important;
        }

        .mb-n1,
        .my-n1 {
            margin-bottom: -0.25rem !important;
        }

        .ml-n1,
        .mx-n1 {
            margin-left: -0.25rem !important;
        }

        .m-n2 {
            margin: -0.5rem !important;
        }

        .mt-n2,
        .my-n2 {
            margin-top: -0.5rem !important;
        }

        .mr-n2,
        .mx-n2 {
            margin-right: -0.5rem !important;
        }

        .mb-n2,
        .my-n2 {
            margin-bottom: -0.5rem !important;
        }

        .ml-n2,
        .mx-n2 {
            margin-left: -0.5rem !important;
        }

        .m-n3 {
            margin: -1rem !important;
        }

        .mt-n3,
        .my-n3 {
            margin-top: -1rem !important;
        }

        .mr-n3,
        .mx-n3 {
            margin-right: -1rem !important;
        }

        .mb-n3,
        .my-n3 {
            margin-bottom: -1rem !important;
        }

        .ml-n3,
        .mx-n3 {
            margin-left: -1rem !important;
        }

        .m-n4 {
            margin: -1.5rem !important;
        }

        .mt-n4,
        .my-n4 {
            margin-top: -1.5rem !important;
        }

        .mr-n4,
        .mx-n4 {
            margin-right: -1.5rem !important;
        }

        .mb-n4,
        .my-n4 {
            margin-bottom: -1.5rem !important;
        }

        .ml-n4,
        .mx-n4 {
            margin-left: -1.5rem !important;
        }

        .m-n5 {
            margin: -3rem !important;
        }

        .mt-n5,
        .my-n5 {
            margin-top: -3rem !important;
        }

        .mr-n5,
        .mx-n5 {
            margin-right: -3rem !important;
        }

        .mb-n5,
        .my-n5 {
            margin-bottom: -3rem !important;
        }

        .ml-n5,
        .mx-n5 {
            margin-left: -3rem !important;
        }

        .m-auto {
            margin: auto !important;
        }

        .mt-auto,
        .my-auto {
            margin-top: auto !important;
        }

        .mr-auto,
        .mx-auto {
            margin-right: auto !important;
        }

        .mb-auto,
        .my-auto {
            margin-bottom: auto !important;
        }

        .ml-auto,
        .mx-auto {
            margin-left: auto !important;
        }

        .margintop {
            margin-top: 4px;
        }

        #facliente {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 15px;
        }

        #cliente {
            text-align: left;
        }

        #gracias {
            text-align: center;
        }

        #facvendedor thead {
            padding: 20px;
            /* background: rgb(6, 179, 58); */
            text-align: center;
            border-bottom: 1px solid #FFFFFF;
        }

        .img {
            height: 80%;
            width: 80%;
        }

    </style>
</head>

<body>
    <div class="text-center company_logo ">
        <img class="img" src="img/logo.png" alt="">
    </div>
    <h3 class="text-center">Programacion 3</h3>
    <h5 class="text-center">RS 10458000888</h5>
    <h5 class="text-center">demo@demo.com</h5>
    <div class="border-bottom"></div>
    <div>
        @foreach ($venta as $v)
            <div class="text-center">
                <p>{{ $v->tipo_comprobante }} DE VENTA<br>
                    {{ $v->serie_comprobante }}-{{ $v->num_comprobante }}</p>
            </div>
            <section>
                <div>
                    <div class="border-bottom"></div>
                    <table id="facliente">
                        <thead>
                            <tr>
                                <th>Datos del Cliente</th>

                            </tr>


                        </thead>
                        <div class="border-bottom"></div>
                        <tbody>

                            <tr>
                                <th>
                                    <p id="cliente">Sr(a). {{ $v->nombre }}<br>
                                        {{ $v->tipo_documento }}: {{ $v->num_documento }}<br>
                                        Dirección: {{ $v->direccion }}<br>
                                        Teléfono: {{ $v->telefono }}<br>
                                        Email: {{ $v->email }}</< /p>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <table id="facvendedor">
                <thead>
                    <tr id="fv">
                        <th>Vendedor</th>
                        <th>Fecha de Emisión</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $v->usuario }}</td>
                        <td>{{ $v->created_at }}</td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    </div>

    <table class="full-width mt-10 mb-10">
        <thead class="">
            <tr>
                <th class="border-top-bottom desc-9 text-left">CANT.</th>
                {{-- <th class="border-top-bottom desc-9 text-left">UNIDAD</th> --}}
                <th class="border-top-bottom desc-9 text-left">DESCRIPCIÓN</th>
                <th class="border-top-bottom desc-9 text-left">P.UNIT</th>
                <th class="border-top-bottom desc-9 text-left">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detalles as $det)
                <tr>
                    <td>{{ $det->cantidad }}</td>
                    {{-- <td>{{$det->precio}}</td> --}}
                    <td>{{ $det->articulo }}</td>
                    <td>{{ $det->precio }}</td>
                    <td>{{ $det->cantidad * $det->precio - $det->descuento }}</td>
                </tr>
                <tr>
                    <td colspan="5" class="border-bottom"></td>
                </tr>

            @endforeach

        </tbody>
        <tfoot>
            @foreach ($venta as $v)
                <tr>
                    <th></th>
                    {{-- <th></th> --}}
                    <th></th>
                    <th>OP.Gravadas:</th>
                    <td>s/ {{ round($v->total - $v->total * $v->impuesto, 2) }}</td>
                </tr>
                <tr>
                    <th></th>
                    {{-- <th></th> --}}
                    <th></th>
                    <th>IGV</th>
                    <td>s/ {{ round($v->total * $v->impuesto, 2) }}</td>
                </tr>
                <tr>
                    <th></th>
                    {{-- <th></th> --}}
                    <th></th>
                    <th>Tota a pagar</th>
                    <td>s/ {{ $v->total }}</td>
                </tr>
            @endforeach
        </tfoot>
    </table>
    <footer>
        <div id="gracias">
            <p><b>Gracias por su compra!</b></p>
        </div>
    </footer>
</body>

</html>
