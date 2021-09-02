<?php $__env->startSection('content'); ?>



<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Relat&oacute;rios</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Relatorio de Solicitacoes
                    </div>
                    <!-- .panel-heading -->
                    <div class="panel-body">
                        <div class="panel-group" id="accordion">

                            <!-- /.col-lg-6 (nested) -->

                            <div class="col-lg-12">

                                <form method="POST">
                                    <div class="form-group">
                                        <label for="enabledSelect"></label>                 
                                    </div>

                                    <div class="panel-body">
                                        <div class="table-responsive col-lg-12">        
                                            <table width="100%" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>tickets abertas</th>
                                                        <th>tickets pedentes</th>
                                                        <th>tickets em atendimento</th>
                                                        <th>tickets fechados</th>
                                                        
                                                    </tr>
                                                </thead>
                                               
                                                <tbody>
                                                    <tr class="odd gradeX">
                                                        <td><?php echo e($sop); ?></td>
                                                        <td><?php echo e($sp); ?></td>
                                                        <td class="center"><?php echo e($se); ?></td>
                                                        <td class="center"><?php echo e($sf); ?></td>
                                                                                                      
                                                </tbody>
                                               
                                            </table>

                                        </div>
                                    </div>

                                </form>

                                <!-- /.panel-body -->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- .panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        <!-- /.row -->

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Solicita&ccedil;oes Pedentes
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Ticket ID</th>
                                    <th>Cliente</th>
                                    <th>Raz&atilde;o</th>
                                    <th>Data do Pedido</th>
                                    <th>Mais detalhes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $solpend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd gradeX">
                                    <td><?php echo e($ass->id); ?></td>
                                    <td><?php echo e($ass->nomeemp); ?></td>
                                    <td class="center">Requisi&ccedil;&atilde;o de pe&ccedil;as</td>
                                    <td class="center"><?php echo e($ass->dped ?? date('Y-m-d')); ?></td>
                                    <td class="center">
                                        <button type="button" class="btn btn-outline btn-primary"><i class="fa fa-list"></i>  Detail</button>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->

        <!-- /.col-lg-6 -->
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Solicita&ccedil;oes em Processo de Atendimento
                </div>
<!--                <br>  <center><button type="button" class="btn btn-outline btn-success"><i class="fa fa-file-pdf-o"></i>  Export</button></center>
                 /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" ><!--id="dataTables-example"-->
                            <thead>
                                <tr>
                                    <th>Ticket ID</th>
                                    <th>Cliente</th>
                                    <th>Raz&atilde;o</th>
                                    <th>Data do Solicita&ccedil;&atilde;o</th>
                                    <th>Data do Aloca&ccedil;&atilde;o</th>
                                    <th>Mais detalhes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $solesp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $se): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd gradeX">
                                    <td><?php echo e($se->id); ?></td>
                                    <td><?php echo e($se->nomeemp); ?></td>
                                    <td class="center">Rea&ccedil;&atilde;o do Tecnico</td>
                                    <td class="center"><?php echo e($se->dsolec); ?></td>
                                    <td class="center"><?php echo e($se->daloc ?? date('Y-m-d')); ?></td>
                                    <td class="center">
                                        <button type="button" class="btn btn-outline btn-primary"><i class="fa fa-list"></i>  Detail</button>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /#page-wrapper -->

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>