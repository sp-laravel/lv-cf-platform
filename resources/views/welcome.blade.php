<x-app-layout>
  <section style="background-image: url({{ asset('img/home/job.jpg') }})">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 py-36">
      <div class="w-full md:w-3/4 lg:w-1/2">
        <h1 class="text-4xl font-bold text-white">Domina la tecnologia web con Jeango Pro</h1>
        <p class="mt-2 text-lg text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus pariatur
          neque similique ducimus alias.
        </p>

        <!-- component -->
        <!-- This is an example component -->
        <div class="relative pt-2 mx-auto text-gray-600">
          <input class="w-full h-10 px-5 pr-16 text-sm bg-white border-2 border-gray-300 rounded-lg focus:outline-none"
            type="search" name="search" placeholder="Search">
          <button type="submit"
            class="absolute top-0 right-0 px-4 py-2 mt-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
            Button
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-24">
    <h1 class="mb-6 text-3xl text-center text-gray-600">Content</h1>

    <div
      class="grid grid-cols-1 px-4 mx-auto gap-x-6 gap-y-8 max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
      <article>
        <figure>
          <img class="object-cover w-full rounded-xl h-36" src="{{ asset('img/home/office.jpg') }}" alt="">
        </figure>

        <header class="mt-2">
          <h1 class="text-xl text-center text-gray-700">
            Cursos y proyectos
          </h1>
        </header>

        <p class="text-sm text-gray-500">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsam ex
          et beatae
          eveniet atque
        </p>
      </article>

      <article>
        <figure>
          <img class="object-cover w-full rounded-xl h-36" src="{{ asset('img/home/office.jpg') }}" alt="">
        </figure>

        <header class="mt-2">
          <h1 class="text-xl text-center text-gray-700">
            Cursos y proyectos
          </h1>
        </header>

        <p class="text-sm text-gray-500">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsam ex
          et beatae
          eveniet atque
        </p>
      </article>

      <article>
        <figure>
          <img class="object-cover w-full rounded-xl h-36" src="{{ asset('img/home/office.jpg') }}" alt="">
        </figure>

        <header class="mt-2">
          <h1 class="text-xl text-center text-gray-700">
            Cursos y proyectos
          </h1>
        </header>

        <p class="text-sm text-gray-500">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsam ex
          et beatae
          eveniet atque
        </p>
      </article>

      <article>
        <figure>
          <img class="object-cover w-full rounded-xl h-36" src="{{ asset('img/home/office.jpg') }}" alt="">
        </figure>

        <header class="mt-2">
          <h1 class="text-xl text-center text-gray-700">
            Cursos y proyectos
          </h1>
        </header>

        <p class="text-sm text-gray-500">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsam ex
          et beatae
          eveniet atque
        </p>
      </article>
    </div>
  </section>

  <section class="py-12 mt-24 bg-gray-700">
    <h1 class="text-3xl text-center text-white">No saves que curso llevar?</h1>
    <p class="text-center text-white">Dirige el catalogo de cursos y filtralos por categoria o nivel</p>

    <div class="flex justify-center mt-4">
      <a href="" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
        Catálogo de cursos
      </a>
    </div>
  </section>

  <section class="mt-24">
    <h1 class="text-3xl text-center text-gray-600">Ultimos cursos</h1>
    <p class="mb-6 text-sm text-center text-gray-500">Subiendo ultimos cursos</p>

    <div class="grid grid-cols-4 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 py-36 gap-x-6 gap-y-8">
      @foreach ($courses as $course)
        <article>
          <img src="{{ Storage::url($course->image->url) }}" alt="">
          <div class="px-6 py-4">{{ $course->title }}</div>
        </article>
      @endforeach
    </div>
  </section>
</x-app-layout>
