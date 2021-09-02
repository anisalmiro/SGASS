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
                    Registo de Avaria
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php echo Form::open(['route'=>'avaria.store', 'method'=>'POST']); ?>

                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <?php echo Form::label('Sec&ccedil;&aacute;o:'); ?>

                                <?php echo Form::text('tipo',null,['class'=>'form-control', 'placeholder'=>'Tipo de avaria']); ?> 
                            </div>

                            <div class="form-group">
                                <?php echo Form::label('Descri&ccedil;&atilde;o:'); ?>

                                <?php echo Form::textarea('descricao',null,['class'=>'form-control','rows'=>'3' , 'placeholder'=>'Descri&ccedil;&atilde; da Av&aacute;ria']); ?> 
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