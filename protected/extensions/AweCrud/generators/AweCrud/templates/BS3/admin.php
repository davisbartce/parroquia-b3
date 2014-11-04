<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
/** @var AweCrudCode $this */
?>
<?php echo "<?php\n" ?>
/** @var <?php echo $this->controllerClass; ?> $this */
/** @var <?php echo $this->modelClass; ?> $model */
<?php
$label = $this->pluralize($this->class2name($this->modelClass));
?>
$this->menu = array(
array('label' => Yii::t('AweCrud.app', 'Create'), 'icon' => 'plus', 'url' => array('create'), 
//'visible' => (Util::checkAccess(array('action_incidenciaPrioridad_create')))
),
);
?>
<aside class="right-side">
    <section class="content-header">
        <h1>
            <!--<small>-->
           <i class="fa fa-user"></i>  <?php echo $this->modelClass; ?>
<!--            <div class="icon">
               
            </div>-->
            <!--</small>-->
        </h1>
    </section>

    <div class="col-lg-12 col-sm-12">
        <br>
        <div id="flashMsg"  class="flash-messages">

        </div> 

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo "<?php echo 'Administrar' . ' ' . {$this->modelClass}::label(2); ?>" ?></h3>
            </div>
            <div class="panel-body">

                <?php echo "    <?php"; ?> 
                $this->widget('booster.widgets.TbGridView',array(
                'id' => '<?php echo $this->class2id($this->modelClass); ?>-grid',
                'type' => 'striped bordered hover advance',
                'dataProvider' => $model->search(),
                'columns' => array(
                <?php
                $count = 0;
                foreach ($this->tableSchema->columns as $column) {
                    if ($column->isPrimaryKey || in_array($column->name, $this->descriptionFields)) {
                        continue;
                    }
                    if (++$count == 7):
                        ?>
                        /*<?php echo "\n" ?>
                    <?php endif; ?>
                    <?php echo $this->generateGridViewColumn($this->modelClass, $column) . ",\n" ?>
                    <?php
                }
                if ($count >= 7):
                    ?>
                    */<?php echo "\n" ?>
                <?php endif; ?>
                array(
                'class' => 'CButtonColumn',
                'template' => '{update} {delete}',
                'afterDelete' => 'function(link,success,data){ 
                if(success) {
                $("#flashMsg").empty();
                $("#flashMsg").css("display","");
                $("#flashMsg").html(data).animate({opacity: 1.0}, 5500).fadeOut("slow");
                }
                }',
                'buttons' => array(
                'update' => array(
                'label' => '<button class="btn btn-primary"><i class="icon-pencil"></i></button>',
                'options' => array('title' => 'Actualizar'),
                'imageUrl' => false,
                //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_update"))'
                ),
                'delete' => array(
                'label' => '<button class="btn btn-danger"><i class="icon-trash"></i></button>',
                'options' => array('title' => 'Eliminar'),
                'imageUrl' => false,
                //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_delete"))'
                ),
                ),
                'htmlOptions' => array(
                'width' => '80px'
                )
                ),
                ),
                )); ?>
            </div>
        </div>
    </div>

</aside>