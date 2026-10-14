# Laravel Nova 4 Sticky Actions

Pins the controls column (view, edit, delete, the row ⋯ and any inline action) of every
Nova resource table to the right edge. However wide the table gets, the row actions stay
visible while the other columns scroll underneath.

- Works on every resource table: indexes, lenses and relationship tables on detail pages.
- Works with Nova's own table and with `outl1ne/nova-sortable`, which replaces it.
- The header cell of the column is pinned too.
- Light and dark theme, including the row hover colour.
- A thin edge with a soft shadow shows only while some columns are hidden under the pinned
  one. It disappears once the table is scrolled to its end, and it never shows on a table
  that fits. Browsers without CSS scroll timelines (Firefox for now) show the edge always.

CSS only — no JavaScript and no configuration.

## Requirements

- `laravel/nova: ^4.0`

## Installation

```bash
composer require wamesk/laravel-nova-sticky-actions
```
