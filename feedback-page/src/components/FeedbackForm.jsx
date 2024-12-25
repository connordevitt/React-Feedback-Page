import React, { useState } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';



const FeedbackForm = () => {
    const [Name, setName] = useState('');
    const [email, setEmail] = useState('');
    const [feedback, setFeedback] = useState('');
    const [formError, setFormError] = useState('');

    const handleSubmit = (e) => {
        e.preventDefault();
        if (Name === '' || email === '' || feedback === '') {
            setFormError('All fields are required!');
        } else {
            setFormError('');
            console.log(Name, email, feedback);
            setName('');
            setEmail('');
            setFeedback('');
        }    
    };

    return (
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
            {formError && (
                <div className="alert alert-danger mt-2">
                    {formError}
                </div>
            )}
            <button type="submit" className="btn btn-primary mt-2">Submit</button>
        </form>
    );
};

export default FeedbackForm;