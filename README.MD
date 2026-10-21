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

> **Performa Note:** Hanya memuat varian Poppins `400`, `500`, `600`, dan `700` untuk menjaga kecepatan _Core Web Vitals_.

#### Text Scale and Line Height

- **Type Scale Ratio**: **Minor Third (1.200)** dengan _base font_ `1rem` (16px).
