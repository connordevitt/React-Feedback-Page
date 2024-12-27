import React from "react";
import 'bootstrap/dist/css/bootstrap.min.css';
import FeedbackPage from "./pages/FeedbackPage";


function App() {
  return (
    <div className="App">
      <header className="App-header bg-primary text-white text-center py-1">
        <h1>React Feedback Page</h1>
        <p className="lead">We value your feedback!</p>
      </header>

      <main className="container mt-5">
        <div className="row justify-content-center">
          <div className="col-md-8">
            <FeedbackPage />
          </div>
        </div>
      </main>

      <footer className="bg-dark text-white text-center py-5 mt-5">
        <p>&copy; 2024 Feedback Page. All rights reserved.</p>
      </footer>
    </div>
  );
}

export default App;
