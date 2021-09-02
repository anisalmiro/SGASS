<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Guia de Entrega</title>
        <?php echo Html::style('css/bootstrap.min.css'); ?>

      <link href='../css/bootstrap.min.css' rel='stylesheet'>
      <link href='../css/bootstrap.css' rel='stylesheet'><!-- comment -->
      <link href='../css/bootstrap-social.css' rel='stylesheet'><!-- comment -->

      <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="container mt-5">
            <h2 class="text-center mb-3" center>Guia de Entrega</h2>

            <table class="table table-bordered mb-5" center>
                <thead>
                    <tr class="table-danger">
<!--                        <th scope="col">#</th>-->
                        <th scope="col">PartNumber</th>
                        <th scope="col">Quantidade</th
                        <th scope="col">Nome  do Requisitante</th>

                        <th scope="col">Data da Requisicao</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $listpecas ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                         <td center><?php echo e($data->partN); ?></td>
                         <td center><?php echo e($data->quantidade); ?></td>
                         <td center><?php echo e($data->nameapelido); ?></td>
                        <td center><?php echo e($data->created_at); ?></td>                
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

        </div>
        <h4 left>Tecnico</h4><h4 left>_____________________</h4><h4 right>Gestor de estoque</h4><h4 right>_____________________</h4><p><!-- comment -->
        
    </body>

</html>