<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'My Portfolio') }}</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- GSAP + Scroll Animations -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

  <style>
    body { font-family: ui-sans-serif, system-ui, -apple-system, 'Segoe UI', Roboto; scroll-behavior: smooth; }
    .glass { background: rgba(255,255,255,0.06); backdrop-filter: blur(6px); }
    .neon { text-shadow: 0 2px 12px rgba(99,102,241,0.25); }
  </style>
</head>

<body class="bg-gradient-to-br from-slate-900 via-indigo-900 to-black text-slate-100">

  <!-- 🔹 Navbar -->
  <nav class="fixed w-full z-40 top-0 left-0 py-4 px-6 flex items-center justify-between glass">
    <a href="#" class="flex items-center gap-3">
      <div class="w-10 h-10 rounded-full overflow-hidden ring-2 ring-indigo-500">
        <img src="{{ asset('images/profile.jpg.jpg') }}" alt="profile">
      </div>
      <div>
        <div class="font-bold">Muzammil Hussain</div>
        <div class="text-xs text-slate-300">Full-stack Web Developer</div>
      </div>
    </a>
    <div class="hidden md:flex gap-6 items-center">
      <a href="#about" class="hover:underline">About</a>
      <a href="#projects" class="hover:underline">Projects</a>
      <a href="#skills" class="hover:underline">Skills</a>
      <a href="#contact" class="px-4 py-2 rounded-md bg-indigo-600 hover:bg-indigo-500">Contact</a>
    </div>
  </nav>

  <!-- 🔹 Hero Section -->
  <header class="min-h-screen flex items-center justify-center pt-24" id="about">
    <div class="container mx-auto px-6 py-24 flex flex-col md:flex-row items-center gap-10">
      <div class="md:w-1/2 text-center md:text-left">
        <h1 class="text-5xl font-extrabold neon" id="hero-title">Hi, I'm <span class="text-indigo-400">Muzammil</span></h1>
        <p class="mt-6 text-lg text-slate-300">I build responsive, animated web apps using Laravel, Vue & Tailwind.</p>
        <div class="mt-8 flex gap-4 justify-center md:justify-start">
          <a href="#projects" class="px-6 py-3 bg-indigo-500 rounded-md shadow-lg hover:scale-105 transition">View Projects</a>
          <a href="#contact" class="px-6 py-3 border border-slate-500 rounded-md hover:bg-slate-800 transition">Hire Me</a>
        </div>
      </div>

      <div class="md:w-1/2 flex justify-center md:justify-end">
        <div class="w-72 h-72 md:w-96 md:h-96 rounded-2xl overflow-hidden ring-4 ring-indigo-600 hover:rotate-3 transition" id="profile-card">
          <img src="{{ asset('images/profile.jpg.jpg') }}" alt="profile" class="object-cover w-full h-full">
        </div>
      </div>
    </div>
  </header>

  <!-- 🔹 Projects Section -->
  <section id="projects" class="py-24 container mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-8">Featured Projects</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach($projects as $p)
      <a href="{{ $p['url'] }}" class="block p-6 rounded-2xl glass hover:scale-105 transition" data-sr>
        <img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" class="w-full h-40 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-semibold">{{ $p['title'] }}</h3>
        <p class="text-slate-300 mt-2">{{ $p['desc'] }}</p>
      </a>
      @endforeach
    </div>
  </section>

  <!-- 🔹 Skills Section -->
  <section id="skills" class="py-24 bg-slate-900/30">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-10">My Skills</h2>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
        @php
          $skills = ['Laravel', 'PHP', 'JavaScript', 'HTML', 'CSS', 'MySQL', 'Git', 'Firebase', 'Flutter', 'TailwindCSS'];
        @endphp
        @foreach($skills as $skill)
        <div class="glass py-4 rounded-xl shadow hover:scale-105 transition" data-sr>
          <p class="font-semibold">{{ $skill }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- 🔹 Contact Section -->
  <section id="contact" class="py-16 bg-slate-900/40 text-center">
    <h3 class="text-2xl font-bold mb-4">Let's build something great together</h3>
    <p class="text-slate-300 mb-6">
      Email: <a href="mailto:hussain03239772314@gmail.com" class="underline">hussain03239772314@gmail.com</a>
    </p>

    <!-- ✅ Resume Download Button -->
    <a href="{{ route('resume.download') }}" 
       class="px-6 py-3 rounded-md bg-indigo-600 hover:bg-indigo-500 transition">
       Download Resume (PDF)
    </a>
  </section>

  <!-- 🔹 Animations -->
  <script>
    ScrollReveal().reveal('[data-sr]', { 
      distance: '40px', 
      duration: 800, 
      easing: 'cubic-bezier(.2,.8,.2,1)', 
      interval: 100 
    });

    gsap.from('#hero-title', { y: 40, opacity: 0, duration: 1 });
    gsap.to('#profile-card', { rotation: 3, duration: 1 });
  </script>
</body>
</html>
