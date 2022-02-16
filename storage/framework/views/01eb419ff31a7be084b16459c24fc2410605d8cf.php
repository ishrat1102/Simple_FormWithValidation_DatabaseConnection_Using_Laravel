<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        welcome,<?php echo e($name ?? "Guest"); ?>

    </h1>
    <?php echo $demo; ?>

    <?php if($name != ""): ?>
    <?php echo e("name not empty"); ?>

    <?php else: ?>
    <?php echo e("empty"); ?>

    <?php endif; ?>
    <br>
    <?php if (! ($name == "mil")): ?>
    name is not mil
    <?php endif; ?>
    <br>
    <?php if(isset($name)): ?>
    name is set <?php echo e($name); ?>

    <?php endif; ?>
    <br>
    <div class="container">
        <h5>print forloop</h5>
        <?php for($i=1;$i< 10; $i++): ?> <p> <?php echo e($i); ?></p>
            <?php endfor; ?>
    </div>
    <div class="container">
        <h5>print whileloop</h5>
        <?php $i=11; ?>
        <?php while($i< 20): ?> <p> <?php echo e($i); ?></p>
            <?php $i++; ?>
            <?php endwhile; ?>
    </div>
    <div class="container">
        <h5>print foreach loop</h5>
        <?php $arr=['a','b','c']; ?>
        <select>
            <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <option value="<?php echo e($key); ?>"> <?php echo e($i); ?></option>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <h5>break continue </h5>
    <?php for($j=1;$j<= 10; $j++): ?>
        <?php if($j==5): ?> 
            <?php continue; ?>
        <?php elseif($j==7): ?> 
            <?php break; ?>
        <?php endif; ?> 
            <?php echo e($j); ?> 
    <?php endfor; ?> 
</body>

</html><?php /**PATH B:\xam\htdocs\testproject\resources\views/learnB.blade.php ENDPATH**/ ?>