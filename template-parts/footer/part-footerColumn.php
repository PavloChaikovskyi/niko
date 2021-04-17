<?php if ($links) {
    foreach($links as $link) {
        foreach($link as $value) {
            $target = $value['target'] ? $value['target'] : '_self';
            echo '<a href="' . esc_url( $value['url'] ). '" target="' . esc_attr( $target ). '" class="footer__link">' . esc_html($value['title']) . '</a>';      
        }                         
    }
}
?>