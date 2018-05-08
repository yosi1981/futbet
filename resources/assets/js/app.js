		new Vue({
		    el: '#crud',
		    created: function() {
		        this.getPaises();
		    },
		    data: {
		        paises: [],
		        newPais: '',
		        fillPais: {
		            'id': '',
		            'nombre': ''
		        },
		        errors: []
		    },
		    methods: {
		        getPaises: function() {
		            var urlPaises = "paises";
		            axios.get(urlPaises).then(response => {
		                this.paises = response.data;
		            });
		        },
		        editPais: function(pais) {
		            this.fillPais.id = pais.id;
		            this.fillPais.nombre = pais.nombre;
		            this.errors = [];
		            $('#edit').modal('show');
		        },
		        updatePais: function(id) {
		            var url = "paises/" + id;
		            axios.put(url, this.fillPais).then(response => {
		                this.getPaises();
		                this.fillPais = {
		                    'id': '',
		                    'nombre': ''
		                };
		                this.errors = [];
		                $('#edit').modal('hide');
		                toastr.success('Pais actualizado con éxito');
		            }).catch(error => {
		                this.errors = error.response;
		            });
		        },
		        deletePais: function(pais) {
		            var url = "paises/" + pais.id;
		            axios.delete(url).then(response => {
		                this.getPaises();
		                toastr.success('Pais ' + pais.id + ' eliminado correctamente');
		            });
		        },
		        createPais: function() {
		            var url = "paises";
		            axios.post(url, {
		                nombre: this.newPais
		            }).then(response => {
		                this.getPaises();
		                this.newPais = '';
		                this.errors = [];
		                $('#create').modal('hide');
		                toastr.success('Pais creado correctamente');
		            }).catch(error => {
		                this.errors = error.response.data;
		            });
		        }
		    }
		});