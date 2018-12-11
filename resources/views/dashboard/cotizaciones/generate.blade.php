@extends('dashboard.layout')
@section('content')
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-sm-5 col-lg-6 skin_txt">
                        <h4 class="nav_top_align">
                            <i class="fa fa-file-invoice-dollar "></i>
                            Cotizaciones
                        </h4>
                    </div>
                    <div class="col-sm-7 col-lg-6">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index1.html">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Inicio
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Cotizaciones</a>
                            </li>
                            <li class="active breadcrumb-item">Crear cotización</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>

        <div class="outer">
            <div class="inner bg-light lter bg-container">
                <div class="row">
                    <div class="col-12 data_tables">
                        <form action="{{ route('dashboard.cotizaciones.store') }}" method="post">
                            <div class="card m-t-35">
                                <div class="card-header bg-white"><i class="fa fa-file-alt"></i>
                                    Proyecto
                                </div>
                                <div class="card-block seclect_form" style="padding: 1rem">
                                    <div class="row">
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Selecciona el proyecto*</h5>
                                            <select class="form-control chzn-select" tabindex="2">
                                                <option disabled selected>Buscar proyecto</option>
                                                @foreach($projects as $project)
                                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Moneda</h5>
                                            <div class="form-group">
                                                <select class="form-control" name="money">
                                                    <option value="usd">USD</option>
                                                    <option value="mxn">MXN</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-t-15">
                                <div class="card-header bg-white">
                                    <i class="fa fa-list-ol"></i> Artículos
                                </div>
                                <div class="card-block p-t-25">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <table class="table table-striped table-hover m-t-15" id="tableProducts">
                                        <thead>
                                        <tr class="table-bordered">
                                            <th>Categoria</th>
                                            <th>Cantidad</th>
                                            <th>Unidad</th>
                                            <th>Descripción</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Precio Unitario</th>
                                            <th>Importe</th>
                                            <th>Imagen del producto</th>
                                            <th><i class="fa fa-cog"></i></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr style="background-color: white" class="main">
                                            <td>
                                            <select class="form-control chzn-select" name="category">
                                                <option disabled selected>Selecciona una categoría</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name}}</option>
                                                @endforeach
                                            </select></td>
                                            <td><input type="text" class="form-control" placeholder="" name="quantity"></td>
                                            <td><input type="text" class="form-control" placeholder="" name="unity"></td>
                                            <td><textarea id="autosize" class="form-control" cols="50" rows="1" name="description"></textarea></td>
                                            <td><input type="text" class="form-control" placeholder="" name="brand"></td>
                                            <td><input type="text" class="form-control" placeholder="" name="model"></td>
                                            <td><input type="text" class="form-control" placeholder="" name="unit_price"></td>
                                            <td><input type="text" class="form-control" placeholder="" name="total"></td>
                                            <td>

                                            </td>
                                            <td>
                                                <button onclick="addRow(); return false;" type="button" class="btn btn-primary button-rounded fa fa-check-circle" data-toggle="tooltip" title="Añadir"></button>
                                            </td>
                                        </tr>
                                        {{--<tr style="background-color: white"><td colspan="5"></td>--}}
                                            {{--<th >Sub Total:</th>--}}
                                            {{--<td colspan="2">$1,000,000.00<input name="subtotal" value="0.00" type="hidden"></td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td colspan="7" style="background-color: white"></td>--}}
                                            {{--<td style="background-color: white">--}}
                                                {{--<button class="btn btn-success button-rounded fa fa-plus-circle" data-toggle="tooltip" title="Añadir categoria"></button>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-lg-4"><div>
                                                <h5>Notas del catálogo de conceptos:</h5>
                                                <textarea id="autosize" class="form-control" cols="50" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-4">
                                            <table class="table table-hover" id="sample_1">
                                                <tr style="background-color: white">
                                                    <th >Sub Total:</th>
                                                    <th >0.00<input name="subtotal" value="0.00" type="hidden"></th>
                                                </tr>
                                                <tr style="background-color: white">
                                                    <th >Impuestos:</th>
                                                    <th >0.00<input name="subtotal" value="0.00" type="hidden"></th>
                                                </tr>
                                                <tr style="background-color: white">
                                                    <th >Total:</th>
                                                    <th >0.00<input name="subtotal" value="0.00" type="hidden"></th>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button onclick="" type="submit" class="btn btn-success button-rounded float-right" value="save">Generar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('scripts')
    <script>
        var tds = 0;
        function addRow() {
            var data = getDataTable();
            console.log(data);
            var newLine = '<tr>' +
                '<td><input type="hidden" name="item[' + tds + '][category]" value="' + data.category + '" />' + data.category_name + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][quantity]" value="' + data.quantity + '" />' + data.quantity + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][unity]" value="' + data.unity + '" />' + data.unity + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][description]" value="' + data.description + '" />' + data.description + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][brand]" value="' + data.brand + '" />' + data.brand + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][model]" value="' + data.model + '" />' + data.model + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][unit_price]" value="' + data.unit_price + '" />' + data.unit_price + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][total]" value="' + data.total + '" />' + data.total + '</td>' +
                '<td><input type="file" name="item[' + tds + '][image]" value="" /></td>' +
                '<td><input type="button" class="btn btn-danger button-rounded " value="x" style="margin-top: -3px;" onclick="deleteRow(this.parentNode.parentNode.rowIndex, ' + data.total + ')" /></td></tr>';
            $('#tableProducts tbody').append(newLine);
            tds++;
        }

        function getDataTable() {
            var response = {};
            response.category = $('.main select[name="category"]').val();
            response.category_name = $('.main select[name="category"] option:selected').text();
            response.quantity = $('.main input[name="quantity"]').val();
            response.unity = $('.main input[name="unity"]').val();
            response.description = $('.main textarea[name="description"]').val();
            response.brand = $('.main input[name="brand"]').val();
            response.model = $('.main input[name="model"]').val();
            response.unit_price = $('.main input[name="unit_price"]').val();
            response.total = $('.main input[name="total"]').val();

            clean();

            return response;
        }

        function clean() {
            $('.main input[name="quantity"]').val('');
            $('.main input[name="unity"]').val('');
            $('.main textarea[name="description"]').val('');
            $('.main input[name="brand"]').val('');
            $('.main input[name="model"]').val('');
            $('.main input[name="unit_price"]').val('');
            $('.main input[name="total"]').val('');
        }

        function deleteRow(row, price){
            document.getElementById("tableProducts").deleteRow(row);
//            var subtotal = $('#subtotal').val();
//            subtotal = subtotal - price;
//            var iva = $('#iva').val();
//            iva = parseInt(iva) / 100;
//            var totalProducts = parseInt(subtotal) + subtotal * iva;
//            $('#subtotal').val(subtotal);
//            $('#totalProducts').val(totalProducts);
        }

    </script>
@endsection
