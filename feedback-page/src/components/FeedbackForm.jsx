import React, { useState } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'font-awesome/css/font-awesome.min.css';

const FeedbackForm = () => {
    const [Name, setName] = useState('');
    const [email, setEmail] = useState('');
    const [feedback, setFeedback] = useState('');
    const [formError, setFormError] = useState('');
    const [rating, setRating] = useState(0);

    const handleRating = (ratingValue) => {
        // Convert the value to a number
        console.log(ratingValue);
        setRating(ratingValue);
    };

    // Define the async function outside of handleSubmit
    const postData = async (url = '/submit-feedback', data = {}) => {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        });
        return response.json();
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        if (Name === '' || email === '' || feedback === '') {
            setFormError('All fields are required!');
        } else {
            setFormError('');

            try {
                // Call the postData function here
                const data = await postData('http://127.0.0.1:8000/submit-feedback', {
                    Name,
                    email,
                    feedback,
                    rating,
                });
                console.log(data);  // Log the response from the server
            } catch (error) {
                console.error(error);
            }
        }
    };

    return (
        <div className="container mt-4" id='feedback'>
            <div className="form-group mt-2 w-50 mx-auto">
                <form onSubmit={handleSubmit}>

                    <div> 
                        <label>Name:</label>
                        <input type="text" className="form-control" value={Name} onChange={(e) => setName(e.target.value)} />
                    </div>
                    <div>
                        <label>Email:</label>
                        <input type="email" className="form-control" value={email} onChange={(e) => setEmail(e.target.value)} />
                    </div>
                    <div>
                        <label>Feedback:</label>
                        <textarea className="form-control" value={feedback} onChange={(e) => setFeedback(e.target.value)} />
                    </div>

                    {/* Rating Component */}
                    <div>
                        <label>Rating:</label>
                        <div> 
                            {[1, 2, 3, 4, 5].map((value) => (
                                <i
                                    key={value}
                                    className={`fa fa-star ${value <= rating ? 'text-warning' : 'text-muted'}`}
                                    onClick={() => handleRating(value)}
                                    style={{ cursor: 'pointer' }}
                                ></i>
                            ))}
                        </div>
                    </div>

                    {formError && (
                        <div className="alert alert-danger mt-2">
                            {formError}
                        </div>
                    )}
                    <button type="submit" id="Submit-feedback" className="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>
    );
};

export default FeedbackForm;
