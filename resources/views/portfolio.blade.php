@extends('components.layout')

@section('content')

<section class="pf-section">
    <div class="pf-container">
        <div class="pf-header">
            <p class="pf-eyebrow">Our Work</p>
            <h1 class="pf-title">Projects that speak for themselves</h1>
            <p class="pf-subtitle">Websites and apps we've built for clients — real products, real results.</p>
        </div>

        <div class="pf-filters">
            <button class="pf-filter active" data-filter="all">All</button>
            <button class="pf-filter" data-filter="website">Websites</button>
            <button class="pf-filter" data-filter="app">Mobile Apps</button>
        </div>

        <div class="pf-grid">
            @forelse($portfolios as $project)
                <a
                    href="{{ $project->link ?: '#' }}"
                    @if($project->link) target="_blank" rel="noopener noreferrer" @endif
                    class="pf-item {{ $project->category }}-project"
                    data-category="{{ $project->category }}"
                    style="--i: {{ $loop->index }}"
                >
                    <article class="pf-card">
                        <div class="pf-media">
                            <span class="pf-badge pf-badge-{{ $project->category }}">
                                {{ $project->category === 'app' ? 'Mobile App' : 'Website' }}
                            </span>
                            <img
                                src="{{ $project->imageUrl() }}"
                                alt="{{ $project->title }}"
                                loading="lazy"
                            >
                            <div class="pf-media-overlay">
                                <span class="pf-view">
                                    View project
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M7 17L17 7M17 7H7M17 7V17"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="pf-body">
                            <h3 class="pf-name">{{ $project->title }}</h3>
                            <p class="pf-desc">{{ $project->description }}</p>
                        </div>
                    </article>
                </a>
            @empty
                <div class="pf-empty">
                    <h3>Projects coming soon</h3>
                    <p>Add your first project from the admin panel.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<style>
    :root {
        --pf-ink: #0f172a;
        --pf-muted: #64748b;
        --pf-line: #e2e8f0;
        --pf-surface: #f8fafc;
        --pf-teal: #0d9488;
        --pf-teal-dark: #0f766e;
        --pf-amber: #f59e0b;
        --pf-card: #ffffff;
    }

    .pf-section {
        position: relative;
        padding: 5rem 0 6rem;
        background:
            radial-gradient(ellipse 80% 50% at 10% -10%, rgba(13, 148, 136, 0.12), transparent 55%),
            radial-gradient(ellipse 60% 40% at 95% 10%, rgba(245, 158, 11, 0.1), transparent 50%),
            linear-gradient(180deg, #ffffff 0%, var(--pf-surface) 100%);
        overflow: hidden;
        min-height: 80vh;
    }

    .pf-container {
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 1.5rem;
        position: relative;
        z-index: 1;
    }

    .pf-header {
        text-align: center;
        max-width: 640px;
        margin: 0 auto 2.75rem;
    }

    .pf-eyebrow {
        display: inline-block;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--pf-teal);
        margin-bottom: 0.85rem;
    }

    .pf-title {
        font-family: Georgia, 'Times New Roman', serif;
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 700;
        line-height: 1.15;
        color: var(--pf-ink);
        margin: 0 0 1rem;
        letter-spacing: -0.02em;
    }

    .pf-subtitle {
        font-size: 1.05rem;
        line-height: 1.65;
        color: var(--pf-muted);
        margin: 0;
    }

    .pf-filters {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-bottom: 2.75rem;
    }

    .pf-filter {
        border: 1px solid var(--pf-line);
        background: #fff;
        color: var(--pf-muted);
        font-size: 0.92rem;
        font-weight: 600;
        padding: 0.65rem 1.35rem;
        border-radius: 999px;
        cursor: pointer;
        transition: all 0.25s ease;
    }

    .pf-filter:hover {
        border-color: var(--pf-teal);
        color: var(--pf-teal-dark);
    }

    .pf-filter.active {
        background: linear-gradient(135deg, var(--pf-teal) 0%, #14b8a6 100%);
        border-color: transparent;
        color: #fff;
        box-shadow: 0 8px 20px rgba(13, 148, 136, 0.28);
    }

    .pf-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 1.75rem;
    }

    .pf-item {
        display: block;
        text-decoration: none;
        color: inherit;
        opacity: 0;
        animation: pfRise 0.55s ease forwards;
        animation-delay: calc(var(--i, 0) * 0.07s);
        transition: opacity 0.35s ease, transform 0.35s ease;
    }

    .pf-item.hidden {
        display: none;
    }

    @keyframes pfRise {
        from { opacity: 0; transform: translateY(18px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pf-card {
        height: 100%;
        background: var(--pf-card);
        border: 1px solid var(--pf-line);
        border-radius: 18px;
        overflow: hidden;
        transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
    }

    .pf-item:hover .pf-card {
        transform: translateY(-8px);
        border-color: rgba(13, 148, 136, 0.35);
        box-shadow: 0 22px 40px rgba(15, 23, 42, 0.1);
    }

    .pf-media {
        position: relative;
        aspect-ratio: 16 / 10;
        background: #e2e8f0;
        overflow: hidden;
    }

    .pf-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .pf-item:hover .pf-media img {
        transform: scale(1.05);
    }

    .pf-media-overlay {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: flex-end;
        justify-content: flex-start;
        padding: 1.1rem;
        background: linear-gradient(to top, rgba(15, 23, 42, 0.55), transparent 55%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .pf-item:hover .pf-media-overlay {
        opacity: 1;
    }

    .pf-view {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        color: #fff;
        font-size: 0.85rem;
        font-weight: 600;
        background: rgba(255, 255, 255, 0.16);
        border: 1px solid rgba(255, 255, 255, 0.35);
        backdrop-filter: blur(8px);
        padding: 0.45rem 0.85rem;
        border-radius: 999px;
    }

    .pf-badge {
        position: absolute;
        top: 0.9rem;
        left: 0.9rem;
        z-index: 2;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.04em;
        text-transform: uppercase;
        padding: 0.35rem 0.7rem;
        border-radius: 999px;
        color: #fff;
    }

    .pf-badge-website {
        background: var(--pf-teal);
    }

    .pf-badge-app {
        background: linear-gradient(135deg, #f59e0b, #ea580c);
    }

    .pf-body {
        padding: 1.35rem 1.4rem 1.5rem;
    }

    .pf-name {
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--pf-ink);
        margin: 0 0 0.55rem;
        letter-spacing: -0.01em;
    }

    .pf-desc {
        margin: 0;
        color: var(--pf-muted);
        font-size: 0.95rem;
        line-height: 1.6;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .pf-empty {
        grid-column: 1 / -1;
        text-align: center;
        padding: 4rem 1rem;
        color: var(--pf-muted);
        border: 1px dashed var(--pf-line);
        border-radius: 18px;
        background: #fff;
    }

    .pf-empty h3 {
        color: var(--pf-ink);
        margin: 0 0 0.5rem;
    }

    @media (max-width: 768px) {
        .pf-section {
            padding: 3.5rem 0 4.5rem;
        }

        .pf-grid {
            grid-template-columns: 1fr;
            gap: 1.25rem;
        }

        .pf-filters {
            gap: 0.4rem;
        }

        .pf-filter {
            padding: 0.55rem 1rem;
            font-size: 0.85rem;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterBtns = document.querySelectorAll('.pf-filter');
    const items = document.querySelectorAll('.pf-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            items.forEach(item => {
                const match = filter === 'all' || item.dataset.category === filter;
                item.classList.toggle('hidden', !match);
            });
        });
    });
});
</script>

@endsection
