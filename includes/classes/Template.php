<?php
/**
 * Essentially, this is a wrapper for smarty to get most of the template logic out of the way
 */
 
class Template {
    public $page = '';

    protected $smarty = Null;

    public function __construct($page = Null) {
        $this->smarty = new Smarty;
        $this->smarty->setTemplateDir(DIR_TEMPLATES);
        $this->smarty->setCompileDir(DIR_COMPILED_TEMPLATES);

        if (!$page) {
            $page = str_replace('.php', '.html', basename($_SERVER['SCRIPT_NAME']));
        }

        if (file_exists(DIR_TEMPLATES . $page)) {
            $this->page = $page;
        }
    }

    public function set($key, $value) {
        $this->smarty->assign($key, $value);
    }
    
    public function fetch($template, $display = true) {
        $output = $this->smarty->fetch($template, null, null, null, $display);

        if ($display) {
            echo $output;
            return true;
        } else {
            return $output;
        }
    }
    
    public function outputAll() {
        $this->smarty->display('header.html');
        $this->smarty->display($this->page);
        $this->smarty->display('footer.html');
    }

    /**
     * This is a shortcut for displaying a header, page and footer all at once.
     */
    public static function displayPage($title = '(No title)') {
        $tpl = new Template;
        $tpl->set('pageTitle', $title);
        $tpl->outputAll();
    }

}
