'use strict';
$(document).ready(function () {
    // Chosen
    $(".hide_search").chosen({disable_search_threshold: 10});
    $(".chzn-select").chosen({allow_single_deselect: true});
    $(".chzn-select-deselect,#select2_sample").chosen();
    // End of chosen

    // Input mask
    $("#phones").inputmask();
    $("#product").inputmask("a*-999-a999");
    $("#percent").inputmask("99%");
    $(".date_mask").inputmask("dd/mm/yyyy");
    // End of input mask

    //tags input
    $('#tags').tagsInput();
    $("#input-21").fileinput({
        theme: "fa",
        previewFileType: "image",
        browseClass: "btn btn-success",
        browseLabel: "Pick Image",
        removeClass: "btn btn-danger",
        removeLabel: "Delete"


    });
    $("#input-4").fileinput({
        showPreview: true,
        showUploadedThumbs: false,
        hideThumbnailContent: false,
        showRemove: false,
        showUpload: false,
        showCaption: false,
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
        msgZoomModalHeading: 'Vista previa',
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
            showRemove: true,
            showUpload: false,
            showDownload: false,
            showZoom: false,
            showDrag: false,
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
            borderless: 'Pantalla completa',
            close: 'Cerrar vista detallada'
        },
        theme: "fa",
        });
    $("#input-22").fileinput({
        theme: "fa",
        previewFileType: "text",
        allowedFileExtensions: ["txt", "md", "ini", "text"],
        previewClass: "bg-warning"
    });
    $("#input-43").fileinput({
        theme: "fa",
        showPreview: false,
        allowedFileExtensions: ["zip", "rar", "gz", "tgz"],
        elErrorContainer: "#errorBlock"
    });
    $("#input-fa").fileinput({
        showPreview: true,
        showUploadedThumbs: false,
        hideThumbnailContent: false,
        showRemove: false,
        showUpload: false,
        showCaption: false,
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
        msgZoomModalHeading: 'Vista previa',
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
            showRemove: true,
            showUpload: false,
            showDownload: false,
            showZoom: false,
            showDrag: false,
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
            borderless: 'Pantalla completa',
            close: 'Cerrar vista detallada'
        },
        theme: "fa",
        uploadUrl: "/file-upload-batch/2"
    })
    $("#input-fe").fileinput({
        showPreview: true,
        showUploadedThumbs: false,
        hideThumbnailContent: false,
        showRemove: false,
        showUpload: false,
        showCaption: false,
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
        msgZoomModalHeading: 'Vista previa',
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
            showRemove: true,
            showUpload: false,
            showDownload: false,
            showZoom: false,
            showDrag: false,
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
            borderless: 'Pantalla completa',
            close: 'Cerrar vista detallada'
        },
        theme: "fa",
        uploadUrl: "/file-upload-batch/2"
    });

    $('#multi_select1').multiSelect();
    $('#multi_select2').multiSelect({
        selectableOptgroup: true
    });
    $('#multi_select3').multiSelect({
        selectableHeader: "<div class='custom-header'>Selectable items</div>",
        selectionHeader: "<div class='custom-header'>Selection items</div>",
        selectableFooter: "<div class='custom-header'>Selectable footer</div>",
        selectionFooter: "<div class='custom-header'>Selection footer</div>"
    });
    $('#multi_select4').multiSelect({
        selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
        selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
        afterInit: function (ms) {
            var that = this,
                $selectableSearch = that.$selectableUl.prev(),
                $selectionSearch = that.$selectionUl.prev(),
                selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

            that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function (e) {
                    if (e.which === 40) {
                        that.$selectableUl.focus();
                        return false;
                    }
                });

            that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function (e) {
                    if (e.which == 40) {
                        that.$selectionUl.focus();
                        return false;
                    }
                });
        },
        afterSelect: function () {
            this.qs1.cache();
            this.qs2.cache();
        },
        afterDeselect: function () {
            this.qs1.cache();
            this.qs2.cache();
        }
    });
    Admire.formGeneral() ;
});