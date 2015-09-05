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
$page_content = file_get_contents("assets/style.css");
$page_content = str_replace("!!HEADER!!", file_get_contents("include/header.html"),$page_content);
$page_content = str_replace("!!LEFT_COLUMN!!", file_get_contents("include/left_column.html"),$page_content);
$page_content = str_replace("!!RIGHT_COLUMN!!", file_get_contents("include/right_column.html"),$page_content);
$page_content = str_replace("!!FOOTER!!", file_get_contents("include/footer.html"),$page_content);
$page_content = str_replace("!!COMMON_TAGS!!", file_get_contents("include/common_tags.html"),$page_content);

echo $page_content;

?>
