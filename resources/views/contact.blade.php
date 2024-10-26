<x-layout>
    <section class="">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center uppercase">contatti</h2>
            <p class="mb-8 lg:mb-16 font-light text-center sm:text-xl">Vuoi metterti in contatto con me? Necessiti di un preventivo? Vuoi scoprire chi ha incastrato Roger Rabbit? Inizia da qui!</p>
            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 font-medium uppercase">email</label>
                    <input type="email" id="email" class="bg-gray-100 text-stone-950 border text-sm rounded-lg block w-full p-2.5 italic" placeholder="nome@mail.com" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 font-medium uppercase">oggetto</label>
                    <input type="text" id="subject" class="bg-gray-100 text-stone-950 border text-sm rounded-lg block w-full p-2.5 italic" placeholder="Fammi sapere di cosa hai bisogno..." required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 font-medium uppercase">messaggio</label>
                    <textarea id="message" rows="6" class="bg-gray-100 text-stone-950 border text-sm rounded-lg block w-full p-2.5 italic" placeholder="Scrivi..."></textarea>
                </div>
                <button type="submit" class="py-3 px-5 font-medium text-center uppercase rounded-lg bg-primary-700 sm:w-fit hover:bg-lime-400 focus:ring-4 focus:outline-none hover:text-stone-950">invia</button>
            </form>
        </div>
      </section>
</x-layout>