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
        <div class="outer" style="margin-top: -25px !important;">
            <div class="inner bg-light lter bg-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-t-35">
                            <div class="card-header bg-white"><i class="fa fa-file-alt"></i>
                                Datos generales
                            </div>
                            <div class="card-block seclect_form">
                                <form class="form-horizontal">
                                    <div class="row">
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Cliente*</h5>
                                            <select class="form-control chzn-select" tabindex="2">
                                                <option disabled selected>Buscar cliente</option>
                                                @foreach($clients as $client)
                                                <option value="">{{ $client->client_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Proyecto*</h5>
                                            <select class="form-control chzn-select" tabindex="2">
                                                <option disabled selected>Buscar proyecto</option>
                                                <option value="United States">United States</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Moneda</h5>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>USD</option>
                                                    <option>MXN</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Fecha de creación</h5>
                                            <form>
                                                <div class="input-group input-append date" id="dp3" data-date-format="dd-mm-yyyy">
                                                    <input class="form-control" type="text" placeholder="dd-mm-aaaa">
                                                    <span class="input-group-addon add-on">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Fecha de vencimiento</h5>
                                            <form>
                                                <div class="input-group input-append  date" id="dpYears"  data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                    <input class="form-control" type="text" placeholder="dd-mm-aaaa">
                                                    <span class="input-group-addon add-on">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="outer">
            <div class="inner bg-light lter bg-container">
                <div class="row">
                    <div class="col-12 data_tables">
                        <div class="card">
                            <div class="card-header bg-white">
                                <i class="fa fa-list-ol"></i> Artículos
                            </div>
                            <div class="card-block p-t-25">
                                <div class="">
                                    <div class="pull-sm-right">
                                        <div class="tools pull-sm-right"></div>
                                    </div>
                                </div>
                                <form action="{{ route('dashboard.cotizaciones.store') }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <table class="table table-striped table-hover" id="tableProducts">
                                        {{--<tr>--}}
                                            {{--<th>Categoria</th>--}}
                                            {{--<td colspan="30%">--}}
                                                {{--<textarea id="text4" class="form-control" placeholder="Escribe la Categoría" rows="1"></textarea>--}}
                                            {{--</td>--}}
                                            {{--<th>Sub-categoria</th>--}}
                                            {{--<td colspan="30%">--}}
                                                {{--<textarea id="text4" class="form-control" placeholder="Escribe la Sub-categoría" rows="1" ></textarea>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        <thead>
                                            <tr class="table-bordered">
                                                <th>Cantidad</th>
                                                <th>Categoria</th>
                                                <th>Sub-categoria</th>
                                                <th>Unidad</th>
                                                <th>Descripción</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Precio Unitario</th>
                                                <th>Importe</th>
                                                <th><i class="fa fa-cog"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr style="background-color: white" class="main">
                                            <td><input type="text" class="form-control" placeholder="" name="quantity"></td>
                                            <td>
                                                {{--<select name="category_id" id="">
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>--}}
                                            </td>
                                            <td><input type="text" class="form-control" placeholder="" name="sub_category"></td>
                                            <td><input type="text" class="form-control" placeholder="" name="unity"></td>
                                            <td>
                                                <textarea id="autosize" class="form-control" cols="50" rows="1" name="description"></textarea>
                                            </td>
                                            <td><input type="text" class="form-control" placeholder="" name="brand"></td>
                                            <td><input type="text" class="form-control" placeholder="" name="model"></td>
                                            <td><input type="text" class="form-control" placeholder="" name="unit_price"></td>
                                            <td><input type="text" class="form-control" placeholder="" name="total"></td>
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
                                </form>
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
                                        <button onclick="" type="button" class="btn btn-success button-rounded float-right" value="save">Generar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                '<td><input type="hidden" name="item[' + tds + '][quantity]" value="' + data.quantity + '" />' + data.quantity + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][category]" value="' + data.category + '" />' + data.category + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][sub_category]" value="' + data.sub_category + '" />' + data.sub_category + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][unity]" value="' + data.unity + '" />' + data.unity + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][description]" value="' + data.description + '" />' + data.description + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][brand]" value="' + data.brand + '" />' + data.brand + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][model]" value="' + data.model + '" />' + data.model + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][unit_price]" value="' + data.unit_price + '" />' + data.unit_price + '</td>' +
                '<td><input type="hidden" name="item[' + tds + '][total]" value="' + data.total + '" />' + data.total + '</td>' +
                '<td><input type="button" class="btn btn-danger button-rounded " value="x" style="margin-top: -3px;" onclick="deleteRow(this.parentNode.parentNode.rowIndex, ' + data.total + ')" /></td></tr>';
            $('#tableProducts tbody').append(newLine);
            tds++;
        }

        function getDataTable() {
            var response = {};
            response.quantity = $('.main input[name="quantity"]').val();
            response.category = $('.main input[name="category"]').val();
            response.sub_category = $('.main input[name="sub_category"]').val();
            response.unity = $('.main input[name="unity"]').val();
            response.description = $('.main textarea[name="description"]').val();
            response.brand = $('.main input[name="brand"]').val();
            response.model = $('.main input[name="model"]').val();
            response.unit_price = $('.main input[name="unit_price"]').val();
            response.total = $('.main input[name="total"]').val();
            return response;
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

{{--LISTA AGREGABLE DE CATEGORIAS
<div class="col-lg-12">
    <div class="card">
        <div class="card-header bg-white">
            Multi-list
        </div>
        <div class="card-block">
            <div class="col-lg-6">
                <div class="card-block m-t-25">
                    <div id="filter">
                        <div class="block__list">
                            <div class="editable_section">
                                <div class="row">
                                    <div class="col-12 px-0">
                                        <ul id="editable" class="list-unstyled">
                                            <li>text number one<i class="fa fa-close"></i></li>
                                            <li>text number two<i class="fa fa-close"></i></li>
                                            <li>text number three<i class="fa fa-close"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">New List</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="float-right" aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="post" class="form" id="myform">
                                    <div class="form-group is-empty label-floating">
                                        <label class="control-label" for="list-name">Name:</label>
                                        <input type="text" class="form-control" id="list-name" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-warning" id="modal_close_btn" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" id="save" value="Save">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
