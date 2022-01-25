<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
       <!-- Scripts -->
           <script src="{{ asset('js/app.js') }}" defer></script>

           <!-- Fonts -->
           <link rel="dns-prefetch" href="//fonts.gstatic.com">
           <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

           <!-- Styles -->
           <link href="{{ asset('css/app.css') }}" rel="stylesheet">

            <link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" >


    </head>
    <body class=" bg-gray" >
            <h1 class="text-center font-bolder">Welcome</h1>

            <section class="my-10">
            <div class="container flex justify-center mx-auto">
                <div class="flex flex-col">
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                        <table id="table_id" class="display" style="width:100%">
                                        <thead>
                                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                            <th class="px-4 py-3">Transaction Date</th>
                                            <th class="px-4 py-3">Reference No</th>
                                            <th class="px-4 py-3">Description</th>
                                            <th class="px-4 py-3">Debit (USD)</th>
                                            <th class="px-4 py-3">Credit (USD)</th>
                                            <th class="px-4 py-3">	Status</th>
                                        </tr>
                                        </thead>
                         </table>
                        </div>
                    </div>
                </div>
            </div>

            </section>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src = "http://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"  ></script>

<script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
</script>
