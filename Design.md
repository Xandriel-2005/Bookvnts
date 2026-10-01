---
name: Luminous Electric ticketing
colors:
  surface: '#faf8ff'
  surface-dim: '#d2d9f4'
  surface-bright: '#faf8ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f2f3ff'
  surface-container: '#eaedff'
  surface-container-high: '#e2e7ff'
  surface-container-highest: '#dae2fd'
  on-surface: '#131b2e'
  on-surface-variant: '#3e4850'
  inverse-surface: '#283044'
  inverse-on-surface: '#eef0ff'
  outline: '#6e7881'
  outline-variant: '#bec8d2'
  surface-tint: '#006591'
  primary: '#006591'
  on-primary: '#ffffff'
  primary-container: '#0ea5e9'
  on-primary-container: '#003751'
  inverse-primary: '#89ceff'
  secondary: '#b32a12'
  on-secondary: '#ffffff'
  secondary-container: '#fd5e41'
  on-secondary-container: '#5d0800'
  tertiary: '#00687a'
  on-tertiary: '#ffffff'
  tertiary-container: '#00aac6'
  on-tertiary-container: '#003943'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#c9e6ff'
  primary-fixed-dim: '#89ceff'
  on-primary-fixed: '#001e2f'
  on-primary-fixed-variant: '#004c6e'
  secondary-fixed: '#ffdad3'
  secondary-fixed-dim: '#ffb4a5'
  on-secondary-fixed: '#3f0400'
  on-secondary-fixed-variant: '#8e1200'
  tertiary-fixed: '#acedff'
  tertiary-fixed-dim: '#4cd7f6'
  on-tertiary-fixed: '#001f26'
  on-tertiary-fixed-variant: '#004e5c'
  background: '#faf8ff'
  on-background: '#131b2e'
  surface-variant: '#dae2fd'
typography:
  display-hero:
    fontFamily: Plus Jakarta Sans
    fontSize: 56px
    fontWeight: '800'
    lineHeight: 64px
    letterSpacing: -0.03em
  display-hero-mobile:
    fontFamily: Plus Jakarta Sans
    fontSize: 36px
    fontWeight: '800'
    lineHeight: 42px
    letterSpacing: -0.025em
  headline-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 40px
    fontWeight: '700'
    lineHeight: 48px
    letterSpacing: -0.02em
  headline-lg-mobile:
    fontFamily: Plus Jakarta Sans
    fontSize: 28px
    fontWeight: '700'
    lineHeight: 34px
    letterSpacing: -0.02em
  headline-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 28px
    fontWeight: '700'
    lineHeight: 36px
    letterSpacing: -0.015em
  headline-sm:
    fontFamily: Plus Jakarta Sans
    fontSize: 22px
    fontWeight: '600'
    lineHeight: 28px
    letterSpacing: -0.01em
  title-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 18px
    fontWeight: '600'
    lineHeight: 24px
    letterSpacing: -0.005em
  body-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  body-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 20px
  label-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 18px
    letterSpacing: 0.01em
  label-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 12px
    fontWeight: '600'
    lineHeight: 16px
    letterSpacing: 0.02em
  label-micro:
    fontFamily: Plus Jakarta Sans
    fontSize: 10px
    fontWeight: '700'
    lineHeight: 12px
    letterSpacing: 0.06em
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  gutter: 1.5rem
  gutter-mobile: 1rem
  margin: 2rem
  margin-mobile: 1rem
  margin-desktop: 3rem
  space-xs: 0.25rem
  space-sm: 0.5rem
  space-md: 1rem
  space-lg: 1.5rem
  space-xl: 2.5rem
---

## Brand & Style
The design system establishes a daylight-crisp, high-energy ticketing and event-discovery atmosphere. It balances the playful cultural vitality of platforms like DICE and Luma with the structural clarity and confidence of modern utility fintech.

