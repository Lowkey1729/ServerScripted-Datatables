<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" content="{{ csrf_token() }}" />

        <title>Laravel</title>

        <!-- Fonts -->
       <!-- Scripts -->
           <script src="{{ asset('js/app.js') }}" defer></script>

           <!-- Fonts -->
           <link rel="dns-prefetch" href="//fonts.gstatic.com">
           <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

           <!-- Styles -->
           <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
           <link href="{{ asset('css/app.css') }}" rel="stylesheet">
           <link href="{{ asset('css/style.css') }}" rel="stylesheet">


           <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/tabletools/2.2.3/css/dataTables.tableTools.css">
           <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css">
           <link rel="stylesheet" type="text/css" href="//editor.datatables.net/examples/resources/bootstrap/editor.bootstrap.css">


    </head>
    <body class=" bg-gray" >
            <h1 class="text-center font-bolder">Welcome</h1>

            <!-- ====== Table Section Start -->
                <section class="bg-white py-20 lg:py-[120px]">
                  <div class="container">
                    <div class="flex flex-wrap -mx-4">
                      <div class="w-full px-4">
                        <div class="max-w-full overflow-x-auto">
                          <table id="table_id" class="table-auto w-full">
                            <thead>
                              <tr class="bg-primary text-center">
                                <th
                                  class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    border-l border-transparent
                                  "
                                >
                                  ID
                                </th>
                                <th
                                  class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                  "
                                >
                                  Name
                                </th>
                                <th
                                  class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                  "
                                >
                                  Email
                                </th>
                                <th
                                  class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                  "
                                >
                                  Age
                                </th>
                                <th
                                  class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                  "
                                >
                                  Country
                                </th>
                                <th
                                  class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    border-r border-transparent
                                  "
                                >
                                  Address
                                </th>

                                <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    border-r border-transparent
                                    "
                               >
                                     Phone Number
                               </th>

                               <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    border-r border-transparent
                                    "
                               >
                                     Created At
                               </th>

                               <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    border-r border-transparent
                                    "
                               >
                                     Action
                               </th>
                              </tr>
                            </thead>

                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- ====== Table Section End -->
    </body>
</html>

<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" language="javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/tabletools/2.2.3/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script type="text/javascript" language="javascript" src="//editor.datatables.net/examples/resources/bootstrap/editor.bootstrap.js"></script>


<script>
        $(document).ready( function () {
            $('#table_id').DataTable({
                 processing: true,
                 serverSide: true,
                 ajax:{
                        url : "{{ route('datatable') }}",
                        type : "POST",
                        data: {"_token": "{{ csrf_token() }}"},


                  } ,
          columns : [
                     { data: 'id'},

                     { data: 'name' },
                     { data: 'email' },
                     { data: 'age' },
                     { data: 'country' },
                     { data: 'address' },
                     { data: 'phone_number' },
                     { data: 'created_at' },



             ],

               columnDefs: [

                    {
                      render: function ( data, type, row, meta ) {

                                    return '<a data-url="/user/detail/' + row.user_id + '"  data-ajax-popup="true" data-toggle="tooltip" class="btn btn-sm btn-success btn-round btn-icon text-white" data-title="{{__('View User Detail')}}" data-original-title="{{__('View User Detail')}}"> {{__('View')}}</a> '


                                    ;
                                  },

                       targets: 8

                       },
               ]

            });

        } );
</script>
