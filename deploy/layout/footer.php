        </main> <!-- page-content -->

        <footer>
            <small class="developed-by">Developed and managed by <a class="link" href="https://crafthouse.dk">Crafthouse - Digital agency</a></small>
        </footer>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/assets/skip-link-focus-fix.js"></script>
        <script src="js/assets/svg4everybody.js"></script>
        <script src="js/core.js"></script>
        <?php if (defined('JS')): ?>
            <?php foreach (JS as $js): ?>
                <script src="js/<?=$js?>"></script>
            <?php endforeach ?>
        <?php endif ?>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
