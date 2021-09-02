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
                            Registo de Modelo
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <?php echo Form::open(['route'=>'modelo.store', 'method'=>'POST']); ?>

                                        <?php echo e(csrf_field()); ?>

                                         <div class="form-group">
                                                <label for="enabledSelect">Marca</label>      
                                                        <select class="form-control m-bot15" name="marc">
                                                          <?php if($marca->count() > 0): ?>
                                                          <?php $__currentLoopData = $marca; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                              <option value="<?php echo e($role->id); ?>"><?php echo e($role->nome); ?></option>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                          <?php else: ?>
                                                            No Record Found
                                                          <?php endif; ?>   
                                                  </select>
                                        </div>
                                        
                                         <div class="form-group">
                                               <?php echo Form::label('Modelo:'); ?>

                                            <?php echo Form::text('nome',null,['class'=>'form-control', 'placeholder'=>'Introduzir Marca']); ?> 
                                         </div>
                                         
                                        <?php echo Form::submit('Registar',['class' => 'btn btn-primary']); ?>

                                   
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


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>