<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hippolyte Durand — Data & AI Apprentice @ SNCF</title>
    <meta name="description" content="Hippolyte Durand — Data & AI apprentice at SNCF. Built an MCP with RAG at Tetra7, an SQL-capable AI agent, and a document classifier. Seeking a 3-month internship (May–July 2026).">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900 dark:bg-gray-950 dark:text-gray-100 antialiased">
<div class="z-0 absolute inset-x-0 transform-gpu overflow-hidden blur-2xl" aria-hidden="true">
    <div class="relative left-[calc(50%-9rem)] aspect-[1155/678] w-[36.125rem] rotate-[30deg]
            bg-orange-300 from-orange-300 to-orange-300 opacity-40
            sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
         style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
</div>
<!-- Header / Hero -->
<header class="border-b border-gray-100 dark:border-gray-800 z-50">
    <div class="max-w-6xl mx-auto px-6 pt-16 pb-14">
        <div class="flex flex-col items-center text-center">
            <!-- Optional avatar -->
            <!-- <img src="/images/avatar.jpg" alt="Hippolyte Durand" class="w-20 h-20 rounded-full ring-1 ring-gray-200 dark:ring-gray-700 mb-6"> -->

            <h1 class="text-4xl md:text-5xl font-bold tracking-tight">
                Hippolyte Durand
            </h1>

            <p class="mt-3 text-lg text-gray-600 dark:text-gray-300">
                Data & AI Apprentice @ SNCF • ECE Paris (Ingénieur cycle)
            </p>

            <p class="mt-6 max-w-3xl text-base md:text-lg text-gray-700 dark:text-gray-300 z-40">
                I design pragmatic AI systems, from retrieval-augmented pipelines to autonomous agents that can speak SQL.
                Previously at <span class="font-medium">Tetra7</span>, I implemented a lightweight <span class="font-medium">Model Context Protocol (MCP)</span> setup: an MCP server exposing <em>tools</em>, <em>resources</em>, and <em>prompts</em> to the model client.
                I paired it with <span class="font-medium">RAG</span> (embeddings + vector search), a schema-aware <span class="font-medium">SQL agent</span> for safe, read-only queries, and a production-grade <span class="font-medium">document classifier</span>.
                I’m currently an apprentice at <span class="font-medium">SNCF Voyageurs</span> and I’m seeking a <span class="font-semibold">3-month internship (May–July 2026)</span>.

            </p>

            <div class="mt-8 flex flex-wrap items-center justify-center gap-3  z-40">
                  <span class="inline-flex items-center gap-2 rounded-full border border-emerald-500 dark:border-gray-800 px-3 py-1 text-sm">
                    <span class="inline-block h-2 w-2 rounded-full bg-emerald-500"></span> Available May–July 2026
                  </span>
                        <span class="inline-flex items-center gap-2 rounded-full border border-white dark:border-gray-800 px-3 py-1 text-sm">
                    Apprenticeship @ SNCF
                  </span>
                        <span class="inline-flex items-center gap-2 rounded-full border border-gray-400 dark:border-gray-800 px-3 py-1 text-sm">
                    MCP • RAG • SQL Agent • Classifier
                  </span>
            </div>

            <div class="mt-8 flex flex-wrap justify-center gap-4 z-40">
                <a href="mailto:durandhippolyte@gmail.com" class="inline-flex items-center rounded-md border border-gray-300 dark:border-gray-700 px-4 py-2 text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-900">
                    Contact
                </a>
                <a href="https://github.com/dhippo" target="_blank" class="inline-flex items-center rounded-md bg-gray-900 text-white dark:bg-white dark:text-gray-900 px-4 py-2 text-sm font-semibold hover:opacity-90">
                    GitHub
                </a>
                <a href="https://linkedin.com/in/hippolyte-d-2a03b32b3/" target="_blank" class="inline-flex items-center rounded-md border border-gray-300 dark:border-gray-700 px-4 py-2 text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-900">
                    LinkedIn
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Key Highlights -->
<section class="max-w-6xl mx-auto px-6 py-14">
    <h2 class="text-2xl md:text-3xl font-bold tracking-tight">What can I do ?</h2>
    <div class="mt-8 grid md:grid-cols-3 gap-6">
        <!-- Card -->
        <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5 z-40">
            <h3 class="font-semibold">Model Context Protocol (MCP) orchestration + RAG</h3>
            <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">
                Built an <strong>MCP</strong> server that advertises <em>tools</em>, <em>resources</em>, and <em>prompts</em> to an MCP client with
                capabilities. Implemented tool discovery. Integrated a <strong>RAG</strong>
                layer (embeddings + vector index) to serve contextual resources, enabling the agent to select and invoke the right tool per request.
            </p>
        </div>

        <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5">
            <h3 class="font-semibold">Laravel + Livewire Dashboards & APIs</h3>
            <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">
                Built <strong>clean</strong> Laravel backends with RESTful endpoints, request validation, policies, and expressive Eloquent relations.
                Shipped Livewire dashboards with server-driven interactions, eager-loaded metrics, and background <strong>queues</strong> (Redis) for long-running jobs.
                Added caching and structured logs to keep p95 fast and debugging predictable.
            </p>
        </div>

        <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5">
            <h3 class="font-semibold">Document Classifier</h3>
            <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">
                Production classifier for industry documents with robust PDF/text parsing, field normalization, and calibrated confidence scores.
                Added an evaluation harness (stratified sets, error breakdowns) and simple <strong>thresholding</strong> to balance precision/recall.
                Exposed the model behind an HTTP endpoint with idempotent requests and audit trails for reliable ops.
            </p>
        </div>

    </div>
