<!--------- Start Topo --------->
<?php include "topo.php"; ?>
<!--------- End Topo --------->


<!--------- Start Controler --------->
<?php
$p = (isset($_GET['p']))? $_GET['p'] : '';
$r = (isset($_GET['r']))? $_GET['r'] : '0';
$s = (isset($_GET['s']))? $_GET['s'] : '0';
$c = (isset($_GET['c']))? $_GET['c'] : '0';
$d = isset($_GET['d']) ? $_GET['d'] : '0';
$d2 = isset($_GET['d2']) ? $_GET['d2'] : '0';

if($tipoacesso === '1'){
$sqlcount = "SELECT * FROM usuario_setor WHERE ((usuario = $idusuario AND setor = $s) OR ({$nivelusuario} = '1')) ORDER BY setor ";
$rescount = $conn->query( $sqlcount )or die ( mysqli_error($conn));
    if (mysqli_num_rows($rescount) < 1) {
        $s = '0';
    }
}

if ($_SESSION['UserTipo'] === '1') { $esconder = ''; } else { $esconder = 'off'; }


//$mesinicio = $anoatual.'-'.$mesatual.'-01 00:00:00';
//$mesfim = $anoatual.'-'.$mesatual.'-31 23:59:59';
?>
<!--------- End Controler --------->


<!--------- Start HTML --------->
<!DOCTYPE html>

<!--------- Start Head --------->

<head>

  <!--------- Start Head --------->
  <?php include "head.php"; ?>
  <!--------- End Head --------->

</head>
<!--------- End Head --------->


<!--------- Start Body --------->

