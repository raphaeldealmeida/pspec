<?php
    namespace PSpec;
    require_once 'lib/PSpec.php';
    try {
        $resultGroup =
            PSpec::build()
            ->addDescription('pspec')
            ->addDescription('atributos')
            ->addDescription('heranca')
            ->run();
    }
    catch(\Exception $e) {
        echo nl2br($e);
    }
    $reportHtml = ResultReporter::build()->report($resultGroup);
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <script type="text/javascript" src="jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="pspec.css" />
</head>
<body>
    <h3>PSpec</h3>
    <?php echo $reportHtml ?>
</body>

<a rel="license" href="http://creativecommons.org/licenses/by/3.0/br/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/br/88x31.png" /></a><br /><span xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://purl.org/dc/dcmitype/Text" property="dc:title" rel="dc:type">PSpec</span> de <a xmlns:cc="http://creativecommons.org/ns#" href="http://github.com/brunoreis/pspec" property="cc:attributionName" rel="cc:attributionURL">PHPDF</a> &#233; licenciado sob uma <a rel="license" href="http://creativecommons.org/licenses/by/3.0/br/">Licen&#231;a Creative Commons Atribui&#231;&#227;o 3.0 Brasil</a>.<br />Based on a work at <a xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://github.com/brunoreis/pspec" rel="dc:source">github.com</a>.
</html>