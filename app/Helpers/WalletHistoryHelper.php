<?php

namespace App\Helpers;

use App\WalletHistory;

class WalletHistoryHelper {

     //this is used to debit uses account wallet
     public static function debit($user,$amount = 0, $user_type = 'seller',$slug ='withdraw',$note = 'Money has been transfered'){
        
        $update = $user->wallet -= $amount;
        $user->save();
        if($update){
        WalletHistory::create([
            'user_id'=> $user->id,
            'user_type'=>$user_type,
            'amount'    => $amount,
            'type'  =>  1,
            'slug'  => $slug,
            'note'  => $note
            ]);
        }
        
        return $update;  
          
    }
    //its used credit to user's wallet
    //$user is the user object to be credited
    //user_type specifies the type of user example is 'seller'
    //slug specifies why the payment is made
    
    public static function credit($user,$amount = 0, $user_type = 'seller',$slug ='withdraw',$note = 'Money has been transfered'){
        
    
        $update = $user->wallet += $amount;
        $user->save();
        if($update){
        WalletHistory::create([
            'user_id'=> $user->id,
            'user_type'=>$user_type,
            'amount'    => $amount,
            'type'  =>  1,
            'slug'  => $slug,
            'note'  => $note
            ]);
        }      
          return $update;  
          
    }
}
?>