</section>

<!-- Experience -->
<section class="bg-gray-50 dark:bg-gray-900/40 border-y border-gray-100 dark:border-gray-800">
    <div class="max-w-6xl mx-auto px-6 py-14">
        <h2 class="text-2xl md:text-3xl font-bold tracking-tight">Experience</h2>

        <div class="mt-8 grid md:grid-cols-2 gap-6">
            <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5">
                <div class="flex items-baseline justify-between">
                    <h3 class="font-semibold">SNCF Voyageurs — Apprentice (Data & AI)</h3>
                    <span class="text-sm text-gray-500 dark:text-gray-400">2025–2028</span>
                </div>
                <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">
                    AMOA within the SI Essieux (DSI Matériel). Bridging business needs and data/AI features, writing specs, and
                    aligning stakeholders around reliable, auditable solutions.
                </p>
            </div>

            <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5">
                <div class="flex items-baseline justify-between">
                    <h3 class="font-semibold">Tetra7 — AI Engineer (Projects)</h3>
                    <span class="text-sm text-gray-500 dark:text-gray-400">2024–2025</span>
                </div>
                <ul class="mt-2 space-y-2 text-sm text-gray-700 dark:text-gray-300">
                    <li>• MCP with RAG over internal docs and specs</li>
                    <li>• SQL agent with schema-aware query planning</li>
                    <li>• Document classifier with evaluation suite</li>
                    <li>• Laravel + Livewire dashboards and APIs</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Skills -->
<section class="max-w-6xl mx-auto px-6 py-14">
    <h2 class="text-2xl md:text-3xl font-bold tracking-tight">Skills</h2>
    <div class="mt-8 grid md:grid-cols-3 gap-6">
        <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5">
            <h3 class="font-semibold">Backend & Data</h3>
            <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">
                Laravel, PHP, Python, FastAPI, SQL (MySQL/PostgreSQL), ClickHouse basics, Redis, queues.
            </p>
        </div>
        <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5">
            <h3 class="font-semibold">AI & Retrieval</h3>
            <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">
                RAG pipelines, embeddings, vector search, prompt design, evaluation, lightweight agents.
            </p>
        </div>
        <div class="rounded-xl border border-gray-200 dark:border-gray-800 p-5">
            <h3 class="font-semibold">Ops & Tooling</h3>
            <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">
                Docker, Plesk, Herd, GitHub Actions, monitoring and structured logging.
            </p>
        </div>
    </div>
</section>

<!-- Contact / CTA -->
<section class="bg-gray-50 dark:bg-gray-900/40 border-t border-gray-100 dark:border-gray-800">
    <div class="max-w-6xl mx-auto px-6 py-14 text-center">
        <h2 class="text-2xl md:text-3xl font-bold tracking-tight">Open to a 3-month internship (May–July 2026)</h2>
        <p class="mt-3 text-gray-700 dark:text-gray-300">
            Paris or remote. I value clear specs, measurable outcomes, and fast feedback loops.
        </p>
        <div class="mt-7 flex items-center justify-center gap-4">
            <a href="mailto:durandhippolyte@gmail.com" class="inline-flex items-center rounded-md bg-gray-900 text-white dark:bg-white dark:text-gray-900 px-4 py-2 text-sm font-semibold hover:opacity-90">
                Get in touch
            </a>
            <a href="https://dhippo.fr" target="_blank" class="inline-flex items-center rounded-md border border-gray-300 dark:border-gray-700 px-4 py-2 text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-900">
                Portfolio
            </a>
        </div>
        <p class="mt-6 text-xs text-gray-500">
            Also on <a class="underline hover:no-underline" target="_blank" href="https://github.com/dhippo">GitHub</a> and
            <a class="underline hover:no-underline" target="_blank" href="https://linkedin.com/in/hippolyte-d-2a03b32b3/">LinkedIn</a>.
        </p>
    </div>
</section>

<footer class="py-10 text-center text-sm text-gray-500">
    © 2025 Hippolyte Durand
</footer>
</body>
</html>
