<?php
/*Not sure if this actually makes it global but it squashes errors. Malcolm::NHS::06122013 */
function smarty_function_assign_global($params, &$smarty){
    $smarty->assign($params['var'], $params['value']);
   }
/*This was a function I grabbed off the net. Doesn't seem to work. Malcolm*/
/*function smarty_function_assign_global($params, &$smarty){
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
*/
