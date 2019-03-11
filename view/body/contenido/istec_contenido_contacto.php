

    <div class="container py-3" id="contactanos">
        <section class="text-center">
            <h2 class="text-services mb-3">¿Qué podemos hacer por ti?</h2>
            <p class="linea_de_subrayado"></p>
        </section>
        <form action="php/formcontacto.php" method="post" class="row mt-4">
            <section class="col-md-6">
                <div class="form-group">
                    <label for="">Nombres</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" required>
                </div>
            </section>
            <section class="col-md-6">
                <div class="form-group">
                    <label for="">Compañia / Empresa / Negocio</label>
                    <input type="text" name="empresa" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="email" name="correo" class="form-control" required>
                </div>
            </section>
            <section class="col-md-12">
                <div class="form-group">
                    <label for="">Mensaje</label>
                    <textarea name="mensaje" class="form-control msjcontacto altoMensaje" required></textarea>
                </div>
            </section>
            <section class="col text-right">
                <div class="form-group">
                    <input type="submit" class="btn btncontacto">
                </div>
            </section>
        </form>
    </div>
