<?php


class Util {

    /**
     * Retorna el atriburo de un susuario de cruge
     * @autor Alex Yépez <ayepez@tradesystem.com.ec>
     * @param type $user_id
     * @param type $attr
     * @return type
     */
    public static function getUserAttr($user_id, $attr) {
        $user_model = Yii::app()->user->um->loadUserById($user_id);
        return $user_model ? $user_model->$attr : null;
    }

    /**
     * fucnion para el guardado de multiples registrsos
     * @author Alex Yepez <ayepez@tradesystem.com.ec>
     * @param type $inserValues
     * @param type $tableName
     * @return type
     */
    public static function saveBulk($inserValues, $tableName) {
        try {
            $builder = Yii::app()->db->getSchema()->getCommandBuilder();
            $comand = $builder->createMultipleInsertCommand($tableName, $inserValues);
            $countRow = $comand->execute();
            $lastRow = $builder->dbConnection->createCommand('SELECT max(id) FROM ' . $builder->dbConnection->quoteTableName($tableName))->queryScalar();
            $idNewRows = $builder->dbConnection->createCommand()
                    ->select("id")
                    ->from($tableName)
                    ->where("id > :ini and id <= :end", array(
                ':ini' => ((int) $lastRow - $countRow),
                ':end' => (int) $lastRow
            ));
            return $idNewRows->queryColumn();
        } catch (Exception $exc) {
            return array();
        }
    }
    
    
        /**
     

    public static function number_pad($number, $n) {
        return str_pad((int) $number, $n, "0", STR_PAD_LEFT);
    }

    /**
     * Retorna la lista de usuarios con el mismo rol
     * @author Alex Yepez <ayepez@tradesystem.com.ec>
     * @param type $Rol
     * @return array
     */
    public static function getUsersRol($Rol) {
        $command = Yii::app()->db->createCommand()
                ->select("cu.iduser as id,"
                        . "cu.username as nombre")
                ->from("cruge_authassignment ata")
                ->leftJoin('cruge_user cu', 'ata.userid = cu.iduser')
                ->Where("ata.itemname = :rol", array(':rol' => $Rol));
        return $command->queryAll();
    }

    /**
     * @author Miguel Alba <malba@tradesystem.com.ec>
     * @param type $rolUser
     * @param type $rolPermitido
     * @return boolean
     */
    public static function validarRol($rolUser, $rolPermitido) {

        $acceso = false;
        $cont = 0;
        foreach ($rolUser as $rol) {
            if (count($rolPermitido) == 1) {
                if ($rol['rol'] == $rolPermitido[0]) {
                    $acceso = true;
                    return $acceso;
                }
            } else {
                foreach ($rolPermitido as $rolP) {
                    if ($rol['rol'] == $rolP) {
                        $cont++;
                    }
                }
            }
        }
        if ($cont == count($rolPermitido)) {
            return true;
        }
        return $acceso;
    }

    /**
     * @author Alex Yepez <ayepez@tradesystem.com.ec>
     * @param type $user_id 'id del usuario'
     * @return string $rol
     */
    public static function getRolUser($user_id) {
        $consulta = Yii::app()->db->createCommand()
                ->select('as.itemname as rol')
                ->from('cruge_authassignment as')
                ->where('(as.userid =:userid)', array(':userid' => $user_id))
                ->queryAll();
        return $consulta;
    }

    /**
     * @author Alex Yepez <ayepez@tradesystem.com.ec>
     * Retorna el primer rol al cual el usuario esta asignado
     * @param type $user_id 'id del usuario'
     * @return string $rol
     */
    public static function getFirstRolUser($user_id) {
        $consulta = Yii::app()->db->createCommand()
                ->select('as.itemname')
                ->from('cruge_authassignment as')
                ->where('(as.userid =:userid)', array(':userid' => $user_id))
                ->andWhere('as.itemname != "" and as.itemname is not null')
                ->limit(1)
                ->queryScalar();
        return $consulta ? $consulta : null;
    }

    /**
     * @author Pablo Arciniega <parciniega@tradesystem.com.ec>
     * retona texto truncado en caso de que sea demasiado largo
     * @param string $texto
     * @param int $caracteresPermitidos
     * @return string
     */
    public static function Truncate($texto, $caracteresPermitidos) {
        if (strlen($texto) > $caracteresPermitidos) {
            $texto = substr($texto, 0, $caracteresPermitidos);
            $texto = $texto . '...';
        }
        return $texto;
    }

    /**
     * @author Alex Yepez <ayepez@tradesystem.com.ec>
     * @param array $elementos 
     * altera el valor en forma acendente desde 0 de una determinada columna
     * @return array $NewArray nuevo array con la columna 'id' con valores desde 0 a $elementos.length
     */
    public static function AlterIdAttrArray($elementos) {
        $NewArray = array();
        foreach ($elementos as $key => $value) {
            $value['id'] = ($key + 1) . '';
            array_push($NewArray, $value);
        }
        return $NewArray;
    }

