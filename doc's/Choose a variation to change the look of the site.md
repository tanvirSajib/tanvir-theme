That’s an excellent and advanced WordPress question, Tanvir 👏

When you see the message in a **block theme**:

> “Choose a variation to change the look of the site.”

you’re working with **Style Variations**, which are a key part of **Global Styles (theme.json)** in block themes.
Let’s unpack what’s happening behind the scenes — including how the **background** and **color** actually change.

---

## 🧱 1️⃣ What a Style Variation Is

A **Style Variation** is basically another version of your theme’s **`theme.json`** file.

Each variation defines different design presets — like:

* colors
* typography
* spacing
* layout
* background

👉 You can think of each variation like a “theme skin” built into the same theme.

---

## 📁 2️⃣ Where They Live

In a block theme, variations live here:

```
/themes/your-theme/styles/
```

Each file is a **JSON file**, for example:

```
styles/
├─ blue.json
├─ dark.json
├─ light.json
```

Each variation file contains only the **values that differ** from your main `theme.json`.

---

## 🧩 3️⃣ Example: How It Changes Background and Colors

Let’s look at a simplified example.

### Main `theme.json`

```json
{
  "version": 3,
  "settings": {
    "color": {
      "palette": [
        { "slug": "background", "color": "#ffffff", "name": "Background" },
        { "slug": "text", "color": "#000000", "name": "Text" }
      ]
    }
  },
  "styles": {
    "color": {
      "background": "#ffffff",
      "text": "#000000"
    }
  }
}
```

### Style Variation — `dark.json`

```json
{
  "settings": {
    "color": {
      "palette": [
        { "slug": "background", "color": "#000000", "name": "Background" },
        { "slug": "text", "color": "#ffffff", "name": "Text" }
      ]
    }
  },
  "styles": {
    "color": {
      "background": "#000000",
      "text": "#ffffff"
    }
  },
  "title": "Dark"
}
```

When you choose the **“Dark”** variation in the Site Editor,
WordPress merges `dark.json` with your base `theme.json`.

✅ The result:

* Global background color changes to black
* Text color changes to white
* The editor (and front end) automatically update

---

## ⚙️ 4️⃣ How WordPress Applies It

WordPress does this dynamically:

1. Reads your base `theme.json`
2. Loads the chosen variation (`styles/dark.json`)
3. Merges both JSON files (variation values overwrite defaults)
4. Generates **CSS variables** (`--wp--preset--color--background`, etc.)
5. Injects those CSS variables into your site

So your site instantly changes colors, backgrounds, typography, etc.

---

## 💡 5️⃣ Where It’s Reflected

The variation affects both:

* **Front-end** (via global styles CSS)
* **Site Editor (wp-admin/site-editor.php)** — live preview updates immediately

---

## 🎨 6️⃣ Bonus: You Can Add Custom Variations

You can create your own by adding files like:

```
/wp-content/themes/my-theme/styles/green.json
```

Example:

```json
{
  "title": "Green",
  "styles": {
    "color": {
      "background": "#eaffea",
      "text": "#004400"
    }
  }
}
```

Then, in the Site Editor you’ll see a new option:

> “Green” under “Choose a variation to change the look of the site.”

---

## 🧠 Summary Table

| Concept             | Description                                        |
| ------------------- | -------------------------------------------------- |
| **Style Variation** | Alternate design skin for a block theme            |
| **Location**        | `/themes/your-theme/styles/`                       |
| **File Type**       | JSON                                               |
| **Changes**         | Colors, background, typography, spacing, etc.      |
| **How it works**    | Merges with `theme.json` → generates CSS variables |
| **Effect**          | Instantly changes the look of the entire site      |

---

If you want, I can show you **exactly how the background CSS variable gets generated** (like `--wp--preset--color--background`) from your `theme.json` — would you like to see that next?
