# KarsaStart 🚀

**KarsaStart** adalah _starter kit theme_ WordPress kustom berperforma tinggi yang dibangun di atas [TailPress](https://tailpress.io/) (Tailwind CSS). Tema ini dirancang dengan struktur komponen yang modular, bersih, dan terukur untuk memudahkan pengembangan situs WordPress modern.

---

## 📐 Design System Specifications

### 1. Spacing System

- **Primary Grid**: Kelipatan **4px** (`.25rem` / 4px, `.5rem` / 8px, `.75rem` / 12px, `1rem` / 16px, dst.).
- **Secondary Fallback**: Kelipatan **2px** atau **1px** diperbolehkan khusus untuk _micro-spacing_ (misal: _border width_, _icon padding_, atau _subtle offset_) apabila kelipatan 4px kurang memberikan keseimbangan visual.

---

### 2. Typography System

#### Font Family

- **Sans-Serif**: `Poppins`, sans-serif
- **Serif**: `-`
- **Mono**: `-`

#### Font Weight Standard

| Token        | Class           | Value | Scope / Usage                           |
| :----------- | :-------------- | :---- | :-------------------------------------- |
| **Regular**  | `font-normal`   | 400   | Body text, paragraph, excerpt           |
| **Medium**   | `font-medium`   | 500   | Badges, meta data, buttons, UI labels   |
| **SemiBold** | `font-semibold` | 600   | Card titles, H4–H6, navigation links    |
| **Bold**     | `font-bold`     | 700   | Display text, H1–H3, primary highlights |

> **Performa Note:** Hanya memuat varian Poppins `400`, `500`, `600`, dan `700` untuk menjaga kecepatan _Core Web Vitals_.

#### Text Scale and Line Height

- **Type Scale Ratio**: **Minor Third (1.200)** dengan _base font_ `1rem` (16px) dan **Main Heading (H1)** di kisaran `2.488rem` (~40px).

| Token           | Class / Value | Rem        | Pixel Equivalent | Line Height | Letter Spacing | Scope / Usage             |
| :-------------- | :------------ | :--------- | :--------------- | :---------- | :------------- | :------------------------ |
| **Display 5**   | `text-9xl`    | `6.192rem` | ~99px            | `1`         | `-0.02em`      | Giant typography accent   |
| **Display 4**   | `text-8xl`    | `5.160rem` | ~82px            | `1`         | `-0.02em`      | Display banner text       |
| **Display 3**   | `text-7xl`    | `4.300rem` | ~69px            | `1`         | `-0.02em`      | Large stats highlight     |
| **Display 2**   | `text-6xl`    | `3.583rem` | ~57px            | `1`         | `-0.02em`      | Hero title desktop        |
| **Display 1**   | `text-5xl`    | `2.986rem` | ~48px            | `1`         | `-0.02em`      | Hero title mobile         |
| **H1**          | `text-4xl`    | `2.488rem` | ~40px            | `1.1`       | `-0.02em`      | Main Heading              |
| **H2**          | `text-3xl`    | `2.074rem` | ~33px            | `1.1`       | `-0.02em`      | Section Heading           |
| **H3**          | `text-2xl`    | `1.728rem` | ~28px            | `1.1`       | `-0.02em`      | Sub-section / Card Title  |
| **H4**          | `text-xl`     | `1.440rem` | ~23px            | `1.1`       | `-0.02em`      | Small Title / Modal Title |
| **H5**          | `text-lg`     | `1.200rem` | ~19px            | `1.1`       | `-0.02em`      | Lead Text / Subtitle      |
| **H6**          | `text-base`   | `1.000rem` | 16px             | `1.1`       | `-0.02em`      | Bold Sub-heading          |
| **Base**        | `text-base`   | `1.000rem` | 16px             | `1.6`       | `0em`          | Body text / Paragraph     |
| **Small**       | `text-sm`     | `0.833rem` | ~13px            | _On demand_ | `0em`          | Meta info, badges, labels |
| **Extra Small** | `text-xs`     | `0.694rem` | ~11px            | _On demand_ | `0em`          | Sub-captions, legal notes |

> **Catatan Tipografi:**
>
> - Seluruh _Display_ dan _Heading_ (H1–H6) menggunakan `tracking: -0.02em` untuk estetika geometris Poppins yang lebih padat.
> - Ukuran `sm` dan `xs` dibiarkan _inherit line-height_ dari elemen induknya atau disesuaikan _on-demand_.

---

### 3. Color Tokens (Material Design 3 Inspired)

- **Surface**: `bg-surface`, `bg-surface-bright`, `bg-surface-dim`, `bg-surface-variant`
- **On-Surface**: `text-on-surface`, `text-on-surface-subtle`, `text-on-surface-variant`
- **Primary**: `bg-primary`, `text-primary`, `bg-primary-container`, `text-on-primary-container`
- **Outline**: `border-outline`

---

## 🏗️ Folder & Component Architecture

KarsaStart mengelompokkan `template-parts` ke dalam 3 tingkatan utama agar alur kerja tetap sederhana, cepat, dan mudah dipahami:

```text
karsastart/
├── functions.php                # Entry point theme
├── inc/                         # App Setup, WP Hooks, Enqueue, Custom Post Types, Helpers
│   ├── setup.php
│   ├── cpt-unit.php
│   └── helpers.php
│
├── front-page.php               # Main WordPress Page Templates
├── page-about.php
├── archive-unit.php
├── single-unit.php
│
└── template-parts/
    ├── components/              # Reusable UI elements, atomics, and entity cards
    │   ├── ui/
    │   │   ├── button.php
    │   │   └── badge.php
    │   └── cards/
    │       ├── card-empty.php
    │       ├── card-feature.php
    │       ├── card-unit.php
    │       └── card-article.php
    │
    ├── layouts/                 # Macro UI sections & query blocks (Hero, Intro, Post Queries)
    │   ├── layout-hero.php
    │   ├── layout-intro.php
    │   └── layout-post-query.php
    │
    └── template/                # Page-specific sections & slices
        ├── about-vision-mission.php
        └── contact-form-section.php
```
