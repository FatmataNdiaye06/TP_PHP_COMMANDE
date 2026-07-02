<?php
function obligatoire(string $value,array &$errors,string $errorMessageObligatoire, string $champName="libele"):void{
   if(empty($value)){
        $errors[$champName]['required'] = $errorMessageObligatoire;
   }
}

function unique(array $datas,string $value,array &$errors,string $errorUnique,string $key='libele'):void{
    foreach ($datas as $data) {
        if ($data[$key] === $value) {
            $errors[$key]['unique'] = $errorUnique;
        }
    }
}