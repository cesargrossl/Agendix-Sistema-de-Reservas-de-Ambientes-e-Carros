<?php
  //header da página
  include("./includes/header.php");
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Menus</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="div_tsaviso" >
                      <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                        <span id="sp_mesangem1"></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                    <div class="form-group" >
                        <div class="col-md-12 col-sm-12 col-xs-12" style="padding:10px;">
                          <button type="button" id="per_ssalvar" class="btn btn-secondary"><i class='fa fa-save'></i> Alterar</button>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php
//footer da página
include("./includes/footer.php");
?>  
<script>
  //scripts jquery e javascript;
  $(document).ready(function(){
    
      $('#div_tsaviso').hide();
      $("#per_salvar").click(function(e) {
        var senha = $('#per_senha').val();
        if (senha.length < 15){
          $.ajax({
            type: "POST",
            url: "./CRUD/a_crud.php",
            cache: false,
            dataType: 'json',
            data: {
              token: '<?php echo token(date("Ymd")) ?>',
              senha: $('#per_senha').val(),
              usuario:$('#per_usuario').val(),
              rotina: 'frm_trocasenha'
            }, success: function(retorno) {
              $('#div_tsaviso').show();
              if (retorno.ret == 1){
                $('#sp_mesangem1').html('Informações alteradas com sucesso!');
                $('#sp_mesangem1').css({'color':'blue','text-align':'center'});
              }else{
                $('#sp_mesangem1').html('Problema para atualizar!');
                $('#sp_mesangem1').css({'color':'red','text-align':'center'});
              }
            }
          });
        }
      });
   
  });
</script>