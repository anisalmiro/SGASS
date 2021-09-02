<?php $__env->startSection('content'); ?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h5 class="page-header"></h5>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Solicita&ccedil;&otilde;es Alocadas
                </div>
                <div class="panel-body">
                    <div class="row">



                        <div class="col-lg-12">
                            <h3 class="page-header">Solicita&ccedil;&otilde;es Alocadas</h3>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tickets@ITEC MOZ
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form>

                                        <?php echo e(csrf_field()); ?>


                                        <fieldset hidden="false">
                                            <div class="form-group">
                                                <label>USER ID</label>
                                                <input class="form-control" name="userid" placeholder="<?php echo e(Auth::user()->nameapelido); ?>" value="<?php echo e(Auth::user()->nameapelido); ?>">
                                            </div>
                                        </fieldset>

                                        <table class="display nowrap" style="width:100%" id="alocrequisicao">
                                            <thead>
                                                <tr>
                                                    <th>Ticket</th>
                                                    <th>Provincia</th>
                                                    <th>Cliente</th>
                                                    <th>Modelo</th>
                                                    <th>Nr de Serie</th>
                                                    <th>Tipo de Av&aacute;ria</th>
                                                    <th>Descri&ccedil;&atilde;o da Av&aacute;ria</th>
                                                    <th>Estado</th>
                                                    <th>Data da Aloca&ccedil;&atildeo</th>
                                                    <th>Tecnico Alocado</th>
                                                    <th>Op&ccedil;&otilde;es</th>
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
                                                    <td class="center">  <?php echo e($ass->estado); ?></td>
                                                    <td class="center"><?php echo e($ass->created_at); ?></td>
                                                    <td><?php echo e($ass->nameapelido); ?></td>
                                                    <td>
                                                        <?php if($ass->estado == 'aprovado'): ?>
                                                        <?php echo link_to_route('obs_tecn.edit',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Fechar Solicita&ccedil;&atilde;o','class'=>'btn btn-outline btn-default fa fa-check btn-sm']); ?>

                                                        <fieldset hidden="enable">
                                                            <?php echo link_to_route('requisica.edit',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Requisi&ccedil;&atilde;o de pe&ccedil;as','class'=>'btn btn-outline btn-info fa fa-archive btn-sm']); ?>

                                                        </fieldset>
                                                        <?php else: ?>
                                                        <?php if(Auth::user()->nivel == 2): ?> 
                                                        <fieldset hidden="true">
                                                            <?php echo link_to_route('obs_tecn.edit',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Fechar Solicita&ccedil;&atilde;o','class'=>'btn btn-outline btn-default fa fa-check btn-sm']); ?>

                                                            <?php echo link_to_route('requisica.edit',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Requisi&ccedil;&atilde;o de pe&ccedil;as','class'=>'btn btn-outline btn-info fa fa-archive btn-sm']); ?>


                                                        </fieldset>
                                                        <?php else: ?>
                                                        <?php echo link_to_route('obs_tecn.edit',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Fechar Solicita&ccedil;&atilde;o','class'=>'btn btn-outline btn-default fa fa-check btn-sm']); ?>

                                                        <?php echo link_to_route('requisica.edit',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Requisi&ccedil;&atilde;o de pe&ccedil;as','class'=>'btn btn-outline btn-info fa fa-archive btn-sm']); ?>


                                                        <?php endif; ?>

                                                        <?php endif; ?>


                                                        <!--<?php echo link_to('#', $title='',$attributes=['id'=>'obsRegistar', 'data-toggle'=>'tooltip', 'title'=>'Realocar T&eacute;cnico','class'=>'btn btn-outline btn-info fa fa-mail-forward btn-sm'],$secure=null); ?>-->

                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>

                                        </table>
                                    </form>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script>

    $(document).ready(function () {
        $('#alocrequisicao').DataTable({
            "scrollY": 200,
            "scrollX": true,

        });
    });
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>