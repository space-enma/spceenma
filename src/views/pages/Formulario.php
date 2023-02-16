<section class="contato">
    <div class="contato1">
        <div class="contato2">
            <div class="contato-area">
                <div class="contato-area1">
                        <img src="<?=$base;?>/assets/img/phone-receiver-silhouette.png" alt="">
                </div>   
                <div class="contato-text-area">
                    <div class="contato-text-area1">
                        <h1>Telefone</h1>
                        <p>(31) 996822917</p>
                    </div>                      
                </div>                            
            </div>
            <hr>            
            <div class="contato-area">
                <div class="contato-area1">
                       <img src="<?=$base;?>/assets/img/letter5.png" alt=""> 
                </div>   
                <div class="contato-text-area">
                    <div class="contato-text-area2">
                        <h1>Email</h1>
                        <p>spaceenma@gmail.com</p> 
                    </div>                    
                </div>                     
            </div>
        </div>
        <div class="contato-form">  
            <div class="contato-text">
                <h1>Contate-Nos</h1> 
                <p>Entre em contato com a nossa equipe caso tenha alguma  duvida ou tenha interece em ter um site online </p>
            </div>
                    
            <form method="Post" action="<?=$base;?>/contato">
                <label >
                    <input class="place-buttom" type="text" name="name"
                    placeholder="Nome" >
                </label>
                <label >
                    <input class="place-buttom" type="email" name="email"
                    placeholder="Email" >
                </label><br><br>
                <label >
                    <input class="place-buttom-tel" type="number" name="telefone"
                    placeholder="Telefone" >
                </label><br><br>
                <label >
                    <input class="place-buttom-text" type="text" name="text"
                    placeholder="Por favor descreva o que você precisa." >
                </label><br><br>

                <input id="buttom" type="submit" value="Enviar"/>
            </form>
        </div>
    </div>
</section>
