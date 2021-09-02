<div class="modal fade" id="modal-addline">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Selecionar Pe&ccedil;a | Consumivel
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label for="enabledSelect">Iten</label>      
                                        <select onchange="filter(this.value)" class="form-control m-bot15" name="stk_partNN" id="stk_partN">
                                            <?php $__currentLoopData = $stoc_actual; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($st->partN); ?>"><?php echo e($st->partN.'|'.$st->descricao); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <?php echo Form::label('Quantidade:'); ?>

                                        <input type="text"  id="stk_quant" class="form-control" value="0" onkeyup="subtotall()">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-info" onClick="addLines();" data-dismiss="modal">Adicionar</button>
                                    </div> 
                                </div>
                                <!--/.col-lg-6 (nested)--> 
                            </div>
                            <!--/.row (nested)--> 
                        </div>
                        <!--/.panel-body--> 
                    </div>
                    <!--/.panel--> 
                </div>
                <!--/.col-lg-12--> 
            </div>

        </div>	

    </div>
    <!-- /.modal-content -->
</div>
