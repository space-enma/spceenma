<?php $render('header'); ?>

<section>
    <div>
        <p>a ipsa incidunt, voluptatum possimus tenetur nesc
            iunt velit deleniti at. Magnam, dolor.
        </p>

        <h1>nfnjjnjn jjvjvvkjfvfvjdfvnjfvjdf vvjkfvnfdv fdvfv  </h1>
    </div>

    <div class="container-form">
        <h1 class="titulo-form-contato">Contate-Nos</h1>

        <form method="Post"  action="<?=$base;?>/form">
            <label>
                <input class="place-buttom" placeholder="Qual o seu Nome" type="text" name="name">
            </label> <br/><br/>
            <label>
                
                <input class="place-buttom" placeholder="Qual o seu sobrenome" type="text" name="sobrenome">
            </label><br/><br/>
            <label>
                <input class="place-buttom" placeholder="Informe seu E-mail" type="email" name="email">
            </label><br/><br/>

            <input id="buttom" type="submit" value="enviar"/>
        </form>
    </div>
</section>




<?php $render('footer'); ?>