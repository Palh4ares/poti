<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-[#e7ebee] min-h-screen">

<!-- MENU FIXO -->
<nav class="fixed top-0 left-0 w-full bg-white py-4 shadow z-50">
    <div class="w-[70%] mx-auto flex justify-between items-center">

        <a href="#top">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-20">
        </a>

        <ul class="flex gap-8 text-lg text-grey-800">
            <li><a href="#top" class="hover:text-blue-400">Início</a></li>
            <li><a href="#servicos" class="hover:text-blue-400">Serviços</a></li>
            <li><a href="#sobre" class="hover:text-blue-400">Sobre</a></li>
            <li><a href="#contato" class="hover:text-blue-400">Contato</a></li>
        </ul>

    </div>
</nav>


<!-- HERO -->
<section id="top" class="relative w-full bg-[#1E1E1E]">
<div class="absolute inset-0 bg-black/50 z-10"></div>
    <!-- TEXTO CENTRALIZADO -->
    <div class="absolute inset-0 flex flex-col items-center justify-center
                text-white text-center z-20 px-4">

        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4">
            Transforme sua ideia em realidade
        </h1>

        <p class="text-lg sm:text-xl md:text-2xl">
            Desenvolvimento de sites, sistemas e apps feito com qualidade PotiguarDev.
        </p>

    </div>

    <!-- SLIDER -->
    <div class="swiper mySwiper w-full overflow-hidden">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="{{ asset('images/eventos/ConexaoODS.jpg') }}"
                     class="w-full h-[350px] sm:h-[420px] md:h-[500px] lg:h-[600px] 
                            object-cover object-[50%_32%]">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('images/eventos/CPWAracaju.jpg') }}"
                     class="w-full h-[350px] sm:h-[420px] md:h-[500px] lg:h-[600px]
                            object-cover object-[48%_40%]">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('images/eventos/GoRN.jpg') }}"
                     class="w-full h-[350px] sm:h-[420px] md:h-[500px] lg:h-[600px]
                            object-cover object-[50%_38%]">
            </div>

        </div>
    </div>

</section>



<!-- SERVIÇOS -->
<section id="servicos" class="w-full bg-[#F0F8FF] py-16">

  <h2 class="text-3xl font-bold text-center mb-10 text-blue-600">Serviços</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-[90%] mx-auto text-center">

    <div class="p-6 bg-white border border-[#D6E8FF]">
      <h3 class="text-xl font-semibold mb-2">Criação de Sites</h3>
      <p>Sites modernos, rápidos e responsivos.</p>
    </div>

    <div class="p-6 bg-white border border-[#D6E8FF]">
      <h3 class="text-xl font-semibold mb-2">Softwares</h3>
      <p>Sistemas personalizados para sua empresa.</p>
    </div>

    <div class="p-6 bg-white border border-[#D6E8FF]">
      <h3 class="text-xl font-semibold mb-2">Automação</h3>
      <p>Soluções inteligentes que economizam tempo.</p>
    </div>

  </div>
</section>


<!-- SOBRE -->
<section id="sobre" class="w-full bg-[#FFF4E6] py-16">
  <div class="w-[70%] mx-auto text-blue-600">
      <h2 class="text-3xl text-center font-bold mb-6">Sobre Nós</h2>
      <p class="text-center text-lg">
        Somos especialistas em desenvolvimento web e criamos soluções que transformam negócios.
      </p>
  </div>
</section>


<!-- DEPOIMENTOS -->
<section class="min-h-[400px] bg-[#E7FFE6] py-16">
  <div class="w-[70%] mx-auto text-blue-600">
      <h2 class="text-3xl font-bold text-center mb-10">Depoimentos</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-6 bg-white">"Excelente serviço!" – João</div>
        <div class="p-6 bg-white">"Meu site ficou perfeito!" – Maria</div>
      </div>
  </div>
</section>

<!-- EQUIPE -->
<section id="equipe" class="w-[90%] mx-auto py-20 bg-white text-blue-500">

  <h2 class="text-3xl font-bold text-center mb-12">Nossa Equipe</h2>

  <div class="swiper equipeSwiper">
    <div class="swiper-wrapper">

      <!-- ========= MEMBROS ========= -->

      <!-- 1 - Eraldo Palhares -->
      <div class="swiper-slide cursor-pointer flex flex-col items-center"
           onclick="openModal('Eraldo Palhares', 'CEO & Desenvolvedor', '{{ asset('images/equipe/Eraldo.jpg') }}')">
        <img src="{{ asset('images/equipe/Eraldo.jpg') }}"
             class="w-32 h-32 rounded-full object-cover border-4 border-blue-500 shadow">
        <p class="mt-3 font-semibold">Eraldo Palhares</p>
      </div>

      <!-- 2 - Lourival Barbosa -->
      <div class="swiper-slide cursor-pointer flex flex-col items-center"
           onclick="openModal('Lourival Barbosa', 'Co-Fundador', '{{ asset('images/equipe/Lourival.jpg') }}')">
        <img src="{{ asset('images/equipe/Lourival.jpg') }}"
             class="w-32 h-32 rounded-full object-cover border-4 border-blue-500 shadow">
        <p class="mt-3 font-semibold">Lourival Barbosa</p>
      </div>

      <!-- 3 - Wilton Araújo -->
      <div class="swiper-slide cursor-pointer flex flex-col items-center"
           onclick="openModal('Wilton Araújo', 'UX/UI Designer', '{{ asset('images/equipe/Wilton.jpg') }}')">
        <img src="{{ asset('images/equipe/Wilton.jpg') }}"
             class="w-32 h-32 rounded-full object-cover border-4 border-blue-500 shadow">
        <p class="mt-3 font-semibold">Wilton Araújo</p>
      </div>

      <!-- 4 - Juliany Fonseca -->
      <div class="swiper-slide cursor-pointer flex flex-col items-center"
           onclick="openModal('Juliany Fonseca', 'Gerente de Marketing', '{{ asset('images/equipe/juliany.jpg') }}')">
        <img src="{{ asset('images/equipe/juliany.jpg') }}"
             class="w-32 h-32 rounded-full object-cover border-4 border-blue-500 shadow">
        <p class="mt-3 font-semibold">Juliany Fonseca</p>
      </div>

      <!-- 5 - Leticia -->
      <div class="swiper-slide cursor-pointer flex flex-col items-center"
           onclick="openModal('Leticia', 'Marketing', '{{ asset('images/equipe/Leticia.jpg') }}')">
        <img src="{{ asset('images/equipe/Leticia.jpg') }}"
             class="w-32 h-32 rounded-full object-cover border-4 border-blue-500 shadow">
        <p class="mt-3 font-semibold">Leticia</p>
      </div>

      <!-- 6 - Rafael Cavalcante -->
      <div class="swiper-slide cursor-pointer flex flex-col items-center"
           onclick="openModal('Rafael Cavalcante', 'Gerente de Projeto', '{{ asset('images/equipe/Rafael.jpg') }}')">
        <img src="{{ asset('images/equipe/Rafael.jpg') }}"
             class="w-32 h-32 rounded-full object-cover border-4 border-blue-500 shadow">
        <p class="mt-3 font-semibold">Rafael Cavalcante</p>
      </div>

      <!-- 7 - Gabriel Rocha -->
      <div class="swiper-slide cursor-pointer flex flex-col items-center"
           onclick="openModal('Gabriel Rocha', 'Dev Front-end', '{{ asset('images/equipe/Gabriel.jpg') }}')">
        <img src="{{ asset('images/equipe/Gabriel.jpg') }}"
             class="w-32 h-32 rounded-full object-cover border-4 border-blue-500 shadow">
        <p class="mt-3 font-semibold">Gabriel Rocha</p>
      </div>

      <!-- 8 - Wesley Santos -->
      <div class="swiper-slide cursor-pointer flex flex-col items-center"
           onclick="openModal('Wesley Santos', 'Dev Back-end', '{{ asset('images/equipe/Wesley.jpg') }}')">
        <img src="{{ asset('images/equipe/Wesley.jpg') }}"
             class="w-32 h-32 rounded-full object-cover border-4 border-blue-500 shadow">
        <p class="mt-3 font-semibold">Wesley Santos</p>
      </div>

      <!-- 9 - Marcos Junior -->
      <div class="swiper-slide cursor-pointer flex flex-col items-center"
           onclick="openModal('Marcos Junior', 'Dev Full-Stack', '{{ asset('images/equipe/Marcos.jpg') }}')">
        <img src="{{ asset('images/equipe/Marcos.jpg') }}"
             class="w-32 h-32 rounded-full object-cover border-4 border-blue-500 shadow">
        <p class="mt-3 font-semibold">Marcos Junior</p>
      </div>

      <!-- 10 - Denilson Barreto -->
      <div class="swiper-slide cursor-pointer flex flex-col items-center"
           onclick="openModal('Denilson Barreto', 'Dev Back-end', '{{ asset('images/equipe/Denilson.jpg') }}')">
        <img src="{{ asset('images/equipe/Denilson.jpg') }}"
             class="w-32 h-32 rounded-full object-cover border-4 border-blue-500 shadow">
        <p class="mt-3 font-semibold">Denilson Barreto</p>
      </div>

      <!-- 11 - Kaio Henrique -->
      <div class="swiper-slide cursor-pointer flex flex-col items-center"
           onclick="openModal('Kaio Henrique', 'Gerente de Projeto', '{{ asset('images/equipe/Kaio.jpg') }}')">
        <img src="{{ asset('images/equipe/Kaio.jpg') }}"
             class="w-32 h-32 rounded-full object-cover border-4 border-blue-500 shadow">
        <p class="mt-3 font-semibold">Kaio Henrique</p>
      </div>

      <!-- 12 - João Victor -->
      <div class="swiper-slide cursor-pointer flex flex-col items-center"
           onclick="openModal('João Victor', 'Gerente de RH', '{{ asset('images/equipe/JoaoVictor.jpg') }}')">
        <img src="{{ asset('images/equipe/JoaoVictor.jpg') }}"
             class="w-32 h-32 rounded-full object-cover border-4 border-blue-500 shadow">
        <p class="mt-3 font-semibold">João Victor</p>
      </div>

      <!-- 13 - Carlos Alberto -->
      <div class="swiper-slide cursor-pointer flex flex-col items-center"
           onclick="openModal('Carlos Alberto', 'Analista de Requisitos', '{{ asset('images/equipe/Carlos.jpg') }}')">
        <img src="{{ asset('images/equipe/Carlos.jpg') }}"
             class="w-32 h-32 rounded-full object-cover border-4 border-blue-500 shadow">
        <p class="mt-3 font-semibold">Carlos Alberto</p>
      </div>

      <!-- ========= FIM DOS MEMBROS ========= -->

    </div>

    <!-- ARROWS -->
    <div class="swiper-button-next text-blue-500"></div>
    <div class="swiper-button-prev text-blue-500"></div>

  </div>

</section>




<!-- CONTATO -->
<section id="contato" class="w-full bg-[#E6F7FF] py-16 text-center text-blue-600">
  <h2 class="text-3xl font-bold mb-4">Entre em Contato</h2>
  <p class="mb-6 text-xl">Pronto para transformar sua ideia em realidade?</p>

  <a href="https://wa.me/5584991696213"
     class="bg-green-600 px-8 py-3 rounded-lg text-xl font-semibold text-white">
    Falar no WhatsApp
  </a>
</section>


<!-- RODAPÉ -->
<footer class="w-full bg-black py-6 text-center text-white">
  © 2025 PotiguarDev — Todos os direitos reservados
</footer>


<!-- Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<style>
    html { scroll-behavior: smooth; }
</style>

<script>
    const swiper = new Swiper(".mySwiper", {
        loop: true,
        effect: "fade",
        fadeEffect: { crossFade: true },
        speed: 1500,
        autoplay: { delay: 2500, disableOnInteraction: false }
    });
</script>
<script>
  new Swiper(".equipeSwiper", {
    slidesPerView: 5,
    spaceBetween: 30,
    slidesPerGroup: 5,

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      0: { slidesPerView: 2, slidesPerGroup: 2 },
      640: { slidesPerView: 3, slidesPerGroup: 3 },
      900: { slidesPerView: 4, slidesPerGroup: 4 },
      1200: { slidesPerView: 5, slidesPerGroup: 5 },
    }
  });
</script>

</body>
</html>
