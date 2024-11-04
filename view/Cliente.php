<div id="contenido" class="flex flex-col gap-5">
    <section class="bg-slate-50 rounded-md py-4 px-4 flex gap-4 items-center">
        <button id="openModal" class="py-1 px-3 rounded-md bg-green-600 text-white hover:bg-green-500 transition-all duration-200">
            Crear
        </button>
        <form action="" class="relative flex items-center text-sm">
            <label for="Buscar" class="font-bold mr-2">Buscar: </label>
            <input id="Buscar" type="text" class="bg-zinc-200 focus:outline-none rounded-md py-1 pl-3 ">
            <i class="fa-solid fa-magnifying-glass absolute right-0 top-1/2 transform -translate-y-1/2 cursor-pointer text-gray-500 hover:text-gray-800 transition-all duration-200 px-3"></i>
        </form>
        <form action="" class="flex gap-4 items-center text-sm">
            <div class="flex items-center">
                <label for="" class="font-bold mr-2">Desde:</label>
                <input type="date" class="bg-zinc-200 rounded-md py-1 px-2 focus:outline-none">
            </div>
            <div class="flex items-center">
                <label for="" class="font-bold mr-2">Hasta:</label>
                <input type="date" class="bg-zinc-200 rounded-md py-1 px-2 focus:outline-none">
            </div>
        </form>
    </section>
    <section>
        <div class="overflow-hidden bg-white rounded-md">
            <table
                class="min-w-full text-left text-sm font-light text-surface dark:text-white">
                <thead
                    class=" border-neutral-200 font-medium dark:border-white/10">
                    <tr>
                        <th
                            scope="col"
                            class=" border-neutral-200 px-6 py-4 dark:border-white/10">

                        </th>
                        <th
                            scope="col"
                            class=" border-neutral-200 px-6 py-4 dark:border-white/10">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-4">Apellido</th>
                        <th scope="col" class="px-6 py-4">Cel/telefono</th>
                        <th scope="col" class="px-6 py-4">Correo</th>
                        <th scope="col" class="px-6 py-4">F.Creacion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class=" border-neutral-200 dark:border-white/10">
                        <td
                            class="whitespace-nowrap flex gap-2 border-neutral-200 px-6 py-4 font-medium dark:border-white/10">
                            <button class="py-1 px-3 rounded-md bg-yellow-600 text-white hover:bg-yellow-500 transition-all duration-200">Editar</button>
                            <button class="py-1 px-3 rounded-md bg-red-600 text-white hover:bg-red-500 transition-all duration-200">Eleminar</button>
                            <button class="py-1 px-3 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-all duration-200">Pedido</button>
                        </td>
                        <td
                            class="whitespace-nowrap  border-neutral-200 px-6 py-4 dark:border-white/10">
                            Edward
                        </td>
                        <td
                            class="whitespace-nowrap  border-neutral-200 px-6 py-4 dark:border-white/10">
                            Apellidos Completos Apellidos
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">2123421321412</td>
                        <td class="whitespace-nowrap px-6 py-4">edward@gmail.com</td>
                        <td class="whitespace-nowrap px-6 py-4">12/07/12</td>
                    </tr>
                    <tr class=" border-neutral-200 dark:border-white/10">
                        <td
                            class="whitespace-nowrap flex gap-2 border-neutral-200 px-6 py-4 font-medium dark:border-white/10">
                            <button class="py-1 px-3 rounded-md bg-yellow-600 text-white hover:bg-yellow-500 transition-all duration-200">Editar</button>
                            <button class="py-1 px-3 rounded-md bg-red-600 text-white hover:bg-red-500 transition-all duration-200">Eleminar</button>
                            <button class="py-1 px-3 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-all duration-200">Pedido</button>
                        </td>
                        <td
                            class="whitespace-nowrap  border-neutral-200 px-6 py-4 dark:border-white/10">
                            Edward
                        </td>
                        <td
                            class="whitespace-nowrap  border-neutral-200 px-6 py-4 dark:border-white/10">
                            Apellidos Completos Apellidos
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">2123421321412</td>
                        <td class="whitespace-nowrap px-6 py-4">edward@gmail.com</td>
                        <td class="whitespace-nowrap px-6 py-4">12/07/12</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section>
        <div>
            <ul class="list-style-none flex">
                <li>
                    <a
                        class="pointer-events-none relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface/50 transition duration-300 dark:text-neutral-400">Previous</a>
                </li>
                <li>
                    <a
                        class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface transition duration-300 hover:bg-neutral-100 focus:bg-neutral-100 focus:text-primary-700 focus:outline-none active:bg-neutral-100 active:text-primary-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  dark:focus:text-primary-500 dark:active:bg-neutral-700 dark:active:text-primary-500"
                        href="#!">1</a>
                </li>
                <li aria-current="page">
                    <a
                        class="relative block rounded bg-primary-100 px-3 py-1.5 text-sm font-medium text-primary-700 transition duration-300 focus:outline-none dark:bg-slate-900 dark:text-primary-500"
                        href="#!">2
                        <span
                            class="absolute -m-px h-px w-px overflow-hidden whitespace-nowrap border-0 p-0 [clip:rect(0,0,0,0)]">(current)</span>
                    </a>
                </li>
                <li>
                    <a
                        class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface transition duration-300 hover:bg-neutral-100 focus:bg-neutral-100 focus:text-primary-700 focus:outline-none active:bg-neutral-100 active:text-primary-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:focus:text-primary-500 dark:active:bg-neutral-700 dark:active:text-primary-500"
                        href="#!">3</a>
                </li>
                <li>
                    <a
                        class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface transition duration-300 hover:bg-neutral-100 focus:bg-neutral-100 focus:text-primary-700 focus:outline-none active:bg-neutral-100 active:text-primary-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:focus:text-primary-500 dark:active:bg-neutral-700 dark:active:text-primary-500"
                        href="#!">Next</a>
                </li>
            </ul>
        </div>
    </section>
