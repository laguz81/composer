<?php

namespace Styde;

/**
 * Description of HtmlLogger
 *
 * @author Usuario
 */
class HtmlLogger implements Logger {

    public  function info($message) {
        echo "<p>$message</p>";
    }

}
