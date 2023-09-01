<div class="base-somar">
    <h1>Multiplicação</h1>
    <form action="<?php echo URL_BASE . "calcula/multiplicar"?>" method="post">
        <div class="calculo">
            <div class="caixa1">
                <label>
                    <span>VALOR 1</span>
                    <input type="text" value="0" name="a" placeholder="0" autocomplete="off" onfocus="value=''">
                </label>
                <h2>X</h2>
                </label>
                <span>VALOR 2</span>
                <input type="text" value="0" name="b" placeholder="0" autocomplete="off" onfocus="value=''">
                </label>
            </div>
            <div class="caixa2">
                <input type="submit" value=" = " class="btn mult">
            </div>
        </div>
        <label>
            <span>resultado:</span>
            <h1 class="resultado">
                <?php
                if (isset($resultado)) {
                    echo $resultado;
                } else {
                    echo "00";
                }
                ?>
            </h1>
        </label>
    </form>
</div>