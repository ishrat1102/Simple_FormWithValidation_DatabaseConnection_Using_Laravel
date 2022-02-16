<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>FORM</title>
    <style>
        h1 {
            color: orange;
        }

        fieldset {
            width: 80%;
            background-color: floralwhite;
        }

        legend {
            background-color: salmon;
            color: white;
            width: 120px;
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 3px;
            padding-bottom: 3px;
        }

        table#t1,
        td,
        th {
            padding-top: 3px;
            padding-bottom: 3px;
        }
    </style>
</head>

<body>
    <h1><i>FORM DEMO</i></h1>
    <div class=container>
        <form action="<?php echo e(url('/')); ?>/register" method="post">
            <?php echo csrf_field(); ?>

            <fieldset>
                <legend>Fill up</legend>
                <table id="t1">
                    <tr>
                        <td><label class="form-label" for="name">NAME:</label></td>
                        <td>
                            <input class="form-control" type="textbox" name="name" placeholder="name" size="20" value="<?php echo e(old('name')); ?>"></input>
                            <span class='text-danger'>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                        </td>

                    </tr>

                    <tr>
                        <td><label class="form-label" for="phone">PHONE:</label>
                        </td>
                        <td>
                            <input class="form-control" type="textbox" name="phone" placeholder="phone" size="11" value="<?php echo e(old('phone')); ?>"></input>
                            <span class='text-danger'>
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                        </td>

                    </tr>
                    <tr>
                        <td><label class="form-label" for="email">EMAIL:</label>
                        </td>
                        <td>
                            <input class="form-control" placeholder="email" name="email" value="<?php echo e(old('email')); ?>"></input>
                            <span class='text-danger'>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                        </td>

                    </tr>
                    <tr>
                        <td><label class="form-label" for="birthdate">birthday:
                            </label></td>
                        <td>

                            <input class="form-control" type="date" name="bdate" placeholder="date" value="<?php echo e(old('bdate')); ?>"></input>
                            <span class='text-danger'>
                                <?php $__errorArgs = ['bdate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                        </td>

                    </tr>

                    <tr>
                        <td><label class="form-label" for="password">PASSWORD:</label>
                        </td>
                        <td>
                            <input class="form-control" type="password" name="password" placeholder="password" size="8"></input>

                            <span class='text-danger'>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label" for="cpass">COMFIRM PASSWORD:</label>
                        </td>
                        <td>
                            <input class="form-control" type="password" name="cpass" placeholder="confirm password" size="8"></input>

                            <span class='text-danger'>
                                <?php $__errorArgs = ['cpass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="nationality">NATIONALITY:</label>
                        </td>

                        <td>BANGLADESHI <input class="form-check-input" type="checkbox" name="bangladeshi"> </input></td>

                        <td>
                            TURKISH <input class="form-check-input" type="checkbox" name="turkish"></input>
                        </td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="gender">GENDER:</label>
                        </td>

                        <td> MALE <input class="form-check-input" type="radio" name="male"></input></td>

                        <td>FEMALE <input class="form-check-input" type="radio" name="female"></input></td>
                    </tr>

                    <tr>
                        <td><label class="form-label" for="hobby">HOBBY:</label>
                        </td>
                        <td>
                            <select class="form-select" name="hobby" size="1" multiple>
                                <option value=" reading">READING</option>
                                <option value=" netflix">NETFLIX</option>
                                <option value="cooking " selected>COOKING</option>
                                <option value=" drawing">DRAWING</option>
                            </select>
                        </td>
                    </tr>
                </table id="t2">
            </fieldset>
    </div>
    <div class="container my-2">
        <table width="20%">
            <tr>
                <td><input class="btn btn-success" type="submit" name="submit"></input>
                    <input class="btn btn-danger" type="reset" name="reset"></input>
                </td>
            </tr>
            <tr>
                <td>&nbsp
            </tr>
            </td>
        </table>
    </div>
    </form>

</body>

</html><?php /**PATH B:\xam\htdocs\testproject\resources\views/TestForm.blade.php ENDPATH**/ ?>