</div>


<div id="crear" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 ">
    <div class="bg-transparent w-[80%] h-[60vh] rounded-md p-4">

        <button class="py-1 px-3 rounded-t-md bg-blue-600 text-white hover:bg-blue-500 transition-all duration-200">Pedido</button>

        <div class="bg-white h-full p-4">
            <div class=" rounded-b-md rounded-tr-md text-sm grid grid-cols-5 gap-4 h-auto">
                <div class="flex flex-col col-span-2">
                    <label for="nombre" class="font-bold mb-1">Nombre: </label>
                    <input id="nombre" type="text" class="bg-zinc-200 focus:outline-none rounded-md py-1 pl-3">
                </div>
                <div class="flex flex-col col-span-2">
                    <label for="apellido" class="font-bold mb-1">Apellido: </label>
                    <input id="apellido" type="text" class="bg-zinc-200 focus:outline-none rounded-md py-1 pl-3">
                </div>
                <div class="flex flex-col col-span-1">
                    <label for="telefono" class="font-bold mb-1">Celular/Telefono: </label>
                    <input id="telefono" type="text" class="bg-zinc-200 focus:outline-none rounded-md py-1 pl-3">
                </div>
                <div class="flex flex-col col-span-2">
                    <label for="correo" class="font-bold mb-1">Correo: </label>
                    <input id="correo" type="text" class="bg-zinc-200 focus:outline-none rounded-md py-1 pl-3">
                </div>


            </div>
            <button id="closeModal" class="flex col-span-5 mt-4 py-1 px-3 bg-red-600 text-white rounded-md hover:bg-red-500 transition-all duration-200">
                Cerrar
            </button>
        </div>



    </div>
</div>
<style>
    #contenido {
        display: grid;
        min-height: 88vh;
        grid-template-rows:
            auto 1fr auto;
    }
</style>
<script>
    const openModal = document.getElementById('openModal');
    const closeModal = document.getElementById('closeModal');
    const modal = document.getElementById('crear');

    // Mostrar modal al hacer clic en el botón "Crear"
    openModal.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    // Ocultar modal al hacer clic en el botón "Cerrar"
    closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    // Cerrar el modal al hacer clic fuera del contenedor del modal
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.classList.add('hidden');
        }
    });
</script>