    /**
     * 
     * @param matriz $arrayInicial
     * @param array $NewKeys las nuevas claves
     * @param array $val los nuevos valores
     * agraga las claves y valores a cara array de la matriz $arrayInicial
     * @return array $NewArray
     */
    public static function AddNewKeyArray($arrayInicial, $NewKeys, $val) {
        $NewArray = array();
        foreach ($arrayInicial as $key => $elemento) {
            for ($i = 0; $i < count($NewKeys); $i++) {

                if ($NewKeys[$i] == 'className') {
                    $elemento[$NewKeys[$i]] = $val[$i] . '_' . $elemento['id'];
                } else {
                    $elemento[$NewKeys[$i]] = $val[$i];
                }
            }
            array_push($NewArray, $elemento);
        }
        return $NewArray;
    }

    /**
     * @author Alex Yepez <ayepez@tradesystem.com.ec>
     * retona la fecha actual del sistema
     * @return string
     */
    public static function FechaActual() {
        $tz_object = new DateTimeZone('America/Guayaquil');
        $datetime = new DateTime();
        $datetime->setTimezone($tz_object);
        return $datetime->format('Y-m-d H:i:s');
    }

    /**
     * @author Alex Yepez <ayepez@tradesystem.com.ec>
     * @param type $fechaAt
     * @param type $tipo
     * @return string
     */
    public static function FormatDate($fechaAt, $tipo) {
        if ($fechaAt) {
            $date = str_replace('/', '-', $fechaAt);
            $fechaAt = date($tipo, strtotime($date));
            return $fechaAt;
        }
    }

