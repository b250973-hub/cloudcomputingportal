# Cloud Computing Portal (Static Version)

This is a fully static (plain HTML/CSS/JS) version of the Cloud Computing Portal,
converted from the original PHP project so it can be hosted for free on **GitHub Pages**.

## What changed from the PHP version

- All `.php` pages (`index.php`, `about.php`, etc.) were converted to plain
  `.html` files. GitHub Pages cannot execute PHP, which is why you were seeing
  "not found" errors — the server just serves files as-is, it doesn't run them.
- The `header.php` / `footer.php` includes were merged directly into every page.
- Asset links were fixed to point to `style.css` and `script.js` in the project
  root (the PHP version pointed to `assets/css/style.css` and `assets/js/script.js`,
  which didn't exist).
- `contact.php` and `feedback.php` used PHP + MySQL to store submissions in a
  database. Since GitHub Pages is static hosting only (no PHP, no database),
  `contact.html` and `feedback.html` now use a plain HTML `<form>` that posts to
  [Formspree](https://formspree.io) (a free form backend for static sites).
  - To make these forms actually deliver messages to your email, sign up at
    formspree.io, create a form, and replace `YOUR_FORM_ID` in the `action`
    attribute inside `contact.html` and `feedback.html` with your real form ID.
  - Until you do that, submitting the form just shows a local "thank you"
    message in the browser (nothing is sent anywhere).
- `cloud_portal.sql` and `db.php` are no longer needed and were left out of
  this static version.

## How to deploy on GitHub Pages

1. Create a new GitHub repository (e.g. `cloud-computing-portal`).
2. Upload all the files in this folder (`index.html`, `about.html`, `style.css`,
   `script.js`, etc.) to the root of that repository.
3. In the repository, go to **Settings → Pages**.
4. Under "Build and deployment", set **Source** to `Deploy from a branch`,
   choose the `main` branch and `/ (root)` folder, then click **Save**.
5. After a minute, GitHub will give you a live URL like:
   `https://<your-username>.github.io/<repo-name>/`
6. Visit that URL — `index.html` will load automatically as the homepage.

That's it — no server, PHP, or database setup required.
