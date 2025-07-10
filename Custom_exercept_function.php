/**
 * A more flexible excerpt function
 * 
 * @param int $length Number of words
 * @param string $more What to append when text is cut off
 * @return string The customized excerpt
 */
function custom_excerpt($length = 25, $more = '...') {
    $text = get_the_content('');
    $text = strip_shortcodes($text);
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    $text = wp_strip_all_tags($text);
    
    $excerpt_more = apply_filters('excerpt_more', ' ' . $more);
    $words = preg_split("/[\n\r\t ]+/", $text, $length + 1, PREG_SPLIT_NO_EMPTY);
    
    if (count($words) > $length) {
        array_pop($words);
        $text = implode(' ', $words);
        $text = $text . $excerpt_more;
    } else {
        $text = implode(' ', $words);
    }
    
    return $text;
}
