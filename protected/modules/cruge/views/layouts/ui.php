<?php
/*
  aqui: $this->beginContent('//layouts/main'); indica que este layout se amolda
  al layout que se haya definido para todo el sistema, y dentro de el colocara
  su propio layout para amoldar a un CPortlet.

  esto es para asegurar que el sistema disponga de un portlet,
  esto es casi lo mismo que haber puesto en UiController::layout = '//layouts/column2'
  a diferencia que aqui se indica el uso de un archivo CSS para estilos predefinidos

  Yii::app()->layout asegura que estemos insertando este contenido en el layout que
  se ha definido para el sistema principal.
 */
?>
<?php
$this->beginContent('//layouts/column2');
?>
<aside class="right-side">

    <section class="content-header">
        <h1 class="header-title">
              <!--<small>-->
            <i class="fa fa-users"></i>  USUARIOS<!--            <div class="icon">
                
             </div>-->
            <!--</small>-->
        </h1>
        <a class="btn btn-success actionMenuAdmin" href="<?php echo Yii::app()->createUrl('cruge/ui/usermanagementcreate') ?>"><i
                class="fa fa-plus"></i>&nbsp; Crear 
        </a>
    </section>
    <div class="col-lg-12 col-sm-12">
        <br>
        <div id="flashMsg"  class="flash-messages">

        </div> 
        <?php
        if (Yii::app()->user->isSuperAdmin) {
            echo Yii::app()->user->ui->superAdminNote();
        }
        ?>

        <div class="top-controlls">
            <?php foreach (Yii::app()->user->ui->tradeAdminItems as $menu) : ?>
                <?php
                $this->widget(
                        'booster.widgets.TbButtonGroup', array(
                    'buttons' => array($menu),
                        )
                );
                ?>
            <?php endforeach; ?>
        </div>

        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
        <?php if (Yii::app()->user->checkAccess('admin')) { ?>	
        <?php } ?>

        <?php $this->endContent(); ?>
    </div>

</aside>
