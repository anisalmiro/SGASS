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
                        Emiss&atilde;o do Parecer da Av&agrave;ria
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php echo Form::model($st,['route'=>['obs_tecn.store',$st->id],'method'=>'POST']); ?>

                                <?php echo csrf_field(); ?>

                                <div class="col-lg-6"> 

                                    <fieldset hidden="true">
                                        <div class="form-group">
                                            <?php echo Form::label('Id:'); ?> <p>
                                                <?php echo Form::text('id',null,['class'=>'form-control', 'placeholder'=>'ID']); ?> 
                                        </div>
                                    </fieldset>
                                    <div class="form-group">
                                        <label for="enabledSelect">T&eacute;cnico</label>      
                                        <select class="form-control m-bot15" name="usuarioSys">
                                            <option value="<?php echo e(Auth::user()->id); ?>"><?php echo e(Auth::user()->nameapelido); ?></option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group">
                                            <p>
                                                <label>Sec&ccedil;&atilde;o Reparada</label>
                                                <select class="form-control" name="av_reparacao">
                                                    <option>Selecionar Avaria </option>
                                                    <option>Document Feeder</option>
                                                    <option>Image unit</option>
                                                    <option>Drive Section</option>
                                                    <option>Optical Unit</option>
                                                    <option>Transport Section</option>
                                                    <option>Electrical</option>
                                                    <option>Tray</option>
                                                </select>
                                        </div>

                                    </div>
                                    <!-- /.table-responsive -->

                                </div>

                                <div class="col-lg-12 form-group" >  

                                    <div class="form-group col-md-6">
                                        <?php echo Form::label('Av&aacute;ria:'); ?>

                                        <?php echo Form::textarea('descricao',null,['class'=>'form-control', 'placeholder'=>'Introduzir quantidade de entrada']); ?> 
                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php echo Form::label('Solu&ccedil;&atilde;o:'); ?>

                                        <?php echo Form::textarea('descsolucao',null,['class'=>'form-control', 'placeholder'=>'Introduzir quantidade de entrada']); ?> 
                                    </div>
                                </div>

                                
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="save" class="btn btn-default fa fa-save btn-lg"></button>
<!--                                <button type="update" class="btn btn-default fa fa-folder-open btn-lg"></button>-->
                                <!--<button type="email" class="btn btn-default fa fa-envelope-o btn-lg"></button>-->
                            </div>


                            <?php echo Form::close(); ?>


                        </div>
                        <!-- /.row (nested) -->

                    </div>
                    <!-- /.row -->


                    <?php echo $__env->make('formularios.form_modal_table_updt', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php $__env->stopSection(); ?>


                    <?php $__env->startSection('js'); ?>

                    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>