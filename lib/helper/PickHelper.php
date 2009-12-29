<?php

function match($game, $teams, $pick, $bracket)
{
  $h = $game->getHomeId();
  $a = $game->getAwayId();
  $home = $h === null ? 'TBD' : $teams[$h]->getName();
  $away = $a === null ? 'TBD' : $teams[$a]->getName();
  
  if($game->getHomeScore() === null);
  else if($game->getHomeScore() > $game->getAwayScore())
  {
    if($pick->getTeamId() == $h) $home = '<span class="winner">' . $home . '</span>';
    else $away = '<span class="loser">' . $away . '</span>';
  }
  else
  {
    if($pick->getTeamId() == $h) $home = '<span class="loser">' . $home . '</span>';
    else $away = '<span class="winner">' . $away . '</span>';
  }
  if($pick === null);
  else if($h == $pick->getTeamId()) $home = '<span class="pick">' . $home . '</span>';
  else if($a == $pick->getTeamId()) $away = '<span class="pick">' . $away . '</span>';
  
  $s = $home . ' vs ' . $away;
  if(strtotime($game->getDue()) > time()) $s = link_to($s, 'pick/edit?game=' . $game->getId() . '&bracket=' . $bracket->getId());

  return $s;
}

?>