- **Personality:** Optimistic, dynamic, effortless, hyper-curated, and tactile.
- **Target Audience:** Urban event-goers, tech-forward cultural organizers, festival patrons, and workshop attendees seeking intuitive booking with zero visual clutter.
- **Emotional Response:** Excitement, clarity, trust, and momentum. Browsing feels like thumbing through a premium visual arts magazine; checkout feels instantaneous and secure.
- **Design Style:** A tailored blend of Modern Consumer App minimalism and vibrant electric accents. Surfaces lean on crisp pure whites (`#FFFFFF`) nested within airy, warm off-white canvases (`#F8FAFC` to `#F1F5F9`), bound by precise slate micro-borders and punched with energetic cyan-sky focal points and warm mango-coral conversion drivers. Strictly light mode—sunlit, high-key, and hyper-legible.

## Colors
The palette takes direct cues from an energetic three-dimensional prism: sharp sky and cyan blues meeting electric mango-coral against crisp architectural neutral surfaces.

- **Primary (`#0EA5E9` / `#06B6D4`):** The electric cyan/sky spectrum represents discovery, exploration, interactive states, active filter chips, links, and progress meters.
- **Secondary (`#FF6043` / `#F59E0B`):** The mango-tangerine anchor. Reserved exclusively for high-intent conversion moments: "Get Tickets", "Book Seat", urgency alerts ("Only 3 left"), and live status badges.
- **Neutrals (`#0F172A` Slate Base):**
  - Text Primary: Deep slate `#0F172A` ensures AA/AAA legibility across high ambient daylight.
  - Text Secondary: Balanced slate `#475569` for meta info, timestamps, and venue subheads.
  - Text Muted: Crisp mist slate `#94A3B8` for input placeholders and subtle counts.
  - Canvas / Page Background: Ultra-fresh warm tint `#F8FAFC`.
  - Surface Card: Pure `#FFFFFF`.
  - Borders & Dividers: High-precision slate hairline `#E2E8F0` and active outline `#CBD5E1`.
- **Status Accents:**
  - Success / Confirmed: `#10B981` (Emerald)
  - Urgency / Selling Fast: `#FF6043` (Secondary)
  - Live Now: Pulse effect combining `#0EA5E9` ring with `#06B6D4`.

## Typography
Plus Jakarta Sans delivers structural geometry combined with organic, humanistic terminals. This keeps the booking interface crisp and highly scannable while avoiding clinical coldness.

- **Numerics & Prices:** Pricing (`$45.00`) uses `title-md` or `headline-sm` with tight tracking (`-0.02em`) and semi-bold weights for rapid cost comprehension.
- **Editorial Headings:** Section anchors and event names feature deliberate negative tracking (`-0.02em` to `-0.03em`) to anchor layouts.
- **Micro-Labels & Meta:** Ticket tiers, date markers, and status indicators leverage uppercase `label-micro` with generous letter-spacing (`0.06em`) to ensure legibility when overlaid on photography or inside badges.

## Layout & Spacing
The layout operates on a fluid 12-column grid on desktop, 8-column on tablet, and 4-column on mobile screens, constrained to a maximum content container of `1280px` for optimal eye scanning.

- **Breakpoints:**
  - Mobile: `< 640px` (4 columns, `margin-mobile: 1rem`, `gutter-mobile: 1rem`)
  - Tablet: `640px - 1024px` (8 columns, `margin: 1.5rem`, `gutter: 1.5rem`)
  - Desktop: `> 1024px` (12 columns, `margin-desktop: 3rem`, `gutter: 1.5rem`)
- **Rhythm Principles:**
  - Event Cards: Grouped tightly using `space-sm` (8px) for inner text blocks, and `space-md` (16px) for card interior padding.
  - Section Stacks: Sections (e.g., "Trending in Berlin", "Categories", "Your Passes") separate cleanly with `space-xl` (40px) to provide breathable, daytime whitespace.

## Elevation & Depth
Depth is produced through subtle atmospheric diffusion and high-contrast tonal layering rather than dense shadows, preserving a light, crisp aesthetic.

