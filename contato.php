<?php require_once("header.php"); ?>

<section id="content"><div class="ic"></div>  
    <div class="main-block">
        <div class="container_12">
            <div class="wrapper border-vert">
                <article class="grid_5">
                    <h3>Estamos Aqui</h3>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1789.4587630724357!2d-51.09029320000004!3d-26.23186919999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e661f74d293dbf%3A0xcf3611895f460567!2sRua+Cruz+Machado%2C+468!5e0!3m2!1spt-BR!2sbr!4v1396384433751" width="350" height="250" frameborder="0" style="border:0"></iframe>
                    </div> 

                    <dl class="address">
                        <dt>BioSpa - Dr. Gustavo Coronel CRM PR 19515<br>
                        Rua Dr. Cruz Machado, 468<br>
                        2° andar, Ed. Bio Clínica
                        Centro, União da Vitória - PR</dt>
                        <dd> <span>Telefone:</span> (42) 3523-2624 </dd>
                        <dd> <span>E-mail:</span> contato@clinicabiospa.com.br </dd>
                    </dl>

                </article>
                <article class="grid_5 prefix_2">
                    <h2>Fale Conosco:</h2>
                    <form id="contact-form">
                        <input type="hidden" name="acao" value="enviar"/>
                        <fieldset>
                            <div>
                                <label>Digite o seu nome:</label>
                                <input type="text" placeholder="Seu nome completo" name="nome" id="nome" required/>
                            </div>
                            <div>
                                 <label>Digite o seu e-mail:</label>
                                <input type="email" placeholder="Seu e-mail completo" name="email" id="email" required/>
                            </div>
                            <div>
                                 <label>Digite o seu assunto:</label>
                                <input type="text" placeholder="Seu assunto" name="assunto" id="assunto" required/>
                            </div>
                            <div>
                                 <label>Digite a sua mensagem:</label>
                                 <textarea name="mensagem" id="mensagem" rows="10" cols="15"></textarea>
                            </div>
                            <input type="submit" name="enviar" class="button" value="Enviar"/>
                            <input type="reset" name="limpar" class="button" value="Limpar"/>
                        </fieldset>
                    </form>

                </article>
            </div>
        </div>
    </div>  
</section> 

<?php require_once("footer.php"); ?>