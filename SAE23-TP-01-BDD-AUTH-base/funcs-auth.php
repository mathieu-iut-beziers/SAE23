<?php
###############################################################################
###############################################################################

// function auth($user,$pass) {
//   $titi= 'f7e79ca8eb0b31ee4d5d6c181416667ffee528ed';
//   global $pdo;
//   if ($user==='toto'&& sha1($pass)===$titi) {
//     cbPrintf('<h2>Utilisateur [%s] authentifié !</h2>',$user);
//     return true;
//   }
//   if ($user!='') {
//     cbPrintf('<h2 style="color:red;">BAD PASSWORD for [%s] !!!</h2>',$user);
//   }
//   return false;
// }

function auth($user,$pass) {
  global $pdo;
  $stmt=$pdo->query(" SELECT * FROM `users` WHERE `user` = '".$user."' AND `pass` = '".$pass."' ");
  $rows=$stmt->fetchAll();
  $stmt->closeCursor();
  // var_dump($rows);
   // Pour vérification uniquement
  if (count($rows)>0) {
    cbPrintf('<h2>Utilisateur [%s] authentifié !</h2>',$user);
    return true;
  }
  if ($user!='') {
    cbPrintf('<h2 style="color:red;">BAD PASSWORD for [%s] !!!</h2>',$user);
  }
  return false;
}

?>
