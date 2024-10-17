<x-layout>
    <section class="grid md:grid-cols-3 gap-4 m-12 mb-36" style="min-height: 900px">
        <!-- Prima colonna (Foto) -->
        <div class="flex justify-center items-center">
            <img src="images/profilo.png" alt="Foto di Mattia" class="rounded-lg shadow-lg w-64 h-auto">
        </div>

        <!-- Seconda colonna (Testo) -->
        <div class="flex justify-center items-center text-center md:col-span-1 mb-12">
            <div>
                <h1 class="text-5xl font-extrabold mb-8">CHI SONO</h1>
                <p class="text-lg font-semibold uppercase text-justify whitespace-pre-line">
                    <span class="text-3xl font-bold">Mattia Iacona</span>, classe 1987. Originario di Ravenna, sono sempre stato appassionato di tecnologia, ma da ragazzo ho seguito un&apos;altra mia grande passione: la cucina. Mi sono diplomato alla scuola alberghiera di Cervia e ho lavorato per anni in ristoranti e alberghi della riviera romagnola, fino ai 30 anni. A quel punto, ho deciso di dare una svolta alla mia vita e di dedicarmi a qualcosa che valorizzasse meglio il mio tempo.
                    Attualmente, lavoro come impiegato data entry e addetto alla sala posta, ma da novembre 2023 ho iniziato un nuovo percorso nella programmazione web e mobile. Dopo aver seguito un corso con Aulab e ottenuto la certificazione, ho continuato a studiare come autodidatta. Al momento, utilizzo <span class="text-3xl font-bold">Laravel</span>, <span class="text-3xl font-bold">PHP</span>, Bootstrap e <span class="text-3xl font-bold">JavaScript</span>, con l&apos;obiettivo di espandere le mie competenze a <span class="text-3xl font-bold">Flutter</span>, <span class="text-3xl font-bold">TypeScript</span>, <span class="text-3xl font-bold">Tailwind CSS</span>, <span class="text-3xl font-bold">Angular</span> e <span class="text-3xl font-bold">React</span>.
                    La mia curiosità e determinazione mi spingono a superare ogni ostacolo con il mantra: <span class="hover:text-lime-400 transition duration-300 ease-in-out hover:text-3xl hover:font-bold">“Non ho la minima idea di quello che sto facendo e per questo sono invincibile”</span>. Oltre alla programmazione, le mie passioni spaziano dalla musica all&apos;antropologia.
                </p>
                <p class="mt-7 border"></p>
                <p class="text-lg font-semibold uppercase text-justify whitespace-pre-line">
                    Negli ultimi anni, mi sono dedicato anche alla creazione di grafiche per abbigliamento, che sto vendendo su una piattaforma di print on demand. Con mia sorpresa, le mie creazioni hanno riscosso un discreto successo, soprattutto in Australia. Inoltre, gestisco un canale YouTube dove carico brani di mia invenzione, creati con l&apos;aiuto di un&apos;intelligenza artificiale. Alcuni testi sono ispirati a poesie famose, ma spesso i testi o l'idea alla base sono miei.
                </p>
            </div>
        </div>

        <!-- Terza colonna (Blob animati) -->
        <div class="hidden md:flex relative items-end justify-center mt-36">
            <div class="absolute inset-0">
                <!-- Blob 1 -->
                <div class="blob bg-gray-300 w-32 h-32 absolute top-0 left-1/4 hover:bg-lime-400"></div>
                <!-- Blob 2 -->
                <div class="blob bg-gray-300 w-48 h-48 absolute top-1/4 left-1/2 hover:bg-lime-400"></div>
                <!-- Blob 3 -->
                <div class="blob bg-gray-300 w-24 h-24 absolute top-1/2 right-1/4 hover:bg-lime-400"></div>
                <!-- Blob 4 -->
                <div class="blob bg-gray-300 w-36 h-36 absolute bottom-1/4 left-1/4 hover:bg-lime-400"></div>
            </div>
        </div>
    </section>
</x-layout>
