<?php
  //header da página
  include("./includes/header.php");
?>
      <!--06051982 JANELA MODAL DE PESQUISA -->
      <div class="modal fade bs-pesquisa" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span>
            </button>
            <h2 class="modal-title"></h2>
            </div>
            <div class="modal-body">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_content">
              <table id="datatable"  class="table table-striped" style="width:100%">
              <thead>
                <tr>
                <th>ID</th>
                <th>Menu</th>
                <th>Icone</th>
                </tr>
              </thead>
              <tbody>
              <?php
              //pesaiusa              
              ?>
              </tbody>
              </table>
              </div>
            </div>
            <p align="right"><button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button></p>
            </div>
            
          </div>
          </div>
        </div>
        <!-- 06051982 FIM DA JANELA MODAL DE PESQUISA -->
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
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" style="padding:10px;" >ID</label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="id_mostrado" name="id_mostrado" disabled="disabled" class="form-control col-md-7 col-xs-12" value="<?php echo $id;?>" />
                      </div>
                    </div>
                    <div class="form-group" style="padding:10px;">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_descricao">Descrição Menu<span class="required">*</span></label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="menu_descricao" name="menu_descricao" value="<?php echo $menu_descricao;?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group" style="padding:10px;" >
                        <div class="col-md-12 col-sm-12 col-xs-12" style="padding:10px;text-align: right;">
                          <button type="button" id="btn_excluir" class="btn btn-danger btn-sm" title="Excluir"><i class='fa fa-trash'></i> Excluir</button>
                          <button type="button" id="btn_cancelar" class="btn btn-secondary btn-sm" title="Cancelar"><i class='fa fa-refresh'></i> Cancelar</button>
                          <button type="button" id="btn_salvar" class="btn btn-success btn-sm" title="Salvar"><i class='fa fa-save'></i> Salvar</button>
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
  });
</script>