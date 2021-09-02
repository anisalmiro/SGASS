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
                            Registo do Equipamento
                        </div>
                        <div class="panel-body">
                            <div class="row">



                <div class="col-lg-12">
                    <h1 class="page-header">Equipamentos Registados</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Maquinas Alocadas
                        </div>

                                
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Provincia</th>
                                        <th>Cliente</th>
                                        <th>Modelo da Maquina</th>
                                        <th>Numero de Serie</th>
                                        <th>Estado</th>
                                        <th>Op&ccedil;&otilde;es</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td class="center">#</td>
                                        <td class="center">#</td>
                                        <td>
                                              <?php echo link_to_route('equipamento.edit',$title='Update',$attributes=['class'=>'btn btn-info btn-circle btn-lg']); ?>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->

                                <div class="col-lg-6">
                                      <?php echo Form::open(['route'=>'equipamento.store', 'method'=>'POST']); ?>

                                        <?php echo e(csrf_field()); ?>

                                         <div class="form-group">
                                                <label for="enabledSelect">Modelo</label>      
                                                        <select class="form-control m-bot15" name="modelo_id">
                                                          <?php if($modelo->count() > 0): ?>
                                                          <?php $__currentLoopData = $modelo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                              <option value="<?php echo e($role->id); ?>"><?php echo e($role->nome); ?></option>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                          <?php else: ?>
                                                            No Record Found
                                                          <?php endif; ?>   
                                                  </select>
                                        </div>
                                        
                                         <div class="form-group">
                                               <?php echo Form::label('N&uacute;mero de S&eacute;rie:'); ?>

                                            <?php echo Form::text('nr_serie',null,['class'=>'form-control', 'placeholder'=>'Introduzir Nr Serie']); ?> 
                                         
                                         </div>
                                                                                  <div class="form-group">
                                                <label for="enabledSelect">Cliente</label>      
                                                        <select class="form-control m-bot15" name="cliente_id">
                                                          <?php if($ls_clientes->count() > 0): ?>
                                                          <?php $__currentLoopData = $ls_clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                              <option value="<?php echo e($role->id); ?>"><?php echo e($role->nomeemp); ?></option>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                          <?php else: ?>
                                                            No Record Found
                                                          <?php endif; ?>   
                                                  </select>
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