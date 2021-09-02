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
                    Stock Disponivel
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <form>
                            <table class="display nowrap" style="width:100%" id="historico_mov">
                                <thead>
                                    <tr>
                                        <th>Tipo de Iten</th>
                                        <th>Descri&ccedil;&aacute;o</th>
                                        <th>Part Number</th>
                                        <th>Cor</th>
                                        <th>Movimento</th>
                                        <th>Entradas</th>
                                        <th>Saidas</th>
                                        <th>Data do Movimento</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $stock_sl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="success">
                                        <td><?php echo e($st->tipo); ?></td>
                                        <td><?php echo e($st->descricao); ?></td>
                                        <td><?php echo e($st->partN); ?></td>
                                        <td><?php echo e($st->cor); ?></td>
                                        <td><?php echo e($st->estado); ?></td>
                                        <td><?php echo e($st->entrada); ?></td>
                                        <td><?php echo e($st->saida); ?></td>
                                        <td><?php echo e($st->created_at); ?></td>
                                        <td>

                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>


                            </table>
                        </form>

                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    <!-- /.row -->


</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function () {
        var table = $('#historico_mov').DataTable({
            "scrollY": "200px",
            "paging": false
        });

    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>