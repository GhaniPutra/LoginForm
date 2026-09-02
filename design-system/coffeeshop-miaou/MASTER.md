# Design System Master File

> **LOGIC:** When building a specific page, first check `design-system/pages/[page-name].md`.
> If that file exists, its rules **override** this Master file.
> If not, strictly follow the rules below.

---

**Project:** CoffeeShop MIAOU
**Generated:** 2026-09-02 20:09:10
**Category:** General

---

## Global Rules

### Color Palette (Artisan Warm Coffee)

| Role | Hex | CSS Variable | Usage |
|------|-----|--------------|-------|
| Background Main | `#FAF6F0` | `--color-coffee-50` | Warna latar belakang canvas utama |
| Surface Light | `#F4ECE1` | `--color-coffee-100` | Latar input form & card sekunder |
| Border Warm | `#D3BDA0` | `--color-coffee-300` | Border form field & outline container |
| Text Muted | `#84613D` | `--color-coffee-600` | Teks keterangan, deskripsi, icon muted |
| Text Body | `#4B331F` | `--color-coffee-800` | Label form & teks antarmuka |
| Dark Brand Panel | `#2C1D12` | `--color-coffee-900` | Hero panel samping & aksen solid |
| Primary Accent | `#C87D43` | `--color-amber-brand` | Tombol CTA utama, badge aktif, focus ring |
| Primary Accent Hover | `#A9622D` | `--color-amber-dark` | State hover / active tombol CTA |

**Color Notes:** Tema Artisan Warm Coffee & Amber Gold dengan rasio kontras teks >= 4.5:1 (WCAG AA).

### Typography (Editorial & Modern Sans)

- **Display & Headings:** `Playfair Display` (Serif Editorial) &mdash; Karakter hangat, mewah, dan berkelas artisan
- **Interface & Body:** `Plus Jakarta Sans` (Geometric Clean Sans) &mdash; Sangat terbaca di semua resolusi
- **Google Fonts:** [Playfair Display + Plus Jakarta Sans](https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap)

**CSS Import:**
```css
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
```

### Spacing & Elevation

| Token | Value | Usage |
|-------|-------|-------|
| `--space-xs` | `4px` / `0.25rem` | Micro spacing, gap icon-label |
| `--space-sm` | `8px` / `0.5rem` | Badge padding, gap antar elemen |
| `--space-md` | `16px` / `1rem` | Padding form input, alert spacing |
| `--space-lg` | `24px` / `1.5rem` | Card padding mobile |
| `--space-xl` | `32px` / `2rem` | Card padding desktop |
| `--space-2xl` | `48px` / `3rem` | Section padding |
| `--space-3xl` | `64px` / `4rem` | Hero branding margin |

---

## Component Specs

### CTA Button (Artisan Amber)

```html
<button class="flex w-full cursor-pointer items-center justify-center gap-2 rounded-xl bg-[#C87D43] px-5 py-3.5 text-sm font-semibold text-white shadow-md shadow-[#C87D43]/25 transition duration-200 hover:bg-[#A9622D] hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-[#C87D43]/30 active:scale-[0.99]">
    <span>Masuk ke Dashboard</span>
</button>
```

### Input Field (Clean Warm)

```html
<input class="block w-full rounded-xl border border-[#D3BDA0]/80 bg-[#FAF6F0]/40 py-3 pl-10 pr-4 text-sm text-[#190E08] placeholder:text-[#BC9E7C] outline-none transition duration-200 focus:border-[#C87D43] focus:bg-white focus:ring-4 focus:ring-[#C87D43]/15">
```

### Card Container (Split Layout)

```html
<div class="rounded-2xl border border-[#E6D7C3]/80 bg-white p-6 shadow-xl shadow-[#2C1D12]/5 sm:p-8">
    <!-- Form Content -->
</div>
```

---

## Style Guidelines

**Style:** Warm Luxury & Artisan Modernism

**Keywords:** Artisan coffee, warm palette, rich contrast, modern typography, glassmorphism accents, seamless transitions

**Key Effects:** Glow blur 3xl, backdrop blur badges, hover micro-interactions, smooth focus ring elevation

**Best For:** Enterprise apps, dashboards, documentation sites, SaaS platforms, professional tools

**Key Effects:** Subtle hover (200-250ms), smooth transitions, sharp shadows if any, clear type hierarchy, fast loading

### Page Pattern

**Pattern Name:** Hero + Features + CTA

- **Conversion Strategy:** Deep CTA placement. For CTA label text, verify at least 4.5:1 against the button fill; use 7:1 only when the product explicitly targets AAA normal-text contrast. Keep focus and component boundaries independently visible. Disable hero parallax under reduced motion and render its static final state.
- **CTA Placement:** Hero (sticky) + Bottom
- **Section Order:** Hero with headline/image > Value prop > Key features (3-5) > CTA section > Footer

---

## Anti-Patterns (Do NOT Use)


### Additional Forbidden Patterns

- ❌ **Emojis as icons** — Use SVG icons (Heroicons, Lucide, Simple Icons)
- ❌ **Missing cursor:pointer** — All clickable elements must have cursor:pointer
- ❌ **Layout-shifting hovers** — Avoid scale transforms that shift layout
- ❌ **Low contrast text** — Maintain 4.5:1 minimum contrast ratio
- ❌ **Instant state changes** — Always use transitions (150-300ms)
- ❌ **Invisible focus states** — Focus states must be visible for a11y

---

## Pre-Delivery Checklist

Before delivering any UI code, verify:

- [ ] No emojis used as icons (use SVG instead)
- [ ] All icons from consistent icon set (Heroicons/Lucide)
- [ ] `cursor-pointer` on all clickable elements
- [ ] Hover states with smooth transitions (150-300ms)
- [ ] Light mode: text contrast 4.5:1 minimum
- [ ] Focus states visible for keyboard navigation
- [ ] `prefers-reduced-motion` respected
- [ ] Responsive: 375px, 768px, 1024px, 1440px
- [ ] No content hidden behind fixed navbars
- [ ] No horizontal scroll on mobile