- **Level 0 (Flat/Base):** Canvas `#F8FAFC`. Zero elevation.
- **Level 1 (Subtle Cards & Inputs):** Pure white `#FFFFFF` surface with a crisp 1px hairline border in `#E2E8F0` and an ultra-soft ambient shadow: `box-shadow: 0 1px 3px 0 rgba(15, 23, 42, 0.04), 0 1px 2px -1px rgba(15, 23, 42, 0.02)`.
- **Level 2 (Hovered Event Cards & Dropdowns):** Subtle lift with a warm-tinted diffused shadow: `box-shadow: 0 12px 24px -6px rgba(14, 165, 233, 0.08), 0 4px 8px -2px rgba(15, 23, 42, 0.03)`. Border shifts to `#CBD5E1`.
- **Level 3 (Sticky Checkout Rails & Modals):** `box-shadow: 0 20px 32px -8px rgba(15, 23, 42, 0.08), 0 8px 16px -4px rgba(15, 23, 42, 0.03)`. Micro-border in `#E2E8F0`.
- **Glass Accents:** Sticky navigation bars and floating filter bars employ a frosted layer (`background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(226, 232, 240, 0.8)`).

## Shapes
A progressive curvature hierarchy communicates approachability and tactile physical tickets.

- **Base Radius (`0.5rem` / 8px):** Applied to form fields, nested micro-chips, and small icons.
- **Medium Radius (`1rem` / 16px - `rounded-lg`):** Event card posters, ticket modules, notification banners, and calendar date badges.
- **Large Radius (`1.5rem` / 24px - `rounded-xl` / `rounded-2xl`):** Primary event discovery cards, bottom checkout sheets, and sticky modal dialogs.
- **Full Pill (`9999px`):** All action buttons ("Get Tickets", "Filter"), category chips, and live status indicator badges.

## Components

### Buttons
- **Primary Action (Conversion / "Get Tickets"):** Pill-shaped (`rounded-full`), background `#FF6043` transitioning to hover `#EA4E32`, text `#FFFFFF`, bold `label-lg`. Padding: `12px 24px`. Subtle warm shadow: `0 4px 14px 0 rgba(255, 96, 67, 0.35)`.
- **Secondary Action (Navigation / "Explore"):** Pill-shaped, background `#0EA5E9`, hover `#0284C7`, text `#FFFFFF`. Shadow: `0 4px 14px 0 rgba(14, 165, 233, 0.28)`.
- **Tertiary / Outline:** White surface, 1px border in `#E2E8F0`, text `#0F172A`, hover `#F8FAFC` with border `#CBD5E1`.

### Event Discovery Cards
- **Structure:** Pure white container, `rounded-2xl` (24px), framed by a hairline border `#E2E8F0`.
- **Media Block:** 16:10 or 1:1 aspect ratio image with `rounded-xl` inside top/side padding, equipped with floating date micro-badge on the top-left (e.g., pure white pill with month in `#FF6043` and day in `#0F172A`).
- **Footer Metadata:** Event title in `headline-sm`, subtitle/venue in `body-md` (`#475569`), and ticket price paired with an arrow or "Book" pill.

### Chips & Filter Pills
- **Inactive:** `#FFFFFF` background, `#E2E8F0` border, `#475569` text, `rounded-full`.
- **Active / Selected:** `#0F172A` background, `#0F172A` border, `#FFFFFF` text, or tinted variant with `#E0F2FE` background and `#0369A1` text.

### Form Inputs & Search Bar
- **Default State:** Height `48px`, background `#FFFFFF`, border `1px solid #E2E8F0`, radius `rounded-xl`, padding `0 16px`, text `#0F172A`, placeholder `#94A3B8`.
- **Focus State:** Border color `#0EA5E9`, halo glow `0 0 0 3px rgba(14, 165, 233, 0.15)`.

### Ticket Tier Selector
- Interactive list item featuring ticket type name (`title-md`), availability count, price, and a quantitative pill stepper (`- [ 1 ] +`). Selected tier receives a `2px` border in `#0EA5E9` and a soft background tint of `#F0F9FF`.

### Checkboxes & Radios
- Size `20px x 20px`, border `1.5px solid #CBD5E1`, radius `6px` (checkbox) or `rounded-full` (radio). Checked state: fill `#0EA5E9` with crisp white inner check/dot.