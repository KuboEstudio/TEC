Ext.onReady(function(){
	//Ext.QuickTips.init();
	var buttonHandler = function(button,event) {
		window.open('exporter.php');
	};

	var button = new Ext.Button({applyTo:'topic-grid', text:'[Exportar .xls]', handler:buttonHandler});
	
	 var store = new Ext.data.JsonStore({
		root: 'registros',    // see json output
		totalProperty: 'totalCount',
		idProperty: 'id',
		//url: 'results.php',
        fields: [
			{name: 'recEvento'},
			{name: 'acceRegistro'},
			{name: 'amaServicio'},
			{name: 'utiPlatica'},
			{name: 'utiRecorrido'},
			{name: 'taller1'},
			{name: 'taller1Tiempo'},
			{name: 'taller1Dinamico'},
			{name: 'taller1Interesante'},
			{name: 'taller1TomaDecision'},
			{name: 'taller2'},
			{name: 'taller2Tiempo'},
			{name: 'taller2Dinamico'},
			{name: 'taller2Interesante'},
			{name: 'taller2TomaDecision'},
			{name: 'visPabellon'},
			{name: 'visAdmisiones'},
			{name: 'servComida'},
			{name: 'generalEve'},
			{name: 'comentarios'}
        ],
		proxy: new Ext.data.HttpProxy ({
            url: './results.php'
        })
    });

	var grid = new Ext.grid.GridPanel({
		id:'studentResults',
		width:700,
		height:500,
		title:'ITESM - ENCUESTAS REALIZADAS',
		store: store,
		trackMouseOver:false,
		disableSelection:false,
		loadMask: true,

		// grid columns
		columns:[{
			id: 'recEvento', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "&iquest;Recomendar&iacute;as este evento a otros compa&ntilde;eros?",
			dataIndex: 'recEvento',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'acceRegistro', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "La accesibilidad del registro en l&iacute;nea lo califico como:",
			dataIndex: 'acceRegistro',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'amaServicio', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "La amabilidad del servicio en la recepci&oacute;n del evento fue:",
			dataIndex: 'amaServicio',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'utiPlatica', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "&iquest;Te fue de utilidad la pl&aacute;tica de bienvenida?",
			dataIndex: 'utiPlatica',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'tel', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "&iquest;Te fue de utilidad el recorrido por las instalaciones?",
			dataIndex: 'utiRecorrido',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'taller1', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "1er taller en el que participaste",
			dataIndex: 'taller1',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'taller1Tiempo', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "1er Taller - Tiempo adecuado",
			dataIndex: 'taller1Tiempo',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'taller1Dinamico', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "1er Taller - Din&aacute;mico",
			dataIndex: 'taller1Dinamico',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'taller1Interesante', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "1er Taller - Interesante",
			dataIndex: 'taller1Interesante',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'taller1TomaDecision', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "1er Taller - &iquest;Ayuda en la toma de decisi&oacute;n de tu carrera?",
			dataIndex: 'taller1TomaDecision',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'taller2', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "2do taller en el que participaste",
			dataIndex: 'taller2',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'taller2Tiempo', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "2do Taller - Tiempo adecuado",
			dataIndex: 'taller2Tiempo',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'taller2Dinamico', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "2do Taller - Din&aacute;mico",
			dataIndex: 'taller2Dinamico',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'taller2Interesante', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "2do Taller - Interesante",
			dataIndex: 'taller2Interesante',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'taller2TomaDecision', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "2do Taller - &iquest;Ayuda en la toma de decisi&oacute;n de tu carrera?",
			dataIndex: 'taller2TomaDecision',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'visPabellon', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Al visitar el pabell&oacute;n de carreras, &iquest;c&oacute;mo lo calificar&iacute;as?",
			dataIndex: 'visPabellon',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'visAdmisiones', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Al visitar el pabell&oacute;n de Admisiones, &iquest;c&oacute;mo lo calificar&iacute;as?",
			dataIndex: 'visAdmisiones',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'servComida', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "&iquest;El servicio en el &aacute;rea de comida, fue?",
			dataIndex: 'servComida',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'generalEve', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "En general el evento Azul Reflex lo calificar&iacute;as como:",
			dataIndex: 'generalEve',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		},{
			id: 'comentarios', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Comentarios",
			dataIndex: 'comentarios',
			width: 80,
			resizable: true,
			hideable: false,
			sortable: true
		}],

		// paging bar on the bottom
		bbar: new Ext.PagingToolbar({
			pageSize: 999999,
			store: store,
			displayInfo: true,
			displayMsg: 'Encuestas realizadas: {2}<span style="display:none;">{0} - {1}</span>',
			emptyMsg: "No hay encuestas realizadas",	
			buttons: [button]
		})
	});
	
	// render it
	grid.render('topic-grid');
	store.load({params:{start: 0, limit: 10}});
});