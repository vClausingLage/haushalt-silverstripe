import React from 'react';
import ReactDOM from 'react-dom';

console.log('main from app client src react')

const App = () => {
    return (
        <div>
            <h1 className="text-red-500 font-bold text-2xl">Hello, React!</h1>
        </div>
    );
};

ReactDOM.render(<App />, document.getElementById('mount'));
