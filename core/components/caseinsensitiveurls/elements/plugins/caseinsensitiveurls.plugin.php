/* @var $modx modX */
$url = $_SERVER['REQUEST_URI'];
$pieces = explode('?', $url);
 
if (preg_match('~[A-Z]~', $pieces[0])) {
    $pieces[0] = strtolower($pieces[0]);
    $url = $pieces[0];
    $url  .= isset($pieces[1])? '?' . $pieces[1] : '';
    $modx->sendRedirect($url);
}