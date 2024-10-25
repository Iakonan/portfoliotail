<x-layout>
  <section class="flex flex-col md:flex-row justify-end mt-12 md:mt-72">
    <div class="mr-16">
      <div class="project-card transition-transform duration-300 ease-in-out transform hover:translate-x-6 md:hover:-translate-x-6 text-right">
        <a href="{{ route('project.show', 'livingwoodfb') }}" class="block">
          <h3 class="text-2xl md:text-9xl font-extrabold hover:italic dark:hover:text-lime-400">
            <span class="text-sm">1.</span>
            <span class="japanese">リビングウッド</span>
            <span class="western hidden">LIVINGWOODFB</span>
            <i class="fa-solid fa-less-than ml-4 hover:text-lime-400"></i>
          </h3>
        </a>  
      </div>
      <div class="project-card transition-transform duration-300 ease-in-out transform hover:translate-x-6 md:hover:-translate-x-6 text-right">
        <a href="{{ route('project.show', 'prestoit') }}" class="block">
          <h3 class="text-2xl md:text-9xl font-extrabold hover:italic dark:hover:text-lime-400">
            <span class="text-sm">2.</span>
            <span class="japanese">プレスト</span>
            <span class="western hidden">PRESTO.IT</span>
            <i class="fa-solid fa-less-than ml-4 hover:text-lime-400"></i>
          </h3>
        </a>  
      </div>
      <div class="project-card transition-transform duration-300 ease-in-out transform hover:translate-x-6 md:hover:-translate-x-6 text-right">
        <a href="{{ route('project.show', 'questboard') }}" class="block">
          <h3 class="text-2xl md:text-9xl font-extrabold hover:italic dark:hover:text-lime-400">
            <span class="text-sm">3.</span>
            <span class="japanese">クエストボード</span>
            <span class="western hidden">QUESTBOARD</span>
            <i class="fa-solid fa-less-than ml-4 hover:text-lime-400"></i>
          </h3>
        </a>  
      </div>
    </div>
  </section>
  <section class="flex justify-end mr-20 md:mr-24 mt-32">
    <div class="font-light uppercase legend-opacity">
      <h4 class="text-right mb-3 italic">&ast;Legenda</h4>
      <ul class="relative text-right">
        <li>
          <span>Alpha -</span>
          <i class="fa-solid fa-gear"></i>
        </li>
        <li>
          <span>Terminato -</span>
          <i class="fa-solid fa-flag-checkered"></i>
        </li>
        <li>
          <span>prototipo concettuale -</span>
          <i class="fa-solid fa-brain"></i>
        </li>
      </ul>
    </div>
  </section>
</x-layout>
