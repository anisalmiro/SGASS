<?php $__env->startSection('content'); ?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h5 class="page-header"></h5>
        </div>
        <!-- /.col-lg-12 -->
    </div>



    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <!-- 
             <div class="panel panel-default">
                 <div class="panel-heading">
                     Fluxo de Actividade
                 </div>
            -->
            <!-- .panel-heading -->
            <div class="panel-body">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading dark-overlay">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Solicita&ccedil;&otilde;es Abertas</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <!-- /.panel-heading -->



                            <div class="panel-body">

                                <div class="form-group">
                                    <label for="enabledSelect"></label>                 
                                </div>
                                <form role="form">

                                </form>

                                <form>
                                    <?php echo e(csrf_field()); ?>

                                    <table width="100%" table id="tabalocacaotecnico" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Ticket</th>
                                                <th>Provincia</th>
                                                <th>Cliente</th>
                                                <th>Modelo da Maquina</th>
                                                <th>Numero de Serie</th>
                                                <th>Tipo de Av&aacute;ria</th>
                                                <th>Descri&ccedil;&atilde;o da Av&aacute;ria</th>
                                                <th>Estado</th>
                                                <th>Data do Chamado</th>
                                                <th>Alocar Tecnico </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $__currentLoopData = $solecitacao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo e($ass->id); ?></td>
                                                <td><?php echo e($ass->nomepv); ?></td>
                                                <td><?php echo e($ass->nomeemp); ?></td>
                                                <td><?php echo e($ass->nome); ?></td>
                                                <td><?php echo e($ass->nr_serie); ?></td>
                                                <td class="center"><?php echo e($ass->tipo); ?></td>
                                                <td class="center"><?php echo e($ass->descricao); ?></td>
                                                <td class="center">
                                                    <?php echo e($ass->estado); ?>        
                                                </td>
                                                <td class="center"><?php echo e($ass->created_at); ?></td>
                                                <td>

                                                    <?php echo link_to_route('alocacao.edit',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Alocar Solicita&ccedil;&atilde;o','class'=>'btn btn-primary btn-default fa fa-link btn-lg']); ?>

                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>



                                    </table>

                                    <?php echo $solecitacao->render(); ?>


                                </form>
                            </div>

                            <!-- /.col-lg-6 (nested) -->
                            <!-- /.panel-body -->
                        </div>
                    </div>

                </div>
            </div>
            <!-- .panel-body -->
            <!--  </div>
               /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function () {
        var table = $('#tabalocacaotecnico').DataTable({
            "scrollY": "200px",
            "paging": false
        });

    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>