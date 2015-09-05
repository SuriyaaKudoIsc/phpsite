<?php

if (isset($_REQUEST['page']))
{
if($_REQUEST['page'] !="")
if(file_exists("pages/".$_REQUEST['page'].".html"))
$page_content = file_get_contents("pages/".$_REQUEST['page'].".html");
else
if (file_exists($_REQUEST['page'].".html"))
$page_content = file_get_contents($_REQUEST['page'].".html");
else
echo "<center>Sorry. The Page ".$_REQUEST['page']." doesn't exist!</center>";
}
else
$page_content = file_get_contents("pages/main.html");
$page_content = str_replace("!!HEADER!!", file_get_contents("design/header.html"),$page_content);
$page_content = str_replace("!!LEFT_COLUMN!!", file_get_contents("design/left_column.html"),$page_content);
$page_content = str_replace("!!RIGHT_COLUMN!!", file_get_contents("design/right_column.html"),$page_content);
$page_content = str_replace("!!FOOTER!!", file_get_contents("design/footer.html"),$page_content);
$page_content = str_replace("!!COMMON_TAGS!!", file_get_contents("design/common_tags.html"),$page_content);

echo $page_content;

?>
