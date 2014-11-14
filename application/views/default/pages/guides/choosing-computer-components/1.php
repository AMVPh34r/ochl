<?php
$active = 1;

include('data.php');
include('header.php');

$prev_page = NULL;
$next_page = $contents[1];
$prev_url = NULL;
$next_url = site_url('guides/'.$guide_uri.'/2');
?>
    
<!-- <h2>Page 1 Heading</h2> -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tristique eleifend ligula. Etiam lobortis aliquet rhoncus. Cras condimentum rutrum tortor sit amet consectetur. Quisque rutrum tellus libero, eget ultricies justo elementum eleifend. Integer maximus sollicitudin lobortis. Praesent tincidunt, nisi elementum ullamcorper lacinia, neque urna vehicula ligula, sit amet auctor odio mauris quis nisi. Aenean efficitur ac elit quis tempus. Praesent dignissim leo dolor. Vivamus tincidunt tortor sed nibh ornare, non cursus mi auctor. Aliquam rhoncus, enim eu tincidunt faucibus, arcu tortor vehicula orci, nec volutpat enim felis sodales nulla. Suspendisse vestibulum ultricies nunc eu sagittis.</p>
<p>Vivamus auctor convallis lectus, ut volutpat massa. Nunc id faucibus lorem, ut dictum purus. Morbi ac feugiat dui. Cras venenatis est eu justo mollis, et luctus augue semper. Integer egestas magna vel molestie condimentum. Mauris varius nisi mauris, et molestie nisl vestibulum eu. Proin blandit maximus erat sed suscipit. Phasellus ut molestie nulla. Proin a massa eget sapien consectetur suscipit.</p>

<?php include('footer.php'); ?>