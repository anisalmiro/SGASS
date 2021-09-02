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
            <div class="panel panel-default">
                <div class="panel-heading">
                    Fluxo de Actividade
                </div>
                <!-- .panel-heading -->
                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading dark-overlay">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Empresas Registadas</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table width="100%" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr class="success">
                                                    <th>#</th>
                                                    <th>Nome do Cliente</th>
                                                    <th>Tipo</th>
                                                    <th>e-mail</th>
                                                    <th>Nuit</th>
                                                    <th>Provincia</th>
                                                    <th>Distrito</th>
                                                    <th>Bairro</th>
                                                    <th>Avenida</th>
                                                </tr>
                                            </thead>
                                            <?php $__currentLoopData = $ls_clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cli): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td><?php echo e($cli->id); ?></td>
                                                    <td><?php echo e($cli->nomeemp); ?></td>
                                                    <td><?php echo e($cli->tipo); ?></td>
                                                    <td><?php echo e($cli->email); ?></td>
                                                    <td><?php echo e($cli->nuit); ?></td>
                                                    <td><?php echo e($cli->nomepv); ?></td>
                                                    <td><?php echo e($cli->nomedt); ?></td>
                                                    <td><?php echo e($cli->bairro); ?></td>
                                                    <td><?php echo e($cli->avenida); ?></td>

                                                </tr>
                                            </tbody>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </table>
                                        <?php echo $ls_clientes->render(); ?>

                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Registo de Empresa</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">


                                <!-- /.col-lg-6 (nested) -->

                                <div class="col-lg-6">
                                    <?php echo Form::open(['route'=>'cliente.store', 'method'=>'POST']); ?>

                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-group"></div>
                                    <div class="form-group">
                                        <label for="enabledSelect">Tipo de Cliente</label>      
                                        <select class="form-control m-bot15" name="tipo">
                                            <option value="">Selecionar Categoria</option> 
                                            <option value="CPP">CPP</option> 
                                            <option value="CASH">CASH</option> 
                                            <option value="RENTAL">RENTAL</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <?php echo Form::label('Nome da Empresa:'); ?>

                                        <?php echo Form::text('nomeemp',null,['class'=>'form-control', 'placeholder'=>'Introduzir Nome da Empresa']); ?> 
                                    </div>

                                    <div class="form-group">
                                        <?php echo Form::label('E-mail:'); ?>

                                        <?php echo Form::email('email',null,['class'=>'form-control', 'placeholder'=>'nome@emp.co.mz']); ?> 
                                    </div>

                                    <div class="form-group">
                                        <?php echo Form::label('Nuit:'); ?>

                                        <?php echo Form::text('nuit',null,['class'=>'form-control', 'placeholder'=>'Introduzir Nuit']); ?> 
                                    </div>

                                    <div class="form-group">
                                        <?php echo Form::label('Nr de Tel:'); ?>

                                        <?php echo Form::text('tell',null,['class'=>'form-control', 'placeholder'=>'Introduzir nr Telefone']); ?> 
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
                                        <?php echo Form::label('Bairro:'); ?>

                                        <?php echo Form::text('bairro',null,['class'=>'form-control', 'placeholder'=>'Introduzir Bairro']); ?> 
                                    </div>

                                    <div class="form-group">
                                        <?php echo Form::label('Avenida:'); ?>

                                        <?php echo Form::text('avenida',null,['class'=>'form-control', 'placeholder'=>'Introduzir avenida']); ?> 
                                    </div>


                                    <?php echo Form::submit('Registar',['class' => 'btn btn-primary']); ?>


                                    <?php echo Form::close(); ?>



                                </div>
                                <!-- /.col-lg-6 (nested) -->

                                <!-- /.panel-body -->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- .panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>