
# 🗣️ Language Learning Website

A web-based platform to help users learn **Marathi** through an interactive and engaging interface, with the help of **translations**, **quizzes**, **games**, **videos**, and more.

This project is built using **HTML, CSS, PHP (XAMPP)** for the frontend and **Flask + Python** for backend translation support using `deep_translator`.

---

## 📁 Project Structure

```
languagelearningwebsite-main/
│
├── index.html / index.php            # Main landing page
├── css/                              # All CSS styles
├── images/, img/, audio/, video/     # Media assets
├── php/                              # PHP scripts like connect.php, login.php
├── main.py                           # Flask backend API for translation
├── venv/                             # Python virtual environment
├── __pycache__/                      # Python cache
└── README.md                         # Project readme
```

---

## ✨ Features

- 📝 Learn Marathi via interactive content
- 🔁 English-to-Marathi translation using Flask API
- 📹 Educational videos and 🎮 fun learning games
- 🧠 Quizzes to test your progress
- 🎧 Audio and multimedia support

---

## 💻 Tech Stack

| Frontend      | Backend         | Others            |
|---------------|----------------|-------------------|
| HTML, CSS     | Python (Flask) | XAMPP (PHP, MySQL)|
| JavaScript    | Flask-CORS     | Deep Translator API |
| PHP           |                | Git & GitHub      |

---

## 🔌 Setup Instructions

### 1. Set up the Frontend (XAMPP)

1. Download and install [XAMPP](https://www.apachefriends.org/index.html).
2. Place your project folder inside:
   ```
   C:\xampp\htdocs\
   ```
   e.g., `C:\xampp\htdocs\languagelearningwebsite-main`

3. Start **Apache** and **MySQL** from the **XAMPP Control Panel**.

4. Access your website in Chrome (or any browser) by visiting:
   ```
   http://localhost/languagelearningwebsite-main/index.php
   ```

> 💡 If you're using only HTML (no PHP), you can access `index.html` similarly.

---

### 2. Set up the Backend (Flask API)

The backend is built using Python and Flask. To set it up locally, follow these steps:

#### 🔧 Step 1: Create a virtual environment
```bash
python -m venv venv
```

#### 🟢 Step 2: Activate the virtual environment

- **On Windows:**
  ```bash
  venv\Scripts\activate
  ```

- **On macOS/Linux:**
  ```bash
  source venv/bin/activate
  ```

#### 📦 Step 3: Install required dependencies
```bash
pip install flask flask-cors deep-translator
```

#### 🚀 Step 4: Run the Flask API
```bash
python app.py
```

The API will now run locally and be accessible at:
```
http://127.0.0.1:5000/
```

---

## 🌐 GitHub Repository Setup (Optional)

To push your code to GitHub:

```bash
echo "# language-learning-website" >> README.md
git init
git add .
git commit -m "Add all project files (HTML, CSS, PHP, etc.)"
git branch -M main
git remote add origin https://github.com/sakshi3232/language-learning-website.git
git push -u origin main
```

---

## 📬 Contact

If you have any questions or suggestions, feel free to open an issue or contact me via GitHub.
