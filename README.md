# Sesskey Helper – Moodle Local Plugin

This plugin ensures that all HTML `<form>` elements using the `POST` method automatically include the Moodle `sesskey` hidden input field, even if it's not added manually.

## 🔧 Purpose

Some custom forms or external plugins may forget to include the `sesskey`, which can result in Moodle rejecting form submissions due to session security policies. This helper automatically appends the `sesskey` via JavaScript at runtime.

## ✅ Features

- Automatically injects `sesskey` into all `POST` forms on page load
- Simple, lightweight, and zero configuration
- Pure PHP implementation — **no Node.js or npm required**
- No dependencies on Moodle’s AMD module system
- Activates for logged-in users only

## 📂 Installation

1. Copy this folder into your Moodle installation at:

