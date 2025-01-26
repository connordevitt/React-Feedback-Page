# React Feedback Page  

## Project Overview  
This is a full-stack feedback collection page built using React and Symfony. The frontend is developed in React, providing a user-friendly interface for feedback submission, while the backend is powered by Symfony, handling API requests and database management. The application is responsive, styled with Bootstrap, and uses Font Awesome icons for enhanced visuals.

## Features  

- Collects user feedback with fields for name, email, feedback text, and a star rating.  
- Responsive design with Bootstrap for styling.  
- The backend was built with Symfony to handle feedback submissions and database interactions.  
- Icons provided by Font Awesome.  
- Frontend powered by Vite for a fast and efficient development environment.  

## Prerequisites  
Before setting up the project, make sure you have the following installed:
- **Node.js**: Required to run the React app and install dependencies. [Download here](https://nodejs.org/).
- **npm**: Node's package manager (installed alongside Node.js).
- **Composer**: This is for managing PHP dependencies in the Symfony backend. [Download here](https://getcomposer.org/).
- **PHP**: Required to run Symfony. Ensure it matches Symfony's requirements.
- **SQLite**: Database used for local development.
- **Docker** (optional): For containerized local development.
- **Git**: Version control for cloning the repository and managing changes.

---

## Steps to Set Up  

### Frontend Setup  

#### 1. Clone the Repository  
Clone the repository to your local machine:  

```bash  
git clone <repository-url>  
 
```

### 2. Navigate to the Project Directory
Navigate to the root directory of the project:
```
cd feedback-page
```
### 3. Install Dependencies
Install the necessary dependencies, Font Awesome:
```
npm install  
npm install font-awesome  
```
### 4. Start the Development Server
Start the development server to preview the app:
```
npm run dev
```
Your React app will now be running at http://localhost:5173.
--------------------------------------------------------------
### Backend Setup:

### 1. Navigate to the backend directory.
Navigate to the Symfony backend Directory with:
```
cd feedback-page/backend
```
### 2. Install Composer Dependencies:
Install PHP Dependencies for the Symfony project:
```
composer install
```
### 3. Setup your Local DB:
<li>Configure the .env file for SQLite. This is the default setup.</li>
<li>Run the migrations to setup the database schema.</li>

```
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```
### 4. Start the Symfony Server:
Start the backend server with: 
```
symfony server:start
```
Your Symfony backend will now be running at http://localhost:8000.
--------------------------------------------------------------------
### Project Structure
### Frontend:
<li> src/: Contains the main application code, including components and pages.</li>
<li>npm run dev: Starts the development server with hot-reloading.</li>
<li>vite.config.js: Configuration file for Vite (bundling, plugins, etc.).</li>
<li>npm run build: Builds the app for production (optimized and minified).</li>
<li>npm run preview: Previews the production build locally.</li>

### Backend:
<li>src/: Contains Symfony controller and logic for API endpoints.</li>
<li>config/: Configuration files for Symfony.</li>
<li>migrations/: Contains DB migration files.</li>
<li>.env: Environment variables for DB and server configuration</li>

--------------------------------------------------------------------

### Technology Used:
<li>React: JavaScript library for building user interfaces.</li>
<li>Vite: Fast build tool and development server.</li>
<li>Font Awesome: For icons in the UI.</li>
<li>Bootstrap: For responsive styling.</li>
<li>npm: Package manager for managing project dependencies.</li>



