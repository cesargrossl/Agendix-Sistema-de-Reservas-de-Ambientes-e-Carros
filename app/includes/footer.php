        <!-- footer content -->
        <footer>
          <div class="pull-right">
           Sistema de Agendamento Agendix |  Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="./gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="./gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="./gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="./gentelella/vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="./gentelella/build/js/custom.min.js"></script>
  </body>
</html>

<script>
 
  $(document).ready(function() {
    $("#btn_cancelar").click(function(){
      window.location.href = "<?php echo $_SERVER["PHP_SELF"];?>";
    } );

    $("#btn_excluir").click(function(){
      var resposta = confirm("Deseja remover esse registro?");
      //console.log(id);
      if (resposta == true) {
        window.location.href = "<?php echo $_SERVER["PHP_SELF"];?>?del=1&id="+id;
      }
    });
    /*
		$('#dt_pesquisar').dataTable({
			"iDisplayLength": 10 ,
			language: {
				"sEmptyTable": "Nenhum registro encontrado",
				"sInfo": "Mostrando de _START_ at&eacute; _END_ de _TOTAL_ registros",
				"sInfoEmpty": "Mostrando 0 at&eacute; 0 de 0 registros",
				"sInfoFiltered": "(Filtrados de _MAX_ registros)",
				"sInfoPostFix": "",
				"sInfoThousands": ".",
				"sLengthMenu": "_MENU_ Resultados por p&aacute;gina",
				"sLoadingRecords": "Carregando...",
				"sProcessing": "Processando...",
				"sZeroRecords": "Nenhum registro encontrado",
				"sSearch": "Pesquisar",
				"oPaginate": {
					"sNext": "Pr&oacute;ximo",
					"sPrevious": "Anterior",
					"sFirst": "Primeiro",
					"sLast": "&Uacute;ltimo"
				},
				"oAria": {
					"sSortAscending": ": Ordenar colunas de forma ascendente",
					"sSortDescending": ": Ordenar colunas de forma descendente"
				}
			}
		});*/
	});
</script>