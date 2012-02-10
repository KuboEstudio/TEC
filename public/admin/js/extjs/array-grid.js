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
			{name: 'id'},
			{name: 'nombre'},
			{name: 'apPaterno'},
			{name: 'apMaterno'},
			{name: 'email'},
			{name: 'tel'},
			{name: 'cel'},
			{name: 'dir'},
			{name: 'dob'},
			{name: 'prepa'},
			{name: 'carrera1'},
			{name: 'carrera2'},
			{name: 'carrera3'},
			{name: 'escuela1'},
			{name: 'escuela2'},
			{name: 'escuela3'},
			{name: 'taller1'},
			{name: 'tallerhora1'},
			{name: 'taller2'},
			{name: 'tallerhora2'},
			{name: 'promPrepa'},
			{name: 'nMama'},
			{name: 'nPapa'}
        ],
		proxy: new Ext.data.HttpProxy ({
            url: './results.php'
        })
    });

	var grid = new Ext.grid.GridPanel({
		id:'studentResults',
		width:700,
		height:500,
		title:'ITESM - ALUMNOS INSCRITOS',
		store: store,
		trackMouseOver:false,
		disableSelection:false,
		loadMask: true,

		// grid columns
		columns:[{
			id: 'nombre', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Nombre",
			dataIndex: 'nombre',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'apPaterno', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "A. Paterno",
			dataIndex: 'apPaterno',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'apMaterno', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "A. Materno",
			dataIndex: 'apMaterno',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'email', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Email",
			dataIndex: 'email',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'tel', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Tel&eacute;fono",
			dataIndex: 'tel',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'cel', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Celular",
			dataIndex: 'cel',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'dir', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Direcci&oacute;n",
			dataIndex: 'dir',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'dob', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Fecha de nacimiento",
			dataIndex: 'dob',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'prepa', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Preparatoria",
			dataIndex: 'prepa',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'carrera1', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Carrera 1",
			dataIndex: 'carrera1',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'carrera2', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Carrera 2",
			dataIndex: 'carrera2',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'carrera3', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Carrera 3",
			dataIndex: 'carrera3',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'escuela1', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Campus 1",
			dataIndex: 'escuela1',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'escuela2', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Campus 2",
			dataIndex: 'escuela2',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'escuela3', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Campus 3",
			dataIndex: 'escuela3',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'taller1', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Taller 1",
			dataIndex: 'taller1',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'tallerhora1', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Taller 1 Hora",
			dataIndex: 'tallerhora1',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'taller2', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Taller 2",
			dataIndex: 'taller2',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'tallerhora2', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Taller 2 Hora",
			dataIndex: 'tallerhora2',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'promPrepa', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Promedio",
			dataIndex: 'promPrepa',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'nMama', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Mam&aacute;",
			dataIndex: 'nMama',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		},{
			id: 'nPapa', // id assigned so we can apply custom css (e.g. .x-grid-col-topic b { color:#333 })
			header: "Pap&aacute;",
			dataIndex: 'nPapa',
			width: 80,
			resizable: false,
			hideable: false,
			sortable: true
		}],

		// paging bar on the bottom
		bbar: new Ext.PagingToolbar({
			pageSize: 999999,
			store: store,
			displayInfo: true,
			displayMsg: 'Alumnos inscritos: {2}<span style="display:none;">{0} - {1}</span>',
			emptyMsg: "No hay alumnos inscritos",	
			buttons: [button]
		})
	});
	
	// render it
	grid.render('topic-grid');
	store.load({params:{start: 0, limit: 10}});
});