<?php 
function initData()
{
  $fileNames = array_diff(scandir('data/'), array('.', '..'));
  $datas = array();
  if (count($fileNames) < 0) return $datas;

  foreach ($fileNames as $name) {
    $uploadDate = filemtime("./upload/" . $name);
    $type = pathinfo("./upload/" . $name)['extension'];
    $size = filesize("./upload/" . $name);

    $data = new Data($name, $type, $uploadDate, $size);
    array_push($datas, $data);
  }

  return $datas;
}
?>