<?php
function smarty_function_in_array($params, &$smarty){

    if(isset($params['val']) && in_array($params['val'], $params['arr']))
    {
        $smarty->assign('ret','y');
    }

    /*if (!isset($params['scope'])) {
        $params['scope']='DEFAULT';
    }
    if(isset($params['value'])){
        $smarty->global_scope[$params['scope']][$params['var']] = $params['value'];
        return;
    }
    else{
        if(isset($params['assign'])){
            $smarty->assign($params['assign'],$smarty->global_scope[$params['scope']][$params['var']]);
            return;
        }
        else{
            return $smarty->global_scope[$params['scope']][$params['var']];
        }
    }*/
}
?>
