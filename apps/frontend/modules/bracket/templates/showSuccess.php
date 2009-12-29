<?php use_helper('User') ?>
<?php use_helper('Pick') ?>
<h2><span class="bracket-name"><?php echo $bracket->getName() ?></span> - by <?php echo link_to_user($bracket->getUser()) ?></h2>

<?php
  $groups = array(
    0 => 'Midwest',
    15 => 'West',
    30 => 'East',
    45 => 'South'
  );

  foreach($groups as $o => $title)
  {
?>
<h3><?php echo $title ?></h3>
<ul>
  <li>Round 1
    <ul>
      <?php for($i = 1; $i <= 8; $i++) { ?>
      <li><?php echo match($games[$i + $o], $teams, @$picks[$i + $o], $bracket) ?></li>
      <?php } ?>
    </ul>
  </li>
  <li>Round 2
    <ul>
      <?php for($i = 9; $i <= 12; $i++) { ?>
      <li><?php echo match($games[$i + $o], $teams, @$picks[$i + $o], $bracket) ?></li>
      <?php } ?>
    </ul>
  </li>
  <li>Round 3
    <ul>
      <?php for($i = 13; $i <= 14; $i++) { ?>
      <li><?php echo match($games[$i + $o], $teams, @$picks[$i + $o], $bracket) ?></li>
      <?php } ?>
    </ul>
  </li>
  <li>Round 4
    <ul>
      <?php for($i = 15; $i <= 15; $i++) { ?>
      <li><?php echo match($games[$i + $o], $teams, @$picks[$i + $o], $bracket) ?></li>
      <?php } ?>
    </ul>
  </li>
</ul>
<?php } ?>
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $bracket->getId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $bracket->getUserId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $bracket->getName() ?></td>
    </tr>
    <tr>
      <th>Score:</th>
      <td><?php echo $bracket->getScore() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $bracket->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $bracket->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('bracket/edit?id='.$bracket->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('bracket/index') ?>">List</a>
