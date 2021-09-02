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
                        Adicionar stock
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <?php echo Form::open(['route'=>'stock_movimento.store', 'method'=>'POST']); ?>

                                <?php echo e(csrf_field()); ?>


                                <div class="form-group">
                                    <label for="enabledSelect">PartNumber</label>      
                                                                             
                                    <select class="form-control m-bot15" name="id_iten">
                                        <?php if($sl_partN->count() > 0): ?>
                                        <?php $__currentLoopData = $sl_partN; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($role->id); ?>"><?php echo e($role->partN); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                        No Record Found
                                        <?php endif; ?>   
                                                  </select>
                                </div>


                                <div class="form-group">
                                    <label for="enabledSelect">Usuario</label>      
                                    <select class="form-control m-bot15" name="usuarioSys">
                                        <option value="<?php echo e(Auth::user()->id); ?>"><?php echo e(Auth::user()->nameapelido); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="form-group">
                                        <?php echo Form::label('Numero de DU'); ?>

                                        <?php echo Form::text('anumeroDu',null,['class'=>'form-control', 'placeholder'=>'Numero de DU']); ?> 
                                    </div>
                                    <div>
                                        <?php echo Form::label('Quantidade:'); ?>

                                        <?php echo Form::text('quant',null,['class'=>'form-control', 'placeholder'=>'Introduzir quantidade de entrada']); ?> 
                                    </div>
                                    <br>
                                    <?php echo Form::submit('Actualisar',['class' => 'btn btn-primary']); ?>

                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                 <?php echo Form::close(); ?>

                            </div   >
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

            <?php $__env->startSection('js'); ?>
            <script>
                $(function () {
                    $('#partN').autocomplete({
                        source: function (request, response) {

                            $.getJSON('?term=' + request.term, function (data) {
                                var array = $.map(data, function (row) {
                                    return {
                                        value: row.id,
                                        label: row.partN,
                                        name: row.partN,
                                        id: row.id,
                                        partN: row.partN
                                    }
                                })

                                response($.ui.autocomplete.filter(array, request.term));
                            })
                        },
                        minLength: 1,
                        delay: 500,
                        select: function (event, ui) {
                            $('#partN').val(ui.item.name)
                            $('#id').val(ui.item.buy_rate)
                            $('#tipoiten').val(ui.item.sale_price)
                        }
                    })
                })


            </script>
            <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>