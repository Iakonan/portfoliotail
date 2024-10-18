<x-layout>
    <section class="grid md:grid-cols-2 gap-4 m-12 mb-36" style="min-height: 900px">
        <!-- Prima colonna (Immagine del progetto) -->
        <div class="flex justify-center items-center">
            <img src="{{ asset($project['image']) }}" alt="Immagine progetto" class="p-3 bg-gray-100 rounded-lg shadow-2xl w-80 h-auto">
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
