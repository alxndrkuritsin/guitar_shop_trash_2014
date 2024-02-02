<?php
  $news = get_news();
  foreach($news as $item):?>
    <br/><font size="3" face="Arial"><?php echo $item['date'] ?></font>
    <table border="1" bgcolor="white">
      <tr>
        <td><p><font size="4"><?php echo $item['news'] ?></font></td>
      </tr>
    </table>
<?php endforeach ?>
