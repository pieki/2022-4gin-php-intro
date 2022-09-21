<?php

$ipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium turpis vel nisi dapibus, eget gravida urna maximus. Vivamus faucibus accumsan orci. Ut pulvinar aliquam lorem quis suscipit. Nunc est velit, condimentum sed nisi ac, egestas rhoncus nulla. Cras nec nisi nec neque ultrices vestibulum. Morbi eu libero gravida, aliquet sapien id, mollis nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin risus metus, feugiat quis felis quis, laoreet imperdiet turpis. Proin vulputate ultricies sem, vel tincidunt libero porttitor at. Nam eu mattis sapien, ac malesuada nisi. Aliquam condimentum, velit semper auctor interdum, enim.";

$szukaj = "b";

function sortandsearch($text, $look){

    $slowa = explode(" ", $text);
sort($slowa, SORT_NATURAL | SORT_FLAG_CASE);
foreach($slowa as $slowo){
    if(preg_match("/\b(\w*$look\w*)\b/", $slowo, $match) == true){
    echo "$match[0] </br>";
    }
}
};
sortandsearch($ipsum, $szukaj);
?>