    public static function nicetime($date) {
        if ($date) {
            $periods = array("segundo", "minuto", "hora", "día", "semana", "mes", "año");
            $lengths = array("60", "60", "24", "7", "4.35", "12");

            $now = time();

            $unix_date = strtotime($date);
//       
            // is it future date or past date
            if ($now > $unix_date) {
                $difference = $now - $unix_date;
                $tense = "hace";
            } else {
                $difference = $unix_date - $now;
                $tense = "dentro de";
            }

            for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
                $difference /= $lengths[$j];
            }

            $difference = round($difference);

            if ($difference != 1) {
                if ($j == 5)
                    $periods[$j].= "es";
                else
                    $periods[$j].= "s";
            }

            return "{$tense} $difference $periods[$j]";
        }
    }

    public static function nicetimeColor($date) {
        if ($date) {
            $now = time();
            $unix_date = strtotime($date);

            // is it future date or past date
            if ($now > $unix_date) {
                return "label-important";
            } else if (($unix_date - $now) == 86400) {
                return "label-warning";
            } else {
                return "label-success";
            }
        }
    }

    /**
     * Revisa si el usuario tiene acceso dependiendo de las operaciones que se envien
     * @author Santiago Benítez
     * @param array $operations
     * @return boolean resultado
     */
    public static function checkAccess($operations) {
        if (is_array($operations)) {
            foreach ($operations as $operation) {
                if (Yii::app()->user->checkAccess($operation)) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Register a specific js file in the asset's js folder
     * @param string $jsFile
     * @param int $position the position of the JavaScript code.
     * @see CClientScript::registerScriptFile
     */
    public static function tsRegisterAssetJs($jsFile, $position = CClientScript::POS_END) {
        $assetsPath = Yii::getPathOfAlias(YiiBase::app()->getController()->getModule()->getId() . '.assets');
        $assetsUrl = Yii::app()->assetManager->publish($assetsPath, false, -1, true);
        Yii::app()->getClientScript()->registerScriptFile($assetsUrl . "/js/" . YiiBase::app()->getController()->getId() . "/" . $jsFile, $position);
    }

    public static function tsRegisterAssetCss($jsFile) {
        $assetsPath = Yii::getPathOfAlias(YiiBase::app()->getController()->getModule()->getId() . '.assets');
        $assetsUrl = Yii::app()->assetManager->publish($assetsPath, false, -1, true);
        Yii::app()->getClientScript()->registerCssFile($assetsUrl . '/css/' . YiiBase::app()->getController()->getId() . "/" . $jsFile);
    }

    /**
     * Al buscar cliente/proveedor/distribuidor, me retorn ael id de la columna seleccionada
     * @param type $button
     * @param type $data
     * @return type
     * @author Ivan Naranjo <inaranjo@tradesystem.com.ec>
     */
    public static function getGridViewId($options, $data) {
        foreach ($options as &$option) {
            if (strpos($option, '$data->') !== false) {
                $propiedad = str_replace('$data->', '', $option);
                $option = $data->$propiedad;
            }
        }
        return $options;
    }

    /**
     * // regresa la cadena sin subguiones("_"), y los convierte en espacios, ademas de poner letra capital
     * @param type $nomre
     * @author Ivan Naranjo <inaranjo@tradesystem.com.ec>
     */
    public static function setName($nombre) {
        $nombre = str_replace('_', " ", $nombre);
        return ucwords(strtolower($nombre)); //retorna la primera letra de cada palabra en mayusculas
    }

  
    /**
     * Transforma un arreglo de objetos ActiveRecord para que se desplieguen en un select de HTML
     * @author Santiago Benítez
     * @param type $arrayOptions
     * @return String $options
     */
    public static function toSelectOptions($arrayOptions) {
        $options = array("" => " - Seleccione - ") + CHtml::listData($arrayOptions, 'id', TipificacionIncidencia::representingColumn());
        $htmlOptions = "";
        foreach ($options as $key => $option) {
            $htmlOptions .= '<option value="' . $key . '">' . $option . '</option>';
        }
        return $htmlOptions;
    }

    /**
     * Traduce la fecha actual a español
     * @author  Santiago Benítez
     * @return type
     */
    public static function traducirFechaActual() {
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        return date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
    }

    public static function quitarScripts() {
        Yii::app()->clientScript->scriptMap['*.js'] = false;
        Yii::app()->clientScript->scriptMap['*.css'] = false;
    }

    public static function obtenerMeses() {
        return array(
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre');
    }

    public static function obtenerMesesCortos() {
        return array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');
    }

    public static function obtenerDias() {
        return array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sabado');
    }

    public static function obtenerDiasCortos() {
        return array('Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab');
    }

    public static function obtenerBotonesCalendario() {
        return array(
            'today' => 'hoy',
            'month' => 'mes',
            'week' => 'semana',
            'day' => 'día'
        );
    }

    public static function obtenerColumnasCalendario() {
        return array(
            'week' => 'ddd d',
            'day' => 'dddd',
        );
    }

    public static function obtenerTitulosCalendario() {
        return array(
            'month' => "MMMM yyyy",
            'week' => "MMMM d[, yyyy]{ '-'[ MMMM] d, yyyy}",
            'day' => "dddd d 'de' MMMM, yyyy",
        );
    }

    public static function FormatDateGamil($date) {
        if ($date) {
            $datetime = new DateTime($date);
            $date = $datetime->format('Y-m-d H:i:s');
            $now = time();
            $unix_date = strtotime($date);
            if (($now - $unix_date) <= 86400) {
                return $datetime->format('H:i');
            } else {
                $year = $datetime->format('Y');
                if ($year < date('Y')) { //anio pasado
                    return $datetime->format('d/m/y');
                } else {//anio actual
                    $months = array('ene.', 'feb.', 'mar.', 'abr.', 'may.', 'jun.', 'jul.', 'ago.', 'sep.', 'oct.', 'nov.', 'dic.');
                    $day = (int) $datetime->format('d');
                    $month = $datetime->format('m');
                    $month = $months[$month - 1];
                    return "{$day} de {$month}";
                }
            }
        }
    }

    public static function obtenerPrimerDiaMes() {
        $fecha = new DateTime();

        $fecha->modify('first day of this month');

        $dia = date_format($fecha, 'd');
        return $dia;
    }

    public static function obtenerUltimoDiaMes() {
        $fecha = new DateTime();
        $fecha->modify('last day of this month');
        $fecha->format("Y-m-d");
        $dia = date_format($fecha, 'd');
        return $dia;
    }

    public static function calcularMesAnterior($var = null) {
        $fecha = new DateTime();
        $fecha->modify("-1 month");
        $var == 0 ? $fecha->modify('first day of this month') : $fecha->modify('last day of this month');
        $fecha = date_format($fecha, 'Y-m-d');
        return $fecha;
    }

    public static function calcularSemanaAnterior($var = null) {

        $fecha = new DateTime();
        $fecha->modify("-1 week");
        $dia = DATE_FORMAT($fecha, 'D');
        if ($var == '0') {
            if ($dia == 'Mon') {
                $fecha->modify('monday');
            } else {
                $fecha->modify(' last monday');
            }
        } else {
            $fecha->modify('sunday');
        }


        return date_format($fecha, 'Y-m-d');
    }

    public static function generarColores() {

        $colores = array("rgb(116,183,73)", "rgb(274,70,74)", "rgb(70,191,189)",
            "rgb(253,180,92)", "rgb(77,83,96)", "rgb(70,136,71)", "rgb(78,138,199)",
            "rgb(119,128,138)", "rgb(243,123,83)", "rgb(13,174,211)", "rgb(148,159,167)", "rgb(139,20,15)", "rgb(222,87,123)");
        shuffle($colores);

        return $colores;
    }

  

    /**
     * Debe ser declarada en php <= 5.4+
     * Esta función lo que hace es sacar la columna deseada de un a array asociativo
     * @autor Armando Maldonado <amaldonado@tradesystem.com.ec>
     * @param {array compuesto de preferencia} $array 
     * @param {int o string} $nombre_columna
     * @return array
     */
    public static function array_column($array, $nombre_columna) {
        $resultado = array();
        if (!is_array($array))
            return $resultado;
        foreach ($array as $hijos) {
            if (!is_array($hijos))
                continue;
            if (array_key_exists($nombre_columna, $hijos)) {
                $resultado[] = $hijos[$nombre_columna];
            }
        }
        return $resultado;
    }

    public static function traducirMesActual() {
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        return $meses[date('n') - 1];
    }
    
    
    public static function retornarMestraduciso($n) {
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        return $meses[$n - 1];
    }

}
?>
