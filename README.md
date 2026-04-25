# 🎮 PixelVault - Game Library Management System

PixelVault is a sleek, neon-themed full-stack web application built with **Laravel 11** and **Tailwind CSS**. It acts as a personal database for gamers to catalog, organize, and track their entire video game collection.

---

## ✨ Features

- **Authentication System:** Secure user registration, login, and profile management (powered by Laravel Breeze).
- **Full CRUD Functionality:** 
  - **Create:** Add new games to your library.
  - **Read:** View your collection in a responsive, glowing card grid.
  - **Update:** Edit game details or swap out cover art.
  - **Delete:** Securely remove games from your database.
- **Image Uploads:** Upload and store custom cover images for your games.
- **Dynamic Dashboard:** A "Hub" acting as the main command center.
- **Custom UI/UX:** A dark, glassmorphism gaming aesthetic with purple and cyan neon accents.

---

## 🛠️ Tech Stack

- **Backend:** Laravel 11 (PHP)
- **Frontend:** Blade Templating, Tailwind CSS, Alpine.js
- **Database:** SQLite (Default) / MySQL
- **Authentication:** Laravel Breeze

---

## 🚀 How to Run Locally

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Ensure you have the following installed on your machine:
- [PHP](https://www.php.net/downloads) (v8.2 or higher)
- [Composer](https://getcomposer.org/)
- [Node.js & npm](https://nodejs.org/en/download/)

### Installation Steps

**1. Clone or Download the Repository**
If you have Git installed, clone the repo. Otherwise, download the ZIP and extract it.
```bash
git clone <your-repository-url>
cd game-library
```

**2. Install PHP Dependencies**
```bash
composer install
```

**3. Install JavaScript Dependencies**
```bash
npm install
```

**4. Configure the Environment File**
Copy the example `.env` file to create your own configuration.
```bash
cp .env.example .env
```

**5. Generate the Application Key**
```bash
php artisan key:generate
```

**6. Set up the Database**
By default, Laravel 11 uses SQLite. Run the migrations to build the database tables. (If prompted to create the SQLite database file, type `yes`).
```bash
php artisan migrate
```
*(Note: If you prefer MySQL, update the `DB_*` variables in your `.env` file before running the migrate command).*

**7. Link the Storage Folder**
This step is **crucial** for the game cover images to display correctly.
```bash
php artisan storage:link
```

**8. Compile Frontend Assets**
Build the Tailwind CSS styling and JavaScript files.
```bash
npm run build
```
*(Alternatively, you can run `npm run dev` in a separate terminal to watch for changes while you develop).*

**9. Start the Local Development Server**
```bash
php artisan serve
```

---

## 🕹️ Usage

1. Open your web browser and navigate to `http://localhost:8000`.
2. You will be greeted by the PixelVault Landing Page. Click **Initialize Setup** (or Register) to create an account.
3. Once logged in, navigate to **My Games** using the top navigation bar.
4. Click **+ Add New Game**, fill out the details, upload a cover image, and start building your collection!

---

## 👥 The Dev Guild (Team)

- **Merck Daven Jusos** - Lead Architect / Backend Mage
- **Angel Mae Bandola** - UI/UX Designer / Frontend Ninja
- **Russel Mae Guisinga** - Data Architect / Security Tank

