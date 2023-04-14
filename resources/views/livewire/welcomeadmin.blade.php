<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="mt-8 text-2xl">
        Bienvenid@ {{ Auth::user()->name }}! A tu escritorio de Admin
    </div>

    <div class="mt-8 text-">
        <p>¡Revisa todas tus opciónes de administrador ahora! <b style="text-decoration: underline;"><a href="{{url('/admin')}}">Clic aquí</a></b></p>
    </div>

    <div class="mt-6 text-gray-500" style="text-align: justify">
        <p>Siempre es necesario recordar que un gran poder conlleva una gran responsabilidad, 
            no te olvides de cerrar tu sesión cada vez que vayas a salir.
        Gracias por ayudarnos como <b>Administrador(a)</b>, dale clic al botón de abajo para entrar a tus opciónes de administrador.
    Diviertete ^^</p>
            <br/><center><a href="{{url('/admin')}}"><button class="btn btn-light" type="button" style="width: 350px;height: 40px; text-align:center;">Administrador de ReciWeb</button></a></center><br/>

    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 sm:px-20">

        <div class="ml-12">
            <div class="mt-2 text- text-gray-500">
                ¡Gracias por Administrar ReciWeb!
            </div>
        </div>
</div>
