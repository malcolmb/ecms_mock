<?php
function smarty_function_assign_global($params, &$smarty){ 
   if (!isset($params['scope'])) { 
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
      } 
   } 
?>
