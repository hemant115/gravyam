# Gravyam Website

This repository contains the static website for Gravyam.

How to push to GitHub:

1. Create a new repository on GitHub (do not initialize with README).
2. Add the remote and push:

```bash
git remote add origin https://github.com/USERNAME/REPO.git
git branch -M main
git push -u origin main
```

If your default branch is `master`, replace `main` with `master` in the commands above.

Deploy to GitHub Pages (already configured): a GitHub Actions workflow will publish the repository root to the `gh-pages` branch whenever you push to `main` or `master`.

If you have a custom domain, add a `CNAME` file with the domain in the repository root.
