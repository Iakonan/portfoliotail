<x-layout>
    <section class="grid md:grid-cols-2 justify-center items-center gap-4 m-12 mb-36" style="min-height: 900px">
        <!-- Prima colonna (Immagine del progetto) -->
        <div class="relative flex justify-center items-center">
            <!-- Forma verde irregolare -->
            <div class="absolute bg-gradient-to-r from-lime-500 via-lime-400 to-lime-300 w-80 h-80 md:w-96 md:h-96 rounded-full -z-10 transform -rotate-12"></div>
            
            <!-- Immagine del progetto -->
            <img src="{{ asset($project['image']) }}" alt="Immagine progetto" class="p-3 w-64 md:w-80 h-auto">
        </div>
    
        <!-- Seconda colonna (Dettagli del progetto) -->
        <div class="flex justify-center items-center text-center">
            <div>
                <h1 class="text-5xl font-extrabold mb-8">{{ $project['title'] }}</h1>
                <p class="text-lg font-semibold uppercase text-justify whitespace-pre-line">
                    {{ $project['description'] }}
                </p>
            </div>
        </div>
    </section>
    
</x-layout>
