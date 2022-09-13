<?php
$ipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu lacus enim. Mauris vestibulum, mi et aliquet fermentum, massa risus condimentum odio, a venenatis risus sapien vitae ex. Sed sed nibh sit amet nisl auctor elementum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla faucibus dapibus ligula, vel mollis orci molestie non. Proin a tellus dapibus, ultricies arcu suscipit, dictum elit. Ut rhoncus dapibus neque, nec fringilla ante dignissim vitae. Integer faucibus viverra nunc sed pellentesque. Duis eros nulla, aliquet at erat a, tempus luctus urna. Vivamus ac pretium lacus. Integer posuere volutpat tellus.";
$ipsum2 = explode (" ", $ipsum);
foreach ($ipsum2 as $tak){
    echo "$tak <br>";
}
?>