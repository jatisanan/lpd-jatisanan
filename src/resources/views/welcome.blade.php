@php
    $school_name = 'Lembaga Pendidikan dan Dakwah Jati Sanan';
    $short_name = 'LPD Jati Sanan';
    $tagline = "Membangun Generasi Cerdas, dan Berkarakter";

    $address = 'Jl. KH Shodiq Damanhuri No. 2, RT. 002 RW. 002, Lingkungan Jati, Kelurahan Kamulan, Kecamatan Talun, Kabupaten Blitar, Kode Pos 66183';

    $phone = '+62 851-5181-9086';
    $phone_clean = '6285151819086';
    $yayasan = 'Lembaga Pendidikan dan Dakwah Jati Sanan Kamulan';

    $units = [
        [
            'number' => '01',
            'short' => 'Pondok Pesantren',
            'desc' => "Mencetak Generasi yang berakhlak mulia, mandiri, dan berwawasan global melalui pendidikan pesantren berlandaskan nilai Islam rahmatan lil 'alamin.",
            'url' => null,
            'logo' => 'https://lh3.googleusercontent.com/d/1AT7mQVHRwDln28AED21vr6E16fHdHYzV',
            'category' => 'PENDIDIKAN KEAGAMAAN',
        ],
        [
            'number' => '02',
            'short' => 'Madrasah Diniyah',
            'desc' => "Membangun fondasi keagamaan melalui pembelajaran Al-Qur'an, hadits, fiqih, dan akhlak sebagai bekal kehidupan santri.",
            'url' => null,
            'logo' => 'https://lh3.googleusercontent.com/d/1NNCWV7G8AdonN7TKJDbZXtl9zBKt2hVT',
            'category' => 'PENDALAMAN ILMU AGAMA',
        ],
        [
            'number' => '03',
            'short' => 'SMP Al Jumhuri',
            'desc' => 'Pendidikan menengah pertama yang memadukan kurikulum nasional dengan nilai-nilai pesantren untuk membentuk generasi cerdas dan berkarakter.',
            'url' => 'https://smp.jatisanan.my.id',
            'logo' => 'https://lh3.googleusercontent.com/d/1NMplWA0l56AxXkgyZPE9G9jdTUmwB9dh',
            'category' => 'PENDIDIKAN MENENGAH PERTAMA',
        ],
        [
            'number' => '04',
            'short' => 'SMA Al Jumhuri',
            'desc' => 'Mempersiapkan generasi unggul melalui penguatan akademik, keagamaan, dan keterampilan untuk menghadapi tantangan masa depan.',
            'url' => null,
            'logo' => 'https://lh3.googleusercontent.com/d/1KVrNkqNnPktA_F7QKbIV5tYEvHcbH9Yp',
            'category' => 'PENDIDIKAN MENENGAH ATAS',
        ],
    ];

    $spmb = [
        'name' => 'SPMB Jati Sanan',
        'desc' => 'Langkah pertama menuju pendidikan yang berilmu, berakhlak, dan berkarakter. Temukan lingkungan belajar yang tepat bagi putra-putri Anda.',
        'url' => 'https://spmb.jatisanan.my.id',
    ];

    $values = [
        [
            'number' => '01',
            'title' => 'Pendidikan',
            'desc' => 'Mengintegrasikan ilmu agama dan pengetahuan umum untuk membangun wawasan yang luas.',
            'icon' => '✳',
        ],
        [
            'number' => '02',
            'title' => 'Dakwah',
            'desc' => "Menanamkan nilai Islam yang membawa rahmat, kedamaian, dan manfaat bagi sesama.",
            'icon' => '۞',
        ],
        [
            'number' => '03',
            'title' => 'Karakter',
            'desc' => 'Membiasakan akhlak mulia, kemandirian, kedisiplinan, dan tanggung jawab.',
            'icon' => '✦',
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    <title>{{ $school_name }} — Portal Resmi</title>
    <meta name="description" content="{{ $tagline }} — {{ $school_name }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="https://lh3.googleusercontent.com/d/1AT7mQVHRwDln28AED21vr6E16fHdHYzV">
    <link rel="apple-touch-icon" href="https://lh3.googleusercontent.com/d/1AT7mQVHRwDln28AED21vr6E16fHdHYzV">

    <meta name="theme-color" content="#103729">

    <script>
        (() => {
            try {
                const saved = localStorage.getItem('lpd-theme');
                const preferred = window.matchMedia('(prefers-color-scheme: dark)').matches
                    ? 'dark' : 'light';

                document.documentElement.dataset.theme =
                    saved === 'dark' || saved === 'light' ? saved : preferred;
            } catch (e) {
                document.documentElement.dataset.theme = 'light';
            }
        })();
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root,
        html[data-theme="light"] {
            color-scheme: light;

            --bg: #f7f5ef;
            --surface: #ffffff;
            --surface-soft: #efeee5;
            --surface-green: #e8eee6;

            --ink: #19392e;
            --ink-strong: #102d23;
            --body: #59665e;
            --muted: #788178;

            --green: #174b38;
            --green-deep: #103729;
            --green-light: #e4eee3;
            --gold: #c9a85a;
            --gold-soft: #eee1bd;
            --line: #dedfd5;

            --shadow: 0 16px 45px rgba(28, 47, 35, .07);
            --shadow-hover: 0 22px 55px rgba(28, 47, 35, .13);
            --shadow-soft: 0 4px 18px rgba(28, 47, 35, .05);
        }

        html[data-theme="dark"] {
            color-scheme: dark;

            --bg: #101613;
            --surface: #19211c;
            --surface-soft: #222a24;
            --surface-green: #202d24;

            --ink: #dce8dc;
            --ink-strong: #f0f4ed;
            --body: #aebbb0;
            --muted: #87968a;

            --green: #8db99a;
            --green-deep: #0d241a;
            --green-light: #24392b;
            --gold: #d9bd77;
            --gold-soft: #3c3524;
            --line: #303b32;

            --shadow: 0 16px 45px rgba(0, 0, 0, .18);
            --shadow-hover: 0 22px 55px rgba(0, 0, 0, .32);
            --shadow-soft: 0 4px 18px rgba(0, 0, 0, .25);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--body);
            font-family: 'DM Sans', sans-serif;
            overflow-x: hidden;
            transition: background-color .3s, color .3s;
        }

        a {
            text-decoration: none;
        }

        button {
            font: inherit;
        }

        .wrap {
            width: min(1160px, calc(100% - 48px));
            margin-inline: auto;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--green);
        }

        .eyebrow::before {
            content: '';
            width: 26px;
            height: 1px;
            background: var(--gold);
        }

        .section-title {
            color: var(--ink-strong);
            font-family: 'Playfair Display', serif;
            font-size: clamp(32px, 4vw, 49px);
            line-height: 1.16;
            font-weight: 600;
            letter-spacing: -.035em;
        }

        .section-copy {
            color: var(--body);
            font-size: 14px;
            line-height: 1.95;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            min-height: 48px;
            padding: 13px 21px;
            border: 1px solid transparent;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 700;
            transition: background .25s, color .25s, border-color .25s, transform .25s;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-gold {
            background: var(--gold);
            color: #18372a;
        }

        .btn-gold:hover {
            background: #dfc57f;
        }

        .btn-outline {
            border-color: rgba(255, 255, 255, .45);
            color: #fff;
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, .1);
        }

        /* ============================================ */
        /* 🎯 HEADER — SATU BLOK HIJAU GELAP             */
        /* ============================================ */

        .site-header {
            position: sticky;
            top: 0;
            z-index: 50;
            background: var(--green-deep);
            border-bottom: 1px solid rgba(201, 168, 90, .15);
            transition: background-color .3s ease;
        }

        .nav-inner {
            min-height: 78px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 0;
        }

        .brand-mark {
            width: 42px;
            height: 42px;
            flex: 0 0 auto;
            display: grid;
            place-items: center;
            transition: transform .3s;
        }

        .brand-mark img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
        }

        .brand:hover .brand-mark {
            transform: scale(1.08);
        }

        .brand-name {
            color: #ffffff;
            font-family: 'Manrope', sans-serif;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: -.02em;
            line-height: 1.2;
        }

        .brand-caption {
            margin-top: 3px;
            color: #a8bfae;
            font-size: 9px;
            letter-spacing: .1em;
            text-transform: uppercase;
            line-height: 1.2;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 26px;
        }

        .nav-links a {
            position: relative;
            color: #d0ddd0;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .02em;
            transition: color .2s;
            padding-block: 4px;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: -2px;
            height: 1.5px;
            background: var(--gold);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .3s cubic-bezier(.4, 0, .2, 1);
        }

        .nav-links a:hover {
            color: var(--gold);
        }

        .nav-links a:hover::after {
            transform: scaleX(1);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .theme-toggle {
            display: grid;
            place-items: center;
            width: 38px;
            height: 38px;
            border: 1px solid rgba(255, 255, 255, .15);
            border-radius: 50%;
            background: rgba(255, 255, 255, .06);
            color: #e4cb87;
            cursor: pointer;
            font-size: 16px;
            transition: transform .3s, border-color .3s, box-shadow .3s, background .3s;
        }

        .theme-toggle:hover {
            border-color: var(--gold);
            background: rgba(201, 168, 90, .15);
            transform: rotate(15deg) scale(1.05);
            box-shadow: 0 0 0 4px rgba(201, 168, 90, .12);
        }

        .nav-register {
            min-height: 42px;
            padding: 10px 20px;
            background: var(--gold);
            color: #18372a;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .04em;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background .25s, transform .25s;
        }

        .nav-register:hover {
            background: #dfc57f;
            transform: translateY(-1px);
        }

        /* ============================================ */
        /* HERO                                          */
        /* ============================================ */

        .hero {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            background: var(--green-deep);
            color: #fff;
        }

        .hero::before {
            position: absolute;
            z-index: -1;
            inset: 0;
            content: '';
            background:
                linear-gradient(90deg,
                    rgba(11, 39, 28, .97) 0%,
                    rgba(11, 39, 28, .91) 39%,
                    rgba(11, 39, 28, .48) 70%,
                    rgba(11, 39, 28, .3) 100%),
                url('https://lh3.googleusercontent.com/d/19c5Ctrz-QAP3-bMbUobL4-1sgzbyLrGk') center 48% / cover no-repeat;
            transition: background .4s ease;
        }

        html[data-theme="light"] .hero::before {
            background:
                linear-gradient(90deg,
                    rgba(11, 39, 28, .70) 0%,
                    rgba(11, 39, 28, .50) 39%,
                    rgba(11, 39, 28, .20) 70%,
                    rgba(11, 39, 28, .05) 100%),
                url('https://lh3.googleusercontent.com/d/19c5Ctrz-QAP3-bMbUobL4-1sgzbyLrGk') center 48% / cover no-repeat;
        }

        .hero::after {
            position: absolute;
            z-index: -1;
            right: -100px;
            bottom: -220px;
            width: 470px;
            height: 470px;
            border: 1px solid rgba(216, 190, 119, .25);
            border-radius: 50%;
            content: '';
            box-shadow:
                0 0 0 45px rgba(216, 190, 119, .035),
                0 0 0 90px rgba(216, 190, 119, .025);
            pointer-events: none;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.25fr) minmax(230px, .75fr);
            align-items: center;
            gap: 54px;
            min-height: 560px;
            padding-block: 78px 130px;
        }

        .hero-kicker {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 25px;
            color: #e4cb87;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
        }

        .hero-kicker span {
            width: 30px;
            height: 1px;
            background: #d8bd77;
        }

        .hero h1 {
            max-width: 720px;
            margin: 0;
            color: #fff;
            font-family: 'Playfair Display', serif;
            font-size: clamp(42px, 5.4vw, 70px);
            line-height: 1.1;
            font-weight: 600;
            letter-spacing: -.04em;
        }

        .hero h1 em {
            color: #dfc47c;
            font-weight: 500;
        }

        .hero-description {
            max-width: 520px;
            margin-top: 24px;
            color: rgba(255, 255, 255, .78);
            font-size: 14px;
            line-height: 1.95;
        }

        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 32px;
        }

        .hero-note {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 42px;
            color: rgba(255, 255, 255, .65);
            font-size: 10px;
            letter-spacing: .04em;
        }

        .hero-note::before {
            width: 34px;
            height: 1px;
            background: var(--gold);
            content: '';
        }

        .hero-side {
            align-self: end;
            justify-self: end;
            width: min(100%, 300px);
            padding: 26px;
            border: 1px solid rgba(233, 215, 160, .34);
            background: rgba(14, 44, 32, .62);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            transition: transform .4s, box-shadow .4s;
        }

        .hero-side:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, .25);
        }

        .hero-side-label {
            color: #dfc47c;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
        }

        .hero-side h2 {
            margin: 18px 0 12px;
            color: #fff;
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            line-height: 1.25;
            font-weight: 500;
        }

        .hero-side p {
            margin: 0;
            color: rgba(255, 255, 255, .7);
            font-size: 12px;
            line-height: 1.9;
        }

        .hero-side-line {
            height: 1px;
            margin: 22px 0;
            background: rgba(255, 255, 255, .17);
        }

        .hero-side-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            color: #e4cb87;
            font-size: 10px;
            font-weight: 700;
        }

        /* ============================================ */
        /* STATISTICS — OVERLAP HERO                    */
        /* ============================================ */

        .stats {
            position: relative;
            z-index: 2;
            margin-top: -70px;
            padding-block: 0 40px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
        }

        .stat {
            position: relative;
            display: flex;
            align-items: center;
            gap: 17px;
            padding: 26px 28px;
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 14px;
            box-shadow: var(--shadow);
            transition: transform .35s cubic-bezier(.4, 0, .2, 1),
                        box-shadow .35s,
                        border-color .35s;
        }

        .stat:hover {
            transform: translateY(-6px);
            border-color: var(--gold);
            box-shadow: var(--shadow-hover);
        }

        .stat-number {
            color: var(--green);
            font-family: 'Playfair Display', serif;
            font-size: 38px;
            line-height: 1;
            transition: transform .35s;
        }

        .stat:hover .stat-number {
            transform: scale(1.08);
        }

        .stat-label {
            color: var(--ink);
            font-size: 11px;
            font-weight: 800;
        }

        .stat-caption {
            margin-top: 6px;
            color: var(--muted);
            font-size: 10px;
            line-height: 1.5;
        }

        /* ============================================ */
        /* UNITS                                         */
        /* ============================================ */

        .units-section {
            padding-block: 60px 112px;
        }

        .section-heading {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 35px;
            margin-bottom: 44px;
        }

        .section-heading-main {
            max-width: 580px;
        }

        .section-heading .section-title {
            margin-top: 16px;
        }

        .section-heading .section-copy {
            max-width: 365px;
            margin-bottom: 5px;
        }

        .units-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .unit-card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-height: 265px;
            padding: 30px;
            overflow: hidden;
            border: 1px solid var(--line);
            background: var(--surface);
            border-radius: 16px;
            transition: border-color .35s, box-shadow .35s, transform .35s;
        }

        .unit-card-link {
            color: inherit;
            cursor: pointer;
        }

        .unit-card-link:hover {
            transform: translateY(-6px);
            border-color: var(--gold);
            box-shadow: var(--shadow);
        }

        .unit-card-link:hover .unit-icon {
            transform: rotate(-6deg) scale(1.05);
            background: var(--green-light);
            border-color: var(--gold);
        }

        .unit-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }

        .unit-category {
            color: var(--muted);
            font-size: 9px;
            font-weight: 800;
            letter-spacing: .12em;
            text-transform: uppercase;
        }

        .unit-number {
            color: var(--gold);
            font-family: 'Playfair Display', serif;
            font-size: 25px;
        }

        .unit-title-row {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-top: 25px;
        }

        .unit-icon {
            display: grid;
            place-items: center;
            width: 56px;
            height: 56px;
            flex: 0 0 auto;
            border: 1px solid var(--line);
            background: var(--surface-green);
            border-radius: 12px;
            overflow: hidden;
            transition: transform .35s, background .35s, border-color .35s;
        }

        .unit-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 6px;
            display: block;
        }

        .unit-card h3 {
            margin: 0;
            color: var(--ink-strong);
            font-family: 'Playfair Display', serif;
            font-size: 23px;
            line-height: 1.25;
            font-weight: 600;
        }

        .unit-card > p {
            margin: 20px 0 24px;
            color: var(--body);
            font-size: 12px;
            line-height: 1.9;
        }

        .unit-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-top: auto;
            padding-top: 17px;
            border-top: 1px solid var(--line);
        }

        .unit-status {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            color: var(--muted);
            font-size: 10px;
            font-weight: 700;
        }

        .unit-status i {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #c6a95e;
            transition: transform .35s;
        }

        .unit-status.active i {
            background: #5a9b70;
            animation: pulse-dot 2s infinite;
        }

        @keyframes pulse-dot {
            0%, 100% { box-shadow: 0 0 0 0 rgba(90, 155, 112, .5); }
            50% { box-shadow: 0 0 0 6px rgba(90, 155, 112, 0); }
        }

        .unit-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--green);
            font-size: 11px;
            font-weight: 800;
            transition: color .2s;
        }

        .unit-link span {
            transition: transform .25s;
        }

        .unit-card-link:hover .unit-link {
            color: var(--gold);
        }

        .unit-card-link:hover .unit-link span {
            transform: translate(3px, -3px);
        }

        .unit-link.disabled {
            color: var(--muted);
            cursor: default;
        }

        /* ============================================ */
        /* ABOUT                                         */
        /* ============================================ */

        .about-section {
            padding-block: 95px;
            background: var(--surface-soft);
            border-block: 1px solid var(--line);
        }

        .about-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            align-items: center;
            gap: 85px;
        }

        .about-visual {
            position: relative;
            min-height: 420px;
            padding: 25px 25px 45px 0;
        }

        .about-image {
            position: absolute;
            inset: 0 25px 45px 0;
            background:
                linear-gradient(180deg, rgba(15, 50, 35, .08), rgba(15, 50, 35, .45)),
                url('https://lh3.googleusercontent.com/d/19c5Ctrz-QAP3-bMbUobL4-1sgzbyLrGk') center / cover no-repeat,
                var(--green-deep);
            border-radius: 16px;
            transition: transform .5s;
        }

        .about-visual:hover .about-image {
            transform: scale(1.02);
        }

        .about-image-label {
            position: absolute;
            right: 0;
            bottom: 0;
            width: min(245px, 75%);
            padding: 24px;
            background: var(--green-deep);
            color: #fff;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
        }

        .about-image-label small {
            color: #dfc47c;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .about-image-label p {
            margin: 12px 0 0;
            font-family: 'Playfair Display', serif;
            font-size: 23px;
            line-height: 1.35;
        }

        .about-content .section-title {
            margin-top: 18px;
        }

        .about-content .section-copy {
            margin-top: 23px;
        }

        .about-highlight {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            margin-top: 26px;
            padding-top: 23px;
            border-top: 1px solid var(--line);
        }

        .about-highlight-mark {
            color: var(--gold);
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            line-height: 1;
        }

        .about-highlight p {
            margin: 0;
            color: var(--ink);
            font-family: 'Playfair Display', serif;
            font-size: 17px;
            line-height: 1.65;
        }

        /* ============================================ */
        /* VALUES                                        */
        /* ============================================ */

        .values-section {
            padding-block: 105px;
        }

        .values-heading {
            max-width: 650px;
            margin: 0 auto 48px;
            text-align: center;
        }

        .values-heading .eyebrow {
            justify-content: center;
        }

        .values-heading .section-title {
            margin-top: 16px;
        }

        .values-heading .section-copy {
            max-width: 500px;
            margin: 18px auto 0;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .value-card {
            padding: 32px;
            border: 1px solid var(--line);
            background: var(--surface);
            border-radius: 16px;
            transition: transform .35s, box-shadow .35s, border-color .35s;
        }

        .value-card:hover {
            transform: translateY(-6px);
            border-color: var(--gold);
            box-shadow: var(--shadow);
        }

        .value-number {
            color: var(--gold);
            font-family: 'Playfair Display', serif;
            font-size: 13px;
        }

        .value-icon {
            margin-top: 24px;
            color: var(--green);
            font-family: 'Playfair Display', serif;
            font-size: 31px;
            transition: transform .35s;
        }

        .value-card:hover .value-icon {
            transform: scale(1.15) rotate(-6deg);
        }

        .value-card h3 {
            margin: 17px 0 10px;
            color: var(--ink-strong);
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 600;
        }

        .value-card p {
            margin: 0;
            color: var(--body);
            font-size: 12px;
            line-height: 1.9;
        }

        /* ============================================ */
        /* SPMB                                          */
        /* ============================================ */

        .spmb-section {
            padding-bottom: 105px;
        }

        .spmb-panel {
            position: relative;
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            align-items: center;
            gap: 45px;
            padding: 56px 60px;
            overflow: hidden;
            background: var(--green-deep);
            color: #fff;
            border-radius: 20px;
            transition: transform .4s, box-shadow .4s;
        }

        .spmb-panel:hover {
            transform: translateY(-4px);
            box-shadow: 0 30px 60px rgba(16, 55, 41, .25);
        }

        .spmb-panel::before {
            position: absolute;
            top: -130px;
            right: 80px;
            width: 350px;
            height: 350px;
            border: 1px solid rgba(219, 192, 119, .2);
            border-radius: 50%;
            content: '';
            box-shadow:
                0 0 0 35px rgba(219, 192, 119, .04),
                0 0 0 70px rgba(219, 192, 119, .025);
            pointer-events: none;
        }

        .spmb-copy,
        .spmb-action {
            position: relative;
            z-index: 1;
        }

        .spmb-kicker {
            color: #e2c77d;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
        }

        .spmb-panel h2 {
            max-width: 640px;
            margin: 17px 0 15px;
            color: #fff;
            font-family: 'Playfair Display', serif;
            font-size: clamp(32px, 4vw, 48px);
            line-height: 1.15;
            font-weight: 500;
        }

        .spmb-panel p {
            max-width: 580px;
            margin: 0;
            color: rgba(255, 255, 255, .7);
            font-size: 13px;
            line-height: 1.9;
        }

        .spmb-action {
            min-width: 180px;
        }

        .spmb-action small {
            display: block;
            margin-top: 15px;
            color: rgba(255, 255, 255, .56);
            font-size: 10px;
            line-height: 1.7;
            text-align: center;
        }

        /* ============================================ */
        /* CONTACT                                       */
        /* ============================================ */

        .contact-section {
            padding-block: 0 100px;
        }

        .contact-heading {
            margin-bottom: 38px;
        }

        .contact-heading .section-title {
            margin-top: 15px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: 20px;
        }

        .contact-address,
        .contact-details {
            padding: 32px;
            border: 1px solid var(--line);
            background: var(--surface);
            border-radius: 16px;
            transition: transform .35s, box-shadow .35s;
        }

        .contact-address:hover,
        .contact-details:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow);
        }

        .contact-address {
            background: var(--surface-green);
        }

        .contact-label {
            color: var(--muted);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .contact-address h3 {
            margin: 22px 0 13px;
            color: var(--ink-strong);
            font-family: 'Playfair Display', serif;
            font-size: 29px;
            font-weight: 600;
        }

        .contact-address p {
            max-width: 480px;
            margin: 0;
            color: var(--body);
            font-size: 12px;
            line-height: 2;
        }

        .map-link {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin-top: 23px;
            color: var(--green);
            font-size: 11px;
            font-weight: 800;
            transition: color .2s, gap .25s;
        }

        .map-link:hover {
            color: var(--gold);
            gap: 13px;
        }

        .contact-item + .contact-item {
            margin-top: 26px;
            padding-top: 24px;
            border-top: 1px solid var(--line);
        }

        .contact-item a,
        .contact-item p {
            display: block;
            margin: 10px 0 0;
            color: var(--ink);
            font-size: 13px;
            font-weight: 700;
            line-height: 1.8;
            overflow-wrap: anywhere;
            transition: color .2s;
        }

        .contact-item a:hover {
            color: var(--green);
        }

        /* ============================================ */
        /* FOOTER                                        */
        /* ============================================ */

        .footer {
            padding: 58px 0 22px;
            background: #0c2c20;
            color: #dce6db;
        }

        .footer-main {
            display: grid;
            grid-template-columns: 1.3fr .7fr;
            gap: 60px;
            padding-bottom: 44px;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .footer-brand .brand-name {
            color: #fff;
        }

        .footer-brand .brand-caption {
            color: #b8c8b8;
        }

        .footer-description {
            max-width: 440px;
            margin-top: 22px;
            color: #b8c8b8;
            font-size: 12px;
            line-height: 1.9;
        }

        .footer-heading {
            margin-bottom: 18px;
            color: #e0c57c;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .17em;
            text-transform: uppercase;
        }

        .footer-links {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px 22px;
        }

        .footer-links a {
            color: #d4dfd3;
            font-size: 11px;
            transition: color .2s, transform .25s;
            display: inline-block;
        }

        .footer-links a:hover {
            color: #e0c57c;
            transform: translateX(3px);
        }

        .footer-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding-top: 22px;
            border-top: 1px solid rgba(255, 255, 255, .13);
            color: #a9bca9;
            font-size: 10px;
            line-height: 1.8;
        }

        .footer-bottom strong {
            color: #e0c57c;
            font-weight: 600;
        }

        /* ============================================ */
        /* RESPONSIVE                                    */
        /* ============================================ */

        @media (max-width: 900px) {
            .nav-links {
                gap: 15px;
            }

            .nav-links a {
                font-size: 10px;
            }

            .hero-grid {
                grid-template-columns: minmax(0, 1fr) 245px;
                gap: 28px;
            }

            .hero h1 {
                font-size: clamp(39px, 6vw, 58px);
            }

            .hero-side {
                padding: 21px;
            }

            .about-grid {
                gap: 45px;
            }

            .stat {
                padding-inline: 20px;
            }

            .spmb-panel {
                padding: 42px;
            }
        }

        @media (max-width: 700px) {
            .wrap {
                width: calc(100% - 36px);
            }

            html {
                scroll-padding-top: 90px;
            }

            .nav-inner {
                min-height: 66px;
                gap: 10px;
            }

            .brand {
                gap: 9px;
            }

            .brand-mark {
                width: 36px;
                height: 36px;
            }

            .brand-name {
                font-size: 11px;
            }

            .brand-caption {
                font-size: 7px;
                letter-spacing: .04em;
            }

            .nav-links {
                display: none;
            }

            .nav-actions {
                gap: 7px;
            }

            .theme-toggle {
                width: 34px;
                height: 34px;
                font-size: 14px;
            }

            .nav-register {
                min-height: 36px;
                padding: 8px 12px;
                font-size: 10px;
            }

            .hero::before {
                background:
                    linear-gradient(90deg,
                        rgba(11, 39, 28, .92),
                        rgba(11, 39, 28, .78)),
                    url('https://lh3.googleusercontent.com/d/19c5Ctrz-QAP3-bMbUobL4-1sgzbyLrGk') center / cover no-repeat;
            }

            .hero-grid {
                grid-template-columns: 1fr;
                min-height: auto;
                gap: 38px;
                padding-block: 60px 110px;
            }

            .hero-kicker {
                margin-bottom: 20px;
                font-size: 9px;
            }

            .hero h1 {
                max-width: 540px;
                font-size: clamp(36px, 10vw, 52px);
                line-height: 1.13;
            }

            .hero-description {
                margin-top: 19px;
                font-size: 13px;
            }

            .hero-buttons {
                gap: 10px;
                margin-top: 26px;
            }

            .hero-buttons .btn {
                flex: 1 1 auto;
                padding-inline: 14px;
                font-size: 11px;
            }

            .hero-note {
                margin-top: 30px;
                font-size: 9px;
            }

            .hero-side {
                justify-self: start;
                width: 100%;
                max-width: 410px;
                padding: 22px;
            }

            .hero-side h2 {
                font-size: 25px;
            }

            .stats {
                margin-top: -60px;
                padding-block: 0 30px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .stat {
                padding: 20px 22px;
            }

            .stat-number {
                min-width: 55px;
                font-size: 34px;
                text-align: center;
            }

            .units-section {
                padding-block: 55px 75px;
            }

            .section-heading {
                display: block;
                margin-bottom: 30px;
            }

            .section-heading .section-title {
                margin-top: 13px;
            }

            .section-heading .section-copy {
                margin-top: 17px;
            }

            .section-title {
                font-size: clamp(31px, 8vw, 41px);
            }

            .units-grid {
                grid-template-columns: 1fr;
                gap: 13px;
            }

            .unit-card {
                min-height: 0;
                padding: 24px;
            }

            .unit-card h3 {
                font-size: 22px;
            }

            .unit-card > p {
                margin-block: 17px 22px;
            }

            .about-section {
                padding-block: 70px;
            }

            .about-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .about-visual {
                min-height: 320px;
                padding-top: 0;
            }

            .about-image {
                inset: 0 22px 35px 0;
            }

            .about-image-label {
                width: min(225px, 75%);
                padding: 19px;
            }

            .about-image-label p {
                font-size: 21px;
            }

            .values-section {
                padding-block: 75px;
            }

            .values-heading {
                margin-bottom: 30px;
            }

            .values-grid {
                grid-template-columns: 1fr;
                gap: 13px;
            }

            .value-card {
                padding: 26px;
            }

            .value-icon {
                margin-top: 17px;
            }

            .value-card h3 {
                margin-top: 10px;
            }

            .spmb-section {
                padding-bottom: 75px;
            }

            .spmb-panel {
                grid-template-columns: 1fr;
                gap: 27px;
                padding: 31px 25px;
            }

            .spmb-panel h2 {
                font-size: 35px;
            }

            .spmb-panel p {
                font-size: 12px;
            }

            .spmb-action {
                width: 100%;
            }

            .spmb-action .btn {
                width: 100%;
            }

            .spmb-action small {
                text-align: left;
            }

            .contact-section {
                padding-bottom: 75px;
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 13px;
            }

            .contact-address,
            .contact-details {
                padding: 25px;
            }

            .contact-address h3 {
                font-size: 26px;
            }

            .footer {
                padding-top: 43px;
            }

            .footer-main {
                grid-template-columns: 1fr;
                gap: 32px;
                padding-bottom: 30px;
            }

            .footer-links {
                gap: 15px;
            }

            .footer-bottom {
                display: block;
            }

            .footer-bottom p + p {
                margin-top: 8px;
            }
        }

        @media (max-width: 380px) {
            .wrap {
                width: calc(100% - 28px);
            }

            .brand-caption {
                font-size: 7px;
            }

            .nav-register {
                padding-inline: 9px;
            }

            .hero h1 {
                font-size: 34px;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .hero-buttons .btn {
                width: 100%;
            }

            .unit-card {
                padding: 20px;
            }

            .unit-title-row {
                gap: 11px;
            }

            .unit-card h3 {
                font-size: 20px;
            }

            .unit-category {
                font-size: 8px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
            }
        }
    </style>
</head>

<body>

    {{-- HEADER — SATU BLOK HIJAU GELAP --}}
    <header class="site-header">
        <div class="wrap nav-inner">

            <a href="/" class="brand" aria-label="Beranda LPD Jati Sanan">
                <div class="brand-mark">
                    <img
                        src="https://lh3.googleusercontent.com/d/1AT7mQVHRwDln28AED21vr6E16fHdHYzV"
                        alt="Logo LPD Jati Sanan"
                        loading="eager"
                        referrerpolicy="no-referrer"
                    >
                </div>
                <div>
                    <div class="brand-name">{{ $short_name }}</div>
                    <div class="brand-caption">Pendidikan &amp; Dakwah · Kamulan</div>
                </div>
            </a>

            <nav class="nav-links" aria-label="Navigasi utama">
                <a href="#unit">Unit Pendidikan</a>
                <a href="#tentang">Tentang Kami</a>
                <a href="#nilai">Nilai Kami</a>
                <a href="#kontak">Kontak</a>
            </nav>

            <div class="nav-actions">
                <button
                    type="button"
                    id="theme-toggle"
                    class="theme-toggle"
                    aria-label="Ganti tema"
                    aria-pressed="false"
                    title="Ganti tema"
                >
                    <span id="theme-icon" aria-hidden="true">☾</span>
                </button>

                <a href="#spmb" class="nav-register">
                    SPMB <span aria-hidden="true">↗</span>
                </a>
            </div>

        </div>
    </header>

    {{-- HERO --}}
    <section class="hero">
        <div class="wrap hero-grid">

            <div>
                <div class="hero-kicker">
                    <span></span>
                    Portal Resmi Lembaga
                </div>

                <h1>
                    Membangun Generasi
                    <em>Qur'ani</em>, Cerdas,
                    dan Berkarakter.
                </h1>

                <p class="hero-description">
                    {{ $school_name }} hadir sebagai ruang tumbuh generasi
                    yang memadukan ilmu pengetahuan, kedalaman nilai keislaman,
                    dan pembentukan akhlak untuk masa depan yang lebih baik.
                </p>

                <div class="hero-buttons">
                    <a href="#unit" class="btn btn-gold">
                        Jelajahi Pendidikan
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a href="#tentang" class="btn btn-outline">
                        Mengenal Lembaga
                        <span aria-hidden="true">→</span>
                    </a>
                </div>

                <div class="hero-note">
                    Berilmu dalam pengetahuan, berakhlak dalam kehidupan.
                </div>
            </div>

            <aside class="hero-side">
                <div class="hero-side-label">Satu Visi, Banyak Jalan Kebaikan</div>

                <h2>Pendidikan yang membentuk ilmu dan akhlak.</h2>

                <p>
                    Menghubungkan pendidikan pesantren, pendalaman ilmu agama,
                    dan pendidikan formal dalam semangat pengabdian.
                </p>

                <div class="hero-side-line"></div>

                <div class="hero-side-bottom">
                    <span>LPD JATI SANAN</span>
                    <span aria-hidden="true">✳</span>
                </div>
            </aside>

        </div>
    </section>

    {{-- STATISTICS --}}
    <section class="stats" aria-label="Ringkasan lembaga">
        <div class="wrap stats-grid">

            <div class="stat">
                <div class="stat-number">04</div>
                <div>
                    <div class="stat-label">Unit Pendidikan</div>
                    <div class="stat-caption">Satu ekosistem pembelajaran</div>
                </div>
            </div>

            <div class="stat">
                <div class="stat-number">01</div>
                <div>
                    <div class="stat-label">Visi Bersama</div>
                    <div class="stat-caption">Ilmu, iman, dan karakter</div>
                </div>
            </div>

            <div class="stat">
                <div class="stat-number">∞</div>
                <div>
                    <div class="stat-label">Semangat Pengabdian</div>
                    <div class="stat-caption">Bertumbuh dan memberi manfaat</div>
                </div>
            </div>

        </div>
    </section>

    {{-- EDUCATION UNITS --}}
    <main id="unit" class="units-section">
        <div class="wrap">

            <div class="section-heading">
                <div class="section-heading-main">
                    <div class="eyebrow">Ekosistem Pendidikan</div>

                    <h2 class="section-title">
                        Empat Pilar,<br>
                        Satu Tujuan Mulia.
                    </h2>
                </div>

                <p class="section-copy">
                    Setiap unit memiliki peran tersendiri dalam membangun
                    generasi yang berilmu, berakhlak, mandiri, dan siap
                    menghadapi perkembangan zaman.
                </p>
            </div>

            <div class="units-grid">
                @foreach($units as $unit)
                    @if($unit['url'])
                        {{-- Card dengan link — seluruh card clickable --}}
                        <a href="{{ $unit['url'] }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="unit-card unit-card-link"
                           aria-label="Kunjungi {{ $unit['short'] }}">

                            <div class="unit-top">
                                <span class="unit-category">{{ $unit['category'] }}</span>
                                <span class="unit-number">{{ $unit['number'] }}</span>
                            </div>

                            <div class="unit-title-row">
                                <div class="unit-icon" aria-hidden="true">
                                    <img
                                        src="{{ $unit['logo'] }}"
                                        alt=""
                                        loading="lazy"
                                        referrerpolicy="no-referrer"
                                    >
                                </div>
                                <h3>{{ $unit['short'] }}</h3>
                            </div>

                            <p>{{ $unit['desc'] }}</p>

                            <div class="unit-bottom">
                                <span class="unit-status active">
                                    <i></i>
                                    Website tersedia
                                </span>

                                <span class="unit-link">
                                    Kunjungi Website
                                    <span aria-hidden="true">↗</span>
                                </span>
                            </div>
                        </a>
                    @else
                        {{-- Card tanpa link (coming soon) --}}
                        <article class="unit-card">

                            <div class="unit-top">
                                <span class="unit-category">{{ $unit['category'] }}</span>
                                <span class="unit-number">{{ $unit['number'] }}</span>
                            </div>

                            <div class="unit-title-row">
                                <div class="unit-icon" aria-hidden="true">
                                    <img
                                        src="{{ $unit['logo'] }}"
                                        alt=""
                                        loading="lazy"
                                        referrerpolicy="no-referrer"
                                    >
                                </div>
                                <h3>{{ $unit['short'] }}</h3>
                            </div>

                            <p>{{ $unit['desc'] }}</p>

                            <div class="unit-bottom">
                                <span class="unit-status">
                                    <i></i>
                                    Informasi unit
                                </span>

                                <span class="unit-link disabled">
                                    Segera hadir
                                </span>
                            </div>
                        </article>
                    @endif
                @endforeach
            </div>

        </div>
    </main>

    {{-- ABOUT --}}
    <section id="tentang" class="about-section">
        <div class="wrap about-grid">

            <div class="about-visual">
                <div
                    class="about-image"
                    role="img"
                    aria-label="Ilustrasi lingkungan pendidikan LPD Jati Sanan"
                ></div>

                <div class="about-image-label">
                    <small>Identitas Lembaga</small>
                    <p>Ilmu yang menerangi, akhlak yang mengiringi.</p>
                </div>
            </div>

            <div class="about-content">
                <div class="eyebrow">Tentang Kami</div>

                <h2 class="section-title">
                    {{ $yayasan }}
                </h2>

                <p class="section-copy">
                    Kami adalah lembaga pendidikan dan dakwah yang berkomitmen
                    membangun generasi muslim yang berilmu, berakhlak mulia,
                    dan bermanfaat bagi agama, bangsa, serta masyarakat.
                </p>

                <p class="section-copy" style="margin-top: 14px;">
                    Melalui pendidikan pesantren, madrasah diniyah, dan
                    pendidikan formal, LPD Jati Sanan berupaya menghadirkan
                    lingkungan belajar yang saling melengkapi.
                </p>

                <div class="about-highlight">
                    <div class="about-highlight-mark" aria-hidden="true">"</div>

                    <p>
                        Membangun Generasi cerdas, dan berkarakter.
                    </p>
                </div>
            </div>

        </div>
    </section>

    {{-- VALUES --}}
    <section id="nilai" class="values-section">
        <div class="wrap">

            <div class="values-heading">
                <div class="eyebrow">Landasan Perjuangan</div>

                <h2 class="section-title">
                    Lebih dari Sekadar Pendidikan.
                </h2>

                <p class="section-copy">
                    Pendidikan yang bermakna tidak berhenti pada pengetahuan.
                    Ia membentuk cara berpikir, sikap, dan kontribusi seseorang
                    bagi lingkungan sekitarnya.
                </p>
            </div>

            <div class="values-grid">
                @foreach($values as $value)
                    <article class="value-card">
                        <div class="value-number">
                            {{ $value['number'] }}
                        </div>

                        <div class="value-icon" aria-hidden="true">
                            {{ $value['icon'] }}
                        </div>

                        <h3>{{ $value['title'] }}</h3>

                        <p>{{ $value['desc'] }}</p>
                    </article>
                @endforeach
            </div>

        </div>
    </section>

    {{-- SPMB --}}
    <section id="spmb" class="spmb-section">
        <div class="wrap">
            <div class="spmb-panel">

                <div class="spmb-copy">
                    <div class="spmb-kicker">
                        Penerimaan Murid Baru
                    </div>

                    <h2>
                        Awali Langkah Baik dari Lingkungan Pendidikan yang Tepat.
                    </h2>

                    <p>{{ $spmb['desc'] }}</p>
                </div>

                <div class="spmb-action">
                    <a
                        href="{{ $spmb['url'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn btn-gold"
                    >
                        {{ $spmb['name'] }}
                        <span aria-hidden="true">↗</span>
                    </a>

                    <small>
                        Kunjungi portal resmi untuk informasi
                        dan proses pendaftaran.
                    </small>
                </div>

            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="kontak" class="contact-section">
        <div class="wrap">

            <div class="contact-heading">
                <div class="eyebrow">Terhubung dengan Kami</div>

                <h2 class="section-title">
                    Mari Menjalin Silaturahmi.
                </h2>
            </div>

            <div class="contact-grid">

                <div class="contact-address">
                    <div class="contact-label">Kunjungi Kami</div>

                    <h3>LPD Jati Sanan</h3>

                    <p>{{ $address }}</p>

                    <a
                        class="map-link"
                        href="https://www.google.com/maps/search/?api=1&query={{ urlencode($address) }}"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        Lihat petunjuk lokasi
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>

                <div class="contact-details">

                    <div class="contact-item">
                        <div class="contact-label">WhatsApp</div>

                        <a
                            href="https://wa.me/{{ $phone_clean }}"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            {{ $phone }} ↗
                        </a>
                    </div>

                    <div class="contact-item">
                        <div class="contact-label">Jam Operasional</div>

                        <p>
                            Senin – Sabtu<br>
                            07.00 – 15.00 WIB
                        </p>
                    </div>

                    <div class="contact-item">
                        <div class="contact-label">Penerimaan Murid Baru</div>

                        <a
                            href="{{ $spmb['url'] }}"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Portal SPMB Jati Sanan ↗
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="footer">
        <div class="wrap">

            <div class="footer-main">

                <div>
                    <a href="/" class="footer-brand">
                        <div class="brand-mark">
                            <img
                                src="https://lh3.googleusercontent.com/d/1AT7mQVHRwDln28AED21vr6E16fHdHYzV"
                                alt="Logo LPD Jati Sanan"
                                loading="lazy"
                                referrerpolicy="no-referrer"
                            >
                        </div>
                        <div>
                            <div class="brand-name">{{ $short_name }}</div>
                            <div class="brand-caption">
                                Lembaga Pendidikan &amp; Dakwah
                            </div>
                        </div>
                    </a>

                    <p class="footer-description">
                        {{ $tagline }} Sebuah ikhtiar bersama untuk menghadirkan
                        pendidikan yang memadukan ilmu, keimanan, dan
                        pembentukan akhlak mulia.
                    </p>
                </div>

                <div>
                    <div class="footer-heading">Jelajahi</div>

                    <div class="footer-links">
                        <a href="#unit">Unit Pendidikan</a>
                        <a href="#tentang">Tentang Kami</a>
                        <a href="#nilai">Nilai Kami</a>
                        <a href="#spmb">SPMB</a>
                        <a href="#kontak">Kontak</a>
                        <a href="{{ $spmb['url'] }}" target="_blank" rel="noopener noreferrer">
                            Portal Pendaftaran ↗
                        </a>
                    </div>
                </div>

            </div>

            <div class="footer-bottom">
                <p>
                    &copy; {{ date('Y') }} <strong>{{ $short_name }}</strong>.
                    Hak cipta dilindungi (tim pengembang : m.f.muzaki.77@gmail.com).
                </p>

                <p>
                    Pendidikan · Dakwah · Pengabdian
                </p>
            </div>

        </div>
    </footer>

    {{-- THEME SCRIPT --}}
    <script>
        (() => {
            'use strict';

            const KEY = 'lpd-theme';
            const root = document.documentElement;
            const button = document.getElementById('theme-toggle');
            const icon = document.getElementById('theme-icon');

            function applyTheme(theme, persist = true) {
                root.dataset.theme = theme;

                if (button) {
                    button.setAttribute(
                        'aria-pressed',
                        theme === 'dark' ? 'true' : 'false'
                    );

                    button.setAttribute(
                        'aria-label',
                        theme === 'dark'
                            ? 'Aktifkan tema terang'
                            : 'Aktifkan tema gelap'
                    );
                }

                if (icon) {
                    icon.textContent = theme === 'dark' ? '☀' : '☾';
                }

                if (persist) {
                    try {
                        localStorage.setItem(KEY, theme);
                    } catch (e) {}
                }
            }

            applyTheme(root.dataset.theme || 'light', false);

            if (button) {
                button.addEventListener('click', () => {
                    const next = root.dataset.theme === 'dark'
                        ? 'light'
                        : 'dark';

                    applyTheme(next);
                });
            }
        })();
    </script>

    {{-- FALLBACK LOGO UNIT (jika gambar Drive gagal load) --}}
    <script>
        document.querySelectorAll('.brand-mark img').forEach(img => {
            img.addEventListener('error', () => {
                const parent = img.parentElement;
                img.remove();
                parent.style.color = '#e3c878';
                parent.style.fontFamily = "'Playfair Display', serif";
                parent.style.fontSize = '14px';
                parent.style.fontWeight = '700';
                parent.style.border = '1.5px solid var(--gold)';
                parent.style.borderRadius = '50%';
                parent.style.background = 'rgba(201, 168, 90, .12)';
                parent.textContent = 'JS';
            });
        });
    </script>

</body>
</html>