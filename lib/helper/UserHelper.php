<?php

function link_to_user($user)
{
  return link_to($user->getName(), 'user/show?id=' . $user->getId());
}

?>
