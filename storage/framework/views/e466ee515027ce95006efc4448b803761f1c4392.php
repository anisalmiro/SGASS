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
         <?php echo $__env->make( 'layouts.messages' , \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Fluxo de Actividade
                </div>
                <!-- .panel-heading -->
                <div class="panel-body">
                    <div class="panel-group" id="accordion">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Abrir uma Solicita&ccedil;&atilde;o</a>
                                </h4>
                            </div>
                           
                            <div id="collapseTwo" class="panel-collapse collapse">


                                <div class="col-lg-6">



                                    <?php echo Form::open(['route'=>'chamado.store', 'method'=>'POST']); ?>

                                    <?php echo e(csrf_field()); ?>

                                    <div>
                                    </div>   
                                    <div class="form-group">
                                        <label for="enabledSelect">Provincia</label>  
                                        <?php echo Form::select('provincia',$provincia,null,['class'=>'form-control','id'=>'provincia']); ?>

                                    </div>                                        

                                    <div class="form-group">
                                        <label for="enabledSelect">Distritos</label>  
                                        <?php echo Form::select('distrito',['placeholder'=>'selecionar Distrito'],null,['class'=>'form-control','id'=>'distrito']); ?>

                                    </div>

                                    <div class="form-group">
                                        <?php echo Form::label('Cliente:'); ?>

                                        <?php echo Form::select('cliente_action',$cliente,null,['class'=>'form-control','id'=>'cliente_action']); ?>

                                    </div>
<?php echo Form::label('Equipamento:'); ?>

                                    <div class="form-group input-group">
                                        
                                        <?php echo Form::select('equip_action',['placeholder'=>'selecionar Equipamento'],null,['class'=>'form-control','id'=>'equip_action']); ?>

                                        <span class="input-group-btn">
                                            <a button class="btn btn-default" type="button"  href="v_equipamento"><i class="fa fa-plus-circle"></i></a>
                                            </button>
                                        </span>
                                    </div>

                                    <?php echo Form::label('Seccao Av&aacute;riada:'); ?>

                                    <div class="form-group input-group">
                                        <?php echo Form::select('avaria',$avaria,null,['class'=>'form-control','id'=>'avaria']); ?>

                                        <span class="input-group-btn">
                                            <a button class="btn btn-default" type="button"  href="v_avaria"><i class="fa fa-plus-circle"></i></a>
                                            </button>
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <?php echo Form::label('Descri&ccedil;&atilde;o:'); ?>

                                        <?php echo Form::textarea('descricao',null,['class'=>'form-control','rows'=>'3' , 'placeholder'=>'Descri&ccedil;&atilde; da Av&aacute;ria']); ?> 
                                    </div>

                                    <?php echo Form::submit('Enviar',['class' => 'btn btn-primary btn-lg fa fa-save']); ?>

                                    <?php echo Form::close(); ?>



                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <!-- /.panel-body -->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- .panel-body -->



                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading dark-overlay">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Reabrir Solicita&ccedil;&otilde;es</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <!-- /.panel-heading -->

                                <div class="panel-body">

                                    <div class="row form-group">
                                        <div class="col-lg-12" class="panel-body">

                                        </div>

                                    </div>

                                    <table width="100%" class="table table-striped table-bordered table-hover" id="table_solic">
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
                                                <th>Op&ccedil;&atilde;o </th>
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
                                                <td class="center"> <?php echo e($ass->estado); ?></td>
                                                <td class="center"><?php echo e($ass->created_at); ?></td>
                                                <td style="width:100px">
                                                    <?php echo link_to('#', $title='',$attributes=['id'=>'obsRegistar', 'data-toggle'=>'tooltip', 'title'=>'Enviar Email para Reativa&ccedil;&atilde;o de Pedido','class'=>'btn btn-outline btn-info fa fa-envelope-square btn-sm'],$secure=null); ?>

                                                    <?php echo link_to_route('alocacao.edit',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Realocar T&eacute;cnico','class'=>'btn btn-primary btn-default fa fa-link btn-sm']); ?>

                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>


                                    </table>
                                    <?php echo $solecitacao->render(); ?>


                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>


                    </div>
                </div>
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
        var table = $('#table_solic').DataTable({
            "scrollY": "200px",
            "paging": false
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>