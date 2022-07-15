<?php 
// connect to the database

    function ConnectToDb()
    {
            // Connect to the database and return
            // true/false depending on whether or
            // not a connection could be made.
            
            $s = @mysql_connect('localhost', 'hrroot', 'm1ss1ss1pp1');
            $d = @mysql_select_db('cl29-main-192', $s);
            
            if(!$s || !$d)
                return false;
            else
                return true;
                
    }

    ConnectToDb();

    // function to truncate strings
    
    function doTruncate($string, $limit, $break=" ", $pad="...") {

    // return with no change if string is shorter than $limit
    if(strlen($string) <= $limit) return $string;
    // is $break present between $limit and the end of the string?
    if(false !== ($breakpoint = strpos($string, $break, $limit))) {
    if($breakpoint < strlen($string) - 1) {
    $string = substr($string, 0, $breakpoint) . $pad;
            }
        }
        return $string;
    }

    // highlight search terms for search function.

    function highlightWords($text, $words)
    {
            /*** loop of the array of words ***/
            foreach ($words as $word)
            {
                    /*** quote the text for regex ***/
                    $word = preg_quote($word);
                    /*** highlight the words ***/
                    $text = preg_replace("/\b($word)\b/i", '<span style="color: #000; font-weight: bold;">\1</span>', $text);
            }
            /*** return the text ***/
            return $text;
    }

    // truncating search results

    function excerpt($text, $phrase, $radius = 100, $ending = "...") { 
        $phraseLen = strlen($phrase); 
        if ($radius < $phraseLen) { 
            $radius = $phraseLen; 
        } 
     
        $pos = strpos(strtolower($text), strtolower($phrase)); 
     
        $startPos = 0; 
        if ($pos > $radius) { 
            $startPos = $pos - $radius; 
        } 
     
        $textLen = strlen($text); 
     
        $endPos = $pos + $phraseLen + $radius; 
        if ($endPos >= $textLen) { 
            $endPos = $textLen; 
        } 
     
        $excerpt = substr($text, $startPos, $endPos - $startPos); 
        if ($startPos != 0) { 
            $excerpt = substr_replace($excerpt, $ending, 0, $phraseLen); 
        } 
     
        if ($endPos != $textLen) { 
            $excerpt = substr_replace($excerpt, $ending, -$phraseLen); 
        } 
     
        return doTruncate($excerpt, 250); 
    }

    function strip_html_tags( $text )
    {
        $text = preg_replace(
            array(
              // Remove invisible content
                '@<head[^>]*?>.*?</head>@siu',
                '@<style[^>]*?>.*?</style>@siu',
                '@<script[^>]*?.*?</script>@siu',
                '@<object[^>]*?.*?</object>@siu',
                '@<embed[^>]*?.*?</embed>@siu',
                '@<applet[^>]*?.*?</applet>@siu',
                '@<noframes[^>]*?.*?</noframes>@siu',
                '@<noscript[^>]*?.*?</noscript>@siu',
                '@<noembed[^>]*?.*?</noembed>@siu',
                '@<h1[^>]*?.*?</h1>@siu',
                '@<h2[^>]*?.*?</h2>@siu',
                '@<h3[^>]*?.*?</h3>@siu',
                '@<h4[^>]*?.*?</h4>@siu',
              // Add line breaks before and after blocks
                '@</?((address)|(blockquote)|(center)|(del))@iu',
                '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
                '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
                '@</?((table)|(th)|(td)|(caption))@iu',
                '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
                '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
                '@</?((frameset)|(frame)|(iframe))@iu',
            ),
            array(
                ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
                "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
                "\n\$0", "\n\$0",
            ),
            $text );
        return strip_tags( $text );
    }

    // do the seo links

    function doSeo($title, $separator = '-')
    {
        //$title = static::ascii($title);

        // Remove all characters that are not the separator, letters, numbers, or whitespace.
        $title = preg_replace('![^'.preg_quote($separator).'\pL\pN\s]+!u', '', strtolower($title));

        // Replace all separator characters and whitespace by a single separator
        $title = preg_replace('!['.preg_quote($separator).'\s]+!u', $separator, $title);

        return trim($title, $separator);
    }
    
    include_once('csrf-magic.php')

?>