<body>

  <!--------- Start Preloader --------->
  <?php include "preloader.php"; ?>
  <!--------- End Preloader --------->

  <!--------- Start Barra Topo --------->
  <?php include "barraTopo.php"; ?>
  <!--------- End Barra Topo --------->


  <!--------- Start Corpo --------->
  <main id="main" class="main">

    <!--------- Start Titulo --------->
    <div class="pagetitle">
      <h1>Gestão de Chamados</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Chamados</li>
          <li class="breadcrumb-item active">Gestão</li>
        </ol>
      </nav>
    </div>
    <!--------- End Titulo --------->


    <!--------- Start Section Dashboard --------->
    <section class="section dashboard">
      <div class="row">

        <!--------- Start Colunas --------->
        <div class="col-lg-12">
          <div class="row">


            <!--------- Start Filtro --------->
            <div class="col-lg-12">

              <!--------- Start Filtrar Chamados --------->
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Filtrar Chamados</h5>

                  <!--------- Start From --------->
                  <form class="row g-3">
                    <div class="col-md-4">
                      <label for="validationDefault01" class="form-label">Número</label>
                      <input name="p" type="text" placeholder="" class="form-control" value="<?php echo $p; ?>">
                    </div>

                    <div class="col-md-4">
                      <label for="validationDefault04" class="form-label">Situação</label>
                      <select class="form-select" name="r" required=true>
                        <option value='0' <?php if($r==='0' ){ echo 'selected' ;} ?>>Escolha</option>
                        <option value='2' <?php if($r==='2' ){ echo 'selected' ;} ?>>Aberto</option>
                        <option value='4' <?php if($r==='4' ){ echo 'selected' ;} ?>>Fechado</option>
                        <option value='5' <?php if($r==='5' ){ echo 'selected' ;} ?>>Em análise</option>
                        <option value='6' <?php if($r==='6' ){ echo 'selected' ;} ?>>Cancelado</option>
                      </select>
                    </div>

                    <div class="col-md-4">
                      <label for="validationDefault04" class="form-label">Setor</label>
                      <select class="form-select" name="s" required id="cod_setor_col">
                        <option value="0">Todos</option>
                        <?php
                            $sql = "SELECT DISTINCT setores.setor, setores.* FROM setores INNER JOIN usuario_setor ON ((usuario_setor.usuario = {$idusuario} AND usuario_setor.setor = setores.id) OR ({$nivelusuario} = '1') OR ($tipoacesso = '2')) ORDER BY setor";
                            $res = $conn->query( $sql )or die ( mysqli_error($conn));
                            while ( $row2 = $res->fetch_assoc() ) {
                                if($row2['id'] === $s){ $selecionado = 'selected=""';} else { $selecionado = '';}
                                echo '<option value="'.$row2['id'].'" '.$selecionado.'>'.$row2['setor'].'</option>';
                            }
                            ?>
                      </select>
                    </div>


                    <div class="col-md-4 <?php echo $esconder;?>">
                      <label for="validationDefault04" class="form-label">Colaborador</label>
                      <select class="form-select" name="c" required id="cod_colab">
                        <option value="0">Todos</option>
                        <?php
                            $sql = "SELECT * FROM usuarios ORDER BY nome";
                            $res = $conn->query( $sql )or die ( mysqli_error($conn));
                            while ( $row3 = $res->fetch_assoc() ) {
                                if($row3['id'] === $c){ $selecionado = 'selected=""';} else { $selecionado = '';}
                                echo '<option value="'.$row3['id'].'" '.$selecionado.'>'.$row3['nome'].'</option>';
                            }
                            ?>
                      </select>
                    </div>

                    <div class="col-md-4">
                      <label for="validationDefault02" class="form-label">Período</label>
                      <input type="text" class="form-control" name="d" value="<?php echo $d;?>">
                    </div>

                    <div class="col-md-4">
                      <label for="validationDefault02" class="form-label">Até:</label>
                      <input type="text" class="form-control" name="d2" value="<?php echo $d2;?>">
                    </div>

                    <div class="col-3">
                      <button class="btn btn-primary" id="enviar">Filtrar</button>
                    </div>




                  </form>
                  <!--------- End From --------->

                </div>
              </div>
              <!--------- End Filtrar Chamados --------->

            </div>
            <!--------- End Filtro --------->

            <div class="clearfix"></div>


            <!--------- Start Lista Chamados --------->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Todos <span>| Chamados </span></h5>

                  <!--------- Start Tabela --------->
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th>PROTOCOLO</th>
                        <th>ASSUNTO</th>
                        <th>DATA</th>
                        <th>ORIGEM</th>
                        <th>CLIENTE</th>
                        <th>SITUAÇÃO</th>
                        <th>AÇÕES</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php


                        if($r==0){

                            $sql0 = "SELECT DISTINCT chamado.* FROM chamado INNER JOIN usuario_setor ON
                                (($idusuario = criado_por) AND ($tipoacesso = tipo) OR $tipoacesso = '1')  AND
                                (status != 4 AND status != 6) AND
                                ((chamado.setor = {$s} OR {$s} = 0) AND ((usuario_setor.usuario = {$idusuario} AND usuario_setor.setor = {$s}) OR ({$nivelusuario} = '1') OR($tipoacesso != '1') ))  AND
                                (criado_por = {$c} OR {$c} = 0) AND
                                (protocolo LIKE '%{$p}%')";


                        }else if($r!=4&&$r!=6){

                            if($d != '0'&&$r===3){
                                $d = $d . ' 00:00:00';
                                $d2 = $d2 . ' 23:59:59';

                                $sql0 = "SELECT DISTINCT chamado.* FROM chamado INNER JOIN usuario_setor ON
                                (($idusuario = criado_por) AND ($tipoacesso = tipo) OR $tipoacesso = '1')  AND
                                (status != 4 AND status != 6 AND status != 5) AND
                                ((chamado.setor = {$s} OR {$s} = 0) AND ((usuario_setor.usuario = {$idusuario} AND usuario_setor.setor = {$s}) OR ({$nivelusuario} = '1') OR($tipoacesso != '1') ))  AND
                                (criado_por = {$c} OR {$c} = 0) AND
                                (protocolo LIKE '%{$p}%') AND
                                (data > '{$d}' AND data < '{$d2}')
                                ORDER BY data DESC";
                            } else {
                                $sql0 = "SELECT DISTINCT chamado.* FROM chamado INNER JOIN usuario_setor ON
                                (($idusuario = criado_por) AND ($tipoacesso = tipo) OR $tipoacesso = '1')  AND
                                (status = $r) AND
                                ((chamado.setor = {$s} OR {$s} = 0) AND ((usuario_setor.usuario = {$idusuario} AND usuario_setor.setor = {$s}) OR ({$nivelusuario} = '1') OR($tipoacesso != '1') ))  AND
                                (criado_por = {$c} OR {$c} = 0) AND
                                (protocolo LIKE '%{$p}%')
                                ORDER BY data DESC";
                            }



                        }else{

                            $sql0 = "SELECT DISTINCT chamado.* FROM chamado INNER JOIN usuario_setor ON
                                (($idusuario = criado_por) AND ($tipoacesso = tipo) OR $tipoacesso = '1') AND
                                (status = $r) AND
                                ((chamado.setor = {$s} OR {$s} = 0) AND ((usuario_setor.usuario = {$idusuario} AND usuario_setor.setor = {$s}) OR ({$nivelusuario} = '1') OR($tipoacesso != '1') ))  AND
                                (criado_por = {$c} OR {$c} = 0) AND
                                (protocolo LIKE '%{$p}%')
                                ORDER BY data DESC";

                        }



                                  $res0 = $conn->query( $sql0 )or die ( mysqli_error($conn));
                                  while ( $row0 = $res0->fetch_assoc() ) {
                                  ?>
                      <tr>
                        <td>
                          <?php echo $row0['protocolo']; ?>
                        </td>
                        <td>
                          <?php echo $row0['assunto']; ?>
                        </td>
                        <td>
                          <?php echo date("d/m/Y H:i", strtotime( $row0['data'])); ?>
                        </td>
                        <?php
                                          if($row0['tipo'] === '1'){ $destino = 'Interno';} else { $destino = 'Cliente';}  ?>
                        <td>
                          <?php echo $destino; ?>
                        </td>



                        <td>
                          <?php
                                          $sql11 = "SELECT * FROM clientes WHERE id = {$row0['cliente']}";
                                              $res11 = $conn->query( $sql11 )or die ( mysqli_error($conn));
                                              while ( $row11 = $res11->fetch_assoc() ) {
                                          ?>
                          <?php echo $row11['cliente']; ?>
                          <?php } ?>
                        </td>

                        <td>
                          <?php
                                              if($row0['status'] === '2'){ echo '<span class="sta3">Aberto</span>';}
                                              if($row0['status'] === '3'){ echo '<span class="bg-atrasado">Atrasado</span>';}
                                              if($row0['status'] === '4'){ echo '<span class="bg-finalizado">Fechado</span>';}
                                              if($row0['status'] === '5'){ echo '<span class="bg-analise">Em análise</span>';}
                                              if($row0['status'] === '6'){ echo '<span class="bg-cancelado">Cancelado</span>';}
                                              ?>
                        </td>

                        <td>

                          <ul class="btnaction">

                            <?php if($row0['status'] != '4' && $row0['status'] != '6'){ ?>
                            <a href="chamado.php?c=<?php echo $row0['id']; ?>">
                              <i class="bi bi-journal-text" style="font-size: 20px"></i>
                              <?php } ?>

                              <?php if($row0['status'] != '4' && $row0['status'] != '6' && $tipoacesso === '1'){ ?>
                              <a href="fechar.php?c=<?php echo $row0['id']; ?>&u=<?php echo $idusuario;?>">
                                <i class="bi bi-journal-x" style="font-size: 20px; color: red;"></i>
                              </a>
                              <?php } ?>


                              <?php if($row0['status'] === '4' || $row0['status'] === '6'){ ?>
                              <a href="chamado.php?c=<?php echo $row0['id']; ?>">
                                <i class="bi bi-eye" style="font-size: 20px"></i>
                              </a>
                              <?php } ?>

                          </ul>

                        </td>
                      </tr>
                      <?php } ?>

                    </tbody>

                  </table>
                  <!--------- End Tabela --------->


                </div>

              </div>
            </div>
            <!--------- End Lista Chamados --------->

          </div>
        </div><!-- End Left side columns -->


      </div>
    </section>
    <!--------- End Section Dashboard --------->

  </main>
  <!--------- End Corpo --------->



  <!--------- Start Footer --------->
  <?php include "footer.php"; ?>
  <!--------- End Footer --------->

  <!--------- Start Rodape --------->
  <?php include "rodape.php"; ?>
  <!--------- End Rodape --------->

</body>
<!--------- End Body --------->

</html>
<!--------- End HTML --------->

<!--------- End Controler --------->