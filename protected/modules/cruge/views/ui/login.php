
<?php if (Yii::app()->user->hasFlash('loginflash')): ?>
    <div class="alert alert-error">
        <?php echo Yii::app()->user->getFlash('loginflash'); ?>
    </div>
<?php else: ?>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'logon-form',
        'enableClientValidation' => false,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>   
    <div class="body bg-gray">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <?php echo $form->textField($model, 'username', array('placeholder' => CrugeTranslator::t('logon', 'Username'), 'class' => 'form-control')); ?>
        </div>
        <?php echo $form->error($model, 'username'); ?>
        <br />
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <?php echo $form->passwordField($model, 'password', array('placeholder' => Yii::t('app', CrugeTranslator::t('logon', "Password")), 'class' => 'form-control')); ?>
    </div>
    <?php echo $form->error($model, 'password'); ?>

    <div class="form-group">
        <label>
            <?php echo $form->checkBox($model, 'rememberMe'); ?> Recordarme más tarde
        </label>    
    </div>
                </div>
  <div class="footer">     
    <input class="btn bg-olive btn-block" type="submit" value="<?php echo CrugeTranslator::t('logon', "Login") ?>">
  </div>
    <?php $this->endWidget(); ?>
<?php endif; ?>
