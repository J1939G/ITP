
<?php 
    $langs = pll_the_languages(array('raw' => 1));
?>

<div id="copyright">
            <a href="https:/github.com/j1939g/pittsburg">GitHub</a><p>© 2019 José Smutný</p><?php 
                foreach ( $langs as $lang){
                    if( $lang[current_lang]){continue;};
                    echo '<a href=' . $lang[url] . '>' . $lang[name] . '</a>';
                };
            ?>
        </div>
    </div>
</body>
</html>