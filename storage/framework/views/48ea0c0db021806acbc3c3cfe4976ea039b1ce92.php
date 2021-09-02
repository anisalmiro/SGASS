<?php $__env->startSection('content'); ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h5 class="page-header"></h5>
        </div>




        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Alocar de T&eacute;cnico
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <?php echo Form::model($st,['route'=>['alocacao.store',$st->id],'method'=>'POST']); ?>

                                <?php echo e(csrf_field()); ?>

                                <fieldset hidden="true">


                                    <div class="form-group">
                                        <?php echo Form::label('Ticket ID'); ?>

                                        <?php echo Form::text('id',null,['class'=>'form-control', 'placeholder'=>'']); ?> 
                                    </div>

                                </fieldset>

                                <div class="form-group">

                                    <label>Nivel de Urgencia   </label>
                                    <p>

                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="Normal" checked>Normal
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="Urgente">Urgente
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="Baixo">Baixo
                                        </label>
                                </div>


                                <div class="form-group">
                                    <label>Nome do T&eacute;cnico</label>
                                    <select name="tecnico" class="form-control">
                                        <?php if($soltecn->count() > 0): ?>
                                        <?php $__currentLoopData = $soltecn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($role->id); ?>"><?php echo e($role->nameapelido); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                        No Record Found
                                        <?php endif; ?>  
                                    </select>
                                </div>

                                <div class="form-group">
                                    <?php echo Form::label('Nota:'); ?>

                                    <?php echo Form::textarea('descricao',null,['class'=>'form-control', 'placeholder'=>'Introduzir quantidade de entrada']); ?> 
                                </div>
                                <?php echo Form::submit('Alocar',['class' => 'btn btn-primary']); ?>

                                <!--<?php echo Form::submit('Actualisar',['class' => 'btn btn-primary']); ?>-->
                                <?php echo Form::close(); ?>


                            </div>
                            <!-- /.col-lg-6 (nested) -->
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


        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>