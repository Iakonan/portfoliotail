<x-layout>
    <section class="grid md:grid-cols-2 justify-center items-center gap-4 mt-12 mx-12 mb-12">
        <!-- Prima colonna (Immagine del progetto) -->
        <div class="relative flex justify-center items-center mb-10">
            <!-- Forma verde irregolare -->
            <div class="absolute bg-gradient-to-r from-lime-500 via-lime-400 to-lime-300 w-80 h-80 md:w-96 md:h-96 rounded-full -z-10 transform -rotate-12"></div>
            
            <!-- Immagine del progetto -->
            <img src="{{ asset($project['image1']) }}" alt="Immagine progetto" class="p-3 w-64 md:w-80 h-auto">
        </div>
    
        <!-- Seconda colonna (Dettagli del progetto) -->
        <div class="flex justify-center items-center md:text-end p-5">
            <div>
                <h1 class="md:text-5xl text-2xl uppercase font-extrabold mb-8">{{ $project['title1'] }}</h1>
                <p class="text-lg font-semibold uppercase">
                    {{ $project['description1'] }}
                </p>
            </div>
        </div>
    </section>
    <section class="grid md:grid-cols-2 justify-center items-center gap-4 mx-12 md:mt-36">
        
        <!-- Prima colonna (Dettagli del progetto) -->
        <div class="flex justify-center items-center md:text-start p-5">
            <div>
                <h1 class="md:text-5xl text-2xl uppercase font-extrabold mb-8">{{ $project['title2'] }}</h1>
                <p class="text-lg font-semibold uppercase">
                    {{ $project['description2'] }}
                </p>
            </div>
        </div>
        <!-- Seconda colonna (Immagine del progetto) -->
        <div class="relative flex justify-center items-center mt-12">
            <!-- Immagine del progetto -->
            <img src="{{ asset($project['image2']) }}" alt="Immagine progetto" class="w-64 md:w-auto h-auto rounded-3xl border-4 border-lime-400">
        </div>
    </section>
    <section class="grid md:grid-cols-2 justify-center items-center gap-4 mx-12 md:mt-36 mt-12 mb-72">
        
        <!-- Prima colonna (Dettagli del progetto) -->
        <div class="flex justify-center items-center md:text-start p-5">
            <div>
                <h1 class="md:text-5xl text-2xl uppercase font-extrabold mb-8">{{ $project['title3'] }}</h1>
                <p class="text-lg font-semibold uppercase">
                    {{ $project['description3'] }}
                </p>
            </div>
        </div>
        <!-- Seconda colonna (Immagine del progetto) -->
        <div class="relative flex justify-center items-center mt-12">
            <!-- Immagine del progetto -->
            <img src="{{ asset($project['image3']) }}" alt="Immagine progetto" class="w-64 md:w-auto h-auto rounded-3xl border-4 border-lime-400">
        </div>
    </section>

    
</x-layout>
