<?php




?>

hello world <?php echo $data['name']  ?>


<a href="index.php?boy=5">boy</a>

<br>


<p><a href="https://www.ikamy.fr/test/public/Home">ikamy.fr/test/public/Home</a></p>
<p><a href="http://localhost/MVCApp/public/home/index">ikamy.fr/test/public/Home</a></p>



<p><a href="https://www.ikamy.fr">ikamy.fr/</a></p>
<p><a href="https://www.ikamy.fr/fr/">ikamy.fr/fr/</a></p>
<p><a href="https://www.ikamy.fr/test/">ikamy.fr/test/</a></p>
<p><a href="https://www.ikamy.fr/test/public/">ikamy.fr/test/public</a></p>
<p><a href="https://www.ikamy.fr/net/">ikamy.fr/net/</a></p>
<p><a href="https://www.ikamy.fr/org/">ikamy.fr/org/</a></p>

<p><a href="https://www.ikamy.fr/test/public/home/index">web home/index</a></p>
<p><a href="http://localhost/MVCApp/home/index">local home/index</a></p>


<p><a href="https://www.ikamy.fr/test/public/home/index/kamy/localhost">web home/index</a></p>
<p><a href="http://localhost/MVCApp/public/home/index/kamy/ikamyFR">local home/index</a></p>


<p><a href="https://www.ikamy.fr/test/public/home/create/kamy/kamy@me.com">web home/create</a></p>
<p><a href="http://localhost/MVCApp/public/home/create/kamy/kamy@me.com">local home/create</a></p>


<?php
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";

phpinfo();
?>
