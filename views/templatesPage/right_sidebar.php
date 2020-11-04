 <!-- Script input data in between header and footer (run script). Script need name of other script to run it (value $filler) -->
<div class="right-sidebar" style="width:1000px">

</div>
<div class="main">
    <div class="container">
        <?php
            require_once PAGES . $filler;
            require_once FILLER;
            ?>
    </div>
</div>
