//feedbackpage.jsx
import React from 'react';
import FeedbackForm from '../components/FeedbackForm';  

const FeedbackPage = () => {
    return (
        <div>
            <div className='text-center'>
            <h1>Let's here some Feedback!</h1>
            </div>
            <FeedbackForm />
        </div>
    );
}

export default FeedbackPage;