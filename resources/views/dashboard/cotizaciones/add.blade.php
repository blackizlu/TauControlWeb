@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6 skin_txt">
                    <h4 class="nav_top_align">
                        <i class="fa fa-file-invoice-dollar "></i>
                        Agregar cotización
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
                            <a href="">Cotizaciones</a>
                        </li>
                        <li class="active breadcrumb-item">Agregar cotización</li>
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
                            Nueva Cotización
                        </div>
                        <div class="card-block seclect_form">
                            <form  action="{{ route('dashboard.cotizaciones.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Proyecto*</h5>
                                        <select class="form-control chzn-select" tabindex="7" name="project_id" id="project_id">
                                            <option disabled selected>Buscar Proyecto</option>
                                            @foreach($projects as $project)
                                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Monto*</h5>
                                        <div class="input-group ">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Moneda*</h5>
                                        <div class="form-group">
                                            <select class="form-control hide_search" name="money">
                                                <option value="usd">USD</option>
                                                <option value="mxn">MXN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Fecha de solicitud de pricing*</h5>
                                        <div class="input-group input-append date" id="dpYears" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="estimated_date" id="estimated_date">
                                            <span class="input-group-addon add-on">
                                                <i class="fa fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Fecha de realización del pricing*</h5>
                                        <div class="input-group input-append date" id="dpYears1" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="estimated_date" id="estimated_date">
                                            <span class="input-group-addon add-on">
                                                <i class="fa fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 input_field_sections ">
                                        <h5>Fecha de venta</h5>
                                        <div class="input-group input-append date" id="dpYears2" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="estimated_date" id="estimated_date">
                                            <span class="input-group-addon add-on">
                                                <i class="fa fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Vendida</h5>
                                        <div class="checkbox m-t-5">
                                            <label class="text-success">
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Seleccionar archivo</h5>
                                        <div class="col-sm-12 button_file m-t-5">
                                            <input id="input-4" name="input4[]" type="file" multiple class="file-loading d-block">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 input_field_sections">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
/*
        $('#input-4').fileinput({
            fileSingle: 'archivo',
            filePlural: 'archivos',
            browseLabel: 'Examinar &hellip;',
            removeLabel: 'Quitar',
            removeTitle: 'Quitar archivos seleccionados',
            cancelLabel: 'Cancelar',
            cancelTitle: 'Abortar la subida en curso',
            uploadLabel: 'Subir archivo',
            uploadTitle: 'Subir archivos seleccionados',
            msgNo: 'No',
            msgNoFilesSelected: 'No hay archivos seleccionados',
            msgCancelled: 'Cancelado',
            msgPlaceholder: 'Seleccionar {files}...',
            msgZoomModalHeading: 'Vista previa detallada',
            msgFileRequired: 'Debes seleccionar un archivo para subir.',
            msgSizeTooSmall: 'El archivo "{name}" (<b>{size} KB</b>) es demasiado pequeño y debe ser mayor de <b>{minSize} KB</b>.',
            msgSizeTooLarge: 'El archivo "{name}" (<b>{size} KB</b>) excede el tamaño máximo permitido de <b>{maxSize} KB</b>.',
            msgFilesTooLess: 'Debe seleccionar al menos <b>{n}</b> {files} a cargar.',
            msgFilesTooMany: 'El número de archivos seleccionados a cargar <b>({n})</b> excede el límite máximo permitido de <b>{m}</b>.',
            msgFileNotFound: 'Archivo "{name}" no encontrado.',
            msgFileSecured: 'No es posible acceder al archivo "{name}" porque está siendo usado por otra aplicación o no tiene permisos de lectura.',
            msgFileNotReadable: 'No es posible acceder al archivo "{name}".',
            msgFilePreviewAborted: 'Previsualización del archivo "{name}" cancelada.',
            msgFilePreviewError: 'Ocurrió un error mientras se leía el archivo "{name}".',
            msgInvalidFileName: 'Caracteres no válidos o no soportados en el nombre del archivo "{name}".',
            msgInvalidFileType: 'Tipo de archivo no válido para "{name}". Sólo se permiten archivos de tipo "{types}".',
            msgInvalidFileExtension: 'Extensión de archivo no válida para "{name}". Sólo se permiten archivos "{extensions}".',
            msgFileTypes: {
                'image': 'image',
                'html': 'HTML',
                'text': 'text',
                'video': 'video',
                'audio': 'audio',
                'flash': 'flash',
                'pdf': 'PDF',
                'object': 'object'
            },
            msgUploadAborted: 'La carga de archivos se ha cancelado',
            msgUploadThreshold: 'Procesando...',
            msgUploadBegin: 'Inicializando...',
            msgUploadEnd: 'Hecho',
            msgUploadEmpty: 'No existen datos válidos para el envío.',
            msgUploadError: 'Error',
            msgValidationError: 'Error de validación',
            msgLoading: 'Subiendo archivo {index} de {files} &hellip;',
            msgProgress: 'Subiendo archivo {index} de {files} - {name} - {percent}% completado.',
            msgSelected: '{n} {files} seleccionado(s)',
            msgFoldersNotAllowed: 'Arrastre y suelte únicamente archivos. Omitida(s) {n} carpeta(s).',
            msgImageWidthSmall: 'El ancho de la imagen "{name}" debe ser de al menos {size} px.',
            msgImageHeightSmall: 'La altura de la imagen "{name}" debe ser de al menos {size} px.',
            msgImageWidthLarge: 'El ancho de la imagen "{name}" no puede exceder de {size} px.',
            msgImageHeightLarge: 'La altura de la imagen "{name}" no puede exceder de {size} px.',
            msgImageResizeError: 'No se pudieron obtener las dimensiones de la imagen para cambiar el tamaño.',
            msgImageResizeException: 'Error al cambiar el tamaño de la imagen.<pre>{errors}</pre>',
            msgAjaxError: 'Algo ha ido mal con la operación {operation}. Por favor, inténtelo de nuevo mas tarde.',
            msgAjaxProgressError: 'La operación {operation} ha fallado',
            ajaxOperations: {
                deleteThumb: 'Archivo borrado',
                uploadThumb: 'Archivo subido',
                uploadBatch: 'Datos subidos en lote',
                uploadExtra: 'Datos del formulario subidos '
            },
            dropZoneTitle: 'Arrastre y suelte aquí los archivos &hellip;',
            dropZoneClickTitle: '<br>(o haga clic para seleccionar {files})',
            fileActionSettings: {
                removeTitle: 'Eliminar archivo',
                uploadTitle: 'Subir archivo',
                uploadRetryTitle: 'Reintentar subir',
                downloadTitle: 'Descargar archivo',
                zoomTitle: 'Ver detalles',
                dragTitle: 'Mover / Reordenar',
                indicatorNewTitle: 'No subido todavía',
                indicatorSuccessTitle: 'Subido',
                indicatorErrorTitle: 'Error al subir',
                indicatorLoadingTitle: 'Subiendo...'
            },
            previewZoomButtonTitles: {
                prev: 'Anterior',
                next: 'Siguiente',
                toggleheader: 'Mostrar encabezado',
                fullscreen: 'Pantalla completa',
                borderless: 'Modo sin bordes',
                close: 'Cerrar vista detallada'
            }
        });
*/
    </script>

    @endsection

